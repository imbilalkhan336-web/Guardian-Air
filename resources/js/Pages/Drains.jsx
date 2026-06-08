import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowRight } from 'react-icons/lu';

const OTHER_SERVICES = [
    { label: 'Plumbing & Water Heaters', href: '/plumbing' },
    { label: 'Commercial Plumbing', href: '/commercial-plumbing' },
    { label: 'Heating & Furnace Repair', href: '/heating' },
    { label: 'Cooling & AC Repair', href: '/cooling' },
];

const DRAIN_SUBPAGES = [
    { label: 'Sewer Repair', href: '/drains/sewer-repair' },
    { label: 'Hydro Jetting', href: '/drains/hydro-jetting' },
    { label: 'Camera Inspection', href: '/drains/camera-inspection' },
];

const DRAIN_AREAS = [
    { label: 'Toms River', href: '/drains/toms-river' },
    { label: 'Freehold', href: '/drains/freehold' },
    { label: 'Brick', href: '/drains/brick' },
    { label: 'Old Bridge', href: '/drains/old-bridge' },
    { label: 'Red Bank', href: '/drains/red-bank' },
    { label: 'Lakewood', href: '/drains/lakewood' },
];

function LinkColumn({ title, links }) {
    return (
        <div>
            <h3 className="font-display text-lg uppercase text-[#07264A]">{title}</h3>
            <ul className="mt-4 space-y-2">
                {links.map((l) => (
                    <li key={l.href}>
                        <Link
                            href={l.href}
                            className="group inline-flex items-center gap-1.5 font-body text-sm font-semibold text-gray-600 transition-colors hover:text-brand-orange"
                        >
                            <LuArrowRight className="h-3.5 w-3.5 text-brand-orange transition-transform group-hover:translate-x-1" />
                            {l.label}
                        </Link>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default function DrainsPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Drain Cleaning & Sewer Services in NJ | Guardian Air"
                fallbackDescription="Need drain cleaning in NJ? Guardian Air offers licensed, insured drain & sewer service across Monmouth, Middlesex & Ocean counties. Call today!"
            />
            <ServiceSchema
                serviceName="Drain Cleaning & Sewer Services"
                serviceType="Drain cleaning and sewer repair"
                description="Drain cleaning, sewer repair, hydro jetting, and camera inspection across Monmouth, Middlesex, and Ocean counties, NJ."
                path="/drains"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Drains', href: '/drains' }]} />

            <article>
                <PageHeader
                    label="Flow Restored"
                    title="Drain Cleaning & Sewer Repair in New Jersey"
                    image="/img/drains-hero.webp"
                    imageCover
                    description="Drain cleaning, sewer repair, hydro jetting, and camera inspection across Monmouth, Middlesex & Ocean counties. Licensed, insured, and same-day emergency service — no mess left behind."
                    titleClassName="font-normal"
                />

                <ServiceArticle
                    page="drains"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Drain Guide"
                    faqEyebrow="New Jersey Drain & Sewer Experts"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Drain & Sewer Services" links={DRAIN_SUBPAGES} />
                            <LinkColumn title="Drain Service Areas" links={DRAIN_AREAS} />
                            <LinkColumn title="Explore Other Services" links={OTHER_SERVICES} />
                        </div>
                        <div className="mt-10">
                            <Link
                                href="/service-areas"
                                className="inline-flex items-center gap-2 text-sm font-extrabold uppercase tracking-widest text-brand-orange hover:text-brand-orange-dark"
                            >
                                View All Service Areas
                                <LuArrowRight className="h-4 w-4" />
                            </Link>
                        </div>
                    </div>
                </section>
            </article>

            <Reviews reviews={reviews} />
            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
