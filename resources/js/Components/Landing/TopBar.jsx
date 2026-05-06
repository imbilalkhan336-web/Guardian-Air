export default function TopBar() {
    return (
        <div className="bg-white text-gray-800">
            <div className="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 text-xs">
                <p className="hidden sm:block">
                    <span className="font-semibold text-brand-orange">Estimate your FREE HVAC install estimate!</span>
                    {' '}$0 Financing &amp; low payments available (pending credit approval)
                </p>
                <div className="flex items-center gap-4 ml-auto">
                    <a href="#" className="hover:text-brand-orange transition-colors">Contact Us</a>
                    <span className="text-gray-300">|</span>
                    <a href="#" className="hover:text-brand-orange transition-colors">Offers</a>
                    <span className="text-gray-300">|</span>
                    <a href="#" className="hover:text-brand-orange transition-colors">About</a>
                    <span className="text-gray-300">|</span>
                    <a href="#" className="hover:text-brand-orange transition-colors">Resources</a>
                    <span className="text-gray-300">|</span>
                    <a href="#" className="hover:text-brand-orange transition-colors">Contact</a>
                </div>
            </div>
        </div>
    );
}
