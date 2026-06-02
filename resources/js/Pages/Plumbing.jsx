import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function PlumbingPage({ blocks = [] }) {
    return (
        <SiteLayout>
            <Head>
                <title>Plumbing Services — Repair & Install in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Professional plumbing repair, water heater install, pipe replacement, and leak detection across Monmouth, Middlesex, and Ocean counties. Licensed plumbers, upfront pricing."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/plumbing" />
            </Head>

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
