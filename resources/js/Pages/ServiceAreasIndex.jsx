import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuMapPin, LuArrowRight, LuClock, LuShieldCheck, LuBadgeDollarSign, LuHouse } from 'react-icons/lu';

const WHY = [
    { icon: LuClock, title: 'Local & Same-Day', body: 'Technicians based in the area mean faster response when you need it most.' },
    { icon: LuShieldCheck, title: 'Licensed & Insured', body: 'Fully licensed NJ technicians and clean, code-compliant work on every visit.' },
    { icon: LuBadgeDollarSign, title: 'Upfront Pricing', body: 'Flat-rate quotes before any work begins — no overtime fees, no surprises.' },
    { icon: LuHouse, title: 'Neighbors You Trust', body: 'Family-owned and rooted in the communities we serve across central NJ.' },
];

export default function ServiceAreasIndex({ counties = [], reviews = [] }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={{}}
                fallbackTitle="Service Areas — Monmouth, Middlesex & Ocean County NJ | Guardian Air"
                fallbackDescription="Guardian Air's HVAC service areas span Monmouth, Middlesex & Ocean counties, NJ — find your county and town for fast, licensed heating, cooling, and plumbing service."
            />
            <ServiceSchema
                serviceName="HVAC Service Areas"
                serviceType="HVAC, plumbing, and drain service"
                description="Guardian Air's HVAC service areas across Monmouth, Middlesex, and Ocean counties, New Jersey."
                path="/service-areas"
            />

            <Breadcrumbs items={[{ label: 'Service Areas', href: '/service-areas' }]} />

            <article>
                <PageHeader
                    label="Where We Work"
                    title="Areas We Serve Across New Jersey"
                    description="Find your county and town below — Guardian Air brings the same trusted technicians to homes and businesses across central New Jersey."
                    image="/img/heroes/local.webp"
                />

                {/* Intro + map */}
                <section className="bg-white py-14 lg:py-20">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-14">
                            <div>
                                <p className="font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    Looking for trusted HVAC service areas in NJ? Guardian Air covers homes and
                                    businesses across <strong className="text-[#07264A]">Monmouth, Middlesex, and Ocean
                                    counties</strong> — from the Jersey Shore towns along the Garden State Parkway to the
                                    inland neighborhoods of central New Jersey. Whether you're near the boardwalks of Point
                                    Pleasant, the historic downtown of Red Bank, or the busy corridors of Edison and
                                    Woodbridge, our licensed technicians are nearby and ready to help — often the same day.
                                </p>
                                <p className="mt-4 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    We handle heating, cooling, plumbing, drains, and indoor air quality for every kind of
                                    home and property in the region. No matter where you live across our three counties, you
                                    get the same honest, flat-rate pricing and friendly, professional service.
                                </p>

                                <div className="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    {WHY.map(({ icon: Icon, title, body }) => (
                                        <div key={title} className="flex items-start gap-3">
                                            <span className="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl bg-brand-orange/10 text-brand-orange">
                                                <Icon className="h-5 w-5" />
                                            </span>
                                            <div className="leading-tight">
                                                <p className="font-body text-sm font-bold text-[#07264A]">{title}</p>
                                                <p className="mt-1 font-body text-xs leading-relaxed text-gray-600">{body}</p>
                                            </div>
                                        </div>
                                    ))}
                                </div>
                            </div>

                            {/* Service-area map */}
                            <div className="relative overflow-hidden rounded-2xl shadow-2xl shadow-black/20 ring-1 ring-gray-200">
                                <iframe
                                    title="Guardian Air HVAC service area map — Monmouth, Middlesex & Ocean counties, NJ"
                                    src="https://maps.google.com/maps?q=Monmouth+County,+New+Jersey&t=&z=8&ie=UTF8&iwloc=&output=embed"
                                    className="block aspect-[4/3] w-full border-0"
                                    loading="lazy"
                                    referrerPolicy="no-referrer-when-downgrade"
                                    allowFullScreen
                                />
                            </div>
                        </div>
                    </div>
                </section>

                {/* County hubs + city hubs */}
                <section className="bg-gray-50 py-14 lg:py-20">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="mb-10">
                            <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">Counties We Serve</p>
                            <h2 className="mt-2 font-display text-[28px] uppercase leading-[0.95] text-[#07264A] md:text-[34px]">
                                Choose Your County
                            </h2>
                        </div>

                        <div className="space-y-8">
                            {counties.map((county) => (
                                <div key={county.slug} className="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">
                                    <div className="flex flex-wrap items-start justify-between gap-3">
                                        <div className="flex items-start gap-3">
                                            <span className="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-xl bg-brand-orange/10 text-brand-orange">
                                                <LuMapPin className="h-5 w-5" />
                                            </span>
                                            <div>
                                                <h3 className="font-display text-2xl uppercase text-[#07264A]">{county.name}</h3>
                                                {county.description && (
                                                    <p className="mt-1 max-w-2xl font-body text-sm leading-relaxed text-gray-600">
                                                        {county.description}
                                                    </p>
                                                )}
                                            </div>
                                        </div>
                                        <Link
                                            href={`/service-areas/${county.slug}`}
                                            className="inline-flex flex-shrink-0 items-center gap-1.5 rounded-full bg-[#07264A] px-4 py-2 text-xs font-extrabold uppercase tracking-widest text-white transition-colors hover:bg-brand-orange"
                                        >
                                            County Hub
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
                </section>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
