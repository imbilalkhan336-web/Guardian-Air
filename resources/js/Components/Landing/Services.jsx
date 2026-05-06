import ServiceCard from './ServiceCard';

const services = [
    { icon: 'heating', label: 'Heating' },
    { icon: 'cooling', label: 'Cooling' },
    { icon: 'plumbing', label: 'Plumbing' },
    { icon: 'drains', label: 'Drains' },
    { icon: 'electric', label: 'Electric' },
    { icon: 'airQuality', label: 'Air Quality' },
    { icon: 'commercial', label: 'Commercial' },
];

export default function Services() {
    return (
        <section className="relative -mt-6 z-10 pb-16">
            <div className="mx-auto max-w-4xl px-4">
                {/* First row - 4 cards */}
                <div className="grid grid-cols-2 gap-4 sm:grid-cols-4 md:gap-6">
                    {services.slice(0, 4).map((service) => (
                        <ServiceCard key={service.label} icon={service.icon} label={service.label} />
                    ))}
                </div>

                {/* Second row - 3 cards centered */}
                <div className="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-3 sm:max-w-[75%] sm:mx-auto md:gap-6">
                    {services.slice(4).map((service) => (
                        <ServiceCard key={service.label} icon={service.icon} label={service.label} />
                    ))}
                </div>
            </div>
        </section>
    );
}
