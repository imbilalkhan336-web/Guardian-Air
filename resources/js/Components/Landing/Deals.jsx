import DealCard from './DealCard';
import SectionTitle from './SectionTitle';

const deals = [
    { title: 'FREE', description: 'HVAC System Estimates' },
    { title: 'FREE', description: 'Whole Home Generator Estimates' },
];

export default function Deals() {
    return (
        <section className="relative overflow-hidden py-20">
            {/* Blue gradient background */}
            <div className="absolute inset-0 bg-gradient-to-b from-brand-blue via-brand-blue-light to-brand-blue" />

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

                <div className="mx-auto grid max-w-3xl grid-cols-1 gap-8 sm:grid-cols-2">
                    {deals.map((deal, index) => (
                        <DealCard key={index} title={deal.title} description={deal.description} />
                    ))}
                </div>

                <div className="mt-10 text-center">
                    <a
                        href="#"
                        className="inline-flex items-center gap-2 text-sm font-bold uppercase tracking-wider text-brand-orange hover:text-brand-yellow transition-colors"
                    >
                        Check Out All Our Deals
                        <svg xmlns="http://www.w3.org/2000/svg" className="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clipRule="evenodd" />
                        </svg>
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
