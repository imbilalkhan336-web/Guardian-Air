<?php

namespace App\Support;

/**
 * Central taxonomy for the marketing site's URL structure.
 *
 * Defines the trade service pages and their sub-service pages, the
 * service-area counties and cities, and the cost guides. Routes, templates,
 * and SEO meta are generated from this single source so the structure stays
 * consistent and easy to extend.
 *
 * URL structure:
 *   /{trade}                         core service page (parent targets the primary keyword)
 *   /{trade}/{service}               sub-service page
 *   /{trade}/{county|city}           trade-in-location page (generated from counties/cities)
 *   /service-areas                   local hub index
 *   /service-areas/{county}          county hub
 *   /service-areas/{city}            flat city hub (county dropped from URL)
 *   /cost-guides , /cost-guides/{slug}
 */
class SiteStructure
{
    public static function trades(): array
    {
        return [
            'heating' => [
                'label' => 'Heating',
                // Used for /{trade}/{location} combo page titles.
                'locationName' => 'Furnace & Heating Repair',
                'services' => [
                    'furnace-replacement' => [
                        'name' => 'Furnace Replacement',
                        'title' => 'Furnace Replacement in NJ | Guardian Air',
                        'description' => 'Furnace replacement and new furnace installation across Monmouth, Middlesex, and Ocean counties. Right-sized, efficient systems with honest quotes.',
                        'intro' => "When repairs no longer make sense, a new furnace restores reliable, efficient heat for years to come. We help you choose a properly sized, high-efficiency system and install it cleanly — with a clear quote and no pressure.",
                        'highlights' => ['Free replacement estimates', 'Properly sized systems', 'High-efficiency options', 'Clean, professional installs'],
                    ],
                    'boiler-repair' => [
                        'name' => 'Boiler Repair',
                        'title' => 'Boiler Repair in NJ | Guardian Air',
                        'description' => 'Expert boiler repair for hot water and steam systems across New Jersey. We fix leaks, no-heat, and pressure problems fast — with upfront pricing.',
                        'intro' => "Boilers deliver steady, comfortable heat — until a leak, low pressure, or a failed component leaves you in the cold. We service hydronic and steam boilers of every age, restoring safe, reliable warmth with clean workmanship and clear quotes.",
                        'highlights' => ['Hot water & steam boilers', 'Leak & pressure diagnostics', 'No-heat emergency service', 'Repair or replace guidance'],
                    ],
                    'heat-pump' => [
                        'name' => 'Heat Pump Service',
                        'title' => 'Heat Pump Installation & Repair in NJ | Guardian Air',
                        'description' => 'Heat pump installation, repair, and maintenance across New Jersey. Energy-efficient year-round comfort from licensed HVAC pros.',
                        'intro' => "Heat pumps heat and cool your home efficiently year-round — when they're properly sized, installed, and maintained. We install, repair, and tune up every type of heat pump so you get dependable comfort and lower energy bills.",
                        'highlights' => ['Install, repair & replace', 'Energy-efficient systems', 'Year-round heating & cooling', 'Honest sizing recommendations'],
                    ],
                    'furnace-tune-up' => [
                        'name' => 'Furnace Tune-Up',
                        'title' => 'Furnace Tune-Up & HVAC Maintenance in NJ | Guardian Air',
                        'description' => 'Annual furnace tune-ups and HVAC maintenance that prevent breakdowns, improve efficiency, and extend the life of your system across NJ.',
                        'intro' => "A short annual tune-up keeps your furnace running safely and efficiently all winter. Our multi-point maintenance catches small problems before they become no-heat emergencies and helps lower your energy bills.",
                        'highlights' => ['Multi-point safety inspection', 'Prevents winter breakdowns', 'Improves energy efficiency', 'Extends equipment lifespan'],
                    ],
                ],
            ],
            'cooling' => [
                'label' => 'Cooling',
                'locationName' => 'AC Repair',
                'services' => [
                    'ac-installation' => [
                        'name' => 'AC Installation',
                        'title' => 'AC Installation & Central Air in NJ | Guardian Air',
                        'description' => 'Air conditioning and central air installation across New Jersey. Right-sized, energy-efficient systems, clean installs, and honest quotes.',
                        'intro' => "A new air conditioner is a big investment — we make sure it's done right. We help you choose a properly sized, energy-efficient central air system and install it cleanly, so you get years of reliable, low-cost cooling.",
                        'highlights' => ['Free replacement estimates', 'Properly sized systems', 'Energy-efficient central air', 'Clean, professional installs'],
                    ],
                    'ductless-mini-split' => [
                        'name' => 'Ductless Mini-Split',
                        'title' => 'Ductless Mini-Split Installation in NJ | Guardian Air',
                        'description' => 'Ductless mini-split and ductless AC installation across New Jersey — efficient cooling and heating for additions, older homes, and single rooms.',
                        'intro' => "Ductless mini-splits deliver efficient, room-by-room comfort without ductwork — perfect for additions, converted spaces, and older homes. We size, install, and service them for quiet, energy-saving performance.",
                        'highlights' => ['No ductwork required', 'Room-by-room control', 'Heating & cooling in one', 'Quiet, efficient operation'],
                    ],
                    'ac-tune-up' => [
                        'name' => 'AC Tune-Up',
                        'title' => 'AC Tune-Up & Air Conditioner Maintenance in NJ | Guardian Air',
                        'description' => 'Spring AC tune-ups that prevent summer breakdowns, lower energy bills, and extend the life of your cooling system across NJ.',
                        'intro' => "An annual tune-up before summer keeps your AC cooling efficiently when you need it most. Our maintenance cleans coils, checks refrigerant, and catches small issues before they leave you sweating through a heatwave.",
                        'highlights' => ['Coil cleaning & inspection', 'Refrigerant level check', 'Prevents summer breakdowns', 'Lowers cooling costs'],
                    ],
                ],
            ],
            'plumbing' => [
                'label' => 'Plumbing',
                'locationName' => 'Plumbing',
                'services' => [
                    'emergency-plumber' => [
                        'name' => 'Emergency Plumber',
                        'title' => '24/7 Emergency Plumber in NJ | Guardian Air',
                        'description' => 'Burst pipes, overflowing toilets, and no-water emergencies handled around the clock across New Jersey. Fast, licensed 24-hour emergency plumbers.',
                        'intro' => "Plumbing emergencies never wait for business hours. Our licensed plumbers respond fast — day or night — to stop the damage from burst pipes, major leaks, and overflowing fixtures and get your home back to normal.",
                        'highlights' => ['24/7 emergency response', 'Burst pipes & major leaks', 'Fast water shutoff & repair', 'Upfront pricing, even after hours'],
                    ],
                    'water-heater' => [
                        'name' => 'Water Heater Service',
                        'title' => 'Water Heater Repair & Replacement in NJ | Guardian Air',
                        'description' => 'Water heater repair, replacement, and installation across New Jersey. Tank and tankless systems serviced fast with upfront pricing.',
                        'intro' => "No hot water? We repair, replace, and install both tank and tankless water heaters. We'll help you decide whether a repair makes sense or a more efficient new unit is the smarter long-term investment.",
                        'highlights' => ['Tank & tankless service', 'Repair or replace guidance', 'Fast, clean installation', 'Reliable hot water restored'],
                    ],
                    'tankless-water-heater' => [
                        'name' => 'Tankless Water Heater',
                        'title' => 'Tankless Water Heater Installation in NJ | Guardian Air',
                        'description' => 'Tankless water heater installation and service across New Jersey — endless hot water, lower bills, and a smaller footprint.',
                        'intro' => "Tankless water heaters deliver endless hot water on demand, take up far less space, and last longer than tank models. We help you choose the right unit for your home and install it for years of efficient performance.",
                        'highlights' => ['Endless hot water on demand', 'Lower energy bills', 'Space-saving design', 'Longer lifespan than tanks'],
                    ],
                    'leak-detection' => [
                        'name' => 'Leak Detection',
                        'title' => 'Leak Detection & Repair in NJ | Guardian Air',
                        'description' => 'Professional leak detection across New Jersey. We pinpoint hidden leaks behind walls and under floors with no guesswork, then fix the source.',
                        'intro' => "A hidden leak can quietly cause thousands in water damage. We use professional leak-detection equipment to find the exact source behind walls and under floors — no demolition guesswork — then fix it fast.",
                        'highlights' => ['Non-invasive detection', 'Finds hidden & slab leaks', 'Stops costly water damage', 'Permanent repairs'],
                    ],
                ],
            ],
            'indoor-air-quality' => [
                'label' => 'Indoor Air Quality',
                'locationName' => 'Air Duct Cleaning & Air Quality',
                'services' => [
                    'duct-cleaning' => [
                        'name' => 'Duct Cleaning',
                        'title' => 'Air Duct Cleaning in NJ | Guardian Air',
                        'description' => 'Professional air duct cleaning across Monmouth, Middlesex, and Ocean counties. Clear built-up dust and allergens so every room breathes cleaner.',
                        'intro' => "Over time, dust, pollen, and debris build up inside your ductwork and recirculate through every room. Our professional duct cleaning clears that buildup so your system runs efficiently and the air your family breathes is noticeably cleaner.",
                        'highlights' => ['Removes dust & allergens', 'Improves airflow & efficiency', 'Reduces household dust', 'Healthier air in every room'],
                    ],
                    'mold-testing' => [
                        'name' => 'Mold Testing',
                        'title' => 'Mold Testing & Air Quality Testing in NJ | Guardian Air',
                        'description' => 'Mold testing and indoor air quality testing across New Jersey. Identify hidden moisture and mold problems and get a clear plan to fix them.',
                        'intro' => "Musty odors and persistent allergy symptoms often point to hidden mold or moisture. We assess your home's air quality, identify problem areas, and recommend the right mix of filtration, ventilation, and humidity control to fix it.",
                        'highlights' => ['Identifies hidden moisture', 'Clear, honest assessment', 'Targeted remediation plan', 'Healthier indoor air'],
                    ],
                    'air-purifier' => [
                        'name' => 'Air Purifier',
                        'title' => 'Whole-Home Air Purifier Installation in NJ | Guardian Air',
                        'description' => 'Whole-home and UV air purifier installation across New Jersey. Capture allergens, dust, smoke, and microscopic particles before they circulate.',
                        'intro' => "A whole-home air purifier captures allergens, dust, smoke, and microscopic particles before they circulate through your living space. We size and install systems — including UV options — that noticeably reduce irritants and improve the air throughout your home.",
                        'highlights' => ['Whole-home & UV options', 'Captures microscopic particles', 'Reduces allergens & odors', 'Works with your HVAC system'],
                    ],
                    'humidifier-dehumidifier' => [
                        'name' => 'Humidifier & Dehumidifier',
                        'title' => 'Whole-Home Humidifier & Dehumidifier in NJ | Guardian Air',
                        'description' => 'Whole-home humidifier and dehumidifier installation across New Jersey for balanced, comfortable humidity year-round.',
                        'intro' => "Air that's too dry causes static and cracked skin; too humid breeds mold and that heavy, clammy feeling. We install whole-home humidifiers and dehumidifiers that keep your home at a healthy, comfortable balance all year.",
                        'highlights' => ['Balanced year-round humidity', 'Protects health & comfort', 'Prevents mold & dry air', 'Whole-home solutions'],
                    ],
                ],
            ],
            'drains' => [
                'label' => 'Drains',
                'locationName' => 'Drain Cleaning',
                'services' => [
                    'sewer-repair' => [
                        'name' => 'Sewer Repair',
                        'title' => 'Sewer Line Repair & Replacement in NJ | Guardian Air',
                        'description' => 'Sewer line repair and replacement across New Jersey. We fix cracked, collapsed, and root-invaded lines that cause repeat backups.',
                        'intro' => "A failing sewer line causes repeat backups, foul odors, and serious health hazards. From spot repairs to full line replacement, we fix cracked, collapsed, and root-invaded sewer lines and restore reliable flow.",
                        'highlights' => ['Cracked & collapsed lines', 'Root intrusion repair', 'Spot repair or replacement', 'Camera-verified results'],
                    ],
                    'hydro-jetting' => [
                        'name' => 'Hydro Jetting',
                        'title' => 'Hydro Jetting Drain Cleaning in NJ | Guardian Air',
                        'description' => 'High-pressure hydro jetting across New Jersey scours pipes clean of grease, scale, and roots for a fully clear line.',
                        'intro' => "Hydro jetting uses high-pressure water to scrub the inside of your pipes clean — blasting away grease, scale, and roots that snaking leaves behind. It's the most thorough fix for stubborn and recurring clogs.",
                        'highlights' => ['Clears grease, scale & roots', 'Best for recurring clogs', 'Scours pipes like new', 'Safe for your plumbing'],
                    ],
                    'camera-inspection' => [
                        'name' => 'Camera Inspection',
                        'title' => 'Sewer Camera Inspection in NJ | Guardian Air',
                        'description' => 'Video camera sewer inspection across New Jersey. See the exact cause and location of a problem before any work begins.',
                        'intro' => "A waterproof camera travels through your line so you can see the exact cause and location of a problem — no guesswork. We use camera inspections to recommend the right fix and verify the line is fully clear afterward.",
                        'highlights' => ['See the real problem', 'Pinpoints exact location', 'No demolition guesswork', 'Verifies a clean line'],
                    ],
                ],
            ],
            'commercial-hvac' => [
                'label' => 'Commercial HVAC',
                'locationName' => 'Commercial HVAC',
                // The core content page lives under this ContentBlock key.
                'contentPage' => 'commercial',
                'services' => [
                    'maintenance-contracts' => [
                        'name' => 'Maintenance Contracts',
                        'title' => 'Commercial HVAC Maintenance Contracts in NJ | Guardian Air',
                        'description' => 'Custom preventative HVAC maintenance contracts for commercial properties across New Jersey — scheduled visits, priority response, and documented service.',
                        'intro' => "A scheduled maintenance program protects your operation and your bottom line. We build custom preventative HVAC maintenance contracts with regular visits, priority response, and detailed service records so problems get caught before they become emergencies.",
                        'highlights' => ['Custom scheduled visits', 'Priority emergency response', 'Documented service history', 'Lower long-term costs'],
                    ],
                    'repair' => [
                        'name' => 'Commercial HVAC Repair',
                        'title' => 'Commercial HVAC Repair in NJ | Guardian Air',
                        'description' => 'Fast commercial HVAC repair for offices, restaurants, retail, and multi-family buildings across New Jersey. 24/7 response, minimal downtime.',
                        'intro' => "When your commercial HVAC fails, every minute of downtime costs money. We repair rooftop units, boilers, and chillers fast — diagnosing the real problem and getting your space comfortable again with minimal disruption to your business.",
                        'highlights' => ['Rooftop units, boilers & chillers', '24/7 emergency response', 'Minimal business disruption', 'Licensed for commercial work'],
                    ],
                ],
            ],
        ];
    }

