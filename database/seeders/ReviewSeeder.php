<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $reviews = [
            ['name' => 'Jessica Nunno', 'body' => 'They did a great job installing our new HVAC. They worked quickly and everything went smoothly from quote to cleanup. Truly a five-star experience!', 'rating' => 5, 'avatar_color' => 'bg-emerald-600', 'is_published' => true],
            ['name' => 'Barbara Caroleo', 'body' => 'Very professional and reliable. The crew arrived right on time, walked me through the work, and left the place spotless.', 'rating' => 5, 'avatar_color' => 'bg-emerald-500', 'is_published' => true],
            ['name' => 'Richard Singer', 'body' => 'Matt was friendly but professional. Replaced the capacitor for $307 when the AC stopped cooling — back up and running in under an hour.', 'rating' => 5, 'avatar_color' => 'bg-rose-600', 'is_published' => true],
            ['name' => 'Vic Alvarado', 'body' => 'Tech Dawan Carter went beyond what was expected and was very knowledgeable. He took time to explain the issue and fixed it the first visit.', 'rating' => 5, 'avatar_color' => 'bg-slate-700', 'is_published' => true],
            ['name' => 'Baba Estates LLC', 'body' => 'Excellent service from start to finish — quoted fairly, scheduled fast, and delivered exactly what we needed for our property.', 'rating' => 5, 'avatar_color' => 'bg-teal-600', 'is_published' => true],
            ['name' => 'Tom Reilly', 'body' => 'On time, courteous, and explained the work clearly before starting. Pricing was upfront and honest. Highly recommended for HVAC service.', 'rating' => 5, 'avatar_color' => 'bg-indigo-600', 'is_published' => true],
            ['name' => 'Maria Lopez', 'body' => 'Replaced our old furnace with no issues at all. Crew was friendly, neat, and the new system is dramatically quieter than the old one.', 'rating' => 5, 'avatar_color' => 'bg-orange-500', 'is_published' => true],
            ['name' => 'Daniel Park', 'body' => 'Quick response when our AC went out during a heatwave. Fair pricing and the technician walked me through everything before doing the work.', 'rating' => 5, 'avatar_color' => 'bg-cyan-600', 'is_published' => true],
            ['name' => 'Sarah Whitfield', 'body' => 'Booked online in the evening and they were here next morning. Diagnosed a leak in the line set and had us cooling again same day.', 'rating' => 5, 'avatar_color' => 'bg-purple-600', 'is_published' => true],
            ['name' => 'Anthony Russo', 'body' => 'Five stars all around. Honest tech, no upsell pressure, and the new thermostat install made our energy bill noticeably lower.', 'rating' => 5, 'avatar_color' => 'bg-amber-600', 'is_published' => true],
            ['name' => 'Lakeisha Brown', 'body' => 'I called for a clogged drain and they had someone here within two hours. Fixed it in 30 minutes and gave me tips to keep it from happening again.', 'rating' => 5, 'avatar_color' => 'bg-pink-600', 'is_published' => true],
            ['name' => 'Michael O\'Connor', 'body' => 'Used Arctic Air for both heating tune-up and a small electrical project. One company, one invoice, two crews — couldn\'t be easier.', 'rating' => 5, 'avatar_color' => 'bg-blue-700', 'is_published' => true],
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}
