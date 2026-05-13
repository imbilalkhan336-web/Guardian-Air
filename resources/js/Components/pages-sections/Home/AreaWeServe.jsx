import { LuMapPin } from 'react-icons/lu';

function AreaCard({ icon: Icon, title, body, image }) {
    return (
        <div
            className="group relative isolate overflow-hidden rounded-2xl bg-[#07264A] bg-cover bg-center p-8 text-center ring-1 ring-white/5 transition-transform duration-500 ease-out hover:scale-[1.03]"
            style={image ? { backgroundImage: `url('${image}')` } : undefined}
        >
            <div className="absolute inset-0 bg-[#07264A]/70" aria-hidden="true" />
            <div className="relative z-10">
                <div className="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-brand-orange/15 text-brand-orange ring-1 ring-brand-orange/30 backdrop-blur-sm">
                    <Icon className="h-7 w-7" />
                </div>
                <h3 className="mt-5 font-display text-2xl uppercase text-white">
                    {title}
                </h3>
                <p className="mt-3 font-body text-sm leading-relaxed text-white/80">
                    {body}
                </p>
            </div>
        </div>
    );
}

export default function AreaWeServe() {
    return (
        <section className="relative bg-white pt-12 pb-8">
            <div className="mx-auto max-w-7xl px-4">
                <div>
                    <p className="text-sm font-extrabold uppercase text-brand-orange md:text-base lg:text-[24px]">
                        Areas We Serve
                    </p>
                    <h2 className="mt-3 font-display text-[38px] uppercase leading-[0.95] text-black md:text-[50px] lg:text-[60px]">
                        Proudly serving New Jersey.
                    </h2>
                    <p className="mt-6 max-w-xl font-body text-base leading-relaxed text-black">
                        Guardian Air covers homes and businesses across three New Jersey counties
                        with fast, dependable HVAC, plumbing, and electrical service —
                        same trusted technicians, no matter where you live.
                    </p>
                </div>

                <div className="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-3">
                    <AreaCard
                        icon={LuMapPin}
                        title="Monmouth County"
                        body="Freehold, Red Bank, Middletown, and surrounding communities."
                    />
                    <AreaCard
                        icon={LuMapPin}
                        title="Middlesex County"
                        body="Edison, New Brunswick, Woodbridge, and surrounding neighborhoods."
                    />
                    <AreaCard
                        icon={LuMapPin}
                        title="Ocean County"
                        body="Toms River, Brick, Lakewood, and surrounding shore towns."
                    />
                </div>
            </div>
        </section>
    );
}