    /**
     * A standalone "Commercial Plumbing" service page at /commercial-plumbing.
     */
    public static function commercialPlumbing(): array
    {
        return [
            'name' => 'Commercial Plumbing',
            'title' => 'Commercial Plumbing in NJ | Guardian Air',
            'description' => 'Commercial plumbing for water heaters, drain lines, fixtures, and backflow across New Jersey — sized for the demands of a busy property.',
            'intro' => "Commercial plumbing demands more than a residential fix. From water heaters and drain lines to fixtures and backflow testing, we keep your facility running with code-compliant work sized for the higher demands of a busy property.",
            'highlights' => ['Water heaters & drain lines', 'Backflow testing & repair', 'Code-compliant work', 'Built for high-demand use'],
        ];
    }

    public static function counties(): array
    {
        return [
            'monmouth-county' => [
                'slug' => 'monmouth-county',
                'name' => 'Monmouth County',
                'title' => 'HVAC, Plumbing & Drain Services in Monmouth County, NJ',
                'description' => 'HVAC Monmouth County NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service across Freehold, Red Bank, Middletown, and the Jersey Shore. Call today!',
                'intro' => [
                    "Guardian Air is your trusted choice for HVAC in Monmouth County, NJ. From the Jersey Shore in Long Branch to the boroughs around Red Bank and inland Freehold, Howell, and Middletown, our licensed technicians deliver fast, reliable heating, cooling, plumbing, and drain service — often the same day.",
                    "Monmouth County homes range from historic shore cottages near Sandy Hook to newer developments off the Garden State Parkway, and we know the systems each one runs. Whether you're near Monmouth Park, the Freehold Raceway Mall, or the PNC Bank Arts Center in Holmdel, honest, flat-rate service is just a call away.",
                ],
                'cities' => [
                    'freehold' => 'Freehold',
                    'red-bank' => 'Red Bank',
                    'middletown' => 'Middletown',
                    'aberdeen' => 'Aberdeen',
                    'long-branch' => 'Long Branch',
                    'howell' => 'Howell',
                ],
            ],
            'middlesex-county' => [
                'slug' => 'middlesex-county',
                'name' => 'Middlesex County',
                'title' => 'HVAC, Plumbing & Drain Services in Middlesex County, NJ',
                'description' => 'HVAC Middlesex County NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service across Edison, Woodbridge, Old Bridge, and New Brunswick. Call today!',
                'intro' => [
                    "Looking for dependable HVAC in Middlesex County, NJ? Guardian Air serves homeowners and businesses across Edison, Woodbridge, Old Bridge, New Brunswick, South Amboy, and Perth Amboy with licensed heating, cooling, plumbing, and drain service.",
                    "From the busy commercial corridors near Menlo Park Mall to the neighborhoods around Rutgers University and along the Raritan River, our local technicians respond fast with honest, flat-rate pricing. Wherever you are in Middlesex County, the same trusted team keeps your home comfortable year-round.",
                ],
                'cities' => [
                    'old-bridge' => 'Old Bridge',
                    'edison' => 'Edison',
                    'woodbridge' => 'Woodbridge',
                    'new-brunswick' => 'New Brunswick',
                    'south-amboy' => 'South Amboy',
                    'perth-amboy' => 'Perth Amboy',
                ],
            ],
            'ocean-county' => [
                'slug' => 'ocean-county',
                'name' => 'Ocean County',
                'title' => 'HVAC, Plumbing & Drain Services in Ocean County, NJ',
                'description' => 'HVAC Ocean County NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service across Toms River, Brick, Lakewood, and Point Pleasant. Call today!',
                'intro' => [
                    "Guardian Air delivers trusted HVAC in Ocean County, NJ to homes and businesses from the Toms River and Brick area down the shore to Point Pleasant, Barnegat, and Lakewood. Our licensed technicians handle heating, cooling, plumbing, and drains with fast, same-day response.",
                    "Ocean County's shore climate is hard on equipment — salt air, humid summers, and seasonal homes near Barnegat Bay all take their toll. From the boardwalk at Point Pleasant Beach to the neighborhoods near Six Flags Great Adventure in Jackson, we keep your systems running with upfront, flat-rate pricing.",
                ],
                'cities' => [
                    'toms-river' => 'Toms River',
                    'brick' => 'Brick',
                    'lakewood' => 'Lakewood',
                    'jackson' => 'Jackson',
                    'barnegat' => 'Barnegat',
                    'point-pleasant' => 'Point Pleasant',
                ],
            ],
        ];
    }

