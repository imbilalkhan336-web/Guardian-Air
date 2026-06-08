import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function CommercialPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Commercial HVAC & Plumbing — NJ Business Services | Guardian Air"
                fallbackDescription="Commercial HVAC, plumbing, and electrical services for businesses across Monmouth, Middlesex, and Ocean counties. Rooftop units, boilers, preventative maintenance, and emergency repairs."
            />

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
                    tags={tags}
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
