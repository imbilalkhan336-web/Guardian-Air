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
    { label: 'Heating & Furnace Repair', href: '/heating' },
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Commercial HVAC', href: '/commercial-hvac' },
    { label: 'Plumbing', href: '/plumbing' },
];

const COOLING_SUBPAGES = [
    { label: 'AC Installation', href: '/cooling/ac-installation' },
    { label: 'Ductless Mini-Split', href: '/cooling/ductless-mini-split' },
    { label: 'AC Tune-Up', href: '/cooling/ac-tune-up' },
];

const COOLING_AREAS = [
    { label: 'Toms River', href: '/cooling/toms-river' },
    { label: 'Freehold', href: '/cooling/freehold' },
    { label: 'Brick', href: '/cooling/brick' },
    { label: 'Old Bridge', href: '/cooling/old-bridge' },
    { label: 'Red Bank', href: '/cooling/red-bank' },
    { label: 'Lakewood', href: '/cooling/lakewood' },
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

export default function CoolingPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="AC Repair & Air Conditioning Services in NJ | Guardian Air"
                fallbackDescription="Need AC repair in NJ? Guardian Air delivers same-day, licensed & insured air conditioning repair across Monmouth, Middlesex & Ocean counties. Call now!"
            />
            <ServiceSchema
                serviceName="AC Repair & Air Conditioning Services"
                serviceType="Air conditioning repair and installation"
                description="AC repair, central air installation, ductless mini-split, and air conditioning maintenance across Monmouth, Middlesex, and Ocean counties, NJ."
                path="/cooling"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Cooling', href: '/cooling' }]} />

            <article>
                <PageHeader
                    label="Beat the Heat"
                    title="AC Repair & Air Conditioning Services Across New Jersey"
                    image="/img/cooling-hero.webp"
                    imageCover
                    description="AC repair, central air installation, ductless cooling, and full system tune-ups across Monmouth, Middlesex & Ocean counties. Licensed, insured, and ready with fast emergency service all summer long."
                    titleClassName="font-normal"
                />

                <ServiceArticle
                    page="cooling"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Cooling Guide"
                    faqEyebrow="New Jersey Cooling Repair Contractors"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Air Conditioning Services" links={COOLING_SUBPAGES} />
                            <LinkColumn title="Cooling Service Areas" links={COOLING_AREAS} />
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
