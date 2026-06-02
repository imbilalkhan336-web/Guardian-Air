import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function CommercialPage({ blocks = [] }) {
    return (
        <SiteLayout>
            <Head>
                <title>Commercial HVAC & Plumbing — NJ Business Services | Guardian Air</title>
                <meta
                    name="description"
                    content="Commercial HVAC, plumbing, and electrical services for businesses across Monmouth, Middlesex, and Ocean counties. Rooftop units, boilers, preventative maintenance, and emergency repairs."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/commercial" />
            </Head>

            <article>
                <PageHeader
                    label="Business Solutions"
                    title="Commercial Services"
                    image="/img/commercial-hero.webp"
                    imageCover
                    titleClassName="whitespace-normal lg:whitespace-nowrap"
                    description="HVAC, plumbing, and electrical service for offices, retail, restaurants, and multi-family properties. Preventative maintenance programs and 24/7 emergency response across central New Jersey."
                />

                <ServiceArticle
                    page="commercial"
                    blocks={blocks}
                    metaLabel="Commercial Guide"
                    faqEyebrow="New Jersey Commercial HVAC Contractors"
                    headingSizeClass="text-[30px]"
                />
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