    /**
     * Flat lookup of every location (county + city) keyed by its globally
     * unique slug. Powers /service-areas/{slug} and /{trade}/{slug} combos.
     */
    public static function locationLookup(): array
    {
        $out = [];
        foreach (self::counties() as $countySlug => $county) {
            $out[$countySlug] = [
                'slug' => $countySlug,
                'name' => $county['name'],
                'type' => 'county',
                'county_slug' => $countySlug,
                'county_name' => $county['name'],
            ];
            foreach ($county['cities'] as $slug => $name) {
                $out[$slug] = [
                    'slug' => $slug,
                    'name' => $name,
                    'type' => 'city',
                    'county_slug' => $countySlug,
                    'county_name' => $county['name'],
                ];
            }
        }

        return $out;
    }

    public static function costGuides(): array
    {
        return [
            'furnace-repair-cost' => [
                'name' => 'Furnace Repair Cost',
                'title' => 'How Much Does Furnace Repair Cost in NJ? | Guardian Air',
                'description' => 'A clear breakdown of furnace repair costs in New Jersey — common repairs, price ranges, and what affects the final price.',
                'intro' => "Wondering what a furnace repair will cost? Prices vary with the part, the problem, and your system, but this guide breaks down the typical ranges New Jersey homeowners can expect so there are no surprises.",
                'rows' => [
                    ['Igniter or flame sensor replacement', '$150 – $350'],
                    ['Blower motor repair / replacement', '$300 – $700'],
                    ['Control board replacement', '$400 – $750'],
                    ['Gas valve replacement', '$300 – $600'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
            ],
            'ac-repair-cost' => [
                'name' => 'AC Repair Cost',
                'title' => 'How Much Does AC Repair Cost in NJ? | Guardian Air',
                'description' => 'A clear breakdown of air conditioning repair costs in New Jersey — common repairs, price ranges, and what affects the price.',
                'intro' => "Air conditioning repair costs depend on the failed part and your system type. This guide covers the most common AC repairs and their typical New Jersey price ranges so you can budget with confidence.",
                'rows' => [
                    ['Capacitor replacement', '$150 – $400'],
                    ['Refrigerant recharge', '$200 – $600'],
                    ['Contactor replacement', '$150 – $350'],
                    ['Compressor replacement', '$1,200 – $2,800'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
            ],
            'plumber-cost' => [
                'name' => 'Plumber Cost',
                'title' => 'How Much Does a Plumber Cost in NJ? | Guardian Air',
                'description' => 'A clear breakdown of plumber costs in New Jersey — common jobs, price ranges, and what affects the final price.',
                'intro' => "Plumbing costs range widely by job. This guide outlines typical New Jersey price ranges for the most common plumbing services so you know what to expect before you call.",
                'rows' => [
                    ['Clogged drain clearing', '$150 – $400'],
                    ['Faucet repair / replacement', '$150 – $350'],
                    ['Water heater replacement', '$1,200 – $2,500'],
                    ['Leak detection', '$150 – $450'],
                    ['Service call', '$89 – $150'],
                ],
            ],
            'duct-cleaning-cost' => [
                'name' => 'Air Duct Cleaning Cost',
                'title' => 'How Much Does Air Duct Cleaning Cost in NJ? | Guardian Air',
                'description' => 'A clear breakdown of air duct cleaning costs in New Jersey — typical price ranges and what affects the final price.',
                'intro' => "Air duct cleaning cost depends on the size of your home, the number of vents, and system accessibility. This guide outlines the typical New Jersey ranges so you know what to expect.",
                'rows' => [
                    ['Small home (1–10 vents)', '$300 – $500'],
                    ['Average home (10–20 vents)', '$450 – $750'],
                    ['Large home (20+ vents)', '$700 – $1,000'],
                    ['Dryer vent cleaning (add-on)', '$100 – $200'],
                    ['Inspection / quote', 'Free'],
                ],
            ],
            'drain-cleaning-cost' => [
                'name' => 'Drain Cleaning Cost',
                'title' => 'How Much Does Drain Cleaning Cost in NJ? | Guardian Air',
                'description' => 'A clear breakdown of drain cleaning costs in New Jersey — common services, price ranges, and what affects the final price.',
                'intro' => "Drain cleaning cost depends on the clog's location and severity. This guide covers the typical New Jersey price ranges for everything from a simple sink clog to hydro jetting a main line.",
                'rows' => [
                    ['Sink, tub, or shower drain', '$150 – $350'],
                    ['Main line snaking', '$250 – $500'],
                    ['Hydro jetting', '$400 – $800'],
                    ['Camera inspection', '$150 – $350'],
                    ['Service call', '$89 – $150'],
                ],
            ],
        ];
    }
}
