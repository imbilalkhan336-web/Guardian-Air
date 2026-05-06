import Button from './Button';

export default function DealCard({ title, description }) {
    return (
        <div className="rounded-2xl border-2 border-brand-orange bg-white px-8 py-10 text-center shadow-lg">
            <h3 className="text-4xl font-extrabold uppercase text-brand-blue">{title}</h3>
            <p className="mt-2 text-lg text-gray-600">{description}</p>
            <div className="mt-6">
                <Button variant="orange" size="sm">
                    Schedule Online
                </Button>
            </div>
        </div>
    );
}
