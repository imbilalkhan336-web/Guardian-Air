import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function AirQualityPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Indoor Air Quality — Purifiers & Filters in NJ | Guardian Air"
                fallbackDescription="Indoor air quality solutions including air purifiers, humidifiers, dehumidifiers, and duct cleaning across Monmouth, Middlesex, and Ocean counties. Breathe cleaner air today."
            />

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
                    tags={tags}
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
