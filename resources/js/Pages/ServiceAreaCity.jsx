import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowLeft, LuArrowRight, LuCheck } from 'react-icons/lu';

export default function ServiceAreaCity({ city, county, trades = [], reviews = [], seo = {} }) {
    const title = `${city.name} HVAC & Plumbing | Guardian Air`;
    const description = `Fast, reliable heating, cooling, and plumbing service in ${city.name}, ${county.name}, NJ. Licensed technicians, upfront pricing, and same-day response.`;

    return (
        <SiteLayout showReviews={false}>
            <Seo seo={seo} fallbackTitle={title} fallbackDescription={description} />

            <article>
                <PageHeader
                    label={county.name}
                    title={`${city.name}, NJ`}
                    image="/img/hero.webp"
                    imageCover
                    description={description}
                    titleClassName="font-normal"
                />

                <div className="bg-white">
                    <div className="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-4 lg:py-24">
                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="lg:col-span-7">
                                <Link
                                    href={`/service-areas/${county.slug}`}
                                    className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                                >
                                    <LuArrowLeft className="h-3.5 w-3.5" />
                                    All of {county.name}
                                </Link>

                                <section className="mt-6">
                                    <SectionHeading sizeClass="text-[30px] font-normal">
                                        Your Local HVAC Team in {city.name}
                                    </SectionHeading>
                                    <div className="mt-6 space-y-4 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        <p>
                                            Guardian Air proudly serves homeowners and businesses throughout {city.name} and the
                                            rest of {county.name}. Whether it&apos;s a furnace that won&apos;t start in January or
                                            an air conditioner struggling through a July heatwave, our licensed technicians are
                                            nearby and ready to help — often the same day.
                                        </p>
                                        <p>
                                            From routine maintenance to full system replacements, we deliver honest quotes, clean
                                            workmanship, and friendly service on every visit in {city.name}. No surprises, no
                                            pressure — just reliable comfort for your home.
                                        </p>
                                    </div>
                                </section>

                                <section className="mt-12">
                                    <SectionHeading sizeClass="text-[26px] font-normal">
                                        Services We Offer in {city.name}
                                    </SectionHeading>
                                    <div className="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2">
                                        {trades.map((s) => (
                                            <Link
                                                key={s.slug}
                                                href={s.href}
                                                className="group flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm transition-all hover:border-brand-orange/50 hover:shadow-md"
                                            >
                                                <span className="flex items-center gap-2 font-body text-sm font-bold text-[#07264A]">
                                                    <LuCheck className="h-4 w-4 text-brand-orange" />
                                                    {s.label} in {city.name}
                                                </span>
                                                <LuArrowRight className="h-4 w-4 text-gray-300 transition-all group-hover:translate-x-1 group-hover:text-brand-orange" />
                                            </Link>
                                        ))}
                                    </div>
                                </section>
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
