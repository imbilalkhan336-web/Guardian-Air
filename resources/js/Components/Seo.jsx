import { Head, usePage } from '@inertiajs/react';

/**
 * Renders SEO meta tags from an admin-managed `seo` object (passed as a
 * page prop). Falls back to the provided fallback title/description when
 * a page has no SEO record yet.
 *
 * When the site is flagged non-indexable (pre-launch via APP_INDEXABLE),
 * every page is forced to noindex regardless of its own robots setting.
 */
export default function Seo({ seo = {}, fallbackTitle = '', fallbackDescription = '' }) {
    const { indexable = true } = usePage().props;
    const title = seo.title || fallbackTitle;
    const description = seo.description || fallbackDescription;
    const ogTitle = seo.og_title || title;
    const ogDescription = seo.og_description || description;
    const ogImage = seo.og_image || null;
    const canonical = seo.canonical || null;
    const robots = indexable === false ? 'noindex, nofollow' : seo.robots || 'index, follow';

    return (
        <Head>
            {title && <title>{title}</title>}
            {description && <meta name="description" content={description} />}
            <meta name="robots" content={robots} />
            {canonical && <link rel="canonical" href={canonical} />}
            <meta property="og:type" content="website" />
            {ogTitle && <meta property="og:title" content={ogTitle} />}
            {ogDescription && <meta property="og:description" content={ogDescription} />}
            {ogImage && <meta property="og:image" content={ogImage} />}
            {canonical && <meta property="og:url" content={canonical} />}
            <meta name="twitter:card" content={ogImage ? 'summary_large_image' : 'summary'} />
            {ogTitle && <meta name="twitter:title" content={ogTitle} />}
            {ogDescription && <meta name="twitter:description" content={ogDescription} />}
            {ogImage && <meta name="twitter:image" content={ogImage} />}
        </Head>
    );
}
