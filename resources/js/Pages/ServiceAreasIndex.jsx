import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuMapPin, LuArrowRight } from 'react-icons/lu';

export default function ServiceAreasIndex({ counties = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Service Areas — HVAC, Plumbing & Electrical in NJ | Guardian Air"
                fallbackDescription="Guardian Air serves Monmouth, Middlesex, and Ocean counties, NJ with fast, reliable HVAC, plumbing, and electrical service. Find your county and town."
            />

            <article>
                <PageHeader
                    label="Where We Work"
                    title="Service Areas"
                    description="Guardian Air covers homes and businesses across three New Jersey counties with fast, dependable service — the same trusted technicians, no matter where you live."
                />

                <div className="bg-white py-16 lg:py-24">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="space-y-10">
                            {counties.map((county) => (
                                <div key={county.slug} className="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">
                                    <div className="flex flex-wrap items-center justify-between gap-3">
                                        <div className="flex items-center gap-3">
                                            <span className="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-xl bg-brand-orange/10 text-brand-orange">
                                                <LuMapPin className="h-5 w-5" />
                                            </span>
                                            <h2 className="font-display text-2xl uppercase text-[#07264A]">{county.name}</h2>
                                        </div>
                                        <Link
                                            href={`/service-areas/${county.slug}`}
                                            className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange hover:text-brand-orange-dark"
                                        >
                                            County Page
                                            <LuArrowRight className="h-3.5 w-3.5" />
                                        </Link>
                                    </div>

                                    <div className="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                                        {county.cities.map((city) => (
                                            <Link
                                                key={city.slug}
                                                href={city.href}
                                                className="group flex items-center justify-between rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 transition-all hover:border-brand-orange/50 hover:bg-white hover:shadow-md"
                                            >
                                                <span className="flex items-center gap-2 font-body text-sm font-bold text-[#07264A]">
                                                    <LuMapPin className="h-4 w-4 text-brand-orange" />
                                                    {city.name}
                                                </span>
                                                <LuArrowRight className="h-4 w-4 text-gray-300 transition-all group-hover:translate-x-1 group-hover:text-brand-orange" />
                                            </Link>
                                        ))}
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
