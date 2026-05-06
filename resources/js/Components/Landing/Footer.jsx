import { PhonePillButton, SchedulePillButton } from './PillButton';

const PHONE = '(848) 375-1227';

const linkGroups = [
    {
        title: 'Location',
        type: 'address',
        items: [
            { kind: 'text', value: '1 Pleasant Valley Rd' },
            { kind: 'text', value: 'Old Bridge, NJ 08857' },
            { kind: 'spacer' },
            { kind: 'phone', value: PHONE },
        ],
    },
    {
        title: 'Services',
        items: [
            { label: 'Heating', href: '#' },
            { label: 'Cooling', href: '#' },
            { label: 'Air Quality', href: '#' },
            { label: 'Plumbing', href: '#' },
            { label: 'Drains', href: '#' },
            { label: 'Electrical', href: '#' },
            { label: 'Commercial', href: '#' },
        ],
    },
    {
        title: 'Company',
        items: [
            { label: 'About Us', href: '#' },
            { label: 'Join Our Team', href: '#' },
            { label: 'Testimonials', href: '#' },
            { label: 'Blog', href: '#' },
            { label: 'Contact', href: '#' },
            { label: 'Service Areas', href: '#' },
        ],
    },
    {
        title: 'Quick Links',
        items: [
            { label: 'Our Blog', href: '#' },
            { label: 'Special Offers', href: '#' },
            { label: 'Financing', href: '#' },
            { label: 'Contact Club', href: '#' },
            { label: 'Generac PowerPlay', href: '#' },
        ],
    },
];

function ColumnTitle({ children }) {
    return (
        <h3 className="text-2xl font-extrabold uppercase italic tracking-wide text-brand-orange">
            {children}
        </h3>
    );
}

function FooterLink({ children, href = '#' }) {
    return (
        <a href={href} className="text-[15px] text-white/80 transition-colors hover:text-white">
            {children}
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

export default function Footer() {
    return (
        <footer className="relative bg-[#0A2A4A] text-white">
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
                <img src="/images/side-view.png" alt="" aria-hidden="true" className="w-full h-auto" />
            </div>

            <div className="relative mx-auto max-w-7xl px-4 pt-28 pb-10 md:pt-32 lg:pt-40">
                <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-12">
                    {/* Left brand block */}
                    <div className="lg:col-span-5">
                        <h2 className="text-[45px] font-extrabold uppercase italic leading-tight text-white md:text-[51px]">
                            Services &amp; Quality<br />You Can Trust
                        </h2>

                        <p className="mt-4 text-2xl font-extrabold uppercase italic text-brand-orange">
                            Open 24-Hours a Day 7 Days a Week
                        </p>

                        <p className="mt-6 text-[15px] leading-relaxed text-white/70">
                            License #19HC00538300, Plumbing #36BI01585600, HIC #13VH08773400
                        </p>

                        <div className="mt-6 flex flex-wrap gap-3">
                            <SchedulePillButton size="sm" />
                            <PhonePillButton phone={PHONE} label={PHONE} size="sm" />
                        </div>

                        <div className="mt-6">
                            <p className="text-lg font-bold uppercase tracking-wider text-white">Follow Us:</p>
                            <div className="mt-3 flex gap-3">
                                <a
                                    href="#"
                                    aria-label="Facebook"
                                    className="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-brand-orange"
                                >
                                    <FacebookIcon />
                                </a>
                                <a
                                    href="#"
                                    aria-label="X"
                                    className="flex h-9 w-9 items-center justify-center rounded-full bg-white/10 text-white transition-colors hover:bg-brand-orange"
                                >
                                    <XIcon />
                                </a>
                            </div>
                        </div>
                    </div>

                    {/* Link columns */}
                    <div className="lg:col-span-7">
                        <div className="grid grid-cols-2 gap-8 sm:grid-cols-4">
                            {linkGroups.map((group) => (
                                <div key={group.title}>
                                    <ColumnTitle>{group.title}</ColumnTitle>
                                    <ul className="mt-4 space-y-2.5">
                                        {group.items.map((item, i) => {
                                            if (item.kind === 'text') {
                                                return (
                                                    <li key={i} className="text-[15px] text-white/80">
                                                        {item.value}
                                                    </li>
                                                );
                                            }
                                            if (item.kind === 'spacer') {
                                                return <li key={i} className="h-2" />;
                                            }
                                            if (item.kind === 'phone') {
                                                return (
                                                    <li key={i}>
                                                        <a
                                                            href={`tel:${item.value.replace(/[^\d+]/g, '')}`}
                                                            className="text-xl font-bold text-brand-orange transition-colors hover:text-brand-yellow"
                                                        >
                                                            {item.value}
                                                        </a>
                                                    </li>
                                                );
                                            }
                                            return (
                                                <li key={item.label}>
                                                    <FooterLink href={item.href}>{item.label}</FooterLink>
                                                </li>
                                            );
                                        })}
                                    </ul>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>

            <div className="border-t border-white/10">
                <div className="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 px-4 py-5 sm:flex-row">
                    <p className="text-sm text-white/50">
                        &copy; {new Date().getFullYear()} Arctic Air Conditioning. All rights reserved.
                    </p>
                    <div className="flex gap-4 text-sm text-white/50">
                        <a href="#" className="hover:text-white transition-colors">Terms &amp; Conditions</a>
                        <a href="#" className="hover:text-white transition-colors">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>
    );
}
