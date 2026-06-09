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
                        'description' => 'Need AC installation in NJ? Guardian Air installs right-sized central air & high-efficiency systems across Monmouth, Middlesex & Ocean counties. Call today!',
                        'h1' => 'AC Installation & Central Air in New Jersey',
                        'intro' => "Professional AC installation in NJ gives you years of reliable, low-cost cooling — when the system is sized and installed correctly. Guardian Air installs central air and high-efficiency systems for homeowners across Monmouth, Middlesex, and Ocean counties, from Toms River to Freehold, with a clear, written quote and no pressure.",
                        'highlights' => ['Free installation estimates', 'Properly sized systems', 'High-efficiency central air', 'Flexible financing'],
                        'sections' => [
                            ['heading' => 'AC Installation in NJ', 'body' => "Whether you're replacing a worn-out unit or adding cooling to a home that never had it, our licensed technicians handle the entire installation — from load calculation to startup and testing. We install central air, heat pumps, and ductless systems from every major brand.\n\nEvery installation begins with a free in-home assessment and a flat-rate quote, so you know exactly what you're paying before any work starts."],
                            ['heading' => 'Central Air Installation', 'body' => "Central air conditioning cools your whole home evenly and quietly through your existing ductwork. We install efficient condensers, coils, and air handlers matched to your home, and we inspect and seal ductwork so you don't lose cooling to leaks.\n\nIf your home doesn't have ducts, we'll walk you through ductless options too."],
                            ['heading' => 'Sizing Your System', 'body' => "Proper sizing is the single biggest factor in comfort and efficiency. An undersized AC runs constantly and struggles on the hottest days; an oversized one short-cycles, wastes energy, and leaves humidity behind. We perform a Manual J load calculation based on your home's square footage, insulation, windows, and layout to size the system right."],
                            ['heading' => 'Financing', 'body' => "A new air conditioner is a major purchase, so we offer flexible financing to fit your budget, and we help you take advantage of manufacturer rebates and New Jersey energy-efficiency incentives on qualifying high-efficiency systems."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air installs central air and AC systems throughout central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Local technicians mean a smooth install and fast follow-up service."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does AC installation cost in NJ?', 'a' => 'Most central air installations in New Jersey range from about $5,000 to $10,000 depending on system size, efficiency, and any ductwork changes. We provide a free, written, flat-rate quote and offer financing.'],
                            ['q' => 'What size air conditioner does my home need?', 'a' => 'Proper sizing depends on your home\'s square footage, insulation, windows, and layout — not a rule of thumb. We run a Manual J load calculation so your system is sized correctly for comfort and efficiency.'],
                            ['q' => 'Should I choose central air or a ductless system?', 'a' => 'Central air is ideal for homes with existing ductwork and whole-home cooling. Ductless mini-splits are perfect for homes without ducts, additions, or room-by-room control. We help you compare based on your home.'],
                            ['q' => 'How long does AC installation take?', 'a' => 'A standard central air installation is usually completed in one to two days. Adding ductwork or switching system types can take longer, which we explain in your estimate.'],
                        ],
                    ],
                    'ductless-mini-split' => [
                        'name' => 'Ductless Mini-Split',
                        'title' => 'Ductless Mini-Split Installation in NJ | Guardian Air',
                        'description' => 'Considering ductless AC installation in NJ? Guardian Air installs efficient ductless mini-splits across Monmouth, Middlesex & Ocean counties. Licensed — call!',
                        'h1' => 'Ductless Mini-Split Systems in New Jersey',
                        'intro' => "Ductless AC installation in NJ delivers efficient, room-by-room comfort without any ductwork. Guardian Air sizes, installs, and services ductless mini-split systems for homeowners across Monmouth, Middlesex, and Ocean counties — from Old Bridge to Toms River — for quiet, energy-saving heating and cooling.",
                        'highlights' => ['No ductwork required', 'Room-by-room control', 'Heating & cooling in one', 'Quiet, efficient operation'],
                        'sections' => [
                            ['heading' => 'Ductless Mini-Splits in NJ', 'body' => "A ductless mini-split pairs a small outdoor unit with one or more indoor air handlers, delivering targeted heating and cooling without ducts. Our licensed technicians install single-zone and multi-zone systems cleanly, with a flat-rate quote upfront.\n\nWe install ductless systems across central New Jersey for homes of every age and layout."],
                            ['heading' => 'Where They Fit (Older Homes, Additions)', 'body' => "Ductless mini-splits shine where traditional ducted AC can't easily go: older homes in Red Bank or Freehold without existing ductwork, finished attics and basements, garages, sunrooms, and home additions. They're also great for cooling a single hot room or adding zoned comfort to specific areas."],
                            ['heading' => 'Benefits', 'body' => "Because there are no ducts to leak, mini-splits are extremely efficient — often the lowest-operating-cost option available. Each zone has its own thermostat for personalized comfort, they run very quietly, and they provide both heating and cooling from one system, year-round."],
                            ['heading' => 'Installation & Serving 3 Counties', 'body' => "We handle sizing, mounting, and refrigerant line work for a clean, professional install — most completed in a day. Guardian Air installs ductless mini-splits across Monmouth, Middlesex, and Ocean counties, including Toms River, Brick, Old Bridge, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a ductless mini-split cost in NJ?', 'a' => 'A single-zone ductless system in New Jersey typically runs about $3,500 to $6,000 installed, while multi-zone systems cost more depending on the number of indoor units. We provide a free written quote and offer financing.'],
                            ['q' => 'How does a ductless mini-split work?', 'a' => 'A small outdoor compressor connects to one or more wall- or ceiling-mounted indoor units through a thin refrigerant line, delivering heating and cooling directly to each room — no ductwork required.'],
                            ['q' => 'Single-zone or multi-zone — which do I need?', 'a' => 'A single-zone system is ideal for one room or addition. Multi-zone systems run several indoor units off one outdoor unit, giving independent temperature control in multiple rooms. We help you choose based on your home.'],
                            ['q' => 'Are ductless mini-splits energy efficient?', 'a' => 'Very. With no duct losses and inverter-driven compressors, mini-splits are among the most efficient systems available and often qualify for rebates and tax incentives.'],
                        ],
                    ],
                    'ac-tune-up' => [
                        'name' => 'AC Tune-Up',
                        'title' => 'AC Tune-Up & Maintenance in NJ | Guardian Air',
                        'description' => 'Book an AC tune up in NJ with Guardian Air — air conditioner maintenance across Monmouth, Middlesex & Ocean counties to prevent summer breakdowns. Call today!',
                        'h1' => 'AC Tune-Up & Maintenance in New Jersey',
                        'intro' => "A professional AC tune up in NJ keeps your system cooling efficiently when you need it most. Guardian Air provides multi-point air conditioner maintenance across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — catching small problems before they become summer breakdowns.",
                        'highlights' => ['Coil cleaning & inspection', 'Refrigerant level check', 'Prevents summer breakdowns', 'Maintenance plans available'],
                        'sections' => [
                            ['heading' => 'AC Tune-Up in NJ', 'body' => "Most summer AC failures are preventable with a short annual tune-up. Our licensed technicians clean, inspect, and test your system so it runs efficiently through the hottest months — and we recommend scheduling in early spring, before the first heatwave.\n\nWe provide AC tune-ups across central New Jersey with flat-rate pricing and no upsells."],
                            ['heading' => "What's Included", 'body' => "Our multi-point tune-up covers the components that matter: we clean the condenser and evaporator coils, check refrigerant levels, test the capacitor and electrical connections, clear the condensate drain, inspect the blower, replace or check the filter, and verify the system is cooling efficiently."],
                            ['heading' => 'Pre-Summer Checklist', 'body' => "Before the heat hits, we make sure your AC is ready: clear debris from the outdoor unit, confirm proper airflow, calibrate the thermostat, and flag any worn parts so you can address them on your schedule — not during a 95-degree emergency."],
                            ['heading' => 'Maintenance Plans & Service Area', 'body' => "Our maintenance plans bundle your seasonal cooling and heating tune-ups with priority scheduling and repair discounts. Guardian Air serves Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does an AC tune-up cost in NJ?', 'a' => 'A single AC tune-up in New Jersey typically runs about $100 to $200, and is often discounted or included with a maintenance plan. We quote the price upfront with no hidden fees.'],
                            ['q' => 'How often should I tune up my AC?', 'a' => 'At least once a year, ideally in early spring before cooling season. Annual maintenance keeps the system efficient, catches issues early, and helps avoid mid-summer breakdowns.'],
                            ['q' => "What's included in an AC tune-up?", 'a' => 'A full tune-up covers cleaning the coils, checking refrigerant, testing the capacitor and electrical connections, clearing the condensate drain, checking the filter and blower, and verifying the system cools efficiently.'],
                        ],
                    ],
                ],
            ],
            'plumbing' => [
                'label' => 'Plumbing',
                'locationName' => 'Licensed Plumber',
                'services' => [
                    'emergency-plumber' => [
                        'name' => 'Emergency Plumber',
                        'title' => 'Emergency Plumber NJ — 24/7 | Guardian Air',
                        'description' => 'Need an emergency plumber in NJ? Guardian Air offers 24/7 licensed & insured emergency plumbing across Monmouth, Middlesex & Ocean counties. Call now!',
                        'h1' => '24/7 Emergency Plumber in New Jersey',
                        'intro' => "When water is pouring through your ceiling at midnight, you need an emergency plumber in NJ who actually answers. Guardian Air provides 24/7 licensed and insured emergency plumbing across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — responding fast to stop the damage and get your home back to normal.",
                        'highlights' => ['24/7 emergency response', 'Burst pipes & major leaks', 'Fast water shutoff & repair', 'Flat-rate pricing, even after hours'],
                        'sections' => [
                            ['heading' => 'Emergency Plumber NJ', 'body' => "Plumbing emergencies never wait for business hours. Our licensed plumbers respond day or night to burst pipes, overflowing toilets, sewage backups, and no-water situations — arriving stocked to handle most repairs on the first visit.\n\nWe serve homeowners across central New Jersey with honest, flat-rate pricing, so you'll never pay extra for nights, weekends, or holidays."],
                            ['heading' => '24 Hour Plumber', 'body' => "As a true 24 hour plumber, we keep technicians on call around the clock. Save our number now so that when a pipe bursts in Brick or a water heater fails in Old Bridge, help is one call away — not a voicemail you won't hear back from until morning."],
                            ['heading' => 'What Counts as a Plumbing Emergency', 'body' => "Call immediately for burst or frozen pipes, major leaks, sewage backups, no water, a gas-line odor, or an overflowing toilet you can't stop. These can cause fast, expensive damage. For dripping faucets or a single slow drain, same-day or next-day service is usually fine — and we'll tell you honestly which one you have."],
                            ['heading' => 'Our Response Time', 'body' => "Because our plumbers are local to Monmouth, Middlesex, and Ocean counties, we can often reach you within the hour for true emergencies. The first thing we'll do is help you shut off the water to limit damage, then diagnose and repair the problem with a clear, flat-rate quote."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides 24/7 emergency plumbing across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Local plumbers mean faster help when every minute counts."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does an emergency plumber cost in NJ?', 'a' => 'Emergency plumbing in New Jersey typically ranges from about $150 to $500+ depending on the problem and parts. Guardian Air charges flat-rate pricing with no extra fees for nights, weekends, or holidays, and quotes the full cost before any work begins.'],
                            ['q' => 'How fast can an emergency plumber reach me?', 'a' => "Because our plumbers are local to all three counties, we can often be on-site within the hour for true emergencies, and we'll guide you on shutting off the water while we're on the way."],
                            ['q' => 'Do you offer 24-hour plumbing in Monmouth County?', 'a' => 'Yes. We provide 24/7 emergency plumbing across Monmouth County, including Freehold, Red Bank, Middletown, and Howell, at the same flat rate any time of day.'],
                            ['q' => 'What should I do first in a plumbing emergency?', 'a' => 'Shut off the water — either at the fixture valve or your main shutoff — to limit damage, then call us. For a suspected gas leak, leave the home first and call from outside.'],
                        ],
                    ],
                    'water-heater' => [
                        'name' => 'Water Heater Service',
                        'title' => 'Water Heater Repair & Replacement in NJ | Guardian Air',
                        'description' => 'Need water heater repair in NJ? Guardian Air repairs & replaces tank and tankless units across Monmouth, Middlesex & Ocean counties. Licensed — call today!',
                        'h1' => 'Water Heater Repair & Replacement in New Jersey',
                        'intro' => "Reliable water heater repair in NJ gets your hot water back fast. Guardian Air repairs, replaces, and installs both tank and tankless water heaters for homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Old Bridge — with upfront, flat-rate pricing.",
                        'highlights' => ['Tank & tankless service', 'Repair or replace guidance', 'Fast, clean installation', 'Reliable hot water restored'],
                        'sections' => [
                            ['heading' => 'Water Heater Repair in NJ', 'body' => "No hot water, rusty water, popping noises, or a leaking tank? Our licensed plumbers diagnose the real cause — a failed heating element, thermostat, anode rod, or valve — and repair it fast.\n\nWe service every major brand of gas, electric, and tankless water heater across central New Jersey with honest, flat-rate quotes."],
                            ['heading' => 'Water Heater Replacement', 'body' => "When a tank is leaking from the bottom or simply past its prime, replacement is the smart move. We help you choose the right size and type, haul away the old unit, and install the new one cleanly and to code — usually the same day."],
                            ['heading' => 'Signs of Failure', 'body' => "Watch for water that never gets hot enough or runs out quickly, rusty or discolored hot water, rumbling or popping sounds from sediment, moisture or rust around the base, and rising energy bills. Catching these early often means a simple repair instead of water damage from a burst tank."],
                            ['heading' => 'Tank vs Tankless', 'body' => "A tank water heater costs less upfront and lasts 8–12 years. A tankless unit delivers endless hot water on demand, takes up far less space, and can last 20+ years. We'll explain the trade-offs and help you pick what fits your home and budget."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air repairs and replaces water heaters across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood, with fast, local service."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does water heater repair cost in NJ?', 'a' => 'Most water heater repairs in New Jersey run about $150 to $600 depending on the part — a thermostat or element is lower, while a gas valve is higher. We provide a flat-rate quote before any work begins.'],
                            ['q' => 'Should I repair or replace my water heater?', 'a' => 'If the unit is under 8 years old and the issue is a single component, repair usually makes sense. A leaking tank or an older unit with repeated problems is better replaced. We give you an honest recommendation.'],
                            ['q' => 'How long does a water heater last?', 'a' => 'A traditional tank water heater typically lasts 8 to 12 years; a tankless unit can run 20 years or more with maintenance. Annual flushing extends the life of either.'],
                            ['q' => 'Is a tankless water heater worth it?', 'a' => 'For many homes, yes — endless hot water, lower energy bills, a smaller footprint, and a longer lifespan. We help you decide whether the upfront cost pays off for your household.'],
                        ],
                    ],
                    'tankless-water-heater' => [
                        'name' => 'Tankless Water Heater',
                        'title' => 'Tankless Water Heater Installation in NJ | Guardian Air',
                        'description' => 'Considering a tankless water heater in NJ? Guardian Air installs efficient tankless units across Monmouth, Middlesex & Ocean counties. Licensed — call today!',
                        'h1' => 'Tankless Water Heater Installation in New Jersey',
                        'intro' => "A tankless water heater in NJ delivers endless hot water on demand while saving space and energy. Guardian Air sizes and installs high-efficiency tankless systems for homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — with a clear, flat-rate quote.",
                        'highlights' => ['Endless hot water on demand', 'Lower energy bills', 'Space-saving design', 'Longer lifespan than tanks'],
                        'sections' => [
                            ['heading' => 'Tankless Water Heaters in NJ', 'body' => "Unlike a tank that constantly reheats stored water, a tankless unit heats water only when you need it. Our licensed plumbers install gas and electric tankless systems from every major brand across central New Jersey, handling venting, gas, and code compliance for a clean, professional result."],
                            ['heading' => 'Benefits vs Tank', 'body' => "Tankless systems never run out of hot water during back-to-back showers, use less energy because there's no standby heat loss, free up valuable floor space, and typically last 20+ years — roughly double a tank's lifespan. Many models also qualify for rebates and tax incentives."],
                            ['heading' => 'Installation', 'body' => "Switching from a tank to tankless can involve upgrading the gas line and venting, which is why professional installation matters. We assess your home, size the unit to your hot-water demand, and install it to code — most jobs completed in a day."],
                            ['heading' => 'Sizing & Serving 3 Counties', 'body' => "Proper sizing (measured in gallons per minute) ensures the unit keeps up with your household. We get it right the first time and serve Monmouth, Middlesex, and Ocean counties, including Toms River, Brick, Old Bridge, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a tankless water heater cost in NJ?', 'a' => 'Installed, a tankless water heater in New Jersey typically runs about $2,500 to $5,000 depending on the model and any gas or venting upgrades. We provide a free written quote and offer financing.'],
                            ['q' => 'Do tankless water heaters really save money?', 'a' => 'Yes — by heating water only on demand, they eliminate standby heat loss and usually lower energy bills. Combined with a 20+ year lifespan, they often pay off over time, and may qualify for rebates.'],
                            ['q' => 'What size tankless water heater do I need?', 'a' => 'Sizing is based on your peak hot-water demand in gallons per minute and your incoming water temperature. We calculate the right capacity so the unit keeps up with your household.'],
                        ],
                    ],
                    'leak-detection' => [
                        'name' => 'Leak Detection',
                        'title' => 'Leak Detection & Pipe Repair in NJ | Guardian Air',
                        'description' => 'Need leak detection in NJ? Guardian Air finds & fixes hidden leaks across Monmouth, Middlesex & Ocean counties — non-invasive, licensed & insured. Call!',
                        'h1' => 'Leak Detection & Pipe Repair in New Jersey',
                        'intro' => "Professional leak detection in NJ finds hidden leaks before they cause thousands in damage. Guardian Air uses non-invasive equipment to pinpoint leaks behind walls, under floors, and in slabs for homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Red Bank — then repairs the source fast.",
                        'highlights' => ['Non-invasive detection', 'Finds hidden & slab leaks', 'Stops costly water damage', 'Permanent repairs'],
                        'sections' => [
                            ['heading' => 'Leak Detection in NJ', 'body' => "A hidden leak can quietly rot framing, ruin drywall, and spike your water bill for months. Our licensed plumbers use acoustic sensors, thermal imaging, and pressure testing to locate the exact source — no demolition guesswork — then repair it cleanly.\n\nWatch for an unexplained jump in your water bill, the sound of running water when everything is off, damp spots or stains, low pressure, or a musty smell."],
                            ['heading' => 'Slab Leaks', 'body' => "Leaks in the pipes beneath your concrete slab are especially damaging and hard to spot. Signs include warm spots on the floor, cracks, and the sound of running water. We locate slab leaks precisely and repair or reroute the line with minimal disruption."],
                            ['heading' => 'Burst Pipes', 'body' => "From frozen winter pipe bursts to corroded older lines, we repair and replace damaged pipe fast. For aging galvanized or polybutylene plumbing common in older New Jersey homes, we offer repiping with modern, long-lasting materials."],
                            ['heading' => 'Non-Invasive Detection & Service Area', 'body' => "Our goal is to find the leak with the least possible disruption to your home. Guardian Air provides leak detection and pipe repair across Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does leak detection cost in NJ?', 'a' => 'Professional leak detection in New Jersey typically ranges from about $150 to $450 depending on the complexity, and the cost is well worth avoiding thousands in water damage. We quote it upfront and credit it toward the repair when possible.'],
                            ['q' => 'What are the signs of a slab leak?', 'a' => 'Common signs include warm spots on the floor, the sound of running water when nothing is on, an unexplained spike in your water bill, and cracks or damp areas in flooring. We confirm and locate it with non-invasive tools.'],
                            ['q' => 'How do you find a hidden water leak?', 'a' => 'We use acoustic listening equipment, thermal imaging, and pressure testing to pinpoint the exact location behind walls, under floors, or in the slab — no unnecessary demolition.'],
                            ['q' => 'Is a hidden leak a plumbing emergency?', 'a' => 'A fast leak or burst pipe is an emergency — shut off the water and call us right away. A slow hidden leak still needs prompt attention to prevent mold and structural damage, but can usually be scheduled same- or next-day.'],
                        ],
                    ],
                ],
            ],
            'indoor-air-quality' => [
                'label' => 'Indoor Air Quality',
                'locationName' => 'Air Duct Cleaning',
                'services' => [
                    'duct-cleaning' => [
                        'name' => 'Duct Cleaning',
                        'title' => 'Air Duct Cleaning in NJ | Guardian Air',
                        'description' => 'Need air duct cleaning in NJ? Guardian Air clears dust & allergens from your ducts across Monmouth, Middlesex & Ocean counties. Licensed & insured — call!',
                        'h1' => 'Air Duct Cleaning in New Jersey',
                        'intro' => "Professional air duct cleaning in NJ clears the dust, pollen, and debris that build up inside your ductwork and recirculate through every room. Guardian Air cleans residential duct systems across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — so your system runs efficiently and the air your family breathes is noticeably cleaner.",
                        'highlights' => ['Removes dust & allergens', 'Improves airflow & efficiency', 'Reduces household dust', 'Healthier air in every room'],
                        'sections' => [
                            ['heading' => 'Air Duct Cleaning in NJ', 'body' => "Over years of use, ductwork collects dust, pet dander, pollen, and construction debris that your system pushes back into your living space every time it runs. Our technicians clean the full system — supply and return ducts, registers, and the air handler — leaving your home cleaner across central New Jersey.\n\nWe provide honest, flat-rate quotes and treat your home with care, laying down protection and cleaning up completely."],
                            ['heading' => 'Our Process', 'body' => "We use professional negative-air equipment and agitation tools to dislodge and capture debris without scattering it through your home. We protect floors and furnishings, clean each vent and trunk line, sanitize where needed, and verify airflow when we're done — a thorough job, not a quick vacuum at the register."],
                            ['heading' => 'Health & Efficiency Benefits (Up to 30%)', 'body' => "Clean ducts mean fewer airborne irritants for allergy and asthma sufferers, less dust resettling on surfaces, and fresher-smelling air. Clearing blocked ducts also restores airflow, which can improve HVAC efficiency by up to 30% — lowering energy bills and easing strain on your system."],
                            ['heading' => 'Before & After', 'body' => "Most homeowners are surprised by what comes out of their ducts — years of gray dust, pet hair, and debris. After cleaning, vents deliver stronger, cleaner airflow, and the difference in household dust is often noticeable within days."],
                            ['heading' => 'Air Duct Cleaning in Monmouth County', 'body' => "We're a popular choice for air duct cleaning in Monmouth County, serving Freehold, Red Bank, Middletown, and Howell. The area's mix of older homes and humid summers makes regular duct cleaning especially worthwhile for cleaner, healthier air."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides air duct cleaning across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Local technicians mean easy scheduling and fast, friendly service."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does air duct cleaning cost in NJ?', 'a' => 'Air duct cleaning in New Jersey typically ranges from about $300 to $1,000 depending on the size of your home and the number of vents. We provide a flat-rate quote upfront with no hidden fees.'],
                            ['q' => 'What are the signs my ducts need cleaning?', 'a' => 'Watch for visible dust puffing from vents, excessive household dust, musty odors when the system runs, allergy flare-ups indoors, or visible debris and pet hair in the registers.'],
                            ['q' => 'Does duct cleaning really improve air quality?', 'a' => 'Yes — removing accumulated dust, dander, and debris reduces the irritants recirculated through your home, which is especially helpful for allergy and asthma sufferers, and it can improve airflow and efficiency.'],
                            ['q' => 'What pollutants are common in New Jersey homes?', 'a' => "Common culprits are dust, pollen, pet dander, mold spores, and construction debris. New Jersey's humid summers also encourage mold growth in ducts, while tightly sealed winters trap pollutants indoors."],
                            ['q' => 'Can mold grow in air ducts?', 'a' => 'Yes. Humidity and condensation in ductwork can lead to mold growth, which then spreads spores through your home. If we find signs of mold, we recommend mold testing and the right remediation plan.'],
                            ['q' => 'How often should air ducts be cleaned?', 'a' => 'Most homes benefit from duct cleaning every three to five years, and sooner if you have pets, allergies, recent renovations, or signs of mold or heavy dust.'],
                        ],
                    ],
                    'mold-testing' => [
                        'name' => 'Mold Testing',
                        'title' => 'Mold Testing & Detection in NJ | Guardian Air',
                        'description' => 'Need mold testing in NJ? Guardian Air detects hidden mold & moisture across Monmouth, Middlesex & Ocean counties. Licensed & insured — call today!',
                        'h1' => 'Mold Testing & Detection in New Jersey',
                        'intro' => "Professional mold testing in NJ finds the hidden moisture and mold behind musty odors and persistent allergy symptoms. Guardian Air assesses indoor air quality across Monmouth, Middlesex, and Ocean counties — from Toms River to Red Bank — and gives you a clear plan to fix the problem at its source.",
                        'highlights' => ['Identifies hidden moisture', 'Clear, honest assessment', 'Targeted remediation plan', 'Healthier indoor air'],
                        'sections' => [
                            ['heading' => 'Mold Testing in NJ', 'body' => "Musty smells, allergy flare-ups, and visible spots all point to a possible mold problem. We assess your home, identify moisture sources and affected areas, and recommend the right mix of remediation, filtration, ventilation, and humidity control.\n\nWe serve homeowners across central New Jersey with honest, clear assessments — no scare tactics."],
                            ['heading' => 'Mold in HVAC Ducts', 'body' => "Ductwork is a common hiding place for mold because condensation and humidity collect there, then spores spread to every room. We check your duct system and air handler, and pair testing with <a href='/indoor-air-quality/duct-cleaning'>air duct cleaning</a> when mold is present."],
                            ['heading' => 'Coastal Humidity & Mold', 'body' => "New Jersey's humid summers — especially near the Ocean County shore in Toms River and Brick — create ideal conditions for mold. Homes with basements, crawl spaces, or past water damage are particularly at risk, which is why humidity control matters."],
                            ['heading' => 'When to Test & Serving 3 Counties', 'body' => "Test after water damage or flooding, when you notice musty odors or unexplained symptoms, or before buying a home. Guardian Air serves Monmouth, Middlesex, and Ocean counties, including Freehold, Old Bridge, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does mold testing cost in NJ?', 'a' => 'Mold assessments in New Jersey typically range from a basic visual evaluation to a few hundred dollars for detailed sampling, depending on the size of the area and number of samples. We explain your options upfront.'],
                            ['q' => 'What are the signs of mold in my home?', 'a' => 'Common signs include musty odors, visible spots on walls or ceilings, allergy or respiratory symptoms that improve when you leave, past water damage, and persistent humidity or condensation.'],
                            ['q' => 'Can mold grow in my HVAC ducts?', 'a' => 'Yes. Humidity and condensation in ductwork can cause mold that spreads spores through your home. We check the duct system and recommend cleaning or remediation when needed.'],
                            ['q' => 'Is household mold a health risk?', 'a' => 'It can be. Mold spores commonly trigger allergies and asthma and can cause respiratory irritation, especially for sensitive individuals. Identifying and removing the moisture source is the key to a lasting fix.'],
                        ],
                    ],
                    'air-purifier' => [
                        'name' => 'Air Purifier',
                        'title' => 'Air Purifier Installation in NJ | Guardian Air',
                        'description' => 'Considering air purifier installation in NJ? Guardian Air installs whole-home & UV air purifiers across Monmouth, Middlesex & Ocean counties. Call today!',
                        'h1' => 'Air Purifier & UV System Installation in New Jersey',
                        'intro' => "Professional air purifier installation in NJ captures allergens, dust, smoke, and microscopic particles before they circulate through your home. Guardian Air installs whole-home purifiers, UV systems, and advanced filtration across Monmouth, Middlesex, and Ocean counties — from Toms River to Old Bridge.",
                        'highlights' => ['Whole-home & UV options', 'Captures microscopic particles', 'Reduces allergens & odors', 'Works with your HVAC system'],
                        'sections' => [
                            ['heading' => 'Air Purifier Installation in NJ', 'body' => "A whole-home air purifier installs directly into your HVAC system, treating all the air your system moves — far more effective than a portable unit in one room. We size and install the right solution for your home and concerns across central New Jersey.\n\nWe explain your options clearly and provide an upfront, flat-rate quote."],
                            ['heading' => 'UV Germicidal Systems', 'body' => "UV germicidal lights installed at the coil neutralize mold, bacteria, and viruses as air passes through, keeping your system cleaner and the circulating air healthier — a great fit for homes dealing with humidity and mold in the Ocean County shore area."],
                            ['heading' => 'HEPA Filtration', 'body' => "High-efficiency media and HEPA-style filtration captures fine particles — dust, pollen, dander, and smoke — that standard one-inch filters miss. We make sure any upgrade is matched to your system so airflow stays healthy."],
                            ['heading' => 'Air Scrubbers & Serving 3 Counties', 'body' => "Active air-scrubbing systems treat both the air and surfaces throughout your home. Guardian Air installs air purifiers across Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does air purifier installation cost in NJ?', 'a' => 'Whole-home air purifier installation in New Jersey typically ranges from about $500 to $2,500 depending on the technology (media, UV, or active air scrubber). We provide a free written quote.'],
                            ['q' => 'UV light or HEPA filtration — which is better?', 'a' => 'They do different jobs: HEPA-style media captures particles like dust and pollen, while UV light neutralizes mold, bacteria, and viruses. Many homes benefit from both, and we recommend the right mix.'],
                            ['q' => 'Whole-home or portable air purifier?', 'a' => 'A whole-home system treats all the air your HVAC moves and runs quietly out of sight, outperforming portable units that only clean one room. We help you choose based on your home and goals.'],
                            ['q' => 'Who benefits most from an air purifier?', 'a' => 'Households with allergies, asthma, pets, smokers, or anyone sensitive to dust and odors see the biggest difference — as do homes in humid areas prone to mold.'],
                        ],
                    ],
                    'humidifier-dehumidifier' => [
                        'name' => 'Humidifier & Dehumidifier',
                        'title' => 'Whole-Home Humidifiers & Dehumidifiers in NJ | Guardian Air',
                        'description' => 'Need a whole home humidifier in NJ? Guardian Air installs humidifiers & dehumidifiers across Monmouth, Middlesex & Ocean counties. Licensed — call today!',
                        'h1' => 'Humidity Control for New Jersey Homes',
                        'intro' => "A whole home humidifier in NJ — or a dehumidifier for damp summers — keeps your home at a healthy, comfortable balance year-round. Guardian Air installs whole-home humidity control across Monmouth, Middlesex, and Ocean counties, from Toms River to Freehold.",
                        'highlights' => ['Balanced year-round humidity', 'Protects health & comfort', 'Prevents mold & dry air', 'Whole-home solutions'],
                        'sections' => [
                            ['heading' => 'Whole-Home Humidifiers', 'body' => "Dry winter air causes static, cracked skin, irritated sinuses, and damage to woodwork and furniture. A whole-home humidifier installs into your HVAC system to add balanced moisture throughout the house automatically — no refilling portable units. We install and service them across central New Jersey."],
                            ['heading' => 'Dehumidifiers', 'body' => "Too much moisture breeds mold and dust mites and leaves the air feeling heavy and clammy. A whole-home dehumidifier removes excess humidity to protect your home and comfort, especially valuable for basements and crawl spaces."],
                            ['heading' => 'Coastal Humidity (Ocean County)', 'body' => "Homes near the shore in Toms River, Brick, and across Ocean County deal with high summer humidity that strains comfort and encourages mold. Whole-home humidity control keeps these homes healthier and more comfortable all season."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air installs humidifiers and dehumidifiers across Monmouth, Middlesex, and Ocean counties, including Freehold, Old Bridge, Red Bank, and Lakewood, with honest, flat-rate pricing."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a whole-home humidifier or dehumidifier cost in NJ?', 'a' => 'Installed, whole-home humidifiers in New Jersey typically run about $400 to $1,000, while whole-home dehumidifiers range from about $1,500 to $2,800 depending on capacity. We provide a free written quote.'],
                            ['q' => 'What indoor humidity level is ideal?', 'a' => 'Most homes are most comfortable between 30% and 50% relative humidity. Too low causes dry skin and static; too high encourages mold and dust mites. Whole-home systems hold the right balance automatically.'],
                            ['q' => 'Do shore homes really need a dehumidifier?', 'a' => "Often, yes. Coastal Ocean County homes in Toms River and Brick face high summer humidity that encourages mold and that clammy feeling — a whole-home dehumidifier makes a noticeable difference."],
                        ],
                    ],
                ],
            ],
            'drains' => [
                'label' => 'Drains',
                'locationName' => 'Drain Cleaning',
                'services' => [
                    'sewer-repair' => [
                        'name' => 'Sewer Repair',
                        'title' => 'Sewer Repair & Line Replacement in NJ | Guardian Air',
                        'description' => 'Need sewer repair in NJ? Guardian Air fixes & replaces sewer lines across Monmouth, Middlesex & Ocean counties — trenchless options, licensed & insured. Call!',
                        'h1' => 'Sewer Repair & Line Replacement in New Jersey',
                        'intro' => "Professional sewer repair in NJ stops the repeat backups, foul odors, and health hazards a failing line causes. Guardian Air repairs and replaces cracked, collapsed, and root-invaded sewer lines across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — and restores reliable flow with upfront, flat-rate pricing.",
                        'highlights' => ['Cracked & collapsed lines', 'Root intrusion repair', 'Trenchless options', 'Camera-verified results'],
                        'sections' => [
                            ['heading' => 'Sewer Repair in NJ', 'body' => "When sewage backs up repeatedly or you smell it in the yard, the problem is usually in the main line. Our licensed technicians start with a <a href='/drains/camera-inspection'>camera inspection</a> to pinpoint the exact cause and location, then repair the line — often without tearing up your whole yard.\n\nWe serve homeowners across central New Jersey with honest assessments and flat-rate quotes, not guesswork."],
                            ['heading' => 'Sewer Line Replacement', 'body' => "When a line is too damaged to repair — collapsed, badly corroded, or invaded by roots throughout — full replacement is the lasting fix. We remove and replace failing sections (or the entire run) with durable modern materials and verify the result with a camera."],
                            ['heading' => 'Trenchless Options', 'body' => "Where conditions allow, trenchless methods like pipe lining and pipe bursting let us repair or replace your sewer with minimal digging — protecting driveways, landscaping, and walkways. It's faster, cleaner, and often more cost-effective than traditional excavation."],
                            ['heading' => 'Signs You Need Replacement', 'body' => "Watch for multiple drains backing up at once, gurgling toilets, sewage odors, soggy or unusually green patches in the yard, and recurring clogs that keep coming back. Many older New Jersey homes have clay or cast-iron lines that crack and attract roots over decades."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides sewer repair and replacement across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Need a faster clean-out first? Ask about <a href='/drains/hydro-jetting'>hydro jetting</a>."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does sewer repair cost in NJ?', 'a' => 'Sewer repairs in New Jersey vary widely — a spot repair may run $1,000 to $3,000, while a full line replacement can range from $5,000 to $15,000+ depending on length, depth, and method. We camera-inspect first and quote the exact scope upfront.'],
                            ['q' => 'What are the signs I need a sewer line replacement?', 'a' => 'Frequent main-line backups, multiple drains clogging at once, sewage odors, soggy yard patches, and recurring root intrusion all point to a failing line. A camera inspection confirms whether a spot repair or full replacement is needed.'],
                            ['q' => 'Do you offer trenchless sewer repair?', 'a' => 'Yes, where conditions allow. Trenchless pipe lining and pipe bursting repair or replace the line with minimal digging, protecting your yard and hardscaping and usually saving time and money.'],
                            ['q' => 'Why do older NJ sewer lines fail?', 'a' => 'Many older New Jersey homes have clay or cast-iron sewer lines that crack, corrode, and develop joints where tree roots intrude over the decades, leading to repeat backups until the line is repaired or replaced.'],
                        ],
                    ],
                    'hydro-jetting' => [
                        'name' => 'Hydro Jetting',
                        'title' => 'Hydro Jetting Services in NJ | Guardian Air',
                        'description' => 'Need hydro jetting in NJ? Guardian Air scours pipes clean of grease, scale & roots across Monmouth, Middlesex & Ocean counties. Licensed & insured — call!',
                        'h1' => 'Hydro Jetting Services in New Jersey',
                        'intro' => "Professional hydro jetting in NJ uses high-pressure water to scrub the inside of your pipes completely clean — blasting away the grease, scale, and roots that snaking leaves behind. Guardian Air provides hydro jetting across Monmouth, Middlesex, and Ocean counties, from Toms River to Old Bridge, for stubborn and recurring clogs.",
                        'highlights' => ['Clears grease, scale & roots', 'Best for recurring clogs', 'Scours pipes like new', 'Safe for healthy pipes'],
                        'sections' => [
                            ['heading' => 'Hydro Jetting in NJ', 'body' => "Hydro jetting sends water through a specialized nozzle at up to 4,000 PSI, scouring the full diameter of the pipe rather than just punching a hole through a clog. The result is a like-new line that flows freely and stays clear far longer.\n\nWe provide hydro jetting across central New Jersey with flat-rate pricing, often pairing it with a <a href='/drains/camera-inspection'>camera inspection</a> to confirm the line is fully clear."],
                            ['heading' => 'Jetting vs Snaking', 'body' => "Snaking is great for breaking through a single clog quickly and is sometimes all you need. Hydro jetting cleans the entire interior of the pipe — removing built-up grease, scale, and roots — so for recurring or severe clogs, it delivers a far more thorough and longer-lasting result."],
                            ['heading' => 'When You Need It', 'body' => "Consider hydro jetting for repeat clogs in the same line, grease buildup in kitchen lines, root intrusion, or slow main-line drainage. It's also ideal as preventive maintenance for restaurants and older homes prone to buildup."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides hydro jetting across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. For a damaged line, ask about <a href='/drains/sewer-repair'>sewer repair</a>."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does hydro jetting cost in NJ?', 'a' => 'Hydro jetting in New Jersey typically ranges from about $400 to $800 depending on the line size, severity, and access. We provide a flat-rate quote upfront, and we often camera-inspect first to confirm it is the right approach.'],
                            ['q' => 'Is hydro jetting better than snaking?', 'a' => 'For recurring or severe clogs, yes. Snaking breaks through a single blockage, while hydro jetting cleans the entire pipe interior of grease, scale, and roots for a longer-lasting result. We recommend the right method for your situation.'],
                            ['q' => 'How often should I have my pipes jetted?', 'a' => 'For most homes, only as needed. Homes or businesses with recurring grease or root problems may benefit from preventive jetting every one to two years to avoid backups.'],
                        ],
                    ],
                    'camera-inspection' => [
                        'name' => 'Camera Inspection',
                        'title' => 'Video Camera Sewer Inspection in NJ | Guardian Air',
                        'description' => 'Need a video camera sewer inspection in NJ? Guardian Air diagnoses drains & sewers across Monmouth, Middlesex & Ocean counties. Licensed & insured — call!',
                        'h1' => 'Video Camera Drain & Sewer Inspection in New Jersey',
                        'intro' => "A video camera sewer inspection in NJ shows the exact cause and location of a drain or sewer problem — no guesswork, no unnecessary digging. Guardian Air runs waterproof camera inspections across Monmouth, Middlesex, and Ocean counties, from Toms River to Red Bank, so you know precisely what's wrong before spending a dollar on repairs.",
                        'highlights' => ['See the real problem', 'Pinpoints exact location', 'No demolition guesswork', 'Verifies a clean line'],
                        'sections' => [
                            ['heading' => 'Camera Inspection in NJ', 'body' => "We feed a high-resolution waterproof camera through your drain or sewer line and watch a live feed as it travels, locating clogs, cracks, bellies, and root intrusion. You see exactly what we see, and we can pinpoint the depth and position of any problem.\n\nWe serve homeowners across central New Jersey and often pair inspections with cleaning or repair."],
                            ['heading' => 'We Diagnose Before We Dig', 'body' => "A camera inspection means no exploratory digging and no guesswork. We confirm the real issue first, so any <a href='/drains/sewer-repair'>sewer repair</a> is targeted and minimally invasive — saving you money and protecting your yard. It's also smart before buying a home."],
                            ['heading' => 'Root Intrusion', 'body' => "Tree roots are a leading cause of sewer trouble in older New Jersey neighborhoods, growing into joints and cracks. A camera inspection confirms root intrusion and its location so we can clear it with <a href='/drains/hydro-jetting'>hydro jetting</a> and recommend a lasting fix."],
                            ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides drain and sewer camera inspections across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood."],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a sewer camera inspection cost in NJ?', 'a' => 'A drain or sewer camera inspection in New Jersey typically runs about $150 to $350, and we often credit it toward any repair or cleaning that follows. We quote the price upfront.'],
                            ['q' => 'What can a camera inspection find?', 'a' => 'It reveals clogs, grease and scale buildup, cracks and collapses, pipe bellies (low spots), root intrusion, and the exact location and depth of each issue — so repairs are precise.'],
                            ['q' => 'When do I need a sewer camera inspection?', 'a' => 'Consider one for recurring backups, before buying a home, after root problems, or any time you want to confirm the condition of your line before committing to a repair.'],
                        ],
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
                'title' => 'How Much Does Furnace Repair Cost in NJ? (2026 Guide) | Guardian Air',
                'description' => 'How much does furnace repair cost in NJ? See 2026 price ranges by problem across Monmouth, Middlesex & Ocean counties — licensed & insured. Call Guardian Air!',
                'h1' => 'How Much Does Furnace Repair Cost in New Jersey?',
                'intro' => "Wondering how much furnace repair costs in NJ? Most furnace repairs across Monmouth, Middlesex, and Ocean counties fall between $150 and $750 depending on the failed part. This 2026 guide breaks down the typical ranges New Jersey homeowners can expect so there are no surprises.",
                'serviceLink' => ['label' => 'Furnace & Heating Repair', 'href' => '/heating'],
                'rows' => [
                    ['Igniter or flame sensor replacement', '$150 – $350'],
                    ['Blower motor repair / replacement', '$300 – $700'],
                    ['Control board replacement', '$400 – $750'],
                    ['Gas valve replacement', '$300 – $600'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Furnace Repair Cost', 'body' => "Across New Jersey, the average furnace repair runs about $150 to $750, with most homeowners landing in the middle for common fixes like an igniter, flame sensor, or capacitor. A diagnostic service call typically costs $89 to $150 and is often applied toward the repair. Guardian Air provides a flat-rate quote before any work begins, so you approve the price first."],
                    ['heading' => 'Cost by Problem', 'body' => "The table above shows typical ranges by part. Igniters and flame sensors are on the lower end; blower motors, control boards, and gas valves cost more because the parts and labor are greater. Older or specialty systems can run higher if parts are harder to source."],
                    ['heading' => 'Repair vs. Replace', 'body' => "If your furnace is under 15 years old and the repair is minor, fixing it is usually the better value. For aging systems with frequent or expensive failures, a new high-efficiency unit often pays off in lower bills — see our <a href='/heating/furnace-replacement'>furnace replacement</a> guide, or learn about routine <a href='/heating/furnace-tune-up'>furnace tune-ups</a> that prevent costly repairs."],
                    ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides <a href='/heating'>furnace repair</a> across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Find your town on our <a href='/service-areas'>service areas</a> page."],
                ],
                'faqs' => [
                    ['q' => 'How much does furnace repair cost in NJ?', 'a' => 'Most furnace repairs in New Jersey cost $150 to $750 depending on the part. A diagnostic visit runs $89 to $150 and is often credited toward the repair. We quote a flat rate before any work.'],
                    ['q' => 'What affects the price of a furnace repair?', 'a' => 'The failed part, parts availability, your furnace type and age, and whether it is an emergency or after-hours call all affect the price. Our flat-rate pricing never adds overtime surcharges.'],
                    ['q' => 'Is it worth repairing an old furnace?', 'a' => 'If the unit is over 15 years old and repairs are adding up, replacement is usually the smarter long-term investment. We give you an honest repair-or-replace recommendation.'],
                    ['q' => 'Do you charge extra for emergency furnace repair?', 'a' => 'No. Guardian Air charges flat-rate pricing with no extra fees for nights, weekends, or holidays, so emergency repairs cost the same as scheduled ones.'],
                ],
            ],
            'ac-repair-cost' => [
                'name' => 'AC Repair Cost',
                'title' => 'How Much Does AC Repair Cost in NJ? (2026 Guide) | Guardian Air',
                'description' => 'How much does AC repair cost in NJ? See 2026 price ranges by problem across Monmouth, Middlesex & Ocean counties — licensed & insured. Call Guardian Air!',
                'h1' => 'How Much Does AC Repair Cost in New Jersey?',
                'intro' => "Wondering how much AC repair costs in NJ? Most air conditioning repairs across Monmouth, Middlesex, and Ocean counties range from $150 to $600, though a compressor can cost more. This 2026 guide covers the most common AC repairs and their typical New Jersey prices.",
                'serviceLink' => ['label' => 'AC Repair & Cooling', 'href' => '/cooling'],
                'rows' => [
                    ['Capacitor replacement', '$150 – $400'],
                    ['Refrigerant recharge', '$200 – $600'],
                    ['Contactor replacement', '$150 – $350'],
                    ['Compressor replacement', '$1,200 – $2,800'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average AC Repair Cost', 'body' => "Across New Jersey, the average AC repair runs about $150 to $600 for common issues like a failed capacitor, contactor, or a refrigerant recharge. A diagnostic service call is $89 to $150 and is often applied to the repair. Guardian Air quotes a flat rate upfront before any work begins."],
                    ['heading' => 'Cost by Problem', 'body' => "Capacitors and contactors are inexpensive parts on the lower end. Refrigerant recharges depend on the amount and type, and a leak repair adds to the cost. A compressor replacement is the most expensive AC repair, which is why it often tips the decision toward replacement on older units."],
                    ['heading' => 'Repair vs. Replace', 'body' => "If your AC is under 10 years old and the repair is minor, fixing it makes sense. For older systems or a failed compressor, a new high-efficiency unit is often the better value — see our <a href='/cooling/ac-installation'>AC installation</a> options, or keep your system healthy with an <a href='/cooling/ac-tune-up'>AC tune-up</a>."],
                    ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides <a href='/cooling'>AC repair</a> across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Find your town on our <a href='/service-areas'>service areas</a> page."],
                ],
                'faqs' => [
                    ['q' => 'How much does AC repair cost in NJ?', 'a' => 'Most AC repairs in New Jersey cost $150 to $600 depending on the part, while a compressor replacement runs $1,200 to $2,800. A diagnostic visit is $89 to $150, often credited toward the repair.'],
                    ['q' => 'What affects the price of an AC repair?', 'a' => 'The failed component, refrigerant type and amount, your system size and age, and accessibility all affect the price. We provide a flat-rate quote with no overtime surcharges.'],
                    ['q' => 'Is it worth repairing an old air conditioner?', 'a' => 'If the unit is over 10 years old and faces an expensive repair like a compressor, replacement is usually the smarter investment. We give you an honest recommendation either way.'],
                    ['q' => 'Do you charge extra for emergency AC repair?', 'a' => 'No. Our flat-rate pricing applies day or night, so emergency AC repair during a heatwave costs the same as a scheduled visit.'],
                ],
            ],
            'plumber-cost' => [
                'name' => 'Plumber Cost',
                'title' => 'How Much Does a Plumber Cost in NJ? (2026 Guide) | Guardian Air',
                'description' => 'How much does a plumber cost in NJ? See 2026 rates by job across Monmouth, Middlesex & Ocean counties — licensed & insured, flat-rate. Call Guardian Air!',
                'h1' => 'How Much Does a Plumber Cost in New Jersey?',
                'intro' => "Wondering how much a plumber costs in NJ? Rates across Monmouth, Middlesex, and Ocean counties vary widely by job — from about $150 for a clogged drain to $2,500 for a water heater replacement. This 2026 guide outlines typical New Jersey prices so you know what to expect before you call.",
                'serviceLink' => ['label' => 'Licensed Plumbing', 'href' => '/plumbing'],
                'rows' => [
                    ['Clogged drain clearing', '$150 – $400'],
                    ['Faucet repair / replacement', '$150 – $350'],
                    ['Water heater replacement', '$1,200 – $2,500'],
                    ['Leak detection', '$150 – $450'],
                    ['Service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Plumber Rates', 'body' => "Most New Jersey plumbers charge either a flat rate per job or an hourly rate of roughly $100 to $200, plus a service call fee of $89 to $150. Guardian Air uses flat-rate pricing, so you get one clear price for the job before we start — no hourly meter running."],
                    ['heading' => 'Cost by Job', 'body' => "Simple jobs like clearing a drain or swapping a faucet are on the lower end. <a href='/plumbing/water-heater'>Water heater replacement</a> and <a href='/plumbing/leak-detection'>leak detection</a> cost more due to parts, labor, and equipment. The table above lists typical ranges for the most common requests."],
                    ['heading' => 'Emergency Pricing', 'body' => "Many companies add overtime for after-hours work — we don't. Our <a href='/plumbing/emergency-plumber'>24/7 emergency plumber</a> service is billed at the same flat rate, so a burst pipe at midnight costs no more than a scheduled visit."],
                    ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides <a href='/plumbing'>licensed plumbing</a> across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Find your town on our <a href='/service-areas'>service areas</a> page."],
                ],
                'faqs' => [
                    ['q' => 'How much does a plumber cost in NJ?', 'a' => 'New Jersey plumbers typically charge $100 to $200 per hour or a flat rate per job, plus an $89 to $150 service call. Guardian Air quotes a flat rate upfront so there are no surprises.'],
                    ['q' => 'What affects what a plumber charges?', 'a' => 'The job type, parts required, difficulty and access, and whether it is an emergency all affect the price. Flat-rate pricing keeps it predictable regardless of how long the job takes.'],
                    ['q' => 'How much is an emergency plumber in NJ?', 'a' => 'Emergency plumbing typically ranges from $150 to $500+ depending on the problem. Guardian Air does not add overtime fees, so emergency calls cost the same flat rate as scheduled service.'],
                    ['q' => 'Do you offer free plumbing estimates?', 'a' => 'We provide upfront, flat-rate quotes before any work begins. For larger projects like repiping or water heater installs, we provide a free written estimate.'],
                ],
            ],
            'duct-cleaning-cost' => [
                'name' => 'Air Duct Cleaning Cost',
                'title' => 'How Much Does Air Duct Cleaning Cost in NJ? | Guardian Air',
                'description' => 'How much does air duct cleaning cost in NJ? See typical price ranges across Monmouth, Middlesex & Ocean counties — licensed & insured. Call Guardian Air!',
                'h1' => 'How Much Does Air Duct Cleaning Cost in New Jersey?',
                'intro' => "Wondering about air duct cleaning cost in NJ? Most New Jersey homes pay between $300 and $1,000 depending on the size of the home and number of vents. This guide breaks down the typical ranges across Monmouth, Middlesex, and Ocean counties so you know what to expect.",
                'serviceLink' => ['label' => 'Air Duct Cleaning', 'href' => '/indoor-air-quality/duct-cleaning'],
                'rows' => [
                    ['Small home (1–10 vents)', '$300 – $500'],
                    ['Average home (10–20 vents)', '$450 – $750'],
                    ['Large home (20+ vents)', '$700 – $1,000'],
                    ['Dryer vent cleaning (add-on)', '$100 – $200'],
                    ['Inspection / quote', 'Free'],
                ],
                'sections' => [
                    ['heading' => 'Average Duct Cleaning Cost', 'body' => "Across New Jersey, professional air duct cleaning averages $300 to $1,000, with most homes in the $450 to $750 range. We provide a flat-rate quote based on your home rather than a vague per-vent fee, and inspections are free."],
                    ['heading' => 'What Affects Price', 'body' => "The number of vents and returns, the size and layout of your home, system accessibility, and add-ons like dryer-vent cleaning or sanitizing all affect the price. Homes with heavy buildup, pets, or recent renovations may take longer."],
                    ['heading' => 'Is It Worth It?', 'body' => "For homes with excess dust, allergies, pets, or visible debris in the vents, yes — clean ducts reduce recirculated allergens and can improve airflow and efficiency by up to 30%. Learn more on our <a href='/indoor-air-quality/duct-cleaning'>air duct cleaning</a> page, or explore <a href='/indoor-air-quality/mold-testing'>mold testing</a> if you suspect moisture."],
                    ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides air duct cleaning across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Find your town on our <a href='/service-areas'>service areas</a> page."],
                ],
                'faqs' => [
                    ['q' => 'How much does air duct cleaning cost in NJ?', 'a' => 'Most New Jersey homes pay $300 to $1,000 for professional air duct cleaning depending on size and number of vents, with the average home around $450 to $750.'],
                    ['q' => 'What affects the price of duct cleaning?', 'a' => 'The number of vents and returns, home size and layout, accessibility, level of buildup, and add-ons like dryer-vent cleaning all influence the final price.'],
                    ['q' => 'Is air duct cleaning worth the cost?', 'a' => 'For homes with allergies, pets, heavy dust, or visible debris, yes — it reduces recirculated allergens and can improve airflow and efficiency. We give an honest assessment first.'],
                    ['q' => 'How often should ducts be cleaned?', 'a' => 'Most homes benefit every three to five years, and sooner with pets, allergies, renovations, or signs of mold.'],
                ],
            ],
            'drain-cleaning-cost' => [
                'name' => 'Drain Cleaning Cost',
                'title' => 'How Much Does Drain Cleaning Cost in NJ? | Guardian Air',
                'description' => 'How much does drain cleaning cost in NJ? See typical prices by method across Monmouth, Middlesex & Ocean counties — licensed & insured. Call Guardian Air!',
                'h1' => 'How Much Does Drain Cleaning Cost in New Jersey?',
                'intro' => "Wondering about drain cleaning cost in NJ? Most New Jersey drain cleanings run $150 to $500, while hydro jetting a main line costs more. This guide covers typical prices by method across Monmouth, Middlesex, and Ocean counties so there are no surprises.",
                'serviceLink' => ['label' => 'Drain Cleaning & Sewer', 'href' => '/drains'],
                'rows' => [
                    ['Sink, tub, or shower drain', '$150 – $350'],
                    ['Main line snaking', '$250 – $500'],
                    ['Hydro jetting', '$400 – $800'],
                    ['Camera inspection', '$150 – $350'],
                    ['Service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Drain Cleaning Cost', 'body' => "Across New Jersey, clearing a typical sink, tub, or shower drain runs $150 to $350, while a main-line snaking is $250 to $500. We provide a flat-rate quote upfront, and a camera inspection can confirm the cause before you commit to a bigger job."],
                    ['heading' => 'Cost by Method', 'body' => "Snaking (augering) is the most economical method for a single clog. <a href='/drains/hydro-jetting'>Hydro jetting</a> costs more but scours the entire pipe for recurring or severe clogs. A <a href='/drains/camera-inspection'>camera inspection</a> is often added to diagnose chronic problems or root intrusion."],
                    ['heading' => 'When to Call', 'body' => "Call when a drain is slow, gurgling, or backing up — and right away for multiple drains backing up at once, which points to a main-line issue that may need <a href='/drains/sewer-repair'>sewer repair</a>. Catching it early keeps the cost down."],
                    ['heading' => 'Serving Monmouth, Middlesex & Ocean County', 'body' => "Guardian Air provides <a href='/drains'>drain cleaning</a> across central New Jersey, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood. Find your town on our <a href='/service-areas'>service areas</a> page."],
                ],
                'faqs' => [
                    ['q' => 'How much does drain cleaning cost in NJ?', 'a' => 'Most drain cleanings in New Jersey cost $150 to $500 depending on the clog location and method, with hydro jetting on the higher end at $400 to $800.'],
                    ['q' => 'What affects drain cleaning price?', 'a' => 'The location and severity of the clog, the method (snaking vs hydro jetting), and whether a camera inspection is needed all affect the price.'],
                    ['q' => 'Is hydro jetting worth the extra cost?', 'a' => 'For recurring or severe clogs, yes — it cleans the full pipe interior of grease, scale, and roots for a longer-lasting result than snaking.'],
                    ['q' => 'When should I call for drain cleaning?', 'a' => 'Call when drains are slow, gurgling, or smelly, and immediately if multiple drains back up at once, which usually signals a main-line problem.'],
                ],
            ],
        ];
    }

    /**
     * Hub copy for the /cost-guides index page.
     */
    public static function costGuidesHub(): array
    {
        return [
            'faqs' => [
                ['q' => 'Why are your prices shown as ranges?', 'a' => 'Every home and system is different, so we publish typical New Jersey ranges for transparency. Your exact price is confirmed with a flat-rate quote before any work begins — no surprises.'],
                ['q' => 'Do you charge for estimates?', 'a' => 'Diagnostic service calls carry a small fee that is often credited toward the repair, and we provide free written estimates for larger installations and replacements.'],
                ['q' => 'Are these prices for all of New Jersey?', 'a' => 'These ranges reflect typical pricing across our service area — Monmouth, Middlesex, and Ocean counties — and may vary with your specific system and situation.'],
            ],
        ];
    }
}
