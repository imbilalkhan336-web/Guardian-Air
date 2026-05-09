import DealCard from './DealCard';
import SectionTitle from './SectionTitle';

const deals = [
    { title: 'FREE', description: 'HVAC System Estimates', decoration: 'bottom' },
    { title: 'FREE', description: 'Whole Home Generator Estimates', decoration: 'top-left' },
];

export default function Deals() {
    return (
        <section className="relative overflow-hidden py-20">
            {/* Blue gradient background — light at top, dark navy at bottom */}
            <div className="absolute inset-0 bg-gradient-to-b from-[#1273B5] via-[#0A4A7E] to-[#0A2A4A]" />

            {/* Wavy top border */}
            <div className="absolute top-0 left-0 w-full overflow-hidden leading-none rotate-180">
                <svg className="relative block w-full h-12" viewBox="0 0 1440 50" preserveAspectRatio="none">
                    <path d="M0,30 C240,60 480,0 720,30 C960,60 1200,0 1440,30 L1440,50 L0,50 Z" fill="white" />
                </svg>
            </div>

            <div className="relative mx-auto max-w-7xl px-4">
                <SectionTitle
                    title="Save With These Great Deals"
                    light
                />

                <div className="mx-auto grid max-w-7xl grid-cols-1 gap-10 sm:grid-cols-2">
                    {deals.map((deal, index) => (
                        <DealCard key={index} title={deal.title} description={deal.description} decoration={deal.decoration} />
                    ))}
                </div>

                <div className="mt-16 text-center">
                    <a
                        href="#"
                        className="inline-flex items-center text-base font-extrabold italic uppercase tracking-wider text-brand-yellow underline underline-offset-4 hover:text-brand-orange transition-colors"
                    >
                        Check Out All Our Deals
                    </a>
                </div>
            </div>

            {/* Wavy bottom border */}
            <div className="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
                <svg className="relative block w-full h-12" viewBox="0 0 1440 50" preserveAspectRatio="none">
                    <path d="M0,20 C360,50 720,0 1080,20 C1260,35 1380,30 1440,20 L1440,50 L0,50 Z" fill="white" />
                </svg>
            </div>
        </section>
    );
}
