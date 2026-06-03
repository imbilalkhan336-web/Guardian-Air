import { useRef, useState, useEffect, useCallback } from 'react';
import { LuLink } from 'react-icons/lu';

/* ------------------------------------------------------------------ *
 * Helpers
 * ------------------------------------------------------------------ */

function textToHtml(text) {
    if (!text) return '<p><br></p>';
    const trimmed = text.trim();
    if (!trimmed) return '<p><br></p>';

    // Already clean HTML without raw paragraph breaks → use as-is
    if (/^<(p|div|h[1-6]|ul|ol|li|blockquote)/i.test(trimmed) && !/\n\n/.test(trimmed)) {
        return trimmed;
    }

    // Convert blank-line-separated text to <p> tags
    return trimmed
        .split(/\n\n+/)
        .map((p) => {
            const pt = p.trim();
            if (!pt) return '';
            if (/^<(p|div|h[1-6]|ul|ol|li|blockquote)/i.test(pt)) return pt;
            return `<p>${pt.replace(/\n/g, '<br>')}</p>`;
        })
        .filter(Boolean)
        .join('');
}

function normalizeHtml(html) {
    return (html || '')
        .toLowerCase()
        .replace(/\s+/g, ' ')
        .replace(/<p><br><\/p>/g, '')
        .replace(/<div><br><\/div>/g, '')
        .trim();
}

/** Normalize a cloned DOM tree so saved HTML is always clean <p> tags */
function normalizeEditorClone(clone) {
    // Convert all divs to paragraphs
    const divs = clone.querySelectorAll('div');
    divs.forEach((div) => {
        const p = document.createElement('p');
        p.innerHTML = div.innerHTML;
        div.parentNode.replaceChild(p, div);
    });

    // Ensure empty paragraphs have <br> so they stay visible
    const paragraphs = clone.querySelectorAll('p');
    paragraphs.forEach((p) => {
        if (!p.textContent.trim() && p.innerHTML !== '<br>') {
            p.innerHTML = '<br>';
        }
    });

    // Remove trailing empty paragraphs
    const children = Array.from(clone.children);
    while (children.length > 0) {
        const last = children[children.length - 1];
        if (last.tagName === 'P' && last.innerHTML === '<br>') {
            last.remove();
            children.pop();
        } else {
            break;
        }
    }

    // Remove empty anchor tags (user deleted the linked text)
    clone.querySelectorAll('a').forEach((a) => {
        if (!a.textContent.trim()) {
            a.remove();
        }
    });

    // Ensure at least one paragraph remains
    if (clone.children.length === 0) {
        clone.innerHTML = '<p><br></p>';
    }
}

/* ------------------------------------------------------------------ *
 * Component
 * ------------------------------------------------------------------ */

