import { Head, Link } from '@inertiajs/react';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';
import Reviews from '@/Components/pages-sections/Home/Reviews';
import { LuMapPin, LuArrowRight, LuCheck } from 'react-icons/lu';

const services = [
    { label: 'Heating', href: '/heating' },
    { label: 'Cooling', href: '/cooling' },
    { label: 'Plumbing', href: '/plumbing' },
    { label: 'Indoor Air Quality', href: '/indoor-air-quality' },
    { label: 'Drains', href: '/drains' },
    { label: 'Commercial', href: '/commercial' },
];

export default function ServiceArea({ area, reviews = [] }) {
    return (
        <SiteLayout showReviews={false}>
            <Head>
                <title>{`${area.title} | Guardian Air`}</title>
                <meta name="description" content={area.description} />
                <meta name="robots" content="index, follow" />
                <link rel="canonical" href={`/service-areas/${area.slug}`} />
            </Head>

            <article>
                <PageHeader
                    label="Service Area"
                    title={area.title}
                    image="/img/hero.webp"
                    imageCover
                    description={area.description}
                    titleClassName="font-normal"
                />

                <div className="bg-white">
                    <div className="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-4 lg:py-24">
                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="lg:col-span-7">
                                <section>
                                    <SectionHeading sizeClass="text-[30px] font-normal">
                                        Your Local HVAC Team in {area.name}
                                    </SectionHeading>
                                    <div className="mt-6 space-y-4 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        <p>
                                            Guardian Air proudly serves homeowners and businesses throughout {area.name}. Whether
                                            it&apos;s a furnace that won&apos;t start in January or an air conditioner struggling
                                            through a July heatwave, our licensed technicians are nearby and ready to help — often
                                            the same day.
                                        </p>
                                        <p>
                                            From routine maintenance to full system replacements, we deliver honest quotes, clean
                                            workmanship, and friendly service on every visit. No surprises, no pressure — just
                                            reliable comfort for your home.
                                        </p>
                                    </div>
                                </section>

                                {/* Services offered */}
                                <section className="mt-12">
                                    <SectionHeading sizeClass="text-[26px] font-normal">
                                        Services We Offer in {area.name}
                                    </SectionHeading>
                                    <div className="mt-6 grid grid-cols-1 gap-3 sm:grid-cols-2">
                                        {services.map((s) => (
                                            <Link
                                                key={s.label}
                                                href={s.href}
                                                className="group flex items-center justify-between rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm transition-all hover:border-brand-orange/50 hover:shadow-md"
                                            >
                                                <span className="flex items-center gap-2 font-body text-sm font-bold text-[#07264A]">
                                                    <LuCheck className="h-4 w-4 text-brand-orange" />
                                                    {s.label}
                                                </span>
                                                <LuArrowRight className="h-4 w-4 text-gray-300 transition-all group-hover:translate-x-1 group-hover:text-brand-orange" />
                                            </Link>
                                        ))}
                                    </div>
                                </section>

                                {/* Towns served */}
                                <section className="mt-12">
                                    <SectionHeading sizeClass="text-[26px] font-normal">
                                        Towns We Serve
                                    </SectionHeading>
                                    <div className="mt-6 flex flex-wrap gap-2.5">
                                        {area.towns.map((town) => (
                                            <span
                                                key={town}
                                                className="inline-flex items-center gap-1.5 rounded-full border border-gray-200 bg-gray-50 px-3.5 py-1.5 font-body text-sm font-semibold text-[#07264A]"
                                            >
                                                <LuMapPin className="h-3.5 w-3.5 text-brand-orange" />
                                                {town}
                                            </span>
                                        ))}
                                    </div>
                                    <p className="mt-4 font-body text-sm text-gray-500">
                                        Don&apos;t see your town? We likely still serve it — give us a call to confirm.
                                    </p>
                                </section>
                            </div>

                            {/* Sticky Schedule form */}
                            <aside className="lg:col-span-5">
                                <div className="lg:sticky lg:top-24">
                                    <ScheduleForm headingClassName="font-normal" />
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </article>

            <Reviews reviews={reviews} />
            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
