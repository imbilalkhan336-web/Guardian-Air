import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function DrainsPage() {
    return (
        <SiteLayout>
            <Head>
                <title>Drain Services — Cleaning & Repair in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Professional drain cleaning, clogged drain repair, sewer line service, and hydro jetting across Monmouth, Middlesex, and Ocean counties. Fast, honest, no mess left behind."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/drains" />
            </Head>

            <article>
                <PageHeader
                    label="Clear Flow"
                    title="Drain Services"
                    description="Clogged drains, sewer line backups, hydro jetting, and camera inspections. Our drain pros clear the toughest blockages fast — with honest pricing and no mess left behind."
                    image="/images/Drain-Services.webp"
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
                                    Drains Flowing <span className="text-brand-orange">Freely</span> Again
                                </h2>
                                <div className="mt-6 space-y-5 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    <p>
                                        A slow drain or backed-up sewer line is more than an inconvenience — it can damage your home and create serious health hazards. Our drain specialists use professional-grade equipment to identify the root cause and clear it completely, not just punch a temporary hole through the clog.
                                    </p>
                                    <p>
                                        We start with a camera inspection when needed, so you see exactly what is causing the problem. Then we use the right tool for the job — from motorized drain snakes to high-pressure hydro jetting that scrubs your pipes clean. We leave your home as clean as we found it.
                                    </p>
                                </div>

                                <div className="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                    {[
                                        'Clogged Drain Cleaning',
                                        'Sewer Line Repair',
                                        'Hydro Jetting',
                                        'Camera Inspections',
                                        'Grease Trap Cleaning',
                                        'Emergency Drain Service',
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
                                    src="/images/Drain-Services.webp"
                                    alt="Guardian Air drain technician clearing a clogged drain in a New Jersey home"
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
                                            <p className="text-[10px] font-bold uppercase tracking-widest text-gray-500">No Mess Left Behind</p>
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
