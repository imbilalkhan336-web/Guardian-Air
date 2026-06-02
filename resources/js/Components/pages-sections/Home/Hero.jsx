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

function HeroScheduleButton({ href = '/contact' }) {
    return (
        <a
            href={href}
            className="group relative isolate flex items-center justify-start gap-2 overflow-hidden rounded-xl bg-gradient-to-b from-brand-yellow to-brand-orange px-3 py-1.5 text-[#003B73] shadow-lg shadow-black/30 ring-1 ring-black/5 sm:min-w-[210px] sm:gap-3 sm:pl-3 sm:pr-6 sm:py-1.5"
        >
            <span
                aria-hidden="true"
                className="pointer-events-none absolute inset-y-0 left-full -z-0 w-full -skew-x-12 bg-gradient-to-l from-white/70 via-white/40 to-transparent transition-transform duration-700 ease-out group-hover:-translate-x-[200%]"
            />
            <CalendarOutlineIcon className="relative z-10 h-5 w-5 flex-shrink-0 sm:h-7 sm:w-7" />
            <div className="relative z-10 text-left leading-none">
                <div className="text-[10px] font-semibold uppercase tracking-wide sm:text-sm">Schedule Online</div>
                <div className="mt-[3px] text-[9px] font-normal text-[#003B73]/80 sm:text-[11px]">It's fast &amp; easy</div>
            </div>
        </a>
    );
}

function HeroPhoneButton({ phone, displayPhone }) {
    const digits = phone.replace(/[^\d+]/g, '');
    const telHref = digits.startsWith('+') ? `tel:${digits}` : `tel:+1${digits}`;

    return (
        <a
            href={telHref}
            className="group relative isolate flex items-center justify-start gap-2 overflow-hidden rounded-xl bg-gradient-to-b from-white to-gray-200 px-3 py-1.5 text-[#003B73] shadow-lg shadow-black/30 ring-1 ring-black/5 transition-colors hover:from-gray-100 hover:to-gray-300 sm:min-w-[210px] sm:gap-3 sm:pl-3 sm:pr-6 sm:py-1.5"
        >
            <span
                aria-hidden="true"
                className="pointer-events-none absolute inset-y-0 left-full -z-0 w-full -skew-x-12 bg-gradient-to-l from-[#003B73]/30 via-[#003B73]/15 to-transparent transition-transform duration-700 ease-out group-hover:-translate-x-[200%]"
            />
            <PhoneSolidIcon className="relative z-10 h-5 w-5 flex-shrink-0 sm:h-7 sm:w-7" />
            <div className="relative z-10 text-left leading-none">
                <div className="text-[10px] font-semibold tracking-wide sm:text-sm">{displayPhone}</div>
                <div className="mt-[3px] text-[9px] font-normal text-[#003B73]/70 sm:text-[11px]">Call Now 24/7</div>
            </div>
        </a>
    );
}

function ShieldIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} aria-hidden="true" className="h-7 w-7 flex-shrink-0 text-white sm:h-9 sm:w-9 md:h-10 md:w-10">
            <path strokeLinecap="round" strokeLinejoin="round" d="M9 12.75L11.25 15 15 9.75" />
            <path strokeLinecap="round" strokeLinejoin="round" d="M12 21c4.97-2.5 8-6.5 8-11V5l-8-3-8 3v5c0 4.5 3.03 8.5 8 11z" />
        </svg>
    );
}

function FamilyIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} strokeLinecap="round" strokeLinejoin="round" aria-hidden="true" className="h-7 w-7 flex-shrink-0 text-white sm:h-9 sm:w-9 md:h-10 md:w-10">
            <circle cx="9" cy="7" r="4" />
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
        </svg>
    );
}

