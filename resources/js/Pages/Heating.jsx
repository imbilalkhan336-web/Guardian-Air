import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';

export default function HeatingPage({ blocks = [], tags = [] }) {
    return (
        <SiteLayout showReviews={false}>
            <Head>
                <title>Furnace & Heating Services in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Furnace inspection, repair, installation, and replacement across Monmouth, Middlesex, and Ocean counties. Learn when to replace your furnace, why maintenance matters, and the furnace types we service."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/heating" />
            </Head>

            <article>
                <PageHeader
                    label="Stay Warm"
                    title="Heating Services"
                    image="/img/heating-hero.webp"
                    imageCover
                    description="Furnace repair, boiler service, heat pump installs, and full system replacements. Our licensed techs keep New Jersey homes warm all winter — with honest quotes and same-day response."
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
            </article>

            <Reviews />
            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
