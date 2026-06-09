import { PhonePillButton, SchedulePillButton } from '../PillButton';

const PHONE = '(732) 239-0932';

const linkGroups = [
    {
        title: 'Services',
        items: [
            { label: 'All Services', href: '/services' },
            { label: 'Heating', href: '/heating' },
            { label: 'Cooling', href: '/cooling' },
            { label: 'Air Quality', href: '/indoor-air-quality' },
            { label: 'Plumbing', href: '/plumbing' },
            { label: 'Drains', href: '/drains' },
            { label: 'Commercial', href: '/commercial-hvac' },
        ],
    },
    {
        title: 'Company',
        items: [
            { label: 'About Us', href: '/about' },
            { label: 'Join Our Team', href: '#' },
            { label: 'Testimonials', href: '#' },
            { label: 'Blog', href: '/blog' },
            { label: 'Contact', href: '/contact' },
            { label: 'Offers', href: '/offers' },
        ],
    },
    {
        title: 'Areas We Serve',
        items: [
            { label: 'All Service Areas', href: '/service-areas' },
            { label: 'Monmouth County', href: '/service-areas/monmouth-county' },
            { label: 'Middlesex County', href: '/service-areas/middlesex-county' },
            { label: 'Ocean County', href: '/service-areas/ocean-county' },
            { label: 'Toms River', href: '/service-areas/toms-river' },
            { label: 'Freehold', href: '/service-areas/freehold' },
            { label: 'Brick', href: '/service-areas/brick' },
        ],
    },
];

function ColumnTitle({ children }) {
    return (
        <div>
            <h3 className="whitespace-nowrap text-lg font-extrabold uppercase tracking-wide text-brand-orange md:text-xl">
                {children}
            </h3>
            <span aria-hidden="true" className="mt-2 block h-0.5 w-8 rounded-full bg-brand-orange/60" />
        </div>
    );
}

function ArrowIcon() {
    return (
        <svg className="h-3 w-3 transition-all duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2.5}>
            <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    );
}

function FooterLink({ children, href = '#' }) {
    return (
        <a
            href={href}
            className="group flex items-center gap-2 text-sm text-white/70 transition-all duration-300 hover:gap-3 hover:text-white md:text-[15px] whitespace-nowrap"
        >
            <span className="flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-white/5 text-white/40 ring-1 ring-white/10 transition-all duration-300 group-hover:bg-brand-orange/20 group-hover:text-brand-orange group-hover:ring-brand-orange/30">
                <ArrowIcon />
            </span>
            <span className="relative">
                {children}
                <span className="absolute -bottom-0.5 left-0 h-px w-0 bg-brand-orange transition-all duration-300 group-hover:w-full" />
            </span>
        </a>
    );
}

function FacebookIcon() {
    return (
        <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
        </svg>
    );
}

function XIcon() {
    return (
        <svg className="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
        </svg>
    );
}

function InstagramIcon() {
    return (
        <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
        </svg>
    );
}

function LinkedInIcon() {
    return (
        <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
        </svg>
    );
}

function YouTubeIcon() {
    return (
        <svg className="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
            <path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
        </svg>
    );
}

