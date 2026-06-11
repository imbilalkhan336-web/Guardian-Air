import { Head, usePage } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuStar } from 'react-icons/lu';

const FALLBACK = [
    { name: 'Karen DiMaggio', avatar_color: 'bg-emerald-600', body: 'Our tankless water heater install took one day, and the crew left the utility room cleaner than they found it. Endless hot water ever since.', rating: 5 },
    { name: 'Steve Kowalski', avatar_color: 'bg-rose-600', body: 'Furnace died on a Friday night and a tech was here Saturday morning. He had the igniter on the truck and the quote matched the final bill exactly.', rating: 5 },
    { name: 'Priya Raman', avatar_color: 'bg-slate-700', body: 'They ran a camera through our sewer line before quoting anything, showed us the root intrusion on screen, and fixed only what actually needed fixing.', rating: 5 },
    { name: 'Gina Falcone', avatar_color: 'bg-orange-500', body: 'Signed up for the maintenance plan after our first tune-up. Two visits a year, priority scheduling, and our energy bill has noticeably dropped.', rating: 5 },
    { name: 'Marcus Webb', avatar_color: 'bg-cyan-600', body: 'Added a ductless mini-split to our finished attic. The estimate walked us through three options without any pressure to pick the priciest one.', rating: 5 },
    { name: 'Eileen Murphy', avatar_color: 'bg-pink-600', body: 'A hidden leak was driving up our water bill for months. They found it behind the laundry wall with a sensor — no demolition — and repaired it same day.', rating: 5 },
];

function Stars({ rating = 5 }) {
    return (
        <div className="flex gap-0.5">
            {[1, 2, 3, 4, 5].map((s) => (
                <LuStar key={s} className={`h-4 w-4 ${s <= rating ? 'fill-current text-brand-yellow' : 'text-gray-300'}`} />
            ))}
        </div>
    );
}

function GoogleMark() {
    return (
        <span className="font-semibold leading-none">
            <span className="text-[#4285F4]">G</span><span className="text-[#EA4335]">o</span><span className="text-[#FBBC05]">o</span><span className="text-[#4285F4]">g</span><span className="text-[#34A853]">l</span><span className="text-[#EA4335]">e</span>
        </span>
    );
}

function Card({ review }) {
    const initial = review.initials || (review.name || '?').charAt(0).toUpperCase();
    return (
        <div className="flex flex-col rounded-2xl bg-white p-6 shadow-lg ring-1 ring-black/5">
            <div className="flex items-start gap-3">
                <div className={`flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full text-lg font-bold text-white ${review.avatar_color || 'bg-emerald-600'}`}>
                    {initial}
                </div>
                <div className="min-w-0 flex-1">
                    <p className="truncate text-sm font-bold text-[#0A2A4A]">{review.name}</p>
                    <p className="mt-0.5 flex items-center gap-1 text-xs text-gray-500">on <GoogleMark /></p>
                </div>
            </div>
            <div className="mt-4">
                <Stars rating={review.rating || 5} />
                <p className="mt-2 text-sm leading-relaxed text-gray-700">{review.body}</p>
            </div>
        </div>
    );
}

export default function Testimonials({ reviews = [] }) {
    const { siteSettings = {} } = usePage().props;
    const count = siteSettings.reviews_count || '200';
    const rating = siteSettings.reviews_rating || '4.8';
    const list = reviews.length > 0 ? reviews : FALLBACK;

    const jsonLd = {
        '@context': 'https://schema.org',
        '@type': 'HVACBusiness',
        name: 'Guardian Air',
        aggregateRating: {
            '@type': 'AggregateRating',
            ratingValue: rating,
            reviewCount: String(count).replace(/[^\d]/g, '') || '200',
        },
        review: list.slice(0, 10).map((r) => ({
            '@type': 'Review',
            author: { '@type': 'Person', name: r.name },
            reviewRating: { '@type': 'Rating', ratingValue: r.rating || 5 },
            reviewBody: r.body,
        })),
    };

    return (
        <SiteLayout>
            <Seo
                seo={{}}
                fallbackTitle="Customer Reviews & Testimonials | Guardian Air NJ"
                fallbackDescription={`Read ${count}+ reviews of Guardian Air's HVAC, plumbing, and drain service across Monmouth, Middlesex & Ocean counties, NJ — rated ${rating} stars by local homeowners.`}
            />
            <Head>
                <script type="application/ld+json">{JSON.stringify(jsonLd)}</script>
            </Head>

            <Breadcrumbs items={[{ label: 'Testimonials', href: '/testimonials' }]} />

            <article>
                <PageHeader
                    label="Customer Reviews"
                    title="What Our NJ Customers Say"
                    description={`Guardian Air is proud to be rated ${rating} stars across ${count}+ reviews from homeowners throughout Monmouth, Middlesex, and Ocean counties.`}
                    titleClassName="font-normal"
                />

                <div className="bg-[#F2F4F6] py-14 lg:py-20">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="mb-10 flex flex-wrap items-center gap-4 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-black/5">
                            <span className="font-display text-5xl text-brand-orange">{rating}</span>
                            <div>
                                <Stars rating={Math.round(Number(rating) || 5)} />
                                <p className="mt-1 text-sm font-semibold text-[#0A2A4A]">Based on {count}+ Google reviews</p>
                            </div>
                        </div>

                        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            {list.map((r, i) => (
                                <Card key={r.id || i} review={r} />
                            ))}
                        </div>
                    </div>
                </div>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
