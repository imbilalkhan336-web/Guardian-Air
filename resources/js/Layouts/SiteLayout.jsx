import TopBar from '@/Components/Landing/TopBar';
import Navbar from '@/Components/Landing/Navbar';
import Footer from '@/Components/Landing/Footer';

export default function SiteLayout({ children }) {
    return (
        <div className="min-h-screen flex flex-col bg-white">
            <TopBar />
            <Navbar />
            <main className="flex-1">{children}</main>
            <Footer />
        </div>
    );
}
