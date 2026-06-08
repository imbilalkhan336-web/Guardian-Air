import { useState } from 'react';
import { router } from '@inertiajs/react';
import Seo from '@/Components/Seo';
import SiteLayout from '@/Layouts/SiteLayout';
import PageHeader from '@/Components/FrontComponents/PageHeader';
import ServiceAreas from '@/Components/pages-sections/Home/ServiceAreas';
import {
    LuPhone,
    LuMail,
    LuMapPin,
    LuClock,
    LuSend,
    LuCheck,
    LuArrowRight,
    LuLoader,
} from 'react-icons/lu';

const PHONE = '(732) 239-0932';

function InfoCard({ icon: Icon, title, lines, delay = 0 }) {
    return (
        <div
            className="group flex items-start gap-4 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm transition-all duration-500 hover:-translate-y-1 hover:border-brand-orange/40 hover:shadow-lg"
            style={{ animationDelay: `${delay}ms` }}
        >
            <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-brand-orange to-brand-orange-dark text-white shadow-lg shadow-brand-orange/30 transition-transform duration-500 group-hover:scale-110">
                <Icon className="h-6 w-6" />
            </div>
            <div>
                <p className="text-xs font-extrabold uppercase tracking-widest text-brand-orange">
                    {title}
                </p>
                <div className="mt-1 space-y-0.5">
                    {lines.map((line, i) => (
                        <p key={i} className="font-body text-sm font-semibold text-[#07264A]">
                            {line}
                        </p>
                    ))}
                </div>
            </div>
        </div>
    );
}

