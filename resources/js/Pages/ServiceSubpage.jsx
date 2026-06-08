import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowRight, LuArrowLeft, LuCheck } from 'react-icons/lu';

export default function ServiceSubpage({ trade, service, siblings = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout showReviews reviews={reviews}>
            <Seo seo={seo} fallbackTitle={service.title} fallbackDescription={service.description} />

            <article>
                <PageHeader
                    label={trade.label}
                    title={service.name}
                    image="/img/hero.webp"
                    imageCover
                    description={service.description}
                    titleClassName="font-normal"
                />

                <div className="bg-white">
                    <div className="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-4 lg:py-24">
                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="lg:col-span-7">
                                <Link
                                    href={`/${trade.slug}`}
                                    className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                                >
                                    <LuArrowLeft className="h-3.5 w-3.5" />
                                    All {trade.label} Services
                                </Link>

                                <section className="mt-6">
                                    <SectionHeading sizeClass="text-[30px] font-normal">
                                        {service.name} in New Jersey
                                    </SectionHeading>
                                    <p className="mt-6 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        {service.intro}
                                    </p>
                                </section>

                                {service.highlights?.length > 0 && (
                                    <section className="mt-10">
                                        <div className="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                            {service.highlights.map((point) => (
                                                <div
                                                    key={point}
                                                    className="flex items-center gap-3 rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm"
                                                >
                                                    <span className="flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-brand-orange/10 text-brand-orange">
                                                        <LuCheck className="h-4 w-4" />
                                                    </span>
                                                    <span className="font-body text-sm font-semibold text-[#07264A]">{point}</span>
                                                </div>
                                            ))}
                                        </div>
                                    </section>
                                )}

                                {siblings.length > 0 && (
                                    <section className="mt-12">
                                        <SectionHeading sizeClass="text-[26px] font-normal">
                                            More {trade.label} Services
                                        </SectionHeading>
                                        <div className="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2">
                                            {siblings.map((s) => (
                                                <Link
                                                    key={s.slug}
                                                    href={s.href}
                                                    className="group flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm transition-all hover:border-brand-orange/50 hover:shadow-md"
                                                >
                                                    <span className="font-body text-sm font-bold text-[#07264A]">{s.name}</span>
                                                    <LuArrowRight className="h-4 w-4 text-gray-300 transition-all group-hover:translate-x-1 group-hover:text-brand-orange" />
                                                </Link>
                                            ))}
                                        </div>
                                    </section>
                                )}
                            </div>

                            {/* Sticky schedule form */}
                            <aside className="lg:col-span-5">
                                <div className="lg:sticky lg:top-24">
                                    <ScheduleForm headingClassName="font-normal" />
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
