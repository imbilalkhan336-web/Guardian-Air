<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $table = 'page_seo';

    protected $fillable = [
        'page',
        'title',
        'description',
        'og_title',
        'og_description',
        'og_image',
        'canonical',
        'robots',
    ];

    /**
     * Public pages whose SEO meta is editable in the admin panel.
     *
     * slug => [label, path]. The path is used as the default canonical URL.
     */
    public const PAGES = [
        'home' => ['label' => 'Home', 'path' => '/'],
        'about' => ['label' => 'About', 'path' => '/about'],
        'services' => ['label' => 'Services', 'path' => '/services'],
        'contact' => ['label' => 'Contact', 'path' => '/contact'],
        'heating' => ['label' => 'Heating', 'path' => '/heating'],
        'cooling' => ['label' => 'Cooling', 'path' => '/cooling'],
        'plumbing' => ['label' => 'Plumbing', 'path' => '/plumbing'],
        'indoor-air-quality' => ['label' => 'Indoor Air Quality', 'path' => '/indoor-air-quality'],
        'drains' => ['label' => 'Drains', 'path' => '/drains'],
        'commercial' => ['label' => 'Commercial', 'path' => '/commercial'],
        'resources' => ['label' => 'Resources', 'path' => '/resources'],
        'offers' => ['label' => 'Offers', 'path' => '/offers'],
        'blog' => ['label' => 'Blog', 'path' => '/blog'],
    ];

    /**
     * Sensible default meta for each page, used when no DB override exists.
     */
    public const DEFAULTS = [
        'home' => [
            'title' => 'Guardian Air | HVAC, Plumbing & Electrical',
            'description' => 'Guardian Air delivers expert heating, cooling, plumbing, and electrical service across Monmouth, Middlesex, and Ocean counties, NJ. Honest pricing, 24/7 response.',
        ],
        'about' => [
            'title' => "About Guardian Air — NJ's Trusted HVAC & Plumbing Pros",
            'description' => 'Locally owned Guardian Air delivers honest HVAC, plumbing, and electrical service across Monmouth, Middlesex, and Ocean counties — licensed, insured, no upsells.',
        ],
        'services' => [
            'title' => 'HVAC, Plumbing & Electrical Services in NJ | Guardian Air',
            'description' => 'Heating, cooling, plumbing, drains, indoor air quality, and commercial service across New Jersey — licensed technicians, upfront pricing, and same-day response.',
        ],
        'contact' => [
            'title' => 'Contact Guardian Air | Schedule HVAC & Plumbing Service',
            'description' => 'Get in touch with Guardian Air to schedule heating, cooling, or plumbing service across Monmouth, Middlesex, and Ocean counties, NJ. Fast, friendly, 24/7.',
        ],
        'heating' => [
            'title' => 'Furnace Repair & Heating Services in NJ | Guardian Air',
            'description' => 'Need furnace repair in NJ? Guardian Air offers same-day, licensed & insured heating repair across Monmouth, Middlesex & Ocean counties. Call today!',
        ],
        'cooling' => [
            'title' => 'Air Conditioning & Cooling Services in NJ | Guardian Air',
            'description' => 'AC repair, installation, and maintenance across New Jersey. Central air, heat pumps, and ductless systems serviced fast with upfront, honest pricing.',
        ],
        'plumbing' => [
            'title' => 'Plumbing Services in NJ | Guardian Air',
            'description' => 'Licensed plumbers for leak detection, water heaters, repiping, and emergency repairs across Monmouth, Middlesex, and Ocean counties — flat-rate quotes, no hidden fees.',
        ],
        'indoor-air-quality' => [
            'title' => 'Indoor Air Quality Services in NJ | Guardian Air',
            'description' => 'Whole-home air purifiers, humidifiers, UV germicidal lights, and duct cleaning across New Jersey. Breathe cleaner, healthier air at home year-round.',
        ],
        'drains' => [
            'title' => 'Drain Cleaning & Sewer Services in NJ | Guardian Air',
            'description' => 'Professional drain cleaning, hydro jetting, camera inspections, and sewer repair across New Jersey. We clear the clog completely — same-day emergency service.',
        ],
        'commercial' => [
            'title' => 'Commercial HVAC, Plumbing & Electrical in NJ | Guardian Air',
            'description' => 'Commercial HVAC, plumbing, and electrical service for offices, restaurants, retail, and multi-family buildings across NJ — preventative maintenance and 24/7 response.',
        ],
        'resources' => [
            'title' => 'HVAC & Plumbing Resources | Guardian Air',
            'description' => 'Helpful guides, tips, and resources to keep your home heating, cooling, and plumbing systems running their best — from the Guardian Air team in New Jersey.',
        ],
        'offers' => [
            'title' => 'Special Offers & Coupons | Guardian Air',
            'description' => 'Save on HVAC, plumbing, and electrical service with current Guardian Air specials and coupons across Monmouth, Middlesex, and Ocean counties, NJ.',
        ],
        'blog' => [
            'title' => 'Blog | Guardian Air HVAC & Plumbing Tips',
            'description' => 'Expert HVAC, plumbing, and home comfort tips, news, and how-to guides from the licensed technicians at Guardian Air in New Jersey.',
        ],
    ];

    /**
     * Resolve the SEO meta for a page: DB overrides merged over defaults.
     */
    public static function resolve(string $page): array
    {
        $config = self::PAGES[$page] ?? ['label' => $page, 'path' => '/'.$page];
        $defaults = self::DEFAULTS[$page] ?? ['title' => null, 'description' => null];
        $record = self::where('page', $page)->first();

        $title = $record?->title ?: ($defaults['title'] ?? null);
        $description = $record?->description ?: ($defaults['description'] ?? null);

        return [
            'page' => $page,
            'title' => $title,
            'description' => $description,
            'og_title' => $record?->og_title ?: $title,
            'og_description' => $record?->og_description ?: $description,
            'og_image' => $record?->og_image ?: null,
            'canonical' => $record?->canonical ?: $config['path'],
            'robots' => $record?->robots ?: 'index, follow',
        ];
    }
}
