import HeroServicesStrip from './HeroServicesStrip';

function CalendarOutlineIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1.8} aria-hidden="true" className={className}>
            <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 8.25h18M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25A2.25 2.25 0 0118.75 21H5.25A2.25 2.25 0 013 18.75z" />
            <path strokeLinecap="round" strokeLinejoin="round" d="M7.5 12h.008v.008H7.5V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.375 0h.008v.008h-.008V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm3.375 0h.008v.008h-.008V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    );
}

function PhoneSolidIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" className={className}>
            <path fillRule="evenodd" clipRule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" />
        </svg>
    );
}

function HeroScheduleButton({ href = '#' }) {
    return (
        <a
            href={href}
            className="group relative isolate flex min-w-[200px] items-center justify-center gap-2 overflow-hidden rounded-xl bg-[#EE5A24] px-3 py-2 text-white shadow-lg shadow-black/30 transition hover:bg-[#D04A1A] sm:px-4 sm:py-2.5"
        >
            <span
                aria-hidden="true"
                className="pointer-events-none absolute inset-y-0 left-full -z-0 w-full -skew-x-12 bg-gradient-to-l from-white/30 via-white/15 to-transparent transition-transform duration-700 ease-out group-hover:-translate-x-[200%]"
            />
            <CalendarOutlineIcon className="relative z-10 h-9 w-9 flex-shrink-0" />
            <div className="relative z-10 text-left leading-tight">
                <div className="text-base font-semibold uppercase tracking-wide sm:text-lg">Schedule Online</div>
                <div className="text-xs font-normal text-white/90 sm:text-sm">It's fast &amp; easy</div>
            </div>
        </a>
    );
}

function HeroPhoneButton({ phone, displayPhone }) {
    return (
        <a
            href={`tel:${phone.replace(/[^\d+]/g, '')}`}
            className="group relative isolate flex min-w-[200px] items-center justify-center gap-2 overflow-hidden rounded-xl border border-white/40 bg-transparent px-3 py-2 text-white shadow-lg shadow-black/30 transition hover:bg-white/10 sm:px-4 sm:py-2.5"
        >
            <span
                aria-hidden="true"
                className="pointer-events-none absolute inset-y-0 left-full -z-0 w-full -skew-x-12 bg-gradient-to-l from-white/25 via-white/10 to-transparent transition-transform duration-700 ease-out group-hover:-translate-x-[200%]"
            />
            <PhoneSolidIcon className="relative z-10 h-7 w-7 flex-shrink-0" />
            <div className="relative z-10 text-left leading-tight">
                <div className="text-base font-semibold tracking-wide sm:text-lg">{displayPhone}</div>
                <div className="text-xs font-normal text-white/80 sm:text-sm">Call Now 24/7</div>
            </div>
        </a>
    );
}

function ShieldIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} aria-hidden="true" className="h-9 w-9 flex-shrink-0 text-white md:h-10 md:w-10">
            <path strokeLinecap="round" strokeLinejoin="round" d="M9 12.75L11.25 15 15 9.75" />
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21c4.97-2.5 8-6.5 8-11V5l-8-3-8 3v5c0 4.5 3.03 8.5 8 11z" />
        </svg>
    );
}

function FamilyIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} strokeLinecap="round" strokeLinejoin="round" aria-hidden="true" className="h-9 w-9 flex-shrink-0 text-white md:h-10 md:w-10">
            <circle cx="9" cy="7" r="4" />
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
        </svg>
    );
}

function GuaranteeIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} aria-hidden="true" className="h-9 w-9 flex-shrink-0 text-white md:h-10 md:w-10">
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21c4.97-2.5 8-6.5 8-11V5l-8-3-8 3v5c0 4.5 3.03 8.5 8 11z" />
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 7l1.2 2.5 2.8.4-2 2 .5 2.8L12 13.4 9.5 14.7l.5-2.8-2-2 2.8-.4L12 7z" />
        </svg>
    );
}

function FlameIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" className={className}>
            <path d="M12 2c-1 4-4 4-4 9a4 4 0 008 0c0-2-1-3-1-5 0 1-.5 2-1.5 2s-1-1-1-2c0-1 0-2 0-4z" />
        </svg>
    );
}

function SnowflakeIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true" className={className}>
            <line x1="12" y1="2" x2="12" y2="22" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <line x1="5" y1="5" x2="19" y2="19" />
            <line x1="19" y1="5" x2="5" y2="19" />
            <polyline points="9,5 12,2 15,5" />
            <polyline points="9,19 12,22 15,19" />
            <polyline points="5,9 2,12 5,15" />
            <polyline points="19,9 22,12 19,15" />
        </svg>
    );
}

function PipeIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round" aria-hidden="true" className={className}>
            <path d="M5 9v7a3 3 0 003 3h8a3 3 0 003-3V9" />
            <circle cx="5" cy="9" r="2" />
            <circle cx="19" cy="9" r="2" />
        </svg>
    );
}

function BoltIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" className={className}>
            <path d="M13 2L3 14h7l-2 8 11-13h-8l2-7z" />
        </svg>
    );
}

function WavesIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" aria-hidden="true" className={className}>
            <path d="M2 7c2.5-2 5.5-2 8 0s5.5 2 8 0c1.5-1 4-1.5 4-1.5" />
            <path d="M2 13c2.5-2 5.5-2 8 0s5.5 2 8 0c1.5-1 4-1.5 4-1.5" />
            <path d="M2 19c2.5-2 5.5-2 8 0s5.5 2 8 0c1.5-1 4-1.5 4-1.5" />
        </svg>
    );
}

function FastResponseCallout() {
    return (
        <div className="absolute bottom-8 right-4 hidden w-[380px] overflow-hidden rounded-2xl bg-white p-3 shadow-2xl shadow-black/40 lg:block">
            <div className="flex items-center gap-4">
                {/* 24/7 badge with circular orange arrow ring */}
                <img
                    src="/website/time.png"
                    alt="24/7 service"
                    className="h-24 w-24 flex-shrink-0 object-contain"
                />

                <div>
                    <p className="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-orange">
                        Fast Response
                    </p>
                    <h3 className="mt-1 whitespace-nowrap text-sm font-semibold uppercase leading-tight text-[#0A2A4A]">
                        We'll Be There When You Need Us!
                    </h3>
                    <p className="mt-2 text-[15px] leading-snug text-gray-600">
                        Our team is ready 24/7 to handle any HVAC or plumbing emergency.
                    </p>
                </div>
            </div>
        </div>
    );
}

function TrustItem({ icon: Icon, title, body }) {
    return (
        <div className="flex items-center gap-2">
            <Icon />
            <div className="flex flex-wrap items-baseline gap-x-2">
                <h3 className="whitespace-nowrap text-sm font-medium text-white md:text-base">{title}</h3>
                <p className="whitespace-nowrap text-[11px] text-white/70 md:text-xs">{body}</p>
            </div>
        </div>
    );
}

export default function Hero() {
    return (
        <section className="relative bg-[#0A2A4A]">
            <div className="relative overflow-hidden">
                {/* Background image */}
                <div
                    className="absolute inset-0 bg-cover bg-no-repeat bg-center md:bg-right"
                    style={{ backgroundImage: "url('/images/hero-bg.png')" }}
                    aria-hidden="true"
                />

                {/* Left-side dark gradient — keeps text readable over the photo */}
                <div className="absolute inset-0 bg-gradient-to-r from-[#0A2A4A] via-[#0A2A4A]/90 to-transparent md:via-[#0A2A4A]/70" />

                <div className="relative mx-auto max-w-7xl px-4 py-8 md:py-12 lg:py-14">
                    <FastResponseCallout />
                <div className="max-w-xl lg:max-w-2xl">
                    <p className="text-base font-bold uppercase tracking-[0.25em] text-brand-orange md:text-lg">
                        Comfort You Can Count On
                    </p>

                    <h1 className="mt-4 font-display uppercase leading-[0.95] text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-wide">
                        Heating, Cooling
                        <br />
                        &amp; Plumbing
                    </h1>

                    <p className="mt-2 font-script font-bold text-sky-300 text-7xl md:text-8xl lg:text-9xl leading-[1.1]">
                        Done Right!
                    </p>

                    <p className="mt-4 max-w-md text-lg leading-relaxed text-white md:text-xl">
                        Expert service. Honest pricing. 100% satisfaction guaranteed.
                        24/7 service for all your home comfort needs.
                    </p>

                    <div className="mt-6 flex flex-wrap items-center gap-4">
                        <HeroScheduleButton href="#" />
                        <HeroPhoneButton phone="(843) 545-5882" displayPhone="(843) 545-5882" />
                    </div>

                    <div className="mt-8 grid grid-cols-1 items-center gap-2 sm:grid-cols-[1fr_auto_1fr_auto_1fr] sm:gap-1">
                        <TrustItem icon={ShieldIcon} title="Licensed & Insured" body="Peace of mind guaranteed" />
                        <span aria-hidden="true" className="hidden h-12 w-px bg-white/25 sm:block md:h-14" />
                        <TrustItem icon={FamilyIcon} title="Family Owned" body="Your neighbors, your team" />
                        <span aria-hidden="true" className="hidden h-12 w-px bg-white/25 sm:block md:h-14" />
                        <TrustItem icon={GuaranteeIcon} title="Satisfaction Guaranteed" body="100% satisfaction promise" />
                    </div>
                    </div>
                </div>
            </div>

            <HeroServicesStrip />
        </section>
    );
}
