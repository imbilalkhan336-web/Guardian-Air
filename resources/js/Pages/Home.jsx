import { Head } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import Hero from '@/Components/pages-sections/Home/Hero';

export default function Home() {
    return (
        <SiteLayout>
            <Head title="Arctic Air Conditioning | Since 1977" />
            <Hero />
        </SiteLayout>
    );
}
