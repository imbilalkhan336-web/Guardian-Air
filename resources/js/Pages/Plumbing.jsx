import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function PlumbingPage() {
    return (
        <SiteLayout>
            <Head>
                <title>Plumbing Services — Repair & Install in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Professional plumbing repair, water heater install, pipe replacement, and leak detection across Monmouth, Middlesex, and Ocean counties. Licensed plumbers, upfront pricing."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/plumbing" />
            </Head>

            <article>
                <PageHeader
                    label="Fix It Right"
                    title="Plumbing Services"
                    description="From leaky faucets to burst pipes and water heater replacements, our licensed plumbers handle every job with honest quotes and same-day service across central New Jersey."
                    image="/images/Plumbing-Services.webp"
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
                                    Plumbing Done <span className="text-brand-orange">Right</span> the First Time
                                </h2>
                                <div className="mt-6 space-y-5 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    <p>
                                        Plumbing problems never happen at a convenient time. A burst pipe at 2 AM, a water heater that dies on a holiday weekend, or a slow leak that is been hiding behind your walls — our licensed plumbers show up fast and fix it right.
                                    </p>
                                    <p>
                                        We handle everything from routine repairs to full repiping projects. Every job gets a clear, flat-rate quote before we start. No hourly billing, no hidden fees, no upsells on parts you do not need.
                                    </p>
                                </div>

                                <div className="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    {[
                                        'Leak Detection & Repair',
                                        'Water Heater Install',
                                        'Pipe Replacement',
                                        'Fixture Repair',
                                        'Sump Pump Service',
                                        'Emergency Plumbing',
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
                                    src="/images/Plumbing-Services.webp"
                                    alt="Guardian Air plumber working on pipes in a New Jersey home"
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
                                            <p className="text-sm font-extrabold text-[#07264A]">Licensed Plumbers</p>
                                            <p className="text-[10px] font-bold uppercase tracking-widest text-gray-500">Fully Insured & Bonded</p>
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
