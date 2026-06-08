import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowLeft, LuArrowRight, LuCheck } from 'react-icons/lu';

export default function ServiceAreaCity({ city, county, trades = [], reviews = [], seo = {} }) {
    const title = `HVAC, Plumbing & Drains in ${city.name}, NJ | Guardian Air`;
    const description = `HVAC ${city.name} NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service in ${city.name}, ${county.name}. Same-day response and flat-rate pricing. Call now!`;

    // Unique per-city copy when available; otherwise a localized fallback.
    const intro = city.intro?.length
        ? city.intro
        : [
              `Guardian Air provides trusted HVAC in ${city.name}, NJ to homeowners and businesses throughout ${county.name}. Our licensed technicians deliver fast, same-day heating, cooling, plumbing, and drain service with honest, flat-rate pricing.`,
              `Whether it's a furnace that won't start in January or an air conditioner struggling through a July heatwave, our local team is nearby and ready to help in ${city.name} — clean workmanship, no surprises, on every visit.`,
          ];

    return (
        <SiteLayout showReviews={false}>
            <Seo seo={seo} fallbackTitle={title} fallbackDescription={description} />
            <ServiceSchema
                serviceName={`HVAC, Plumbing & Drains in ${city.name}`}
                serviceType="HVAC, plumbing, and drain service"
                description={description}
                path={`/service-areas/${city.slug}`}
            />

            <Breadcrumbs
                items={[
                    { label: 'Service Areas', href: '/service-areas' },
                    { label: county.name, href: `/service-areas/${county.slug}` },
                    { label: city.name, href: `/service-areas/${city.slug}` },
                ]}
            />

            <article>
                <PageHeader
                    label={county.name}
                    title={`Guardian Air in ${city.name}, NJ — HVAC, Plumbing & Drains`}
                    image="/img/hero.webp"
                    imageCover
                    description={`Licensed heating, cooling, plumbing, and drain service in ${city.name}, ${county.name}. Same-day response, flat-rate pricing, and a local team you can trust.`}
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
                                        Your Local HVAC &amp; Plumbing Team in {city.name}
                                    </SectionHeading>
                                    <div className="mt-6 space-y-4 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        {intro.map((p, i) => (
                                            <p key={i}>{p}</p>
                                        ))}
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
