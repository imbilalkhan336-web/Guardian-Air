import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import Hero from '@/Components/pages-sections/Home/Hero';
import About from '@/Components/pages-sections/Home/About';
import WhyChooseUs from '@/Components/pages-sections/Home/WhyChooseUs';
import Services from '@/Components/pages-sections/Home/Services';
import AreaWeServe from '@/Components/pages-sections/Home/AreaWeServe';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function Home({ reviews = [] }) {
    return (
        <SiteLayout reviews={reviews}>
            <Head title="Guardian Air | HVAC, Plumbing & Electrical" />
            <Hero />
            <About />
            <WhyChooseUs />
            <Services />
            <CtaBanner />
            <AreaWeServe />
        </SiteLayout>
    );
}
