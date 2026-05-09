import { PillButton } from '../../FrontComponents/PillButton';

export default function ServiceAreas() {
    return (
        <section className="relative bg-white py-20 lg:py-24">
            <div className="mx-auto max-w-7xl px-4">
                <div className="grid grid-cols-1 gap-12 lg:grid-cols-2 lg:gap-16 items-center">
                    {/* Map */}
                    <div className="relative overflow-hidden rounded-2xl shadow-2xl shadow-black/30 ring-1 ring-black/5">
                        <iframe
                            title="Arctic Air service map — New Jersey"
                            src="https://maps.google.com/maps?q=New+Jersey,+USA&t=&z=8&ie=UTF8&iwloc=&output=embed"
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
