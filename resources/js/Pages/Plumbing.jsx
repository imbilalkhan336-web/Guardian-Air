import { Link } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import Breadcrumbs from '@/Components/FrontComponents/Breadcrumbs';
import ServiceSchema from '@/Components/FrontComponents/ServiceSchema';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuArrowRight, LuPhone } from 'react-icons/lu';

const PHONE = '(732) 239-0932';

const OTHER_SERVICES = [
    { label: 'Drain Cleaning & Sewer', href: '/drains' },
    { label: 'Heating & Water Heaters', href: '/heating' },
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Commercial Plumbing', href: '/commercial-plumbing' },
];

const PLUMBING_SUBPAGES = [
    { label: 'Emergency Plumber', href: '/plumbing/emergency-plumber' },
    { label: 'Water Heater Service', href: '/plumbing/water-heater' },
    { label: 'Tankless Water Heater', href: '/plumbing/tankless-water-heater' },
    { label: 'Leak Detection', href: '/plumbing/leak-detection' },
];

const PLUMBING_AREAS = [
    { label: 'Toms River', href: '/plumbing/toms-river' },
    { label: 'Freehold', href: '/plumbing/freehold' },
    { label: 'Brick', href: '/plumbing/brick' },
    { label: 'Old Bridge', href: '/plumbing/old-bridge' },
    { label: 'Red Bank', href: '/plumbing/red-bank' },
    { label: 'Lakewood', href: '/plumbing/lakewood' },
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

export default function PlumbingPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    const faqs = blocks
        .filter((b) => b.type === 'faq')
        .map((b) => ({ question: b.heading, answer: b.body }));

    return (
        <SiteLayout showReviews={false}>
            <Seo
                seo={seo}
                fallbackTitle="Licensed Plumber NJ | Monmouth, Middlesex & Ocean County | Guardian Air"
                fallbackDescription="Need a licensed plumber in NJ? Guardian Air offers 24/7 insured plumbing repair across Monmouth, Middlesex & Ocean counties. Call now for fast service!"
            />
            <ServiceSchema
                serviceName="Licensed Plumbing Services"
                serviceType="Residential plumbing repair and installation"
                description="Licensed plumber serving Monmouth, Middlesex, and Ocean counties, NJ — emergency plumbing, water heaters, leak detection, and pipe repair."
                path="/plumbing"
                faqs={faqs}
            />

            <Breadcrumbs items={[{ label: 'Plumbing', href: '/plumbing' }]} />

            <article>
                <PageHeader
                    label="Licensed & Insured"
                    title="Expert Plumbing Services in Monmouth, Middlesex & Ocean County, NJ"
                    image="/img/plumbing-hero.webp"
                    imageCover
                    description="Licensed plumbers for emergency repairs, water heaters, leak detection, and repiping across central New Jersey. Flat-rate pricing, 24/7 response — call Guardian Air today."
                    titleClassName="font-normal"
                >
                    <a
                        href={`tel:+1${PHONE.replace(/[^\d]/g, '')}`}
                        className="inline-flex items-center gap-2 rounded-full bg-gradient-to-b from-brand-yellow to-brand-orange px-6 py-3 text-sm font-bold uppercase tracking-wide text-[#003B73] shadow-lg shadow-black/25 ring-1 ring-black/5"
                    >
                        <LuPhone className="h-4 w-4" />
                        24/7 Emergency: {PHONE}
                    </a>
                </PageHeader>

                <ServiceArticle
                    page="plumbing"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Plumbing Guide"
                    faqEyebrow="New Jersey Licensed Plumbers"
                    headingSizeClass="text-[30px] font-normal"
                    formHeadingClassName="font-normal"
                />

                {/* Internal links */}
                <section className="bg-gray-50 py-16">
                    <div className="mx-auto max-w-7xl px-4">
                        <div className="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                            <LinkColumn title="Plumbing Services" links={PLUMBING_SUBPAGES} />
                            <LinkColumn title="Plumber Near You" links={PLUMBING_AREAS} />
                            <LinkColumn title="Explore Other Services" links={OTHER_SERVICES} />
                        </div>
                        <div className="mt-10 flex flex-wrap items-center gap-6">
                            <Link
                                href="/service-areas"
                                className="inline-flex items-center gap-2 text-sm font-extrabold uppercase tracking-widest text-brand-orange hover:text-brand-orange-dark"
                            >
                                View All Service Areas
                                <LuArrowRight className="h-4 w-4" />
                            </Link>
                            <a
                                href={`tel:+1${PHONE.replace(/[^\d]/g, '')}`}
                                className="inline-flex items-center gap-2 text-sm font-extrabold uppercase tracking-widest text-[#07264A] hover:text-brand-orange"
                            >
                                <LuPhone className="h-4 w-4" />
                                Emergency Plumber: {PHONE}
                            </a>
                        </div>
                    </div>
                </section>
            </article>

            <Reviews reviews={reviews} />
            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
