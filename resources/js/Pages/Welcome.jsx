import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import Hero from '@/Components/Landing/Hero';
import Services from '@/Components/Landing/Services';
import About from '@/Components/Landing/About';
import Deals from '@/Components/Landing/Deals';

export default function Welcome() {
    return (
        <SiteLayout>
            <Head title="Arctic Air Conditioning | Since 1977" />
            <Hero />9
            <About />
            <Deals />
        </SiteLayout>
    );
}
