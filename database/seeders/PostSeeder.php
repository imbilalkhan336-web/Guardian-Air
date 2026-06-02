<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Seed a few starter blog posts.
     *
     * Idempotent by slug: existing posts with the same slug are updated
     * rather than duplicated, so re-running is safe.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => '5 Signs Your Furnace Needs Repair',
                'slug' => '5-signs-your-furnace-needs-repair',
                'excerpt' => 'Strange noises, rising bills, uneven heat — here are the warning signs that your furnace needs a technician before winter hits.',
                'image_path' => '/img/heating-hero.webp',
                'body' => "Your furnace works hardest in the dead of a New Jersey winter, and small problems have a way of becoming no-heat emergencies on the coldest night of the year. Catching the warning signs early keeps your family comfortable and your repair bill small.\n\nUnusual Noises — Banging, rattling, or squealing usually points to a loose component, a failing blower motor, or ignition trouble. A healthy furnace runs quietly.\n\nRising Energy Bills — If your heating costs climb without a change in usage, your system is working harder than it should to deliver the same warmth.\n\nUneven Heating — Cold spots from room to room often mean a struggling blower, leaky ductwork, or a thermostat that is no longer accurate.\n\nFrequent Cycling — A furnace that switches on and off too often is a sign of a clogged filter, a faulty thermostat, or an oversized system.\n\nYellow Burner Flame — A healthy flame burns blue. A yellow or flickering flame can indicate a carbon monoxide risk and should be inspected immediately.\n\nIf you notice any of these, schedule an inspection before the problem grows. Our licensed techs offer same-day service with upfront pricing.",
            ],
            [
                'title' => 'Why Annual AC Maintenance Pays for Itself',
                'slug' => 'why-annual-ac-maintenance-pays-for-itself',
                'excerpt' => 'A spring tune-up lowers your energy bills, prevents mid-summer breakdowns, and adds years to your air conditioner.',
                'image_path' => '/img/cooling-hero.webp',
                'body' => "Air conditioning is easy to take for granted — until it quits during the first heat wave. A short annual tune-up is the cheapest insurance you can buy for summer comfort.\n\nLower Energy Bills — A clean, well-charged system cools your home using far less electricity. The savings often cover the cost of the visit.\n\nFewer Breakdowns — Most emergency calls trace back to issues a technician would have caught during routine maintenance: low refrigerant, a dirty coil, or a worn capacitor.\n\nLonger Equipment Life — Like an oil change for your car, regular service keeps the compressor and motors from wearing out early, delaying a costly replacement.\n\nBetter Air Quality — Cleaning the coils and replacing filters means cleaner, healthier air circulating through your home all summer.\n\nBook your tune-up in spring, before the rush, and head into summer with confidence.",
            ],
            [
                'title' => 'How to Improve Indoor Air Quality at Home',
                'slug' => 'how-to-improve-indoor-air-quality-at-home',
                'excerpt' => 'From filters to humidity control, simple steps that make the air inside your home cleaner and healthier year-round.',
                'image_path' => '/img/air-quality-hero.webp',
                'body' => "The air inside your home can be several times more polluted than the air outside. For families with allergies, asthma, or young children, indoor air quality is worth paying attention to.\n\nUpgrade Your Filter — A higher-MERV filter traps more dust, pollen, and pet dander. Just be sure your system is rated for it, and change it on schedule.\n\nControl Humidity — Keeping indoor humidity between 30 and 50 percent discourages mold and dust mites. A whole-home humidifier or dehumidifier makes this effortless.\n\nAdd Air Purification — UV lights and whole-home air cleaners installed in your ductwork neutralize bacteria, viruses, and odors before they circulate.\n\nVentilate — Fresh-air ventilation systems bring in outdoor air while recovering energy, so you stay comfortable without spiking your bills.\n\nWant cleaner air? Ask us about an indoor air quality assessment for your home.",
            ],
        ];

        foreach ($posts as $post) {
            Post::updateOrCreate(['slug' => $post['slug']], $post);
        }
    }
}
