import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Services from '@/Components/pages-sections/Home/Services';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import ScheduleSection from '@/Components/FrontComponents/ScheduleSection';
export default function ServicesPage({ reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="HVAC & Plumbing Services in NJ | Guardian Air"
                fallbackDescription="Guardian Air offers full-service heating, cooling, plumbing, and drain work across Monmouth, Middlesex, and Ocean counties — licensed, insured, upfront pricing on every job."
            />

            <article>
                <PageHeader
                    label="What we do"
                    title="Our Services"
                    description="From heating and cooling to plumbing and drains, Guardian Air handles every home-comfort job with licensed technicians, honest quotes, and same-day response across central New Jersey."
                />

                <div className="pt-12">
                    <Services />
                </div>

                {/* SEO Content — Why Guardian Air */}
                <section className="relative overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white py-20 lg:py-28">
                    <div
                        aria-hidden="true"
                        className="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand-orange/5 blur-3xl"
                    />
                    <div
                        aria-hidden="true"
                        className="pointer-events-none absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-brand-blue/5 blur-3xl"
                    />

                    <div className="relative mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 items-start gap-10 lg:grid-cols-2 lg:gap-14">
                            <div>
                                <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">
                                    Why Guardian Air
                                </p>
                                <span
                                    aria-hidden="true"
                                    className="mt-3 block h-0.5 w-10 rounded-full bg-brand-orange"
                                />
                                <h2 className="mt-4 font-display text-[34px] uppercase leading-[0.95] text-[#07264A] md:text-[46px] lg:text-[54px]">
                                    Licensed Pros Serving <span className="text-brand-orange">Central NJ</span>
                                </h2>

                                <p className="mt-6 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    We started Guardian Air out of a garage in Old Bridge with one
                                    van and a toolbox. Over ten years later, we're still family-owned
                                    — just with more trucks and a whole lot of repeat customers
                                    across Monmouth, Middlesex, and Ocean counties who trust us with
                                    their heating, cooling, and plumbing work. When your
                                    furnace dies at midnight in January or your AC quits during a
                                    heatwave, you need a tech who shows up fast, finds the actual
                                    problem, and tells you the real cost before touching a wrench.
                                    No upsells, no guesswork. Every repair, install, and maintenance
                                    call gets a flat-rate quote upfront. Licensed and insured. Real
                                    NJ technicians who live here, not some call center in another
                                    state.
                                </p>

                                <div className="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                                    {[
                                        { label: 'Heating', href: '/heating' },
                                        { label: 'Cooling', href: '/cooling' },
                                        { label: 'Plumbing', href: '/plumbing' },
                                        { label: 'Drains', href: '/drains' },
                                    ].map((item) => (
                                        <a
                                            key={item.label}
                                            href={item.href}
                                            className="group flex items-center gap-2 rounded-lg border border-gray-200 bg-white px-3 py-2.5 text-xs font-bold uppercase tracking-wide text-[#07264A] shadow-sm transition-all hover:border-brand-orange/40 hover:shadow-md"
                                        >
                                            <span className="h-1.5 w-1.5 rounded-full bg-brand-orange transition-transform group-hover:scale-150" />
                                            {item.label}
                                        </a>
                                    ))}
                                </div>
                            </div>

                            <div className="relative">
                                <img
                                    src="/img/licensed.webp"
                                    alt="Guardian Air technician inspecting an outdoor AC unit in New Jersey"
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
                                            <p className="text-sm font-extrabold text-[#07264A]">Licensed & Insured</p>
                                            <p className="text-[10px] font-bold uppercase tracking-widest text-gray-500">NJ State Certified</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>

            <ScheduleSection />

            <CtaBanner />
        </SiteLayout>
    );
}
