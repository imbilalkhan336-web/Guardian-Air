import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowRight, LuCalculator } from 'react-icons/lu';

export default function CostGuidesIndex({ guides = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="HVAC & Plumbing Cost Guides in NJ | Guardian Air"
                fallbackDescription="Honest, up-front cost guides for furnace repair, AC repair, and plumbing in New Jersey. Know what to expect before you call."
            />

            <article>
                <PageHeader
                    label="Pricing"
                    title="Cost Guides"
                    description="No gimmicks, no hidden conditions — just honest price ranges so you know what to expect before you call."
                />

                <div className="bg-white py-16 lg:py-24">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            {guides.map((guide) => (
                                <Link
                                    key={guide.slug}
                                    href={guide.href}
                                    className="group flex flex-col rounded-2xl border border-gray-200 bg-white p-6 shadow-sm transition-all hover:-translate-y-1 hover:border-brand-orange/40 hover:shadow-lg"
                                >
                                    <span className="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-orange/10 text-brand-orange">
                                        <LuCalculator className="h-6 w-6" />
                                    </span>
                                    <h2 className="mt-5 font-display text-xl uppercase text-[#07264A]">{guide.name}</h2>
                                    <p className="mt-2 flex-1 font-body text-sm leading-relaxed text-gray-600">{guide.description}</p>
                                    <span className="mt-4 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                                        View Guide
                                        <LuArrowRight className="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" />
                                    </span>
                                </Link>
                            ))}
                        </div>
                    </div>
                </div>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
