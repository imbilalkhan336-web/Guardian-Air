import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function CoolingPage() {
    return (
        <SiteLayout>
            <Head>
                <title>Cooling Services — AC Repair & Install in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Air conditioning repair, AC installation, and central cooling service across Monmouth, Middlesex, and Ocean counties. Fast response, honest pricing, licensed techs."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/cooling" />
            </Head>

            <article>
                <PageHeader
                    label="Beat the Heat"
                    title="Cooling Services"
                    description="AC repair, central air installation, ductless cooling, and full system tune-ups. Our licensed technicians keep your home comfortable through every New Jersey summer."
                    image="/images/Cooling-Services.webp"
                />

                <section className="relative overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white py-20 lg:py-28">
                    <div aria-hidden="true" className="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand-orange/5 blur-3xl" />
                    <div aria-hidden="true" className="pointer-events-none absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-brand-blue/5 blur-3xl" />

                    <div className="relative mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 items-start gap-10 lg:grid-cols-2 lg:gap-14">
                            <div>
                                <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">What We Handle</p>
                                <span aria-hidden="true" className="mt-3 block h-0.5 w-10 rounded-full bg-brand-orange" />
                                <h2 className="mt-4 font-display text-[34px] uppercase leading-[0.95] text-[#07264A] md:text-[46px] lg:text-[54px]">
                                    Stay Cool All <span className="text-brand-orange">Summer</span> Long
                                </h2>
                                <div className="mt-6 space-y-5 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    <p>
                                        New Jersey summers are no joke. When your AC blows warm air or stops working entirely, you need a team that responds fast and gets it right. We repair and install all major brands of central air, heat pumps, and ductless systems.
                                    </p>
                                    <p>
                                        Whether it is a simple refrigerant recharge, a compressor replacement, or a full system upgrade, we give you a flat-rate quote upfront and explain every option. No surprise fees, no pushy sales tactics — just honest cooling service.
                                    </p>
                                </div>

                                <div className="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    {[
                                        'AC Repair & Install',
                                        'Central Air Service',
                                        'Heat Pump Cooling',
                                        'Ductless Mini-Splits',
                                        'Emergency AC Repair',
                                        'Seasonal Tune-Ups',
                                    ].map((item) => (
                                        <div key={item} className="flex items-center gap-3 rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm">
                                            <span className="h-2 w-2 rounded-full bg-brand-orange" />
                                            <span className="font-body text-sm font-semibold text-[#07264A]">{item}</span>
                                        </div>
                                    ))}
                                </div>
                            </div>

                            <div className="relative">
                                <img
                                    src="/images/cooling.webp"
                                    alt="Guardian Air technician repairing an outdoor AC unit in New Jersey"
                                    className="w-full rounded-2xl object-cover shadow-xl"
                                />
                                <div className="absolute -bottom-4 -left-3 hidden rounded-xl bg-white p-4 shadow-lg ring-1 ring-gray-100 lg:block">
                                    <div className="flex items-center gap-3">
                                        <div className="flex h-10 w-10 items-center justify-center rounded-full bg-brand-orange/10 text-brand-orange">
                                            <svg className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                                                <path strokeLinecap="round" strokeLinejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <p className="text-sm font-extrabold text-[#07264A]">Same-Day Service</p>
                                            <p className="text-[10px] font-bold uppercase tracking-widest text-gray-500">Emergency Repairs Available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
