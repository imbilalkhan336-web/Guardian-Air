import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import Hero from '@/Components/pages-sections/Home/Hero';
import About from '@/Components/pages-sections/Home/About';
import WhyChooseUs from '@/Components/pages-sections/Home/WhyChooseUs';
import Services from '@/Components/pages-sections/Home/Services';
import AreaWeServe from '@/Components/pages-sections/Home/AreaWeServe';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function Home({ reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Guardian Air | Heating, Cooling & Plumbing in NJ"
                fallbackDescription="Guardian Air delivers expert heating, cooling, and plumbing service across Monmouth, Middlesex, and Ocean counties, NJ. Honest pricing, 24/7 response."
            />
            <Hero />
            <About />
            <WhyChooseUs />
            <Services />
            <CtaBanner />
            <AreaWeServe />
        </SiteLayout>
    );
}
