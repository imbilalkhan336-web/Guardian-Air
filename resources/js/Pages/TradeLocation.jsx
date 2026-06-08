import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowLeft, LuArrowRight, LuCheck } from 'react-icons/lu';

export default function TradeLocation({ trade, location, otherTrades = [], reviews = [], seo = {} }) {
    const heading = `${trade.locationName} in ${location.name}`;
    const title = `${trade.locationName} in ${location.name}, NJ | Guardian Air`;
    const description = `Reliable ${trade.label.toLowerCase()} service in ${location.name}, ${location.county_name}, NJ. Licensed technicians, upfront pricing, and same-day response from Guardian Air.`;

    return (
        <SiteLayout showReviews={false}>
            <Seo seo={seo} fallbackTitle={title} fallbackDescription={description} />

            <article>
                <PageHeader
                    label={location.name}
                    title={heading}
                    image="/img/hero.webp"
                    imageCover
                    description={description}
                    titleClassName="font-normal"
                />

                <div className="bg-white">
                    <div className="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-4 lg:py-24">
                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="lg:col-span-7">
                                <div className="flex flex-wrap gap-4">
                                    <Link
                                        href={`/${trade.slug}`}
                                        className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                                    >
                                        <LuArrowLeft className="h-3.5 w-3.5" />
                                        {trade.label}
                                    </Link>
                                    <Link
                                        href={`/service-areas/${location.slug}`}
                                        className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                                    >
                                        <LuArrowLeft className="h-3.5 w-3.5" />
                                        {location.name}
                                    </Link>
                                </div>

                                <section className="mt-6">
                                    <SectionHeading sizeClass="text-[30px] font-normal">
                                        {heading}
                                    </SectionHeading>
                                    <div className="mt-6 space-y-4 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        <p>
                                            Guardian Air provides trusted {trade.label.toLowerCase()} service throughout {location.name},{' '}
                                            {location.county_name}. Our licensed technicians are nearby and ready to help — often the
                                            same day — with honest quotes, clean workmanship, and upfront, flat-rate pricing on every job.
                                        </p>
                                        <p>
                                            Whether you need a fast repair, routine maintenance, or a full system replacement in{' '}
                                            {location.name}, we treat your home like our own. No surprises, no pressure — just reliable
                                            comfort backed by a satisfaction guarantee.
                                        </p>
                                    </div>
                                </section>

                                <section className="mt-10">
                                    <div className="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                        {['Same-day & emergency service', 'Licensed, insured technicians', 'Upfront flat-rate pricing', 'Satisfaction guaranteed'].map((point) => (
                                            <div key={point} className="flex items-center gap-3 rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm">
                                                <span className="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-brand-orange/10 text-brand-orange">
                                                    <LuCheck className="h-4 w-4" />
                                                </span>
                                                <span className="font-body text-sm font-semibold text-[#07264A]">{point}</span>
                                            </div>
                                        ))}
                                    </div>
                                </section>

                                {otherTrades.length > 0 && (
                                    <section className="mt-12">
                                        <SectionHeading sizeClass="text-[26px] font-normal">
                                            Other Services in {location.name}
                                        </SectionHeading>
                                        <div className="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2">
                                            {otherTrades.map((t) => (
                                                <Link
                                                    key={t.slug}
                                                    href={t.href}
                                                    className="group flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm transition-all hover:border-brand-orange/50 hover:shadow-md"
                                                >
                                                    <span className="font-body text-sm font-bold text-[#07264A]">
                                                        {t.label} in {location.name}
                                                    </span>
                                                    <LuArrowRight className="h-4 w-4 text-gray-300 transition-all group-hover:translate-x-1 group-hover:text-brand-orange" />
                                                </Link>
                                            ))}
                                        </div>
                                    </section>
                                )}
                            </div>

                            <aside className="lg:col-span-5">
                                <div className="lg:sticky lg:top-24">
                                    <ScheduleForm headingClassName="font-normal" />
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </article>

            <Reviews reviews={reviews} />
            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
