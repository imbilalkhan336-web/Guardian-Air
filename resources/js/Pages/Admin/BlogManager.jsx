import { useState } from 'react';
import { Head, router, useForm, usePage } from '@inertiajs/react';
import AdminLayout from '@/Layouts/AdminLayout';
import {
    LuPlus,
    LuPencil,
    LuTrash2,
    LuCheck,
    LuX,
    LuUpload,
    LuExternalLink,
    LuEye,
    LuEyeOff,
} from 'react-icons/lu';

const inputClass =
    'mt-1.5 block w-full rounded-xl border border-gray-200 bg-gray-50 px-3.5 py-2.5 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20';
const labelClass = 'block text-[11px] font-extrabold uppercase tracking-widest text-gray-500';

function formatDate(value) {
    if (!value) return '';
    return new Date(value).toLocaleDateString('en-US', { year: 'numeric', month: 'short', day: 'numeric' });
}

/* ------------------------------------------------------------------ *
 * Add / Edit modal
 * ------------------------------------------------------------------ */

function PostModal({ post, onClose }) {
    const isEdit = Boolean(post);
    const [preview, setPreview] = useState(post?.image_path || '');

    const form = useForm({
        ...(isEdit ? { _method: 'put' } : {}),
        title: post?.title || '',
        slug: post?.slug || '',
        excerpt: post?.excerpt || '',
        body: post?.body || '',
        image_path: post?.image_path || '',
        image: null,
        is_published: post ? post.is_published : true,
    });
    const { data, setData, errors, processing } = form;

    const pickFile = (e) => {
        const file = e.target.files?.[0] || null;
        setData('image', file);
        if (file) setPreview(URL.createObjectURL(file));
    };

    const submit = (e) => {
        e.preventDefault();
        const opts = { forceFormData: true, preserveScroll: true, onSuccess: onClose };
        if (isEdit) {
            form.post(route('posts.update', post.id), opts);
        } else {
            form.post(route('posts.store'), opts);
        }
    };

    return (
        <div className="fixed inset-0 z-50 flex items-start justify-center overflow-y-auto p-4 sm:p-8">
            <div className="fixed inset-0 bg-black/50" onClick={onClose} />

            <div className="relative w-full max-w-2xl rounded-2xl bg-white p-6 shadow-2xl sm:p-8">
                <div className="flex items-center justify-between">
                    <h2 className="font-display text-xl uppercase text-[#07264A]">
                        {isEdit ? 'Edit Post' : 'New Post'}
                    </h2>
                    <button
                        type="button"
                        onClick={onClose}
                        className="flex h-9 w-9 items-center justify-center rounded-lg text-gray-400 transition-colors hover:bg-gray-100 hover:text-gray-700"
                        aria-label="Close"
                    >
                        <LuX className="h-5 w-5" />
                    </button>
                </div>

                <form onSubmit={submit} className="mt-6 space-y-5">
                    <div>
                        <label className={labelClass}>Title</label>
                        <input
                            type="text"
                            autoFocus
                            value={data.title}
                            onChange={(e) => setData('title', e.target.value)}
                            className={inputClass}
                            placeholder="e.g. 5 Signs Your Furnace Needs Repair"
                        />
                        {errors.title && <p className="mt-1 text-xs font-semibold text-red-500">{errors.title}</p>}
                    </div>

                    <div>
                        <label className={labelClass}>Slug (optional — auto-generated from title)</label>
                        <input
                            type="text"
                            value={data.slug}
                            onChange={(e) => setData('slug', e.target.value)}
                            className={inputClass}
                            placeholder="furnace-repair-signs"
                        />
                        {errors.slug && <p className="mt-1 text-xs font-semibold text-red-500">{errors.slug}</p>}
                    </div>

                    <div>
                        <label className={labelClass}>Excerpt (short summary for the blog listing)</label>
                        <textarea
                            rows={2}
                            value={data.excerpt}
                            onChange={(e) => setData('excerpt', e.target.value)}
                            className={inputClass}
                            placeholder="A one or two sentence teaser…"
                        />
                        {errors.excerpt && <p className="mt-1 text-xs font-semibold text-red-500">{errors.excerpt}</p>}
                    </div>

                    <div>
                        <label className={labelClass}>Content (separate paragraphs with a blank line)</label>
                        <textarea
                            rows={10}
                            value={data.body}
                            onChange={(e) => setData('body', e.target.value)}
                            className={inputClass}
                            placeholder="Write the article here…"
                        />
                        {errors.body && <p className="mt-1 text-xs font-semibold text-red-500">{errors.body}</p>}
                    </div>

                    {/* Cover image */}
                    <div className="space-y-3 border-t border-gray-100 pt-5">
                        <label className={labelClass}>Cover Image</label>
                        <label className="flex cursor-pointer flex-col items-center justify-center gap-1.5 rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 px-3 py-4 text-center transition-colors hover:border-brand-orange hover:bg-brand-orange/[0.03]">
                            <LuUpload className="h-4 w-4 text-gray-400" />
                            <span className="text-xs font-semibold text-gray-600">
                                {data.image ? data.image.name : 'Click to choose an image'}
                            </span>
                            <span className="text-[11px] text-gray-400">JPG, PNG, WEBP or GIF — up to 5 MB</span>
                            <input type="file" accept="image/*" onChange={pickFile} className="hidden" />
                        </label>
                        {errors.image && <p className="mt-1 text-xs font-semibold text-red-500">{errors.image}</p>}

                        <input
                            type="text"
                            value={data.image_path}
                            onChange={(e) => {
                                setData('image_path', e.target.value);
                                if (!data.image) setPreview(e.target.value);
                            }}
                            className={inputClass}
                            placeholder="…or paste an image path / URL"
                        />
                        {preview && <img src={preview} alt="" className="max-h-44 rounded-xl border border-gray-200 object-cover" />}
                    </div>

                    {/* Published toggle */}
                    <label className="flex cursor-pointer items-center gap-3 border-t border-gray-100 pt-5">
                        <input
                            type="checkbox"
                            checked={data.is_published}
                            onChange={(e) => setData('is_published', e.target.checked)}
                            className="h-4 w-4 rounded border-gray-300 text-brand-orange focus:ring-brand-orange"
                        />
                        <span className="text-sm font-semibold text-[#07264A]">
                            Published <span className="font-normal text-gray-400">— visible on the public blog</span>
                        </span>
                    </label>

                    <div className="flex flex-col gap-3 border-t border-gray-100 pt-5 sm:flex-row sm:items-center">
                        <button
                            type="submit"
                            disabled={processing}
                            className="inline-flex w-full items-center justify-center gap-2 rounded-full bg-brand-orange px-6 py-2.5 text-xs font-extrabold uppercase tracking-widest text-white shadow-sm transition-all hover:bg-brand-orange-dark disabled:opacity-50 sm:w-auto"
                        >
                            <LuCheck className="h-4 w-4" />
                            {processing ? 'Saving…' : isEdit ? 'Save Changes' : 'Publish Post'}
                        </button>
                        <button
                            type="button"
                            onClick={onClose}
                            className="inline-flex w-full items-center justify-center gap-2 rounded-full border border-gray-300 px-6 py-2.5 text-xs font-extrabold uppercase tracking-widest text-gray-600 transition-colors hover:bg-gray-100 sm:w-auto"
                        >
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}

/* ------------------------------------------------------------------ *
 * Blog manager
 * ------------------------------------------------------------------ */

export default function BlogManager({ posts = [] }) {
    const flash = usePage().props.flash;
    const [modal, setModal] = useState(null); // null | 'new' | post object

    const remove = (post) => {
        if (!window.confirm(`Delete “${post.title}”? This cannot be undone.`)) return;
        router.delete(route('posts.destroy', post.id), { preserveScroll: true });
    };

    return (
        <AdminLayout header={<h1 className="text-lg font-bold text-[#07264A]">Blog Posts</h1>}>
            <Head title="Admin — Blog" />

            {flash?.status && (
                <div className="mb-6 flex items-center gap-2 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-3 text-sm font-semibold text-emerald-700">
                    <LuCheck className="h-4 w-4" />
                    {flash.status}
                </div>
            )}

            {/* Toolbar */}
            <div className="mb-6 flex flex-wrap items-center justify-between gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm">
                <div>
                    <p className="text-sm font-bold text-[#07264A]">Manage blog posts</p>
                    <p className="text-xs text-gray-400">Add, edit, or remove articles. {posts.length} total.</p>
                </div>
                <div className="flex flex-wrap items-center gap-2">
                    <button
                        type="button"
                        onClick={() => setModal('new')}
                        className="inline-flex items-center gap-2 rounded-full bg-brand-orange px-5 py-2.5 text-[11px] font-extrabold uppercase tracking-widest text-white shadow-sm transition-colors hover:bg-brand-orange-dark"
                    >
                        <LuPlus className="h-4 w-4" />
                        New Post
                    </button>
                    <a
                        href="/blog"
                        target="_blank"
                        rel="noreferrer"
                        className="inline-flex items-center gap-2 rounded-full border border-gray-300 px-5 py-2.5 text-[11px] font-extrabold uppercase tracking-widest text-gray-600 transition-colors hover:bg-gray-100"
                    >
                        <LuExternalLink className="h-3.5 w-3.5" />
                        View Blog
                    </a>
                </div>
            </div>

            {posts.length === 0 ? (
                <div className="rounded-2xl border-2 border-dashed border-gray-200 p-12 text-center">
                    <p className="text-sm font-semibold text-gray-400">No posts yet. Click “New Post” to write your first one.</p>
                </div>
            ) : (
                <div className="space-y-3">
                    {posts.map((post) => (
                        <div
                            key={post.id}
                            className="flex flex-col gap-4 rounded-2xl border border-gray-200 bg-white p-4 shadow-sm transition-shadow hover:shadow-md sm:flex-row sm:items-center"
                        >
                            <div className="flex min-w-0 flex-1 items-center gap-4">
                            <div className="h-16 w-24 flex-shrink-0 overflow-hidden rounded-xl bg-gray-100">
                                <img
                                    src={post.image_path || '/img/cover.webp'}
                                    alt={post.title}
                                    className="h-full w-full object-cover"
                                />
                            </div>

                            <div className="min-w-0 flex-1">
                                <div className="flex items-center gap-2">
                                    <p className="truncate font-display text-lg uppercase text-[#07264A]">{post.title}</p>
                                    <span
                                        className={`inline-flex flex-shrink-0 items-center gap-1 rounded-full px-2.5 py-0.5 text-[10px] font-extrabold uppercase tracking-widest ${
                                            post.is_published
                                                ? 'bg-emerald-100 text-emerald-700'
                                                : 'bg-gray-100 text-gray-500'
                                        }`}
                                    >
                                        {post.is_published ? <LuEye className="h-3 w-3" /> : <LuEyeOff className="h-3 w-3" />}
                                        {post.is_published ? 'Published' : 'Draft'}
                                    </span>
                                </div>
                                <p className="mt-0.5 truncate text-xs text-gray-400">
                                    {formatDate(post.created_at)} · /blog/{post.slug}
                                </p>
                            </div>
                            </div>

                            <div className="flex flex-shrink-0 items-center gap-2 self-end sm:self-auto">
                                <button
                                    type="button"
                                    onClick={() => setModal(post)}
                                    className="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm transition-colors hover:border-brand-orange hover:text-brand-orange"
                                    title="Edit"
                                >
                                    <LuPencil className="h-4 w-4" />
                                </button>
                                <button
                                    type="button"
                                    onClick={() => remove(post)}
                                    className="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm transition-colors hover:border-red-400 hover:text-red-500"
                                    title="Delete"
                                >
                                    <LuTrash2 className="h-4 w-4" />
                                </button>
                            </div>
                        </div>
                    ))}
                </div>
            )}

            {modal && (
                <PostModal
                    post={modal === 'new' ? null : modal}
                    onClose={() => setModal(null)}
                />
            )}
        </AdminLayout>
    );
}
