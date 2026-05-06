import { PillButton } from './PillButton';

export default function ServiceAreas() {
    return (
        <section className="relative bg-white py-20 lg:py-24">
            <div className="mx-auto max-w-7xl px-4">
                <div className="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16 items-center">
                    {/* Map */}
                    <div className="relative overflow-hidden rounded-2xl shadow-2xl shadow-black/30 ring-1 ring-black/5">
                        <iframe
                            title="Arctic Air service map — New Jersey"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d781234.567!2d-74.7!3d40.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1700000000000"
                            className="block aspect-[4/3] w-full border-0"
                            loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade"
                            allowFullScreen
                        />
                    </div>

                    {/* Content */}
                    <div>
                        <p className="text-sm font-bold uppercase tracking-[0.2em] text-brand-orange">
                            Service Areas
                        </p>
                        <h2 className="mt-3 text-4xl font-extrabold uppercase italic leading-tight text-[#0A2A4A] md:text-5xl">
                            Proudly Serving<br />New Jersey
                        </h2>
                        <p className="mt-6 text-base leading-relaxed text-gray-600">
                            Arctic Air proudly serves a wide area across New Jersey, bringing our home
                            services expertise to communities far and wide. Whether you're in the heart
                            of the city or the surrounding suburbs, we've got it all covered. We serve
                            Ocean, Monmouth, Middlesex, Somerset, Union, Hunterdon, Morris and many
                            more counties.
                        </p>

                        <div className="mt-8">
                            <PillButton variant="yellow" size="sm" className="w-[250px] shadow-xl shadow-black/40">
                                Our Service Areas
                            </PillButton>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
