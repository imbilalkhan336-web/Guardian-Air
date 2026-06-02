function DropIcon({ className }) {
    return (
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" className={className}>
            <path d="M12 2c-3 5-7 8-7 13a7 7 0 0014 0c0-5-4-8-7-13z" />
        </svg>
    );
}

function ServiceStripItem({ iconSrc, icon, title, sub, color }) {
    return (
        <div className="flex items-center gap-0">
            <div className={`flex h-8 w-8 flex-shrink-0 items-center justify-center p-1 md:h-10 md:w-10 lg:h-14 lg:w-14 lg:p-2 ${iconSrc ? '' : color}`}>
                {iconSrc ? (
                    <img src={iconSrc} alt="" aria-hidden="true" className="h-full w-full object-contain" />
                ) : (
                    icon
                )}
            </div>
            <div className="space-y-1 leading-none">
                <div className="whitespace-nowrap text-[9px] font-bold uppercase tracking-wide text-white md:text-[11px] lg:text-sm">{title}</div>
                <div className="whitespace-nowrap text-[8px] text-white/70 md:text-[10px] lg:text-xs">{sub}</div>
            </div>
        </div>
    );
}

export default function HeroServicesStrip() {
    return (
        <div className="relative mx-auto max-w-7xl px-4 pb-10">
            <div className="grid grid-cols-2 gap-x-2 gap-y-2 rounded-xl border border-white/30 bg-[#092949] px-4 py-3 sm:grid-cols-3 md:gap-x-3 lg:grid-cols-[1fr_auto_1fr_auto_1fr_auto_1fr] lg:items-center lg:gap-x-2">
                <ServiceStripItem iconSrc="/img/heating-icon.webp" title="Heating" sub="Stay warm all winter" />
                <span aria-hidden="true" className="hidden h-12 w-px bg-white/20 lg:block" />
                <ServiceStripItem iconSrc="/img/cooling-icon.webp" title="Cooling" sub="Stay cool all summer" />
                <span aria-hidden="true" className="hidden h-12 w-px bg-white/20 lg:block" />
                <ServiceStripItem icon={<DropIcon className="h-full w-full" />} title="Plumbing" sub="Expert plumbing services" color="text-blue-500" />
                <span aria-hidden="true" className="hidden h-12 w-px bg-white/20 lg:block" />
                <ServiceStripItem iconSrc="/img/air-quality-icon.webp" title="Indoor Air Quality" sub="Breathe cleaner, healthier air" />
            </div>
        </div>
    );
}
