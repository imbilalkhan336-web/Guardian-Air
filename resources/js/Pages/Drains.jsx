import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceArticle from '@/Components/FrontComponents/ServiceArticle';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function DrainsPage({ blocks = [], tags = [], reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Drain Services — Cleaning & Repair in NJ | Guardian Air"
                fallbackDescription="Professional drain cleaning, clogged drain repair, sewer line service, and hydro jetting across Monmouth, Middlesex, and Ocean counties. Fast, honest, no mess left behind."
            />

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
