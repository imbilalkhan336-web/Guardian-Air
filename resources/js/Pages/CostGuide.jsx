import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import SectionHeading from '@/Components/FrontComponents/SectionHeading';
import ScheduleForm from '@/Components/FrontComponents/ScheduleForm';
import CtaBanner from '@/Components/pages-sections/Home/CtaBanner';

export default function CostGuide({ guide, reviews = [], seo = {} }) {
    return (
        <SiteLayout reviews={reviews}>
            <Seo seo={seo} fallbackTitle={guide.title} fallbackDescription={guide.description} />

            <article>
                <PageHeader
                    label="Cost Guide"
                    title={guide.name}
                    description={guide.description}
                />

                <div className="bg-white">
                    <div className="mx-auto max-w-7xl px-5 py-16 sm:px-6 lg:px-4 lg:py-24">
                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            <div className="lg:col-span-7">
                                <p className="font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                    {guide.intro}
                                </p>

                                <section className="mt-10">
                                    <SectionHeading sizeClass="text-[26px] font-normal">
                                        Typical Price Ranges
                                    </SectionHeading>
                                    <div className="mt-6 overflow-hidden rounded-2xl border border-gray-200 shadow-sm">
                                        <table className="w-full text-left">
                                            <thead>
                                                <tr className="bg-[#07264A] text-white">
                                                    <th className="px-5 py-3 font-body text-sm font-bold">Service</th>
                                                    <th className="px-5 py-3 text-right font-body text-sm font-bold">Typical Cost</th>
                                                </tr>
                                            </thead>
                                            <tbody className="divide-y divide-gray-100">
                                                {guide.rows.map((row) => (
                                                    <tr key={row[0]} className="bg-white">
                                                        <td className="px-5 py-3.5 font-body text-sm text-[#07264A]">{row[0]}</td>
                                                        <td className="px-5 py-3.5 text-right font-body text-sm font-bold text-[#07264A]">{row[1]}</td>
                                                    </tr>
                                                ))}
                                            </tbody>
                                        </table>
                                    </div>
                                    <p className="mt-4 font-body text-xs text-gray-500">
                                        Ranges are estimates for New Jersey homes and may vary with your specific system and
                                        situation. We always provide a flat-rate quote before any work begins.
                                    </p>
                                </section>
                            </div>

                            <aside className="lg:col-span-5">
                                <div className="lg:sticky lg:top-24">
                                    <ScheduleForm headingClassName="font-normal" />
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </article>

            <CtaBanner titleWeightClass="font-normal" />
        </SiteLayout>
    );
}
