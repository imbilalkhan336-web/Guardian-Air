import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function CoolingPage({ blocks = [], tags = [], reviews = [] }) {
    return (
        <SiteLayout reviews={reviews}>
            <Head>
                <title>Cooling Services — AC Repair & Install in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Air conditioning repair, AC installation, and central cooling service across Monmouth, Middlesex, and Ocean counties. Fast response, honest pricing, licensed techs."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/cooling" />
            </Head>

            <article>
                <PageHeader
                    label="Beat the Heat"
                    title="Cooling Services"
                    image="/img/cooling-hero.webp"
                    imageCover
                    description="AC repair, central air installation, ductless cooling, and full system tune-ups. Our licensed technicians keep your home comfortable through every New Jersey summer."
                />

                <ServiceArticle
                    page="cooling"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Cooling Guide"
                    faqEyebrow="New Jersey Cooling Repair Contractors"
                    headingSizeClass="text-[30px]"
                />
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
