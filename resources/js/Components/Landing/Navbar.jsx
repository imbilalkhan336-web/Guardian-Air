import { useState } from 'react';

const navLinks = [
    { label: 'Heating', href: '#' },
    { label: 'Cooling', href: '#' },
    { label: 'Indoor Air Quality', href: '#' },
    { label: 'Plumbing', href: '#' },
    { label: 'Drains', href: '#' },
    { label: 'Electrical', href: '#' },
    { label: 'Commercial', href: '#' },
];

function Caret() {
    return (
        <svg className="ml-1 inline-block h-3 w-3" viewBox="0 0 12 12" fill="currentColor" aria-hidden="true">
            <path d="M3 4.5l3 3 3-3" stroke="currentColor" strokeWidth="1.5" fill="none" strokeLinecap="round" strokeLinejoin="round" />
        </svg>
    );
}

export default function Navbar() {
    const [mobileOpen, setMobileOpen] = useState(false);

    return (
        <nav className="sticky top-0 z-50 bg-[#004586] shadow-md">
            <div className="mx-auto flex max-w-7xl items-center px-4 py-3">
                {/* Logo - fixed width */}
                <a href="/" className="flex-shrink-0 mr-6 flex items-center">
                    <img
                        src="/images/logo.png"
                        alt="Guardian Air"
                        className="h-12 w-auto md:h-14"
                    />
                </a>

                {/* Desktop Nav Links - centered */}
                <div className="hidden lg:flex flex-1 items-center justify-center gap-1">
                    {navLinks.map((link) => (
                        <a
                            key={link.label}
                            href={link.href}
                            className="flex items-center px-3 py-2 text-sm font-semibold uppercase text-white transition-colors hover:text-brand-orange whitespace-nowrap"
                        >
                            {link.label}
                            <Caret />
                        </a>
                    ))}
                </div>

                {/* CTA Buttons - right side */}
                <div className="hidden md:flex flex-shrink-0 items-center gap-3 ml-6">
                    <a
                        href="tel:+18483564768"
                        className="flex items-center gap-2 rounded-full border-2 border-white px-5 py-2.5 text-sm font-bold text-white transition-all hover:bg-white hover:text-[#004586] whitespace-nowrap"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path fillRule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clipRule="evenodd" />
                        </svg>
                        (848) 356-4768
                    </a>
                    <a
                        href="#"
                        className="flex items-center gap-2 rounded-full bg-brand-orange px-6 py-2.5 text-sm font-bold uppercase text-white transition-all hover:bg-brand-orange-dark whitespace-nowrap"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        Schedule Online
                    </a>
                </div>

                {/* Mobile Menu Toggle */}
                <button
                    onClick={() => setMobileOpen(!mobileOpen)}
                    className="lg:hidden flex items-center justify-center rounded-md p-2 text-white hover:bg-white/10 ml-auto"
                    aria-label="Toggle menu"
                >
                    {mobileOpen ? (
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    ) : (
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    )}
                </button>
            </div>

            {/* Mobile Menu */}
            {mobileOpen && (
                <div className="border-t border-white/10 bg-[#004586] px-4 pb-6 lg:hidden">
                    <div className="flex flex-col gap-1 pt-4">
                        {navLinks.map((link) => (
                            <a
                                key={link.label}
                                href={link.href}
                                className="rounded-lg px-4 py-3 text-sm font-semibold uppercase text-white transition-colors hover:bg-white/10"
                            >
                                {link.label}
                            </a>
                        ))}
                    </div>
                    <div className="mt-4 flex flex-col gap-3">
                        <a
                            href="tel:+18483564768"
                            className="flex items-center justify-center gap-2 rounded-full border-2 border-white px-5 py-3 text-sm font-bold text-white"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path fillRule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clipRule="evenodd" />
                            </svg>
                            (848) 356-4768
                        </a>
                        <a
                            href="#"
                            className="rounded-full bg-brand-orange px-6 py-3 text-center text-sm font-bold uppercase text-white"
                        >
                            Schedule Online
                        </a>
                    </div>
                </div>
            )}
        </nav>
    );
}
