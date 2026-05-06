export default function Hero() {
    return (
        <section className="relative h-screen bg-white">
            {/* Background layers wrapper — clips bg image to the top 70% only */}
            <div className="absolute inset-x-0 top-0 h-[70%] overflow-hidden">
                {/* Home background image - confined to this section only */}
                <div
                    className="absolute inset-0 bg-cover bg-center"
                    style={{ backgroundImage: "url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1920&q=80')" }}
                    aria-hidden="true"
                />

                {/* Blue gradient overlay — slight transparency to show home through */}
                <div className="absolute inset-0 bg-gradient-to-r from-[#003B73] via-[#004C93] to-[#0060B9] opacity-85" />

                {/* Bottom wave divider — inside clipped wrapper */}
                <div className="absolute bottom-0 left-0 w-full leading-none">
                    <svg className="relative block w-full h-12 md:h-16" viewBox="0 0 1440 60" preserveAspectRatio="none">
                        <path d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,50 1440,40 L1440,60 L0,60 Z" fill="white" />
                    </svg>
                </div>
            </div>

            <div className="relative mx-auto max-w-7xl px-4 h-full">
                {/* Centered headline - sits behind the van, vertically centered in the 70% overlay */}
                <div className="absolute left-1/2 top-[35%] -translate-x-1/2 -translate-y-1/2 w-full z-0 text-center">
                    <p className="text-[1.2rem] md:text-[1.5rem] lg:text-[1.8rem] font-bold uppercase tracking-wider text-brand-orange">
                        Proudly Serving New Jersey
                    </p>
                    <h1 className="mt-2 font-extrabold uppercase leading-none text-white text-[4rem] sm:text-[6rem] md:text-[8rem] lg:text-[10.5rem] xl:text-[12.5rem]">
                        Since 1977
                    </h1>
                </div>

                {/* Van Image - centered horizontally, sitting toward the bottom across the overlay edge */}
                <div className="absolute left-1/2 bottom-[-7%] -translate-x-1/2 w-[90%] max-w-[680px] md:max-w-[760px] lg:max-w-[820px] z-30 pointer-events-none">
                    <img
                        src="/images/side-view.png"
                        alt="Service van"
                        className="w-full h-auto"
                    />
                </div>
            </div>
        </section>
    );
}
