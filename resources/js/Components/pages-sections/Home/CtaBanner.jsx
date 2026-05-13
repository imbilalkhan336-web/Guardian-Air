import { LuShieldCheck, LuClock, LuBadgeDollarSign, LuAward } from 'react-icons/lu';
import { SchedulePillButton, PhonePillButton } from '@/Components/FrontComponents/PillButton';

const PHONE = '(732) 239-0932';

const trustItems = [
    {
        icon: LuShieldCheck,
        title: 'Licensed & Insured',
        body: 'Fully licensed professionals you can trust.',
    },
    {
        icon: LuClock,
        title: 'Same-Day Service',
        body: 'Fast response when you need it most.',
    },
    {
        icon: LuBadgeDollarSign,
        title: 'Upfront Pricing',
        body: 'No surprises. Just honest, transparent pricing.',
    },
    {
        icon: LuAward,
        title: '100% Satisfaction',
        body: 'We stand behind our work and your comfort.',
    },
];

export default function CtaBanner() {
    return (
        <section className="bg-white py-8 lg:py-12">
            <div className="mx-auto max-w-7xl px-4">
                <div className="overflow-hidden rounded-2xl shadow-xl">
                    <div
                        className="relative bg-[#07264A] bg-cover bg-center p-8 sm:p-12 lg:p-16"
                        style={{ backgroundImage: "url('/website/cta.png')" }}
                    >
                        <div className="lg:w-1/2">
                            <p className="text-[12px] font-extrabold uppercase text-brand-orange lg:text-[12px]">
                                Ready When You Are
                            </p>
                            <h2 className="mt-3 font-poppins text-[36px] font-bold uppercase leading-[0.95] text-white md:text-[42px] lg:text-[52px]">
                                Need <span className="text-brand-orange">Service</span>?
                                <br />
                                We're Here to Help.
                            </h2>
                            <p className="mt-5 max-w-md font-montserrat text-sm leading-relaxed text-white/80">
                                Same-day service across Monmouth, Middlesex, and Ocean County.
                                Call now or schedule online — our techs are standing by.
                            </p>

                            <div className="mt-8 flex flex-wrap items-center gap-3">
                                <SchedulePillButton size="sm" className="min-w-[180px] justify-center lg:min-w-[230px] lg:gap-3 lg:px-8 lg:py-3 lg:text-sm" />
                                <PhonePillButton phone={PHONE} label={PHONE} size="sm" className="min-w-[180px] justify-center lg:min-w-[230px] lg:gap-3 lg:px-8 lg:py-3 lg:text-sm" />
                            </div>
                        </div>

                        {/* Trust strip */}
                        <div className="mt-12 grid grid-cols-1 divide-y divide-sky-400/20 overflow-hidden rounded-2xl border border-sky-400/30 bg-brand-blue-dark sm:grid-cols-2 sm:divide-y-0 lg:grid-cols-4">
                            {trustItems.map(({ icon: Icon, title, body }, idx) => (
                                <div
                                    key={title}
                                    className={[
                                        'flex items-start gap-4 p-4',
                                        idx > 0 ? 'sm:border-l sm:border-sky-400/20' : '',
                                        idx === 2 ? 'sm:border-l-0 lg:border-l' : '',
                                    ].join(' ')}
                                >
                                    <Icon className="h-12 w-12 flex-shrink-0 text-sky-400" style={{ strokeWidth: 1.25 }} />
                                    <div className="leading-tight">
                                        <div className="font-poppins text-sm font-bold uppercase tracking-wide text-sky-300">
                                            {title}
                                        </div>
                                        <p className="mt-1 font-montserrat text-xs leading-snug text-white/70">
                                            {body}
                                        </p>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