function GuaranteeIcon() {
    return (
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth={1} aria-hidden="true" className="h-7 w-7 flex-shrink-0 text-white sm:h-9 sm:w-9 md:h-10 md:w-10">
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
        <div className="absolute bottom-8 right-4 hidden w-[380px] overflow-hidden rounded-2xl bg-white py-2.5 pl-2.5 pr-6 shadow-2xl shadow-black/40 lg:block">
            <div className="flex items-center gap-3">
                {/* 24/7 badge with circular orange arrow ring */}
                <img
                    src="/img/time.webp"
                    alt="24/7 service"
                    className="h-20 w-20 flex-shrink-0 object-contain"
                />

                <div>
                    <p className="text-[10px] font-bold uppercase tracking-[0.2em] text-brand-orange">
                        Fast Response
                    </p>
                    <h3 className="mt-0.5 whitespace-nowrap text-[12px] font-semibold uppercase leading-tight text-[#0A2A4A]">
                        We'll Be There When You Need Us!
                    </h3>
                    <p className="mt-1.5 text-[12px] leading-snug text-gray-600">
                        Our team is ready 24/7 to handle any HVAC or plumbing emergency.
                    </p>
                </div>
            </div>
        </div>
    );
}

function TrustItem({ icon: Icon, title, body }) {
    return (
        <div className="flex items-center gap-2 sm:gap-3">
            <Icon />
            <div className="flex flex-col leading-tight">
                <h3 className="text-[10px] font-semibold text-white sm:text-[11px] md:text-xs">{title}</h3>
                <p className="text-[9px] text-white/70 sm:text-[10px] md:text-[11px]">{body}</p>
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
                    className="absolute inset-0 bg-cover bg-no-repeat bg-right md:bg-right"
                    style={{ backgroundImage: "url('/img/home-hero-logo.webp')" }}
                    aria-hidden="true"
                />

                {/* Left-side dark gradient — keeps text readable over the photo */}
                <div className="absolute inset-0 bg-gradient-to-r from-[#0A2A4A] via-[#0A2A4A]/90 to-transparent md:via-[#0A2A4A]/70" />

                <div className="relative mx-auto max-w-7xl px-4 pt-8 pb-6 md:pt-12 lg:pt-14">
                    <FastResponseCallout />
                <div className="max-w-xl lg:max-w-2xl">
                    <p className="text-[10px] font-bold uppercase text-brand-orange md:text-[10px] lg:text-[14px]">
                        Comfort You Can Count On
                    </p>

                    <h1 className="mt-4 font-display uppercase leading-[1.15] text-white text-[32px] sm:text-[38px] md:text-[62px] lg:text-[72px] tracking-wide">
                        Heating, Cooling
                        <br />
                        &amp; Plumbing
                    </h1>

                    <p className="mt-2 font-script font-bold text-sky-300 text-4xl sm:text-5xl md:text-6xl lg:text-[67px] leading-[1.1]">
                        Done Right!
                    </p>

                    <p className="mt-4 max-w-md text-xs leading-relaxed text-white md:text-sm">
                        Expert service. Honest pricing. 100% satisfaction guaranteed.
                        24/7 service for all your home comfort needs.
                    </p>

                    <div className="mt-6 flex flex-nowrap items-center gap-2">
                        <HeroScheduleButton href="/contact" />
                        <HeroPhoneButton phone="(732) 239-0932" displayPhone="(732) 239-0932" />
                    </div>

                    <div className="mt-8 grid grid-cols-2 gap-4 sm:flex sm:flex-wrap sm:items-center sm:justify-start sm:gap-x-3 sm:gap-y-3">
                        <TrustItem icon={ShieldIcon} title="Licensed & Insured" body="Peace of mind guaranteed" />
                        <span aria-hidden="true" className="hidden h-12 w-px bg-white/25 sm:block md:h-14" />
                        <TrustItem icon={FamilyIcon} title="Family Owned" body="Your neighbors, your team" />
                        <span aria-hidden="true" className="hidden h-12 w-px bg-white/25 sm:block md:h-14" />
                        <TrustItem icon={GuaranteeIcon} title="Satisfaction Guaranteed" body="100% satisfaction promise" />
                    </div>
                    </div>
                </div>

                <HeroServicesStrip />
            </div>
        </section>
    );
}
