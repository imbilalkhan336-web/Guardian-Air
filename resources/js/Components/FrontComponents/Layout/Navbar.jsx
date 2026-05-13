import { useState } from 'react';
import { PhonePillButton, SchedulePillButton } from '../PillButton';

const navLinks = [
    { label: 'Heating', href: '/heating' },
    { label: 'Cooling', href: '/cooling' },
    { label: 'Plumbing', href: '/plumbing' },
    { label: 'Electrical', href: '/electrical' },
    { label: 'Offers', href: '/offers' },
    { label: 'Resources', href: '/resources' },
];

const moreServices = [
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Drains', href: '/drains' },
    { label: 'Commercial', href: '/commercial' },
];

const PHONE = '(732) 239-0932';

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
        <nav className="sticky top-0 z-50 bg-[#004C93] shadow-md">
            <div className="mx-auto flex max-w-7xl items-center px-4 py-3">
                <a href="/" className="flex-shrink-0 mr-6 flex items-center">
                    <img
                        src="/images/logo.webp"
                        alt="Guardian Air"
                        className="h-12 w-auto md:h-14 lg:h-16"
                    />
                </a>

                <div className="hidden lg:flex items-center gap-1">
                    {navLinks.map((link) => (
                        <a
                            key={link.label}
                            href={link.href}
                            className="flex items-center px-3 py-2 text-xs font-semibold uppercase text-white transition-opacity hover:opacity-80 whitespace-nowrap"
                        >
                            {link.label}
                            <Caret />
                        </a>
                    ))}

                    <div className="group relative">
                        <button
                            type="button"
                            className="flex items-center px-3 py-2 text-xs font-semibold uppercase text-white transition-opacity hover:opacity-80 whitespace-nowrap"
                        >
                            More Services
                            <Caret />
                        </button>
                        <div className="invisible absolute left-0 top-full z-50 min-w-[180px] rounded-md bg-[#004C93] py-2 opacity-0 shadow-lg transition group-hover:visible group-hover:opacity-100">
                            {moreServices.map((link) => (
                                <a
                                    key={link.label}
                                    href={link.href}
                                    className="block whitespace-nowrap px-4 py-2 text-xs font-semibold uppercase text-white transition-colors hover:bg-white/10"
                                >
                                    {link.label}
                                </a>
                            ))}
                        </div>
                    </div>
                </div>

                <div className="hidden md:flex flex-shrink-0 items-center gap-3 ml-auto">
                    <PhonePillButton phone={PHONE} label={PHONE} size="sm" />
                    <SchedulePillButton size="sm" />
                </div>

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

            {mobileOpen && (
                <div className="border-t border-white/10 bg-[#004C93] px-4 pb-6 lg:hidden">
                    <div className="flex flex-col gap-1 pt-4">
                        {[...navLinks, ...moreServices].map((link) => (
                            <a
                                key={link.label}
                                href={link.href}
                                className="rounded-lg px-4 py-3 text-xs font-semibold uppercase text-white transition-colors hover:bg-white/10"
                            >
                                {link.label}
                            </a>
                        ))}
                    </div>
                    <div className="mt-4 flex flex-wrap items-center gap-3">
                        <PhonePillButton phone={PHONE} label={PHONE} size="sm" />
                        <SchedulePillButton size="sm" />
                    </div>
                </div>
            )}
        </nav>
    );
}
