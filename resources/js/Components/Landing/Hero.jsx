export default function Hero() {
    return (
        <section className="relative bg-brand-orange">
            {/* Background layers wrapper — clips bg image to the section */}
            <div className="absolute inset-0 overflow-hidden">
                {/* Background image - confined to this section only */}
                <div
                    className="absolute inset-0 bg-cover bg-center"
                    style={{ backgroundImage: "url('https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?auto=format&fit=crop&w=1920&q=80')" }}
                    aria-hidden="true"
                />

                {/* Orange gradient overlay sitting on top of the bg image */}
                <div className="absolute inset-0 bg-gradient-to-br from-brand-orange via-brand-orange-dark to-brand-orange opacity-90" />

                {/* Background city silhouette overlay */}
                <div className="absolute inset-0 opacity-10">
                    <svg className="h-full w-full" viewBox="0 0 1440 600" fill="none" preserveAspectRatio="xMidYMid slice">
                        <rect x="100" y="200" width="60" height="400" fill="white" />
                        <rect x="170" y="280" width="50" height="320" fill="white" />
                        <rect x="230" y="180" width="70" height="420" fill="white" />
                        <rect x="310" y="250" width="45" height="350" fill="white" />
                        <rect x="370" y="150" width="80" height="450" fill="white" />
                        <rect x="460" y="220" width="55" height="380" fill="white" />
                        <rect x="530" y="300" width="40" height="300" fill="white" />
                        <rect x="580" y="170" width="90" height="430" fill="white" />
                        <rect x="690" y="240" width="50" height="360" fill="white" />
                        <rect x="760" y="190" width="65" height="410" fill="white" />
                        <rect x="840" y="260" width="55" height="340" fill="white" />
                        <rect x="910" y="160" width="75" height="440" fill="white" />
                        <rect x="1000" y="230" width="60" height="370" fill="white" />
                        <rect x="1080" y="280" width="45" height="320" fill="white" />
                        <rect x="1140" y="200" width="80" height="400" fill="white" />
                        <rect x="1240" y="250" width="55" height="350" fill="white" />
                        <rect x="1310" y="180" width="70" height="420" fill="white" />
                    </svg>
                </div>

                {/* Bottom wave divider — inside clipped wrapper */}
                <div className="absolute bottom-0 left-0 w-full leading-none">
                    <svg className="relative block w-full h-12 md:h-16" viewBox="0 0 1440 60" preserveAspectRatio="none">
                        <path d="M0,40 C360,80 720,0 1080,40 C1260,60 1380,50 1440,40 L1440,60 L0,60 Z" fill="white" />
                    </svg>
                </div>
            </div>

            <div className="relative mx-auto max-w-7xl px-4 pt-12 pb-16 md:pt-16 md:pb-20 lg:pt-20 lg:pb-24">
                {/* Centered headline - sits behind the van */}
                <div className="relative z-0 text-center">
                    <p className="text-xl md:text-2xl lg:text-3xl font-bold uppercase tracking-wider text-brand-blue">
                        Proudly Serving New Jersey
                    </p>
                    <h1 className="mt-2 font-extrabold uppercase leading-none text-white text-[5rem] sm:text-[7.2rem] md:text-[10.8rem] lg:text-[14.4rem] xl:text-[16.2rem]">
                        Since 1977
                    </h1>
                </div>

                {/* Van Image - extends well below the section, NOT clipped */}
                <div className="absolute left-1/2 bottom-[5rem] -translate-x-1/2 translate-y-[60%] w-[90%] max-w-[680px] md:max-w-[760px] lg:max-w-[820px] z-30 pointer-events-none">
                    <img
                        src="/images/side-view.png"
                        alt="Service van"
                        className="w-full h-auto drop-shadow-2xl"
                    />
                </div>
            </div>
        </section>
    );
}
