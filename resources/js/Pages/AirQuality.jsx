import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function AirQualityPage({ blocks = [] }) {
    return (
        <SiteLayout>
            <Head>
                <title>Indoor Air Quality — Purifiers & Filters in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Indoor air quality solutions including air purifiers, humidifiers, dehumidifiers, and duct cleaning across Monmouth, Middlesex, and Ocean counties. Breathe cleaner air today."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/indoor-air-quality" />
            </Head>

            <article>
                <PageHeader
                    label="Breathe Better"
                    title="Indoor Air Quality"
                    image="/img/air-quality-hero.webp"
                    imageCover
                    description="Air purifiers, humidifiers, dehumidifiers, UV lights, and duct cleaning. Improve the air your family breathes with solutions tailored to your New Jersey home."
                />

                <ServiceArticle
                    page="indoor-air-quality"
                    blocks={blocks}
                    metaLabel="Air Quality Guide"
                    faqEyebrow="New Jersey Indoor Air Quality Experts"
                    headingSizeClass="text-[30px]"
                />
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
