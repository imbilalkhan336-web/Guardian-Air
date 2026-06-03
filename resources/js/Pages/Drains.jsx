import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function DrainsPage({ blocks = [], tags = [] }) {
    return (
        <SiteLayout>
            <Head>
                <title>Drain Services — Cleaning & Repair in NJ | Guardian Air</title>
                <meta
                    name="description"
                    content="Professional drain cleaning, clogged drain repair, sewer line service, and hydro jetting across Monmouth, Middlesex, and Ocean counties. Fast, honest, no mess left behind."
                />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href="/drains" />
            </Head>

            <article>
                <PageHeader
                    label="Clear Flow"
                    title="Drain Services"
                    image="/img/drains-hero.webp"
                    imageCover
                    description="Clogged drains, sewer line backups, hydro jetting, and camera inspections. Our drain pros clear the toughest blockages fast — with honest pricing and no mess left behind."
                />

                <ServiceArticle
                    page="drains"
                    tags={tags}
                    blocks={blocks}
                    metaLabel="Drain Guide"
                    faqEyebrow="New Jersey Drain Cleaning Contractors"
                    headingSizeClass="text-[30px]"
                />
            </article>

            <CtaBanner />
        </SiteLayout>
    );
}
