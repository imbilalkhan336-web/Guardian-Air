import { LuZap, LuShieldCheck, LuDollarSign, LuUsers } from 'react-icons/lu';

const features = [
    {
        icon: LuZap,
        title: 'Fast Emergency Response',
        body: 'We arrive quickly and solve problems efficiently to restore comfort to your home without delays.',
    },
    {
        icon: LuShieldCheck,
        title: 'Licensed & Certified Experts',
        body: 'Our trained technicians handle every job with precision, professionalism, and attention to detail.',
    },
    {
        icon: LuDollarSign,
        title: 'Honest Upfront Pricing',
        body: 'No hidden fees or surprise charges — just transparent pricing before any work begins.',
    },
    {
        icon: LuUsers,
        title: 'Trusted By Local Families',
        body: 'Hundreds of homeowners rely on Guardian Air for dependable heating, cooling, and plumbing services.',
    },
];

export default function WhyChooseUs() {
    return (
        <section className="bg-white py-8 lg:py-12">
            <div className="mx-auto max-w-7xl px-4">
                <div className="overflow-hidden rounded-2xl shadow-xl">
                    <div
                        className="relative bg-[#07264A] bg-cover bg-center p-8 sm:p-10 lg:p-14"
                        style={{ backgroundImage: "url('/img/whychoose.webp')" }}
                    >
                        <div className="absolute inset-0 bg-[#07264A]/70 lg:hidden" aria-hidden="true" />
                        <div className="relative z-10 ml-auto lg:w-1/2">
                            <p className="text-[12px] font-extrabold uppercase text-brand-orange lg:text-[12px]">
                                Why Choose Guardian Air
                            </p>
                            <h2 className="mt-3 font-display text-[32px] uppercase leading-[0.95] text-white md:text-[38px] lg:text-[48px]">
                                Home Comfort Backed
                                <br />
                                By Real Expertise.
                            </h2>
                            <p className="mt-5 font-body text-[12px] leading-relaxed text-white/80">
                                From emergency repairs to complete system installations, Guardian
                                Air and our plumbing solutions designed to keep your home
                                comfortable year-round. Our licensed technicians combine fast
                                response times with honest recommendations and quality
                                workmanship you can trust.
                            </p>

                            <ul className="mt-6 grid grid-cols-1 gap-3 sm:mt-8 sm:gap-5 sm:grid-cols-2">
                                {features.map(({ icon: Icon, title, body }) => (
                                    <li
                                        key={title}
                                        className="flex items-start gap-3 rounded-xl bg-brand-blue p-3 ring-1 ring-white/10 sm:p-4"
                                    >
                                        <span className="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full border-2 border-brand-blue-dark text-brand-orange sm:h-14 sm:w-14">
                                            <Icon className="h-5 w-5 sm:h-7 sm:w-7" />
                                        </span>
                                        <div className="leading-tight">
                                            <div className="font-body text-xs font-bold text-white sm:text-sm">
                                                {title}
                                            </div>
                                            <p className="mt-1 font-body text-[11px] leading-snug text-white/70 sm:text-xs">
                                                {body}
                                            </p>
                                        </div>
                                    </li>
                                ))}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
