import { Link, usePage } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowRight, LuPencil, LuExternalLink } from 'react-icons/lu';

function formatDate(value) {
    if (!value) return '';
    return new Date(value).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });
}

function PostCard({ post }) {
    return (
        <div className="group flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg">
            <Link href={`/blog/${post.slug}`} className="block">
                <div className="aspect-[16/10] overflow-hidden bg-gray-100">
                    <img
                        src={post.image_path || '/img/cover.webp'}
                        alt={post.title}
                        className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                    />
                </div>
            </Link>
            <div className="flex flex-1 flex-col p-6">
                <p className="text-[11px] font-extrabold uppercase tracking-widest text-brand-orange">
                    {formatDate(post.created_at)}
                </p>
                <Link href={`/blog/${post.slug}`} className="block">
                    <h2 className="mt-2 font-display text-xl uppercase leading-tight text-[#07264A]">
                        {post.title}
                    </h2>
                </Link>
                {post.excerpt && (
                    <p className="mt-3 flex-1 font-body text-sm leading-relaxed text-gray-600">
                        {post.excerpt}
                    </p>
                )}

                {post.tags?.length > 0 && (
                    <div className="mt-4 flex flex-wrap gap-2">
                        {post.tags.map((tag) => (
                            <TagBadge key={tag.id} tag={tag} />
                        ))}
                    </div>
                )}

                <Link href={`/blog/${post.slug}`} className="mt-5 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                    Read More
                    <LuArrowRight className="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" />
                </Link>
            </div>
        </div>
    );
}

function TagBadge({ tag }) {
    const baseClasses =
        'inline-flex items-center gap-1 rounded-full bg-gray-100 px-2.5 py-1 text-[11px] font-semibold text-gray-600 transition-colors hover:bg-brand-orange hover:text-white';

    if (tag.link) {
        return (
            <a href={tag.link} target="_blank" rel="noreferrer" className={baseClasses}>
                {tag.image_path && <img src={tag.image_path} alt="" className="h-3.5 w-3.5 rounded-full object-cover" />}
                {tag.name}
                <LuExternalLink className="h-3 w-3 opacity-70" />
            </a>
        );
    }

    return (
        <span className={baseClasses}>
            {tag.image_path && <img src={tag.image_path} alt="" className="h-3.5 w-3.5 rounded-full object-cover" />}
            {tag.name}
        </span>
    );
}

export default function Blog({ posts = [], seo = {} }) {
    const { auth } = usePage().props;
    const isAdmin = Boolean(auth?.user?.is_admin);

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Blog & HVAC Tips | Guardian Air"
                fallbackDescription="Heating, cooling, and indoor air quality tips, guides, and news from the Guardian Air team serving New Jersey homeowners."
            />

            <PageHeader
                label="From Our Team"
                title="Guardian Air Blog"
                image="/img/hero.webp"
                imageCover
                description="HVAC tips, seasonal guides, and home comfort advice from our licensed New Jersey technicians."
                titleClassName="font-normal"
            />

            <section className="bg-white py-16 lg:py-24">
                <div className="mx-auto max-w-7xl px-4">
                    {isAdmin && (
                        <div className="mb-8 flex justify-end">
                            <Link
                                href={route('admin.blog')}
                                className="inline-flex items-center gap-2 rounded-full bg-[#07264A] px-5 py-2.5 text-[11px] font-extrabold uppercase tracking-widest text-white transition-colors hover:bg-[#0A2A4A]"
                            >
                                <LuPencil className="h-3.5 w-3.5" />
                                Manage Posts
                            </Link>
                        </div>
                    )}

                    {posts.length === 0 ? (
                        <div className="rounded-2xl border-2 border-dashed border-gray-200 p-16 text-center">
                            <p className="font-display text-2xl uppercase text-[#07264A]">No posts yet</p>
                            <p className="mt-2 font-body text-sm text-gray-500">
                                Check back soon — we&apos;re working on new articles.
                            </p>
                        </div>
                    ) : (
                        <div className="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                            {posts.map((post) => (
                                <PostCard key={post.id} post={post} />
                            ))}
                        </div>
                    )}
                </div>
            </section>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
