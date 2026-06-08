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
    { label: 'Cooling & AC Repair', href: '/cooling' },
    { label: 'Plumbing', href: '/plumbing' },
    { label: 'Commercial HVAC', href: '/commercial-hvac' },
];

const IAQ_SUBPAGES = [
    { label: 'Air Duct Cleaning', href: '/indoor-air-quality/duct-cleaning' },
    { label: 'Mold Testing', href: '/indoor-air-quality/mold-testing' },
    { label: 'Air Purifier Installation', href: '/indoor-air-quality/air-purifier' },
    { label: 'Humidifier & Dehumidifier', href: '/indoor-air-quality/humidifier-dehumidifier' },
];

const IAQ_AREAS = [
    { label: 'Toms River', href: '/indoor-air-quality/toms-river' },
    { label: 'Freehold', href: '/indoor-air-quality/freehold' },
    { label: 'Brick', href: '/indoor-air-quality/brick' },
    { label: 'Old Bridge', href: '/indoor-air-quality/old-bridge' },
    { label: 'Red Bank', href: '/indoor-air-quality/red-bank' },
    { label: 'Lakewood', href: '/indoor-air-quality/lakewood' },
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

export default function AirQualityPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Indoor Air Quality & Air Quality Testing in NJ | Guardian Air"
                fallbackDescription="Worried about your home's air? Guardian Air provides licensed indoor air quality testing across Monmouth, Middlesex & Ocean counties, NJ. Call today!"
            />
            <ServiceSchema
                serviceName="Indoor Air Quality & Air Quality Testing"
                serviceType="Indoor air quality testing and solutions"
                description="Air quality testing, air purifiers, duct cleaning, mold testing, and humidity control across Monmouth, Middlesex, and Ocean counties, NJ."
                path="/indoor-air-quality"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Indoor Air Quality', href: '/indoor-air-quality' }]} />

            <article>
                <PageHeader
                    label="Breathe Easier"
                    title="Indoor Air Quality & Air Quality Testing in New Jersey"
                    image="/img/air-quality-hero.webp"
                    imageCover
                    description="Air quality testing, whole-home purifiers, duct cleaning, mold testing, and humidity control across Monmouth, Middlesex & Ocean counties. Licensed, insured, and focused on a healthier home."
                    titleClassName="font-normal"
                />

                <ServiceArticle
                    page="indoor-air-quality"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Air Quality Guide"
                    faqEyebrow="New Jersey Indoor Air Quality Experts"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Air Quality Services" links={IAQ_SUBPAGES} />
                            <LinkColumn title="Air Quality Service Areas" links={IAQ_AREAS} />
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