export default function RichTextarea({ value = '', onChange, rows = 4, className = '', placeholder = '', ...props }) {
    const editorRef = useRef(null);
    const savedRange = useRef(null);
    const lastEmitted = useRef(null);
    const [showPopup, setShowPopup] = useState(false);
    const [popupPos, setPopupPos] = useState({ left: 0, top: 0 });
    const [url, setUrl] = useState('');
    const [hasContent, setHasContent] = useState(false);

    /* Sync external value → editor (only when it differs from what we emitted) */
    useEffect(() => {
        const editor = editorRef.current;
        if (!editor) return;

        // If parent value matches our last emission, the browser has already
        // normalised the DOM — don’t overwrite it or the cursor will jump.
        if (lastEmitted.current !== null && normalizeHtml(value) === normalizeHtml(lastEmitted.current)) return;

        const html = textToHtml(value);
        if (normalizeHtml(editor.innerHTML) !== normalizeHtml(html)) {
            editor.innerHTML = html;
        }
        setHasContent(editor.textContent.trim().length > 0);
    }, [value]);

    const emitChange = useCallback(() => {
        const editor = editorRef.current;
        if (!editor) return;

        // Clone and normalize so we emit clean <p> HTML without
        // touching the live DOM (preserves cursor position).
        const clone = editor.cloneNode(true);
        normalizeEditorClone(clone);

        const text = editor.textContent.trim();
        setHasContent(text.length > 0);

        const html = text.length === 0 ? '' : clone.innerHTML;
        lastEmitted.current = html;
        onChange({ target: { value: html } });
    }, [onChange]);

    /* Selection → popup */
    const handleMouseUp = useCallback((e) => {
        const selection = window.getSelection();
        if (selection && !selection.isCollapsed && selection.toString().trim()) {
            savedRange.current = selection.getRangeAt(0).cloneRange();
            setPopupPos({ left: e.clientX, top: e.clientY });
            setUrl('');
            setShowPopup(true);
        }
    }, []);

    const insertLink = useCallback(() => {
        if (!url.trim() || !savedRange.current) return;

        const editor = editorRef.current;
        if (!editor) return;

        editor.focus();
        const selection = window.getSelection();
        selection.removeAllRanges();
        selection.addRange(savedRange.current);

        const range = savedRange.current;
        const selectedText = range.toString();

        const a = document.createElement('a');
        a.href = url.trim();
        a.target = '_blank';
        a.rel = 'noopener noreferrer';
        a.textContent = selectedText;

        range.deleteContents();
        range.insertNode(a);

        // Place cursor after the new link
        range.setStartAfter(a);
        range.setEndAfter(a);
        selection.removeAllRanges();
        selection.addRange(range);

        emitChange();
        setShowPopup(false);
        setUrl('');
        savedRange.current = null;
    }, [url, emitChange]);

    /* Strip formatting on paste */
    const handlePaste = useCallback((e) => {
        e.preventDefault();
        const text = e.clipboardData.getData('text/plain');
        document.execCommand('insertText', false, text);
        emitChange();
    }, [emitChange]);

    /* Remove empty anchor tags after Backspace/Delete */
    const handleKeyUp = useCallback(
        (e) => {
            if (e.key !== 'Backspace' && e.key !== 'Delete') return;
            const editor = editorRef.current;
            if (!editor) return;
            let changed = false;
            editor.querySelectorAll('a').forEach((a) => {
                if (!a.textContent.trim()) {
                    a.remove();
                    changed = true;
                }
            });
            if (changed) emitChange();
        },
        [emitChange]
    );

    /* Close popup on outside click */
    useEffect(() => {
        if (!showPopup) return;
        const handler = (e) => {
            if (!e.target.closest('.rich-textarea-popup')) {
                setShowPopup(false);
                savedRange.current = null;
            }
        };
        document.addEventListener('mousedown', handler);
        return () => document.removeEventListener('mousedown', handler);
    }, [showPopup]);

    /* Keep popup inside viewport */
    useEffect(() => {
        if (!showPopup) return;
        const el = document.querySelector('.rich-textarea-popup');
        if (!el) return;
        const rect = el.getBoundingClientRect();
        let { left, top } = popupPos;

        if (left + rect.width > window.innerWidth - 8) left = window.innerWidth - rect.width - 8;
        if (left < 8) left = 8;
        if (top - rect.height < 8) top = top + 30;
        else top = top - rect.height - 8;

        el.style.left = `${left}px`;
        el.style.top = `${top}px`;
    }, [showPopup, popupPos]);

    const minHeight = rows * 24;

    return (
        <div className="relative">
            <div
                ref={editorRef}
                contentEditable
                suppressContentEditableWarning
                onInput={emitChange}
                onMouseUp={handleMouseUp}
                onPaste={handlePaste}
                onKeyUp={handleKeyUp}
                className={`${className} overflow-y-auto space-y-3 [&_a]:font-semibold [&_a]:text-blue-600 [&_a]:underline`}
                style={{ minHeight }}
                {...props}
            />

            {/* Placeholder */}
            {!hasContent && placeholder && (
                <div className="pointer-events-none absolute inset-0 mt-1.5 px-3.5 py-2.5 text-sm text-gray-400 opacity-60">
                    {placeholder}
                </div>
            )}

            {/* Link popup */}
            {showPopup && (
                <div
                    className="rich-textarea-popup fixed z-[100] flex max-w-[calc(100vw-2rem)] items-center gap-2 rounded-xl border border-gray-200 bg-white p-2 shadow-2xl"
                    style={{ left: popupPos.left, top: popupPos.top }}
                >
                    <LuLink className="h-4 w-4 flex-shrink-0 text-gray-400" />
                    <input
                        type="text"
                        value={url}
                        onChange={(e) => setUrl(e.target.value)}
                        placeholder="https://…"
                        className="min-w-0 flex-1 rounded-lg border border-gray-200 px-2.5 py-1.5 text-xs text-[#07264A] outline-none transition-colors focus:border-brand-orange focus:ring-2 focus:ring-brand-orange/20 sm:w-52"
                        onKeyDown={(e) => {
                            if (e.key === 'Enter') {
                                e.preventDefault();
                                insertLink();
                            }
                            if (e.key === 'Escape') {
                                setShowPopup(false);
                                savedRange.current = null;
                            }
                        }}
                        autoFocus
                    />
                    <button
                        type="button"
                        onClick={insertLink}
                        className="rounded-lg bg-brand-orange px-3 py-1.5 text-xs font-bold text-white transition-colors hover:bg-brand-orange-dark"
                    >
                        Add
                    </button>
                </div>
            )}
        </div>
    );
}
