import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function PlumbingPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Plumbing Services — Repair & Install in NJ | Guardian Air"
                fallbackDescription="Professional plumbing repair, water heater install, pipe replacement, and leak detection across Monmouth, Middlesex, and Ocean counties. Licensed plumbers, upfront pricing."
            />

            <article>
                <PageHeader
                    label="Fix It Right"
                    title="Plumbing Services"
                    image="/img/plumbing-hero.webp"
                    imageCover
                    description="From leaky faucets to burst pipes and water heater replacements, our licensed plumbers handle every job with honest quotes and same-day service across central New Jersey."
                />

                <ServiceArticle
                    page="plumbing"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Plumbing Guide"
                    faqEyebrow="New Jersey Plumbing Repair Contractors"
                    headingSizeClass="text-[30px]"
                />
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
