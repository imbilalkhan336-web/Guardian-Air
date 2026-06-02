import TopBar from '@/Components/FrontComponents/Layout/TopBar';
import Navbar from '@/Components/FrontComponents/Layout/Navbar';
import Footer from '@/Components/FrontComponents/Layout/Footer';
import Reviews from '@/Components/pages-sections/Home/Reviews';

export default function SiteLayout({ children, showReviews = true }) {
    return (
        <div className="min-h-screen flex flex-col bg-white">
            <TopBar />
            <Navbar />
            <main className="flex-1">{children}</main>
            {showReviews && <Reviews />}
            <Footer />
        </div>
    );
}
