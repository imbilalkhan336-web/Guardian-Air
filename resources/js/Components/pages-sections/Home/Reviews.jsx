import { useRef, useState, useEffect } from 'react';

const reviews = [
    { name: 'Jessica Nunno', initial: 'J', avatarBg: 'bg-emerald-600', timeAgo: '1 day ago', body: 'They did a great job installing our new HVAC. They worked quickly and everything went smoothly from quote to cleanup. Truly a five-star experience!' },
    { name: 'Barbara Caroleo', initial: 'B', avatarBg: 'bg-emerald-500', timeAgo: '1 day ago', body: 'Very professional and reliable. The crew arrived right on time, walked me through the work, and left the place spotless.' },
    { name: 'Richard Singer', initial: 'R', avatarBg: 'bg-rose-600', timeAgo: '1 day ago', body: 'Matt was friendly but professional. Replaced the capacitor for $307 when the AC stopped cooling — back up and running in under an hour.' },
    { name: 'Vic Alvarado', initial: 'V', avatarBg: 'bg-slate-700', timeAgo: '2 days ago', body: 'Tech Dawan Carter went beyond what was expected and was very knowledgeable. He took time to explain the issue and fixed it the first visit.' },
    { name: 'Baba Estates LLC', initial: 'B', avatarBg: 'bg-teal-600', timeAgo: '2 days ago', body: 'Excellent service from start to finish — quoted fairly, scheduled fast, and delivered exactly what we needed for our property.' },
    { name: 'Tom Reilly', initial: 'T', avatarBg: 'bg-indigo-600', timeAgo: '3 days ago', body: 'On time, courteous, and explained the work clearly before starting. Pricing was upfront and honest. Highly recommended for HVAC service.' },
    { name: 'Maria Lopez', initial: 'M', avatarBg: 'bg-orange-500', timeAgo: '4 days ago', body: 'Replaced our old furnace with no issues at all. Crew was friendly, neat, and the new system is dramatically quieter than the old one.' },
    { name: 'Daniel Park', initial: 'D', avatarBg: 'bg-cyan-600', timeAgo: '5 days ago', body: 'Quick response when our AC went out during a heatwave. Fair pricing and the technician walked me through everything before doing the work.' },
    { name: 'Sarah Whitfield', initial: 'S', avatarBg: 'bg-purple-600', timeAgo: '6 days ago', body: 'Booked online in the evening and they were here next morning. Diagnosed a leak in the line set and had us cooling again same day.' },
    { name: 'Anthony Russo', initial: 'A', avatarBg: 'bg-amber-600', timeAgo: '1 week ago', body: 'Five stars all around. Honest tech, no upsell pressure, and the new thermostat install made our energy bill noticeably lower.' },
    { name: 'Lakeisha Brown', initial: 'L', avatarBg: 'bg-pink-600', timeAgo: '1 week ago', body: 'I called for a clogged drain and they had someone here within two hours. Fixed it in 30 minutes and gave me tips to keep it from happening again.' },
    { name: 'Michael O\'Connor', initial: 'M', avatarBg: 'bg-blue-700', timeAgo: '2 weeks ago', body: 'Used Arctic Air for both heating tune-up and a small electrical project. One company, one invoice, two crews — couldn\'t be easier.' },
];

function VerifiedCheck() {
    return (
        <svg className="h-4 w-4 text-blue-500 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
        </svg>
    );
}

function StarRow() {
    return (
        <div className="flex gap-0.5">
            {[...Array(5)].map((_, i) => (
                <svg key={i} className="h-4 w-4 text-brand-yellow" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
            ))}
        </div>
    );
}

function GoogleMark() {
    return (
        <span className="font-semibold leading-none">
            <span className="text-[#4285F4]">G</span>
            <span className="text-[#EA4335]">o</span>
            <span className="text-[#FBBC05]">o</span>
            <span className="text-[#4285F4]">g</span>
            <span className="text-[#34A853]">l</span>
            <span className="text-[#EA4335]">e</span>
        </span>
    );
}

function ReviewCard({ review }) {
    return (
        <div className="snap-center sm:snap-start shrink-0 w-[280px] sm:w-[300px] rounded-xl bg-white p-5 shadow-lg ring-1 ring-black/5">
            <div className="flex items-start gap-3">
                <div className={`flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-full text-lg font-bold text-white ${review.avatarBg}`}>
                    {review.initial}
                </div>
                <div className="min-w-0 flex-1">
                    <div className="flex items-center gap-1.5">
                        <p className="truncate text-sm font-bold text-[#0A2A4A]">{review.name}</p>
                        <VerifiedCheck />
                    </div>
                    <p className="mt-0.5 flex items-center gap-1 text-xs text-gray-500">
                        <span>{review.timeAgo} on</span>
                        <GoogleMark />
                    </p>
                </div>
            </div>

            <div className="mt-4">
                <StarRow />
                <p className="mt-2 text-sm leading-relaxed text-gray-700">{review.body}</p>
                <a href="#" className="mt-2 inline-block text-sm font-semibold text-[#1A73E8] hover:underline">
                    Read more
                </a>
            </div>
        </div>
    );
}

