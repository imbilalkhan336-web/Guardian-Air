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