export default function ContactPage({ reviews = [], seo = {} }) {
    const [form, setForm] = useState({
        name: '',
        email: '',
        phone: '',
        service: '',
        message: '',
    });
    const [submitted, setSubmitted] = useState(false);
    const [processing, setProcessing] = useState(false);
    const [error, setError] = useState('');

    const handleChange = (e) => {
        const { name, value } = e.target;
        setForm((prev) => ({ ...prev, [name]: value }));
        if (error) setError('');
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        setProcessing(true);
        setError('');

        router.post(
            route('submissions.store'),
            {
                form_type: 'contact',
                name: form.name,
                email: form.email,
                phone: form.phone,
                service: form.service,
                message: form.message,
            },
            {
                preserveScroll: true,
                onSuccess: () => {
                    setSubmitted(true);
                    setProcessing(false);
                    setForm({ name: '', email: '', phone: '', service: '', message: '' });
                    setTimeout(() => setSubmitted(false), 5000);
                },
                onError: (errors) => {
                    setProcessing(false);
                    setError(errors.message || Object.values(errors)[0] || 'Something went wrong. Please try again.');
                },
            }
        );
    };

    return (
        <SiteLayout reviews={reviews}>
            <Seo
                seo={seo}
                fallbackTitle="Contact Us — Guardian Air HVAC & Plumbing | NJ"
                fallbackDescription="Contact Guardian Air for HVAC, plumbing, and electrical service across Monmouth, Middlesex, and Ocean counties. Call (732) 239-0932 or request a free estimate online."
            />

            <article>
                <PageHeader
                    label="Reach Out"
                    title="Contact Us"
                    description="Need a repair, install, or just have a question? Call us directly or fill out the form below — we reply fast and never charge for estimates."
                />

                {/* Contact Form + Info */}
                <section className="relative overflow-hidden bg-gradient-to-b from-white via-gray-50 to-white py-20 lg:py-28">
                    {/* Decorative blur orbs */}
                    <div
                        aria-hidden="true"
                        className="pointer-events-none absolute -left-24 top-10 h-72 w-72 rounded-full bg-brand-orange/5 blur-3xl"
                    />
                    <div
                        aria-hidden="true"
                        className="pointer-events-none absolute -right-24 bottom-10 h-72 w-72 rounded-full bg-brand-blue/5 blur-3xl"
                    />

                    <div className="relative mx-auto max-w-7xl px-4">
                        {/* Section eyebrow */}
                        <div className="mb-14 text-center lg:mb-16">
                            <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">
                                Get in Touch
                            </p>
                            <span
                                aria-hidden="true"
                                className="mx-auto mt-3 block h-0.5 w-10 rounded-full bg-brand-orange"
                            />
                            <h2 className="mx-auto mt-4 max-w-2xl font-display text-[34px] uppercase leading-[0.95] text-[#07264A] md:text-[46px] lg:text-[54px]">
                                We Are Here to <span className="text-brand-orange">Help</span>
                            </h2>
                        </div>

                        <div className="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-14">
                            {/* Form */}
                            <div className="lg:col-span-7">
                                <div className="rounded-2xl border border-gray-200 bg-white p-6 shadow-xl shadow-gray-200/50 sm:p-8 lg:p-10">
                                    <p className="text-[12px] font-extrabold uppercase tracking-[0.25em] text-brand-orange">
                                        Send a Message
                                    </p>
                                    <span
                                        aria-hidden="true"
                                        className="mt-3 block h-0.5 w-10 rounded-full bg-brand-orange"
                                    />
                                    <h3 className="mt-4 font-display text-[28px] uppercase leading-[0.95] text-[#07264A] md:text-[36px]">
                                        Get a <span className="text-brand-orange">Free Estimate</span>
                                    </h3>
                                    <p className="mt-3 font-body text-[15px] leading-relaxed text-gray-600 md:text-base">
                                        Tell us what you need and we will get back to you within one business day. For emergencies, call us directly — we answer 24/7.
                                    </p>

                                    {/* Service tag pills */}
                                    <div className="mt-5 flex flex-wrap gap-2">
                                        {['HVAC Repair', 'Plumbing', 'Electrical', 'Drains'].map((tag) => (
                                            <span
                                                key={tag}
                                                className="rounded-full bg-gray-100 px-3 py-1 text-[11px] font-bold uppercase tracking-wide text-gray-600"
                                            >
                                                {tag}
                                            </span>
                                        ))}
                                    </div>

                                    {submitted ? (
                                        <div className="mt-8 flex items-center gap-3 rounded-2xl border border-green-200 bg-green-50 p-6">
                                            <div className="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 text-green-600">
                                                <LuCheck className="h-6 w-6" />
                                            </div>
                                            <div>
                                                <p className="font-body text-sm font-bold text-green-800">
                                                    Message sent successfully!
                                                </p>
                                                <p className="font-body text-xs text-green-700">
                                                    We will be in touch shortly.
                                                </p>
                                            </div>
                                        </div>
                                    ) : (
                                        <form onSubmit={handleSubmit} className="mt-8 space-y-5">
                                            {error && (
                                                <div className="rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-xs font-semibold text-red-600">
                                                    {error}
                                                </div>
                                            )}
                                            <div className="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                                <div>
                                                    <label htmlFor="name" className="block text-xs font-extrabold uppercase tracking-widest text-gray-500">
                                                        Full Name
                                                    </label>
                                                    <input
                                                        id="name"
                                                        name="name"
                                                        type="text"
                                                        required
                                                        value={form.name}
                                                        onChange={handleChange}
                                                        className="mt-2 block w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20"
                                                        placeholder="John Smith"
                                                    />
                                                </div>
                                                <div>
                                                    <label htmlFor="email" className="block text-xs font-extrabold uppercase tracking-widest text-gray-500">
                                                        Email Address
                                                    </label>
                                                    <input
                                                        id="email"
                                                        name="email"
                                                        type="email"
                                                        required
                                                        value={form.email}
                                                        onChange={handleChange}
                                                        className="mt-2 block w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20"
                                                        placeholder="john@example.com"
                                                    />
                                                </div>
                                            </div>

                                            <div className="grid grid-cols-1 gap-5 sm:grid-cols-2">
                                                <div>
                                                    <label htmlFor="phone" className="block text-xs font-extrabold uppercase tracking-widest text-gray-500">
                                                        Phone Number
                                                    </label>
                                                    <input
                                                        id="phone"
                                                        name="phone"
                                                        type="tel"
                                                        required
                                                        value={form.phone}
                                                        onChange={handleChange}
                                                        className="mt-2 block w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20"
                                                        placeholder="(732) 555-1234"
                                                    />
                                                </div>
                                                <div>
                                                    <label htmlFor="service" className="block text-xs font-extrabold uppercase tracking-widest text-gray-500">
                                                        Service Needed
                                                    </label>
                                                    <select
                                                        id="service"
                                                        name="service"
                                                        required
                                                        value={form.service}
                                                        onChange={handleChange}
                                                        className="mt-2 block w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20"
                                                    >
                                                        <option value="">Select a service</option>
                                                        <option value="heating">Heating</option>
                                                        <option value="cooling">Cooling</option>
                                                        <option value="plumbing">Plumbing</option>
                                                        <option value="air-quality">Indoor Air Quality</option>
                                                        <option value="drains">Drains</option>
                                                        <option value="commercial">Commercial</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div>
                                                <label htmlFor="message" className="block text-xs font-extrabold uppercase tracking-widest text-gray-500">
                                                    Message
                                                </label>
                                                <textarea
                                                    id="message"
                                                    name="message"
                                                    rows={5}
                                                    required
                                                    value={form.message}
                                                    onChange={handleChange}
                                                    className="mt-2 block w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 font-body text-sm text-[#07264A] shadow-sm outline-none transition-all focus:border-brand-orange focus:bg-white focus:ring-2 focus:ring-brand-orange/20"
                                                    placeholder="Describe your issue or request..."
                                                />
                                            </div>

                                            <button
                                                type="submit"
                                                disabled={processing}
                                                className="inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-brand-orange to-brand-orange-dark px-8 py-4 text-sm font-extrabold uppercase tracking-widest text-white shadow-lg shadow-brand-orange/30 transition-all hover:-translate-y-0.5 hover:shadow-xl active:translate-y-0 disabled:opacity-60 sm:w-auto"
                                            >
                                                {processing ? (
                                                    <span className="inline-flex items-center gap-2">
                                                        <LuLoader className="h-4 w-4 animate-spin" />
                                                        Sending…
                                                    </span>
                                                ) : (
                                                    <>
                                                        <LuSend className="h-4 w-4" />
                                                        Send Message
                                                    </>
                                                )}
                                            </button>
                                        </form>
                                    )}
                                </div>
                            </div>

                            {/* Info Cards */}
                            <div className="lg:col-span-5">
                                <div className="space-y-4">
                                    <InfoCard
                                        icon={LuPhone}
                                        title="Phone"
                                        lines={[PHONE, '24/7 Emergency Line']}
                                        delay={0}
                                    />
                                    <InfoCard
                                        icon={LuMail}
                                        title="Email"
                                        lines={['info@guardianairnj.com']}
                                        delay={100}
                                    />
                                    <InfoCard
                                        icon={LuMapPin}
                                        title="Service Area"
                                        lines={[
                                            'Monmouth, Middlesex & Ocean Counties',
                                            'Central New Jersey',
                                        ]}
                                        delay={200}
                                    />
                                    <InfoCard
                                        icon={LuClock}
                                        title="Business Hours"
                                        lines={[
                                            'Mon – Fri: 8:00 AM – 6:00 PM',
                                            'Sat: 8:00 AM – 4:00 PM',
                                            'Emergency: 24/7',
                                        ]}
                                        delay={300}
                                    />
                                </div>

                                {/* Call-now card */}
                                <a
                                    href="tel:+17322390932"
                                    onClick={() => {
                                        if (navigator.clipboard && navigator.clipboard.writeText) {
                                            navigator.clipboard.writeText(PHONE).catch(() => {});
                                        }
                                    }}
                                    className="mt-6 block rounded-2xl bg-gradient-to-br from-brand-orange to-brand-orange-dark p-6 text-white shadow-lg shadow-brand-orange/30 transition-all hover:-translate-y-1 hover:shadow-xl"
                                >
                                    <div className="flex items-center gap-4">
                                        <div className="flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-full bg-white/20 text-white">
                                            <LuPhone className="h-7 w-7" />
                                        </div>
                                        <div className="flex-1">
                                            <p className="text-xs font-extrabold uppercase tracking-widest text-white/80">
                                                Call Now — 24/7
                                            </p>
                                            <p className="mt-1 font-display text-2xl uppercase tracking-wide">
                                                {PHONE}
                                            </p>
                                        </div>
                                        <LuArrowRight className="h-5 w-5 text-white/70" />
                                    </div>
                                </a>

                                {/* Trust note */}
                                <div className="mt-4 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm">
                                    <div className="flex items-center gap-3">
                                        <div className="flex h-10 w-10 items-center justify-center rounded-full bg-brand-orange/10 text-brand-orange">
                                            <LuCheck className="h-5 w-5" />
                                        </div>
                                        <div>
                                            <p className="text-sm font-extrabold text-[#07264A]">
                                                Free Estimates
                                            </p>
                                            <p className="text-xs text-gray-500">
                                                No obligation. No hidden fees.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <ServiceAreas />
            </article>
        </SiteLayout>
    );
}
