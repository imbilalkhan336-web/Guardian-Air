import { LuSnowflake, LuDroplet, LuBuilding2, LuArrowRight } from 'react-icons/lu';
import { PillButton, PhonePillButton } from '@/Components/FrontComponents/PillButton';

function ServiceCard({ icon: Icon, title, body, href = '#', index }) {
    return (
        <div className="group relative isolate flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white p-7 shadow-sm transition-all duration-500 ease-out hover:-translate-y-2 hover:border-brand-orange/40 hover:shadow-2xl sm:p-8">
            {/* Large background number */}
            <span
                aria-hidden="true"
                className="absolute right-4 top-2 font-display text-[72px] leading-none text-gray-100 transition-colors duration-500 group-hover:text-brand-orange/10 sm:text-[80px]"
            >
                {String(index + 1).padStart(2, '0')}
            </span>

            {/* Gradient icon container */}
            <div className="relative flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-orange to-brand-orange-dark text-white shadow-lg shadow-brand-orange/30">
                <Icon className="h-8 w-8" />
            </div>

            {/* Animated accent line */}
            <span
                aria-hidden="true"
                className="relative mt-6 block h-1 w-8 rounded-full bg-brand-orange transition-all duration-500 group-hover:w-16"
            />

            <h3 className="relative mt-5 font-display text-2xl uppercase text-[#07264A]">
                {title}
            </h3>

            <p className="relative mt-3 flex-1 font-body text-sm leading-relaxed text-gray-600">
                {body}
            </p>

            <a
                href={href}
                className="relative mt-6 inline-flex items-center gap-2 text-xs font-extrabold uppercase tracking-[0.2em] text-brand-orange transition-colors hover:text-brand-orange-dark"
            >
                Learn More
                <span className="flex h-6 w-6 items-center justify-center rounded-full bg-brand-orange/10 transition-all duration-300 group-hover:bg-brand-orange group-hover:text-white">
                    <LuArrowRight className="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-0.5" />
                </span>
            </a>
        </div>
    );
}

export default function Services() {
    return (
        <section className="relative overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white py-20 lg:py-28">
            {/* Decorative blur orbs */}
            <div
                aria-hidden="true"
                className="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand-orange/5 blur-3xl"
            />
            <div
                aria-hidden="true"
                className="pointer-events-none absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-[#0A55C1]/5 blur-3xl"
            />

            <div className="relative mx-auto max-w-7xl px-4">
                {/* Section header */}
                <div className="max-w-3xl">
                    <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">
                        Our Services
                    </p>
                    <span
                        aria-hidden="true"
                        className="mt-3 block h-0.5 w-10 rounded-full bg-brand-orange"
                    />
                    <h2 className="mt-4 font-display text-[38px] uppercase leading-[0.95] text-[#07264A] md:text-[50px] lg:text-[60px]">
                        Complete <span className="text-brand-orange">Comfort</span> Solutions
                    </h2>
                    <p className="mt-5 max-w-xl font-body text-base leading-relaxed text-gray-600">
                        Professional heating, cooling, plumbing, and drain services designed to keep
                        your home safe, efficient, and comfortable year-round.
                    </p>
                </div>

                {/* Service cards */}
                <div className="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <ServiceCard
                        index={0}
                        icon={LuSnowflake}
                        title="HVAC Services"
                        body="Installation, repair, and maintenance for heating and cooling systems. Stay comfortable in every season with our licensed technicians."
                        href="/heating"
                    />
                    <ServiceCard
                        index={1}
                        icon={LuDroplet}
                        title="Plumbing Services"
                        body="Expert plumbing solutions for repairs, installations, drain cleaning, and emergencies. Fast response when you need it most."
                        href="/plumbing"
                    />
                    <ServiceCard
                        index={2}
                        icon={LuBuilding2}
                        title="HVAC Commercial"
                        body="Commercial heating, cooling, and plumbing for offices, retail, and multi-unit properties. Keep your business running comfortably year-round."
                        href="/commercial-hvac"
                    />
                </div>

                {/* Bottom CTA — same pill style as the header buttons */}
                <div className="mt-14 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <PillButton href="/services" variant="yellow" size="md" className="w-full sm:w-auto">
                        View All Services
                        <LuArrowRight className="h-4 w-4" />
                    </PillButton>
                    <PhonePillButton
                        phone="(732) 239-0932"
                        label="Call (732) 239-0932"
                        size="md"
                        className="w-full sm:w-auto"
                    />
                </div>
            </div>
        </section>
    );
}
