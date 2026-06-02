import { Link, usePage } from '@inertiajs/react';

export default function TopBar() {
    const { auth } = usePage().props;
    const isAdmin = Boolean(auth?.user?.is_admin);

    return (
        <div className={`bg-white text-gray-800 ${isAdmin ? 'block' : 'hidden md:block'}`}>
            <div className="mx-auto flex max-w-7xl items-center justify-center px-4 py-1.5 text-xs font-semibold md:justify-between md:text-sm">
                <p className="hidden lg:block">
                    <span className="font-semibold text-brand-orange">Free HVAC estimates</span>
                    {' '}— call <a href="tel:+17322390932" className="hover:text-brand-orange transition-colors">(732) 239-0932</a>
                </p>
                <div className="flex items-center gap-3 md:ml-auto md:gap-4">
                    {/* Utility links — desktop only */}
                    <span className="hidden items-center gap-3 md:flex md:gap-4">
                        <Link href="/contact" className="hover:text-brand-orange transition-colors">Contact Us</Link>
                        <span className="text-gray-300">|</span>
                        <Link href="/offers" className="hover:text-brand-orange transition-colors">Offers</Link>
                        <span className="text-gray-300">|</span>
                        <Link href="/services" className="hover:text-brand-orange transition-colors">Services</Link>
                        <span className="text-gray-300">|</span>
                        <Link href="/about" className="hover:text-brand-orange transition-colors">About</Link>
                        <span className="text-gray-300">|</span>
                        <Link href="/resources" className="hover:text-brand-orange transition-colors">Resources</Link>
                        <span className="text-gray-300">|</span>
                        <Link href="/blog" className="hover:text-brand-orange transition-colors">Blog</Link>
                        {isAdmin && <span className="text-gray-300">|</span>}
                    </span>

                    {/* Dashboard — visible on mobile too, admins only */}
                    {isAdmin && (
                        <Link
                            href="/admin"
                            className="font-bold text-brand-orange hover:text-brand-orange-dark transition-colors"
                        >
                            Dashboard
                        </Link>
                    )}
                </div>
            </div>
        </div>
    );
}
