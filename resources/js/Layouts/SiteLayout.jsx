import TopBar from '@/Components/FrontComponents/Layout/TopBar';
import Navbar from '@/Components/FrontComponents/Layout/Navbar';
import Footer from '@/Components/FrontComponents/Layout/Footer';

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
