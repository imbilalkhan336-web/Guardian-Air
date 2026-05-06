import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import Hero from '@/Components/Landing/Hero';
import About from '@/Components/Landing/About';
import Difference from '@/Components/Landing/Difference';
import ServiceAreas from '@/Components/Landing/ServiceAreas';
import Reviews from '@/Components/Landing/Reviews';

export default function Welcome() {
    return (
        <SiteLayout>
            <Head title="Arctic Air Conditioning | Since 1977" />
            <Hero />
            <About />
            <Difference />
            <ServiceAreas />
            <Reviews />
        </SiteLayout>
    );
}
