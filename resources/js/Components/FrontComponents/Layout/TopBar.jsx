import { Link } from '@inertiajs/react';

export default function TopBar() {
    return (
        <div className="hidden bg-white text-gray-800 md:block">
            <div className="mx-auto flex max-w-7xl items-center justify-between px-4 py-1.5 text-sm font-semibold">
                <p className="hidden lg:block">
                    <span className="font-semibold text-brand-orange">Free HVAC estimates</span>
                    {' '}— call <a href="tel:+17322390932" className="hover:text-brand-orange transition-colors">(732) 239-0932</a>
                </p>
                <div className="flex items-center gap-4 ml-auto">
                    <Link href="/contact" className="hover:text-brand-orange transition-colors">Contact Us</Link>
                    <span className="text-gray-300">|</span>
                    <Link href="/offers" className="hover:text-brand-orange transition-colors">Offers</Link>
                    <span className="text-gray-300">|</span>
                    <Link href="/services" className="hover:text-brand-orange transition-colors">Services</Link>
                    <span className="text-gray-300">|</span>
                    <Link href="/about" className="hover:text-brand-orange transition-colors">About</Link>
                    <span className="text-gray-300">|</span>
                    <Link href="/resources" className="hover:text-brand-orange transition-colors">Resources</Link>
                </div>
            </div>
        </div>
    );
}
