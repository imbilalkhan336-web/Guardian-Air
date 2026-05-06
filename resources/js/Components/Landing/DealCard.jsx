import { SchedulePillButton } from './PillButton';

export default function DealCard({ title, description, decoration }) {
    return (
        <div className="relative rounded-2xl bg-white px-10 py-8 md:px-14 md:py-10 text-center shadow-2xl">
            {decoration === 'top-left' && (
                <img
                    src="https://www.arcticac.com/wp-content/uploads/2025/06/ice-upper-left-deco.webp"
                    alt=""
                    aria-hidden="true"
                    className="pointer-events-none absolute -top-3 -left-3 w-40 md:w-52 select-none"
                />
            )}
            {decoration === 'bottom' && (
                <img
                    src="https://www.arcticac.com/wp-content/uploads/2025/06/ice-bottom-deco-lg.webp"
                    alt=""
                    aria-hidden="true"
                    className="pointer-events-none absolute -bottom-[38px] left-0 w-full select-none"
                />
            )}

            <h3 className="text-6xl md:text-7xl font-extrabold uppercase italic text-[#0A2A4A]">{title}</h3>
            <p className="mt-2 text-xl md:text-2xl font-semibold text-[#0A2A4A]">{description}</p>
            <div className="mt-6 flex justify-center">
                <SchedulePillButton size="lg" />
            </div>
        </div>
    );
}
