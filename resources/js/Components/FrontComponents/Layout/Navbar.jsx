import { useState } from 'react';
import { Link } from '@inertiajs/react';
import { PhonePillButton, SchedulePillButton } from '../PillButton';

const navLinks = [
    { label: 'Heating', href: '/heating' },
    { label: 'Cooling', href: '/cooling' },
    { label: 'Plumbing', href: '/plumbing' },
    { label: 'HVAC Commercial', href: '/commercial' },
];

const moreServices = [
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Drains', href: '/drains' },
    { label: 'Blog', href: '/blog' },
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
    const [dropdownOpen, setDropdownOpen] = useState(false);

    return (
        <nav className="sticky top-0 z-50 bg-[#004C93] shadow-md">
            <div className="mx-auto flex max-w-7xl items-center px-4 py-3">
                <Link href="/" className="mr-6 flex flex-shrink-0 items-center">
                    <img
                        src="/img/logo.webp"
                        alt="Guardian Air"
                        className="h-auto w-[150px] md:w-[170px] lg:w-[190px]"
                    />
                </Link>

                {/* Spacer pushes everything to the right */}
                <div className="flex-1" />

                {/* Desktop nav links */}
                <div className="hidden items-center gap-1 lg:flex lg:mr-8 xl:mr-12">
                    {navLinks.map((link) => (
                        <Link
                            key={link.label}
                            href={link.href}
                            className="flex items-center whitespace-nowrap px-3 py-2 text-xs font-semibold uppercase text-white transition-opacity hover:opacity-80"
                        >
                            {link.label}
                        </Link>
                    ))}

                    <div
                        className="relative"
                        onMouseEnter={() => setDropdownOpen(true)}
                        onMouseLeave={() => setDropdownOpen(false)}
                    >
                        <button
                            type="button"
                            onClick={() => setDropdownOpen((v) => !v)}
                            className="flex items-center whitespace-nowrap px-3 py-2 text-xs font-semibold uppercase text-white transition-opacity hover:opacity-80"
                        >
                            More Services
                            <Caret />
                        </button>
                        {dropdownOpen && (
                            <div className="absolute left-0 top-full z-50 min-w-[180px] rounded-md bg-[#004C93] py-2 shadow-lg">
                                {moreServices.map((link) => (
                                    <Link
                                        key={link.label}
                                        href={link.href}
                                        className="block whitespace-nowrap px-4 py-2 text-xs font-semibold uppercase text-white transition-colors hover:bg-white/10"
                                    >
                                        {link.label}
                                    </Link>
                                ))}
                            </div>
                        )}
                    </div>
                </div>

                {/* CTA buttons */}
                <div className="hidden flex-shrink-0 items-center gap-3 md:flex">
                    <PhonePillButton phone={PHONE} label={PHONE} size="sm" />
                    <SchedulePillButton size="sm" />
                </div>

                {/* Mobile hamburger */}
                <button
                    onClick={() => setMobileOpen(!mobileOpen)}
                    className="ml-auto flex items-center justify-center rounded-md p-2 text-white hover:bg-white/10 lg:hidden"
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

            {/* Mobile menu */}
            {mobileOpen && (
                <div className="border-t border-white/10 bg-[#004C93] px-4 pb-6 lg:hidden">
                    <div className="flex flex-col gap-1 pt-4">
                        {navLinks.map((link) => (
                            <Link
                                key={link.label}
                                href={link.href}
                                onClick={() => setMobileOpen(false)}
                                className="rounded-lg px-4 py-3 text-xs font-semibold uppercase text-white transition-colors hover:bg-white/10"
                            >
                                {link.label}
                            </Link>
                        ))}
                        <div className="my-2 h-px bg-white/20" />
                        {moreServices.map((link) => (
                            <Link
                                key={link.label}
                                href={link.href}
                                onClick={() => setMobileOpen(false)}
                                className="rounded-lg px-4 py-3 text-xs font-semibold uppercase text-white transition-colors hover:bg-white/10"
                            >
                                {link.label}
                            </Link>
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
