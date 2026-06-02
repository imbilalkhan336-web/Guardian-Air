import { Head, Link, usePage } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowRight, LuPencil } from 'react-icons/lu';

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
        <Link
            href={`/blog/${post.slug}`}
            className="group flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg"
        >
            <div className="aspect-[16/10] overflow-hidden bg-gray-100">
                <img
                    src={post.image_path || '/img/cover.webp'}
                    alt={post.title}
                    className="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                />
            </div>
            <div className="flex flex-1 flex-col p-6">
                <p className="text-[11px] font-extrabold uppercase tracking-widest text-brand-orange">
                    {formatDate(post.created_at)}
                </p>
                <h2 className="mt-2 font-display text-xl uppercase leading-tight text-[#07264A]">
                    {post.title}
                </h2>
                {post.excerpt && (
                    <p className="mt-3 flex-1 font-body text-sm leading-relaxed text-gray-600">
                        {post.excerpt}
                    </p>
                )}
                <span className="mt-5 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                    Read More
                    <LuArrowRight className="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" />
                </span>
            </div>
        </Link>
    );
}

export default function Blog({ posts = [] }) {
    const { auth } = usePage().props;
    const isAdmin = Boolean(auth?.user?.is_admin);

    return (
        <SiteLayout showReviews={false}>
            <Head>
                <title>Blog & HVAC Tips | Guardian Air</title>
                <meta
                    name="description"
                    content="Heating, cooling, and indoor air quality tips, guides, and news from the Guardian Air team serving New Jersey homeowners."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/blog" />
            </Head>

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