export default function Reviews() {
    const scrollerRef = useRef(null);
    const dragRef = useRef({ active: false, startX: 0, startScroll: 0, moved: 0 });
    const [activeDot, setActiveDot] = useState(0);
    const [isDragging, setIsDragging] = useState(false);
    const dotCount = 5;

    function scrollByCard(direction) {
        const el = scrollerRef.current;
        if (!el) return;
        const card = el.querySelector('[data-review-card]');
        const step = card ? card.getBoundingClientRect().width + 20 : 320;
        el.scrollBy({ left: direction * step, behavior: 'smooth' });
    }

    useEffect(() => {
        const el = scrollerRef.current;
        if (!el) return;
        function onScroll() {
            const max = el.scrollWidth - el.clientWidth;
            const ratio = max > 0 ? el.scrollLeft / max : 0;
            setActiveDot(Math.round(ratio * (dotCount - 1)));
        }
        el.addEventListener('scroll', onScroll, { passive: true });
        return () => el.removeEventListener('scroll', onScroll);
    }, []);

    function onPointerDown(e) {
        const el = scrollerRef.current;
        if (!el) return;
        dragRef.current = { active: true, startX: e.clientX, startScroll: el.scrollLeft, moved: 0 };
        setIsDragging(true);
        // Track the pointer 1:1 while dragging — disable smooth scroll & snap so it feels fluid.
        el.style.scrollBehavior = 'auto';
        el.style.scrollSnapType = 'none';
        el.setPointerCapture?.(e.pointerId);
    }

    function onPointerMove(e) {
        if (!dragRef.current.active) return;
        const el = scrollerRef.current;
        if (!el) return;
        const dx = e.clientX - dragRef.current.startX;
        dragRef.current.moved = Math.abs(dx);
        el.scrollLeft = dragRef.current.startScroll - dx;
    }

    function onPointerUp(e) {
        if (!dragRef.current.active) return;
        dragRef.current.active = false;
        setIsDragging(false);
        const el = scrollerRef.current;
        if (el) {
            // Restore smooth scroll & snap for button/dot navigation.
            el.style.scrollBehavior = '';
            el.style.scrollSnapType = '';
        }
        el?.releasePointerCapture?.(e.pointerId);
    }

    function onClickCapture(e) {
        if (dragRef.current.moved > 5) {
            e.preventDefault();
            e.stopPropagation();
        }
    }

    function scrollToDot(index) {
        const el = scrollerRef.current;
        if (!el) return;
        const max = el.scrollWidth - el.clientWidth;
        const target = (index / (dotCount - 1)) * max;
        el.scrollTo({ left: target, behavior: 'smooth' });
    }

    return (
        <section className="relative overflow-hidden bg-[#F2F4F6] py-20 lg:py-24">
            <div className="relative mx-auto max-w-7xl px-4">
                <p className="text-center font-poppins text-[10px] font-bold uppercase tracking-[0.2em] text-[#1A73E8]">
                    Hear What Our Customers Are Saying
                </p>
                <h2 className="mt-2 text-center font-poppins text-2xl font-extrabold uppercase italic text-[#0A2A4A] md:text-3xl lg:text-4xl">
                    Over 3,500+ Reviews
                </h2>

                <div className="relative mt-12">
                    <div
                        ref={scrollerRef}
                        onPointerDown={onPointerDown}
                        onPointerMove={onPointerMove}
                        onPointerUp={onPointerUp}
                        onPointerLeave={onPointerUp}
                        onPointerCancel={onPointerUp}
                        onClickCapture={onClickCapture}
                        className={`flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth pb-4 px-[calc(50%-140px)] sm:px-0 select-none touch-pan-y [scrollbar-width:none] [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden ${
                            isDragging ? 'cursor-grabbing' : 'cursor-grab'
                        }`}
                    >
                        {reviews.map((r) => (
                            <div key={r.name} data-review-card>
                                <ReviewCard review={r} />
                            </div>
                        ))}
                    </div>

                    <button
                        type="button"
                        onClick={() => scrollByCard(-1)}
                        aria-label="Previous reviews"
                        className="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-1/2 hidden lg:flex h-10 w-10 items-center justify-center rounded-full bg-gray-500/80 text-white shadow-md hover:bg-gray-600 transition-colors"
                    >
                        <svg className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button
                        type="button"
                        onClick={() => scrollByCard(1)}
                        aria-label="Next reviews"
                        className="absolute top-1/2 right-0 -translate-y-1/2 translate-x-1/2 hidden lg:flex h-10 w-10 items-center justify-center rounded-full bg-gray-500/80 text-white shadow-md hover:bg-gray-600 transition-colors"
                    >
                        <svg className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" strokeWidth={2}>
                            <path strokeLinecap="round" strokeLinejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                {/* Pagination dots */}
                <div className="mt-8 flex justify-center gap-2">
                    {[...Array(dotCount)].map((_, i) => (
                        <button
                            key={i}
                            type="button"
                            aria-label={`Go to review group ${i + 1}`}
                            onClick={() => scrollToDot(i)}
                            className={`h-2.5 w-2.5 rounded-full transition-colors hover:scale-125 ${
                                i === activeDot ? 'bg-[#0A2A4A]' : 'bg-gray-400'
                            }`}
                        />
                    ))}
                </div>
            </div>
        </section>
    );
}
