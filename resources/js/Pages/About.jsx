import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import About from '@/Components/pages-sections/Home/About';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import ScheduleSection from '@/Components/FrontComponents/ScheduleSection';
import { LuUsers } from 'react-icons/lu';

export default function AboutPage({ reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="About Guardian Air — NJ's Trusted HVAC & Plumbing Pros"
                fallbackDescription="Locally owned Guardian Air delivers honest HVAC, plumbing, and electrical service across Monmouth, Middlesex, and Ocean counties — licensed, insured, no upsells."
            />

            <article>
                <PageHeader
                    label="Get to know us"
                    title="About Guardian Air"
                    description="Family-run heating, cooling, plumbing, and electrical specialists serving homeowners across Monmouth, Middlesex, and Ocean counties — licensed, insured, and committed to honest pricing on every job."
                />

                <About image="/img/about-page-img.webp" />

                {/* Our Story */}
                <section className="relative overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white py-20 lg:py-28">
                    {/* Decorative blur orbs */}
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
                            <div className="relative">
                                <img
                                    src="/img/about-story.webp"
                                    alt="Guardian Air founder and team working on an HVAC system in a New Jersey home"
                                    className="w-full rounded-2xl object-cover shadow-xl"
                                />
                                {/* Floating stat card */}
                                <div className="absolute -bottom-6 -right-2 hidden rounded-xl bg-white p-4 shadow-xl ring-1 ring-gray-100 lg:block">
                                    <div className="flex items-center gap-3">
                                        <div className="flex h-10 w-10 items-center justify-center rounded-full bg-brand-orange/10 text-brand-orange">
                                            <LuUsers className="h-5 w-5" />
                                        </div>
                                        <div>
                                            <p className="text-lg font-extrabold text-[#07264A]">5K+</p>
                                            <p className="text-[10px] font-bold uppercase tracking-widest text-gray-500">Happy Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">
                                    Our Story
                                </p>
                                <span
                                    aria-hidden="true"
                                    className="mt-3 block h-0.5 w-10 rounded-full bg-brand-orange"
                                />
                                <h2 className="mt-4 font-display text-[34px] uppercase leading-[0.95] text-[#07264A] md:text-[46px] lg:text-[54px]">
                                    Built on Honest Work and Word of Mouth
                                </h2>
                                <div className="mt-6 space-y-5 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    <p>
                                        Guardian Air started with a simple idea: do the right work
                                        for the right price, every time. Years inside other people's
                                        shops convinced our founder that New Jersey homeowners
                                        deserved better than rushed diagnoses, padded invoices, and
                                        last-minute scope changes.
                                    </p>
                                    <p>
                                        So we built a different kind of home-services company — one
                                        where technicians take the time to explain the problem,
                                        write up a clear quote before any wrench turns, and only fix
                                        what actually needs fixing. No commission-driven upsells.
                                        No vague hourly meters. Just straightforward HVAC, plumbing,
                                        and electrical work, performed by people who care whether
                                        the system still runs in five years.
                                    </p>
                                    <p>
                                        Today our crew of licensed technicians serves families and
                                        small businesses across Monmouth, Middlesex, and Ocean
                                        counties. Most of our growth has come from neighbors telling
                                        neighbors — and that is exactly the way we like it.
                                    </p>
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
