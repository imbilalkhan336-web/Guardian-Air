import { Head, Link } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowLeft, LuArrowRight, LuExternalLink } from 'react-icons/lu';

function formatDate(value) {
    if (!value) return '';
    return new Date(value).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });
}

// Render the body as blank-line-separated paragraphs, matching the
// article styling used across the service pages.
function Body({ text }) {
    const paras = (text || '')
        .split(/\n\n+/)
        .map((p) => p.trim())
        .filter(Boolean);

    return (
        <div className="mt-8 space-y-5 font-body text-[15px] leading-relaxed text-gray-700 md:text-base">
            {paras.map((p, i) => (
                <p key={i}>{p}</p>
            ))}
        </div>
    );
}

export default function BlogShow({ post, related = [] }) {
    return (
        <SiteLayout showReviews={false}>
            <Head>
                <title>{`${post.title} | Guardian Air Blog`}</title>
                <meta name="description" content={post.excerpt || post.title} />
                <link rel="canonical" href={`/blog/${post.slug}`} />
            </Head>

            <article className="bg-white">
                {/* Hero */}
                <div className="relative">
                    <div className="aspect-[21/9] max-h-[460px] w-full overflow-hidden bg-[#0A2A4A]">
                        <img
                            src={post.image_path || '/img/cover.webp'}
                            alt={post.title}
                            className="h-full w-full object-cover opacity-80"
                        />
                        <div
                            aria-hidden="true"
                            className="absolute inset-0 bg-gradient-to-t from-[#07264A] via-[#07264A]/40 to-transparent"
                        />
                    </div>
                    <div className="absolute inset-x-0 bottom-0">
                        <div className="mx-auto max-w-3xl px-4 pb-8 sm:pb-10">
                            <p className="text-[11px] font-extrabold uppercase tracking-widest text-brand-orange">
                                {formatDate(post.created_at)}
                            </p>
                            <h1 className="mt-3 font-display text-[30px] uppercase leading-[1.05] text-white md:text-[44px]">
                                {post.title}
                            </h1>
                        </div>
                    </div>
                </div>

                {/* Content */}
                <div className="mx-auto max-w-3xl px-4 py-12 lg:py-16">
                    <Link
                        href="/blog"
                        className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                    >
                        <LuArrowLeft className="h-3.5 w-3.5" />
                        Back to Blog
                    </Link>

                    {post.excerpt && (
                        <p className="mt-6 font-body text-lg font-semibold leading-relaxed text-[#07264A]">
                            {post.excerpt}
                        </p>
                    )}

                    <Body text={post.body} />

                    {post.tags?.length > 0 && (
                        <div className="mt-10 flex flex-wrap gap-2">
                            {post.tags.map((tag) =>
                                tag.link ? (
                                    <a
                                        key={tag.id}
                                        href={tag.link}
                                        target="_blank"
                                        rel="noreferrer"
                                        className="inline-flex items-center gap-1.5 rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold text-gray-600 transition-colors hover:bg-brand-orange hover:text-white"
                                    >
                                        {tag.image_path && (
                                            <img src={tag.image_path} alt="" className="h-4 w-4 rounded-full object-cover" />
                                        )}
                                        {tag.name}
                                        <LuExternalLink className="h-3 w-3 opacity-70" />
                                    </a>
                                ) : (
                                    <span
                                        key={tag.id}
                                        className="inline-flex items-center gap-1.5 rounded-full bg-gray-100 px-3 py-1.5 text-xs font-semibold text-gray-600"
                                    >
                                        {tag.image_path && (
                                            <img src={tag.image_path} alt="" className="h-4 w-4 rounded-full object-cover" />
                                        )}
                                        {tag.name}
                                    </span>
                                )
                            )}
                        </div>
                    )}
                </div>
            </article>

            {/* Related posts */}
            {related.length > 0 && (
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <h2 className="font-display text-2xl uppercase text-[#07264A]">More From the Blog</h2>
                        <div className="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                            {related.map((p) => (
                                <Link
                                    key={p.id}
                                    href={`/blog/${p.slug}`}
                                    className="group flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg"
                                >
                                    <div className="aspect-[16/10] overflow-hidden bg-gray-100">
                                        <img
                                            src={p.image_path || '/img/cover.webp'}
                                            alt={p.title}
                                            className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                                        />
                                    </div>
                                    <div className="flex flex-1 flex-col p-6">
                                        <h3 className="font-display text-lg uppercase leading-tight text-[#07264A]">
                                            {p.title}
                                        </h3>
                                        <span className="mt-4 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                                            Read More
                                            <LuArrowRight className="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" />
                                        </span>
                                    </div>
                                </Link>
                            ))}
                        </div>
                    </div>
                </section>
            )}

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
