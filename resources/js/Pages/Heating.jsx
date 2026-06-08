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
    { label: 'Cooling & AC Repair', href: '/cooling' },
    { label: 'Plumbing & Water Heaters', href: '/plumbing' },
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Commercial HVAC', href: '/commercial-hvac' },
];

const HEATING_SUBPAGES = [
    { label: 'Furnace Replacement', href: '/heating/furnace-replacement' },
    { label: 'Boiler Repair', href: '/heating/boiler-repair' },
    { label: 'Heat Pump Service', href: '/heating/heat-pump' },
    { label: 'Furnace Tune-Up', href: '/heating/furnace-tune-up' },
];

const HEATING_AREAS = [
    { label: 'Toms River', href: '/heating/toms-river' },
    { label: 'Freehold', href: '/heating/freehold' },
    { label: 'Brick', href: '/heating/brick' },
    { label: 'Old Bridge', href: '/heating/old-bridge' },
    { label: 'Red Bank', href: '/heating/red-bank' },
    { label: 'Lakewood', href: '/heating/lakewood' },
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

export default function HeatingPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Furnace Repair & Heating Services in NJ | Guardian Air"
                fallbackDescription="Need furnace repair in NJ? Guardian Air offers same-day, licensed & insured heating repair across Monmouth, Middlesex & Ocean counties. Call today!"
            />
            <ServiceSchema
                serviceName="Furnace Repair & Heating Services"
                serviceType="HVAC heating repair and installation"
                description="Furnace repair, boiler service, heat pump installation, and heating system replacement across Monmouth, Middlesex, and Ocean counties, NJ."
                path="/heating"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Heating', href: '/heating' }]} />

            <article>
                <PageHeader
                    label="Stay Warm"
                    title="Furnace Repair & Heating Services in New Jersey"
                    image="/img/heating-hero.webp"
                    imageCover
                    description="Furnace repair, boiler service, heat pump installs, and full system replacements across Monmouth, Middlesex & Ocean counties. Licensed, insured, and available 24/7 — call Guardian Air for same-day no-heat emergency service."
                    titleClassName="font-normal"
                />

                <ServiceArticle
                    page="heating"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Heating Guide"
                    faqEyebrow="New Jersey Heating Repair Contractors"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Furnace & Heating Services" links={HEATING_SUBPAGES} />
                            <LinkColumn title="Heating Service Areas" links={HEATING_AREAS} />
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
