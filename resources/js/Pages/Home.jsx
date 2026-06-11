import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import Hero from '@/Components/pages-sections/Home/Hero';
import About from '@/Components/pages-sections/Home/About';
import WhyChooseUs from '@/Components/pages-sections/Home/WhyChooseUs';
import Services from '@/Components/pages-sections/Home/Services';
import AreaWeServe from '@/Components/pages-sections/Home/AreaWeServe';
import Faqs from '@/Components/pages-sections/Faqs';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import { LuArrowRight } from 'react-icons/lu';

const HOME_FAQS = [
    { q: 'Do you handle heating, cooling, and plumbing with one team?', a: "Yes — that's the point of Guardian Air. One licensed local company covers your furnace, AC, plumbing, and drains, so you make one call instead of three and every visit is logged under one account." },
    { q: 'Where is Guardian Air located?', a: "We're based in central New Jersey with technicians stationed across Monmouth, Middlesex, and Ocean counties — close enough for same-day service in towns from Old Bridge to Toms River." },
    { q: 'How do your flat rates work?', a: "After diagnosing the problem, your technician quotes one fixed price for the complete fix. The clock never runs — if the job takes longer than expected, the price doesn't change." },
    { q: 'Do you offer financing for big repairs or new systems?', a: 'Yes — qualifying installations can be financed with flexible monthly terms, and seasonal promotions often add rebates on high-efficiency equipment. Ask when you book your estimate.' },
];

export default function Home({ reviews = [], posts = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Guardian Air | Heating, Cooling & Plumbing in NJ"
                fallbackDescription="Guardian Air delivers expert heating, cooling, and plumbing service across Monmouth, Middlesex, and Ocean counties, NJ. Honest pricing, 24/7 response."
            />
            <ServiceSchema
                serviceName="Heating, Cooling & Plumbing Services"
                serviceType="HVAC, plumbing, and drain service"
                description="Licensed heating and cooling, plumbing, drain, and indoor air quality service across Monmouth, Middlesex, and Ocean counties, New Jersey."
                path="/"
                faqs={HOME_FAQS.map((f) => ({ question: f.q, answer: f.a }))}
            />
            <Hero />
            <About />
            <WhyChooseUs />
            <Services />
            <CtaBanner />
            <AreaWeServe />

            {/* Latest blog posts */}
            {posts.length > 0 && (
                <section className="bg-white py-16 lg:py-24">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="mb-10 flex flex-wrap items-end justify-between gap-4">
                            <div>
                                <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">From Our Team</p>
                                <h2 className="mt-2 font-display text-[28px] uppercase leading-[0.95] text-[#07264A] md:text-[34px]">
                                    Latest Home Comfort Tips
                                </h2>
                            </div>
                            <Link
                                href="/blog"
                                className="inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-gray-500 transition-colors hover:text-brand-orange"
                            >
                                View All Posts
                                <LuArrowRight className="h-3.5 w-3.5" />
                            </Link>
                        </div>
                        <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
                            {posts.map((post) => (
                                <Link
                                    key={post.slug}
                                    href={`/blog/${post.slug}`}
                                    className="group flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg"
                                >
                                    {post.image_path && (
                                        <img
                                            src={post.image_path}
                                            alt={post.title}
                                            loading="lazy"
                                            className="aspect-[16/9] w-full object-cover"
                                        />
                                    )}
                                    <div className="flex flex-1 flex-col p-5">
                                        <h3 className="font-body text-base font-bold leading-snug text-[#07264A] group-hover:text-brand-orange">
                                            {post.title}
                                        </h3>
                                        {post.excerpt && (
                                            <p className="mt-2 flex-1 font-body text-sm leading-relaxed text-gray-600">{post.excerpt}</p>
                                        )}
                                        <span className="mt-4 inline-flex items-center gap-1.5 text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                                            Read Post
                                            <LuArrowRight className="h-3.5 w-3.5 transition-transform group-hover:translate-x-1" />
                                        </span>
                                    </div>
                                </Link>
                            ))}
                        </div>
                    </div>
                </section>
            )}

            <Faqs faqs={HOME_FAQS} />
        </SiteLayout>
    );
}