export default function Footer() {
    return (
        <footer className="relative overflow-hidden bg-[#0A2A4A] text-white">
            {/* Decorative depth orbs */}
            <div
                aria-hidden="true"
                className="pointer-events-none absolute -bottom-20 -left-20 h-80 w-80 rounded-full bg-brand-orange/5 blur-3xl"
            />
            <div
                aria-hidden="true"
                className="pointer-events-none absolute -top-20 -right-20 h-72 w-72 rounded-full bg-[#0A55C1]/10 blur-3xl"
            />

            {/* Wave divider on top */}
            <div className="absolute -top-1 left-0 w-full overflow-hidden leading-none pointer-events-none">
                <svg
                    className="relative block h-12 w-full md:h-20"
                    viewBox="0 0 1440 80"
                    preserveAspectRatio="none"
                >
                    <path d="M0,80 C240,0 480,80 720,40 C960,0 1200,80 1440,30 L1440,0 L0,0 Z" fill="#FFFFFF" />
                </svg>
            </div>

            {/* Van decoration sitting on top of wave (desktop) */}
            <div className="pointer-events-none absolute -top-[25px] left-[35px] hidden w-[296px] md:block lg:left-[95px] lg:-top-[20px] lg:w-[344px]">
                <img src="/img/side-view.webp" alt="Guardian Air heating, cooling, and plumbing service van" className="w-full h-auto" />
            </div>

            <div className="relative mx-auto max-w-7xl px-4 pt-28 pb-10 md:pt-32 lg:pt-40">
                <div className="grid grid-cols-1 gap-12 lg:grid-cols-12 lg:gap-12">
                    {/* Left brand block */}
                    <div className="lg:col-span-5">
                        <h2 className="font-display text-xl uppercase leading-tight text-white md:text-2xl lg:text-3xl">
                            Services &amp; Quality<br />You Can Trust
                        </h2>

                        <p className="mt-3 text-xs font-extrabold uppercase italic text-brand-orange md:text-sm lg:text-base">
                            Open 24-Hours a Day 7 Days a Week
                        </p>

                        <div className="mt-6 flex flex-wrap gap-3">
                            <SchedulePillButton size="sm" />
                            <PhonePillButton phone={PHONE} label={PHONE} size="sm" />
                        </div>

                        <div className="mt-6">
                            <p className="text-sm font-bold uppercase tracking-wider text-white md:text-base">
                                Follow Us
                            </p>
                            <div className="mt-3 flex gap-3">
                                <a
                                    href="#"
                                    aria-label="Facebook"
                                    className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 hover:scale-110 hover:bg-brand-orange hover:shadow-lg hover:shadow-brand-orange/30"
                                >
                                    <FacebookIcon />
                                </a>
                                <a
                                    href="#"
                                    aria-label="Instagram"
                                    className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 hover:scale-110 hover:bg-brand-orange hover:shadow-lg hover:shadow-brand-orange/30"
                                >
                                    <InstagramIcon />
                                </a>
                                <a
                                    href="#"
                                    aria-label="X"
                                    className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 hover:scale-110 hover:bg-brand-orange hover:shadow-lg hover:shadow-brand-orange/30"
                                >
                                    <XIcon />
                                </a>
                                <a
                                    href="#"
                                    aria-label="LinkedIn"
                                    className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 hover:scale-110 hover:bg-brand-orange hover:shadow-lg hover:shadow-brand-orange/30"
                                >
                                    <LinkedInIcon />
                                </a>
                                <a
                                    href="#"
                                    aria-label="YouTube"
                                    className="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 text-white transition-all duration-300 hover:scale-110 hover:bg-brand-orange hover:shadow-lg hover:shadow-brand-orange/30"
                                >
                                    <YouTubeIcon />
                                </a>
                            </div>
                        </div>
                    </div>

                    {/* Vertical divider on desktop */}
                    <div className="hidden lg:col-span-1 lg:flex lg:justify-center">
                        <div className="h-full w-px bg-gradient-to-b from-transparent via-white/20 to-transparent" />
                    </div>

                    {/* Link columns */}
                    <div className="lg:col-span-6">
                        <div className="grid grid-cols-2 gap-8 sm:grid-cols-3">
                            {linkGroups.map((group) => (
                                <div key={group.title}>
                                    <ColumnTitle>{group.title}</ColumnTitle>
                                    <ul className="mt-5 grid grid-cols-1 gap-3">
                                        {group.items.map((item) => (
                                            <li key={item.label}>
                                                <FooterLink href={item.href}>{item.label}</FooterLink>
                                            </li>
                                        ))}
                                    </ul>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>

            {/* Orange accent line above bottom bar */}
            <div className="mx-auto max-w-7xl px-4">
                <div className="h-px w-full bg-gradient-to-r from-transparent via-brand-orange/60 to-transparent" />
            </div>

            <div className="relative">
                <div className="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 px-4 py-5 sm:flex-row">
                    <p className="text-xs text-white/50 md:text-sm">
                        &copy; {new Date().getFullYear()} Guardian Air. All rights reserved.
                    </p>
                    <div className="flex gap-4 text-xs text-white/50 md:text-sm">
                        <a href="/terms" className="hover:text-white transition-colors">Terms &amp; Conditions</a>
                        <a href="/privacy" className="hover:text-white transition-colors">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    );
}
