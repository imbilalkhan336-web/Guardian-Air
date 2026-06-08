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
                // Used for /{trade}/{location} combo page titles & H1s.
                'locationName' => 'Furnace Repair',
                'services' => [
                    'furnace-replacement' => [
                        'name' => 'Furnace Replacement',
                        'title' => 'Furnace Replacement & Installation in NJ | Guardian Air',
                        'description' => 'Need furnace replacement in NJ? Guardian Air installs right-sized, high-efficiency furnaces across Monmouth, Middlesex & Ocean counties. Licensed & insured — call!',
                        'h1' => 'Furnace Replacement & Installation in New Jersey',
                        'intro' => "When repairs no longer make sense, professional furnace replacement in NJ restores reliable, efficient heat for years to come. Guardian Air helps homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — choose a properly sized, high-efficiency system and install it cleanly, with a clear quote and no pressure.",
                        'highlights' => ['Free replacement estimates', 'Properly sized systems', 'High-efficiency options', 'Flexible financing'],
                        'sections' => [
                            ['heading' => 'When to Replace vs. Repair', 'body' => "If your furnace is over 15 years old, needs frequent repairs, heats unevenly, or is driving up your energy bills, replacement is usually the smarter long-term investment. A single minor repair on a newer system is worth fixing — but once repair costs start adding up on aging equipment, a new high-efficiency furnace pays you back in lower bills and reliability.\n\nWe give you an honest recommendation either way. If a repair makes more sense, we'll tell you."],
                            ['heading' => 'Furnace Sizing & Efficiency', 'body' => "A furnace that's too small struggles on the coldest nights; one that's too large short-cycles and wastes fuel. We perform a proper load calculation based on your home's square footage, insulation, and layout to size the system correctly.\n\nWe install high-efficiency furnaces with AFUE ratings from 90% to 98%, meaning up to 98 cents of every fuel dollar becomes heat for your home — a major upgrade over older 70–80% units."],
                            ['heading' => 'Our Installation Process', 'body' => "Every replacement starts with a free in-home assessment and a written, flat-rate quote. On installation day, our licensed technicians protect your floors, remove the old unit, install and test the new system, and clean up completely — most installs are done in a single day.\n\nWe handle permitting and code compliance so your new furnace is documented, inspected, and backed by warranty."],
                            ['heading' => 'Financing & Rebates', 'body' => "A new furnace is a big purchase, so we offer flexible financing options to fit your budget. We'll also help you take advantage of available manufacturer rebates and NJ energy-efficiency incentives on qualifying high-efficiency equipment, lowering your out-of-pocket cost."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air installs and replaces furnaces throughout central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Our local technicians know the homes and systems common to the area and deliver honest, flat-rate pricing on every job."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does furnace replacement cost in NJ?', 'a' => 'Most furnace replacements in New Jersey range from about $4,000 to $8,000 depending on the size, efficiency, and type of system, plus any ductwork or venting changes. We provide a free, written, flat-rate quote upfront and offer financing.'],
                            ['q' => 'How long does a furnace installation take?', 'a' => 'A standard furnace replacement is usually completed in a single day — typically four to eight hours. Switching fuel types or modifying ductwork can add time, which we explain in your estimate.'],
                            ['q' => 'What furnace efficiency rating should I choose?', 'a' => 'Furnace efficiency is measured by AFUE. Standard units start around 80%, while high-efficiency models reach 90–98%. A higher AFUE costs more upfront but lowers your heating bills — we help you weigh the payback for your home.'],
                            ['q' => 'Are there rebates for a high-efficiency furnace in NJ?', 'a' => 'Often, yes. Manufacturer promotions and New Jersey energy-efficiency programs frequently offer rebates on qualifying high-efficiency furnaces. We help you identify and apply any available incentives.'],
                        ],
                    ],
                    'boiler-repair' => [
                        'name' => 'Boiler Repair',
                        'title' => 'Boiler Repair & Service in NJ | Guardian Air',
                        'description' => 'Need boiler repair in NJ? Guardian Air fixes hot water & steam boilers across Monmouth, Middlesex & Ocean counties — licensed, insured, fast. Call today!',
                        'h1' => 'Boiler Repair & Service in New Jersey',
                        'intro' => "Reliable boiler repair in NJ keeps your home warm when you need it most. Guardian Air services hot water and steam boilers of every age across Monmouth, Middlesex, and Ocean counties — from Red Bank to Lakewood — fixing leaks, low pressure, and no-heat problems fast, with upfront flat-rate pricing.",
                        'highlights' => ['Hot water & steam boilers', 'Leak & pressure diagnostics', 'No-heat emergency service', 'Repair or replace guidance'],
                        'sections' => [
                            ['heading' => 'Boiler Repair in NJ', 'body' => "Boilers deliver steady, comfortable radiant heat — until a leak, low pressure, a failed circulator pump, or a faulty control leaves you in the cold. Our licensed technicians diagnose the real problem and repair it on the spot whenever possible, restoring safe, reliable warmth.\n\nWe service boilers across central New Jersey with honest quotes and clean workmanship, and we offer emergency service when your heat goes out."],
                            ['heading' => 'Boiler Types We Service', 'body' => "We repair and maintain every common residential boiler type: natural gas, oil, and electric; hot water (hydronic) and steam systems; and high-efficiency condensing boilers. Whether your home in Freehold or Toms River runs cast-iron radiators, baseboard, or in-floor radiant heat, we have the parts and expertise to fix it."],
                            ['heading' => 'Boiler Maintenance', 'body' => "Annual boiler maintenance prevents the most common breakdowns and keeps your system running efficiently. We check pressure and water levels, inspect for leaks and corrosion, test safety controls, and clean key components — protecting your investment and your warranty."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides boiler repair and service throughout Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Local technicians mean faster response when your heat fails."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does boiler repair cost in NJ?', 'a' => 'Most boiler repairs in New Jersey range from about $200 to $700 depending on the failed part — a circulator pump, valve, or control board, for example. We provide a flat-rate quote before any work begins.'],
                            ['q' => 'What are common boiler problems?', 'a' => 'The most common issues are low pressure, leaks from valves or fittings, a failed circulator pump, no heat from a faulty control or thermostat, and strange banging (kettling) from scale buildup. We diagnose and fix all of these.'],
                            ['q' => 'Should I repair or replace my boiler?', 'a' => 'Most boiler problems are repairable. A leaking heat exchanger or a unit over 15–20 years old with frequent failures usually points to replacement. We give you an honest recommendation either way.'],
                            ['q' => 'How often should a boiler be serviced?', 'a' => 'At least once a year, ideally in early fall before heating season. Annual maintenance catches small problems early, keeps the boiler efficient, and helps avoid mid-winter breakdowns.'],
                        ],
                    ],
                    'heat-pump' => [
                        'name' => 'Heat Pump Service',
                        'title' => 'Heat Pump Installation & Repair in NJ | Guardian Air',
                        'description' => 'Considering heat pump installation in NJ? Guardian Air installs & repairs energy-efficient heat pumps across Monmouth, Middlesex & Ocean counties. Call today!',
                        'h1' => 'Heat Pump Installation & Repair in New Jersey',
                        'intro' => "Professional heat pump installation in NJ delivers efficient heating and cooling from a single system. Guardian Air installs, repairs, and maintains heat pumps across Monmouth, Middlesex, and Ocean counties — from Toms River to Old Bridge — for dependable year-round comfort and lower energy bills.",
                        'highlights' => ['Install, repair & replace', 'Year-round heating & cooling', 'Energy-efficient systems', 'Rebates & financing'],
                        'sections' => [
                            ['heading' => 'Heat Pump Installation in NJ', 'body' => "A properly sized, professionally installed heat pump is one of the most efficient ways to heat and cool a New Jersey home. We help you choose between air-source and ductless (mini-split) systems, perform a load calculation for correct sizing, and install it cleanly with a clear, flat-rate quote.\n\nWe install heat pumps across central New Jersey, handling permitting and code compliance so the job is documented and warranty-backed."],
                            ['heading' => 'How Heat Pumps Work', 'body' => "Instead of burning fuel, a heat pump moves heat — pulling warmth from outdoor air into your home in winter and reversing in summer to cool. Because it transfers heat rather than generating it, a heat pump can deliver several times more energy than it consumes, which is why it's so efficient."],
                            ['heading' => 'Efficiency & Savings', 'body' => "Modern heat pumps carry high SEER2 (cooling) and HSPF2 (heating) ratings, often cutting energy use compared with older systems and electric resistance heat. Pairing one system for heating and cooling also simplifies maintenance and can qualify for valuable rebates and tax incentives."],
                            ['heading' => 'Cold-Climate Performance, Repair & Service', 'body' => "Today's cold-climate heat pumps perform efficiently well below freezing, making them a strong fit for New Jersey winters. We also repair and tune up existing heat pumps — addressing refrigerant, defrost, and airflow issues — across Monmouth, Middlesex, and Ocean counties, including Freehold, Brick, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does heat pump installation cost in NJ?', 'a' => 'Heat pump installation in New Jersey typically ranges from about $5,000 to $12,000 depending on system type (ducted or ductless), capacity, and the number of zones. We provide a free written quote and offer financing.'],
                            ['q' => 'Are heat pumps energy efficient?', 'a' => 'Very. Because a heat pump moves heat rather than generating it, it can deliver two to four times more energy than it uses, often lowering both heating and cooling costs compared with older systems.'],
                            ['q' => 'Do heat pumps work in cold New Jersey winters?', 'a' => 'Yes. Modern cold-climate heat pumps are designed to heat efficiently well below freezing. For the coldest snaps, we can pair one with backup heat or recommend a dual-fuel setup.'],
                            ['q' => 'Are there rebates for heat pumps in NJ?', 'a' => 'Often, yes. New Jersey energy programs and federal incentives frequently offer rebates and tax credits on qualifying high-efficiency heat pumps. We help you identify and apply any available savings.'],
                        ],
                    ],
                    'furnace-tune-up' => [
                        'name' => 'Furnace Tune-Up',
                        'title' => 'Furnace Tune-Up & HVAC Maintenance in NJ | Guardian Air',
                        'description' => 'Book a furnace tune up in NJ with Guardian Air — HVAC maintenance across Monmouth, Middlesex & Ocean counties to prevent breakdowns. Licensed & insured. Call!',
                        'h1' => 'Furnace Tune-Up & HVAC Maintenance in New Jersey',
                        'intro' => "A professional furnace tune up in NJ keeps your heating system safe, efficient, and reliable all winter. Guardian Air provides multi-point furnace maintenance across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — catching small problems before they become no-heat emergencies.",
                        'highlights' => ['Multi-point safety inspection', 'Prevents winter breakdowns', 'Improves energy efficiency', 'Maintenance plans available'],
                        'sections' => [
                            ['heading' => 'Furnace Tune-Up in NJ', 'body' => "Most no-heat emergencies are preventable with a short annual tune-up. Our licensed technicians inspect, clean, and test your furnace so it runs safely and efficiently through the coldest months — and we recommend scheduling in early fall, before the first cold snap.\n\nWe provide furnace tune-ups across central New Jersey with flat-rate pricing and no upsells."],
                            ['heading' => "What's Included", 'body' => "Our multi-point tune-up covers the components that matter: we inspect and clean the burners and flame sensor, check the heat exchanger for cracks, test the ignition and safety controls, verify gas pressure and airflow, replace or check the filter, and run a carbon monoxide safety check — then give you a clear report on your system's condition."],
                            ['heading' => 'HVAC Maintenance Plans', 'body' => "Our maintenance plans bundle your annual heating and cooling tune-ups with priority scheduling and discounts on repairs. It's the easiest way to protect your equipment, keep warranties valid, and never forget seasonal service — popular with homeowners in Brick, Old Bridge, and Red Bank."],
                            ['heading' => 'Why It Matters & Where We Serve', 'body' => "Regular maintenance prevents breakdowns, lowers energy bills, extends equipment life, and keeps your family safe. Guardian Air serves Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a furnace tune-up cost in NJ?', 'a' => 'A single furnace tune-up in New Jersey typically runs about $100 to $200, and is often discounted or included with a maintenance plan. We quote the price upfront with no hidden fees.'],
                            ['q' => 'How often should I tune up my furnace?', 'a' => 'At least once a year, ideally in early fall before heating season. An annual tune-up keeps the system efficient, catches issues early, and helps avoid mid-winter breakdowns.'],
                            ['q' => "What's included in a furnace tune-up?", 'a' => 'A full tune-up covers inspecting and cleaning the burners and flame sensor, checking the heat exchanger, testing ignition and safety controls, verifying gas pressure and airflow, checking the filter, and a carbon monoxide safety check.'],
                            ['q' => 'Do you offer HVAC maintenance plans?', 'a' => 'Yes. Our maintenance plans include seasonal heating and cooling tune-ups, priority scheduling, and repair discounts — tailored to your equipment and budget.'],
                        ],
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
     * Per-trade copy used to generate the trade-in-location pages
     * (/{trade}/{location}) — common problems we fix in that area.
     */
    public static function tradeLocationInfo(): array
    {
        return [
            'heating' => ['issues' => ['A furnace that won\'t ignite or start', 'No heat or weak, uneven heat', 'Short-cycling or constant running', 'Strange banging or rattling noises', 'A cracked heat exchanger or pilot/ignition faults']],
            'cooling' => ['issues' => ['An AC blowing warm air', 'Frozen evaporator coils', 'Water leaks around the unit', 'A failed capacitor, contactor, or compressor', 'Weak airflow or short-cycling']],
            'plumbing' => ['issues' => ['Burst or leaking pipes', 'No hot water or a failing water heater', 'Clogged or slow drains', 'Running or leaking toilets', 'Low water pressure and hidden leaks']],
            'indoor-air-quality' => ['issues' => ['Excess dust that resettles quickly', 'Allergy and asthma triggers', 'Musty or stale odors', 'Humidity that\'s too high or too low', 'Poor ventilation and airflow']],
            'drains' => ['issues' => ['Slow or fully clogged drains', 'Recurring backups', 'Main sewer line blockages', 'Foul drain odors', 'Tree-root intrusion in the line']],
            'commercial-hvac' => ['issues' => ['Rooftop unit (RTU) failures', 'No heat or cooling during business hours', 'Boiler and chiller problems', 'Poor or uneven airflow', 'After-hours emergency breakdowns']],
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

    /**
     * Unique, hand-written intro copy for priority city hubs so each
     * /service-areas/{city} page has distinct local content (towns,
     * landmarks, why-choose) rather than templated duplication. Cities not
     * listed here fall back to a localized intro generated in the view.
     */
    public static function cityContent(): array
    {
        return [
            'toms-river' => [
                "Guardian Air is a trusted name for HVAC in Toms River, NJ. As the seat of Ocean County, Toms River blends busy Route 37 corridors with quiet bayside neighborhoods near Barnegat Bay — and our licensed technicians serve them all with fast, same-day heating, cooling, plumbing, and drain service.",
                "From homes near downtown and Ocean County Mall to shore properties out toward Seaside Heights, the salt air and humid summers here are hard on equipment. We keep your systems running with honest, flat-rate pricing and clean workmanship on every visit.",
            ],
            'freehold' => [
                "Looking for dependable HVAC in Freehold, NJ? Guardian Air serves both Freehold Borough and Freehold Township with licensed heating, cooling, plumbing, and drain service — often the same day.",
                "From the shops around Freehold Raceway Mall to the historic neighborhoods near Monmouth Battlefield and the Route 9 and Route 33 corridors, our local technicians respond fast with upfront, flat-rate pricing and friendly, professional service.",
            ],
            'brick' => [
                "Guardian Air delivers reliable HVAC in Brick, NJ to homes and businesses across Brick Township. From neighborhoods along the Metedeconk River to bayside homes near Barnegat Bay, our licensed technicians handle heating, cooling, plumbing, and drains with fast, same-day response.",
                "Brick's shore-area climate puts real strain on AC systems and water heaters. Whether you're off Route 70, Route 88, or near the Brick Reservoir, we keep your home comfortable with honest, flat-rate pricing year-round.",
            ],
            'old-bridge' => [
                "Guardian Air is your local choice for HVAC in Old Bridge, NJ. We serve Old Bridge Township and nearby Sayreville and Matawan with licensed heating, cooling, plumbing, and drain service.",
                "From neighborhoods near Cheesequake State Park to homes along Route 9 and the Garden State Parkway, our technicians respond fast with upfront, flat-rate pricing — no overtime fees and no surprises.",
            ],
            'red-bank' => [
                "Guardian Air provides trusted HVAC in Red Bank, NJ to homes and businesses throughout this riverside Monmouth County town. Our licensed technicians deliver fast, same-day heating, cooling, plumbing, and drain service.",
                "From the historic homes near the Navesink River and the shops along Broad Street to the neighborhoods around the Count Basie Center for the Arts, we keep Red Bank comfortable with honest, flat-rate pricing on every visit.",
            ],
            'lakewood' => [
                "Guardian Air is a trusted provider of HVAC in Lakewood, NJ, serving one of Ocean County's largest and fastest-growing communities. Our licensed technicians handle heating, cooling, plumbing, and drains with fast, same-day response.",
                "From neighborhoods near Lake Carasaljo and FirstEnergy Park to homes along Route 9 and Route 70, we deliver honest, flat-rate pricing and clean, professional service — whether it's a no-heat morning or an AC failure in peak summer.",
            ],
        ];
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
