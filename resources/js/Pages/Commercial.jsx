import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowRight, LuShieldCheck } from 'react-icons/lu';

const OTHER_SERVICES = [
    { label: 'Heating & Furnace Repair', href: '/heating' },
    { label: 'Cooling & AC Repair', href: '/cooling' },
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Commercial Plumbing', href: '/commercial-plumbing' },
];

const COMMERCIAL_SUBPAGES = [
    { label: 'Maintenance Contracts', href: '/commercial-hvac/maintenance-contracts' },
    { label: 'Commercial HVAC Repair', href: '/commercial-hvac/repair' },
];

const COMMERCIAL_AREAS = [
    { label: 'Monmouth County', href: '/commercial-hvac/monmouth-county' },
    { label: 'Middlesex County', href: '/commercial-hvac/middlesex-county' },
    { label: 'Ocean County', href: '/commercial-hvac/ocean-county' },
    { label: 'Toms River', href: '/commercial-hvac/toms-river' },
    { label: 'Freehold', href: '/commercial-hvac/freehold' },
    { label: 'Brick', href: '/commercial-hvac/brick' },
];

const TRUST = ['Licensed & Insured', 'NATE-Certified', 'EPA 608 Certified'];

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

export default function CommercialPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Commercial HVAC Services in NJ | Guardian Air"
                fallbackDescription="Need commercial HVAC in NJ? Guardian Air keeps offices, restaurants & retail comfortable across Monmouth, Middlesex & Ocean counties. Licensed & insured."
            />
            <ServiceSchema
                serviceName="Commercial HVAC Services"
                serviceType="Commercial HVAC repair, installation, and maintenance"
                description="Commercial HVAC repair, installation, boiler service, and preventive maintenance contracts across Monmouth, Middlesex, and Ocean counties, NJ."
                path="/commercial-hvac"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Commercial HVAC', href: '/commercial-hvac' }]} />

            <article>
                <PageHeader
                    label="For Your Business"
                    title="Commercial HVAC Services in New Jersey"
                    image="/img/commercial-hero.webp"
                    imageCover
                    description="Commercial HVAC repair, installation, boilers, and preventive maintenance contracts for offices, restaurants, retail, and multi-family buildings across Monmouth, Middlesex & Ocean counties — with 24/7 emergency response."
                    titleClassName="font-normal"
                >
                    <div className="flex flex-wrap gap-2">
                        {TRUST.map((t) => (
                            <span
                                key={t}
                                className="inline-flex items-center gap-1.5 rounded-full bg-white/10 px-3 py-1.5 text-[11px] font-extrabold uppercase tracking-widest text-white ring-1 ring-white/20"
                            >
                                <LuShieldCheck className="h-3.5 w-3.5 text-brand-orange" />
                                {t}
                            </span>
                        ))}
                    </div>
                </PageHeader>

                <ServiceArticle
                    page="commercial"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Commercial Guide"
                    faqEyebrow="New Jersey Commercial HVAC Contractors"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Commercial Services" links={COMMERCIAL_SUBPAGES} />
                            <LinkColumn title="Commercial Service Areas" links={COMMERCIAL_AREAS} />
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
