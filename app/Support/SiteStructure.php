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
                        'intro' => "<p>When repairs no longer make sense, professional furnace replacement in NJ restores reliable, efficient heat for years to come. Guardian Air helps homeowners <a href='/service-areas'>across Monmouth, Middlesex, and Ocean counties</a> — from Toms River to Freehold — choose a properly sized, high-efficiency system and install it cleanly, with a clear quote and no pressure.</p>",
                        'highlights' => ['Free replacement estimates', 'Properly sized systems', 'High-efficiency options', 'Flexible financing'],
                        'sections' => [
                            ['heading' => 'When to Replace vs. Repair', 'body' => "<p>If your furnace is over 15 years old, needs frequent repairs, heats unevenly, or is driving up your energy bills, replacement is usually the smarter long-term investment. A single minor repair on a newer system is worth fixing — but once <a href='/cost-guides/furnace-repair-cost'>repair costs</a> start adding up on aging equipment, a new high-efficiency furnace pays you back in lower bills and reliability.</p><p>We give you an honest recommendation either way. If a repair or tune-up makes more sense, we'll tell you.</p>"],
                            ['heading' => 'Furnace Sizing & Efficiency', 'body' => "<p>A furnace that's too small struggles on the coldest nights; one that's too large short-cycles and wastes fuel. We perform a proper load calculation based on your home's square footage, insulation, and layout to size the system correctly — the same care we bring to <a href='/heating/heat-pump'>heat pump installations</a>.</p><p>We install high-efficiency furnaces with AFUE ratings from 90% to 98%, meaning up to 98 cents of every fuel dollar becomes heat for your home — a major upgrade over older 70–80% units that often pairs well with an efficient boiler or hydronic system.</p>"],
                            ['heading' => 'Our Installation Process', 'body' => "<p>Every replacement starts with a free in-home assessment and a written, flat-rate quote. On installation day, our licensed technicians protect your floors, remove the old unit, install and test the new system, and clean up completely — most installs are done in a single day.</p><p>We handle permitting and code compliance so your new furnace is documented, inspected, and backed by warranty — the same standard we apply to every <a href='/heating'>heating service</a> we perform.</p>"],
                            ['heading' => 'Financing & Rebates', 'body' => "<p>A new furnace is a big purchase, so we offer flexible financing options to fit your budget — see our current <a href='/offers'>offers and promotions</a>. We'll also help you take advantage of available manufacturer rebates and NJ energy-efficiency incentives on qualifying high-efficiency equipment, lowering your out-of-pocket cost.</p>"],
                            ['heading' => 'Furnace Installation Across Central NJ', 'body' => "<p>Guardian Air installs and replaces furnaces for homeowners from Toms River and Brick to Freehold, Howell, Old Bridge, and Edison. Our local crews know the homes and systems common to the area and deliver honest, flat-rate pricing on every job.</p>"],
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
                        'intro' => "<p>Reliable boiler repair in NJ keeps your home warm when you need it most. Guardian Air services hot water and steam boilers of every age across Monmouth, Middlesex, and Ocean counties — from Red Bank to Lakewood — fixing leaks, low pressure, and no-heat problems fast, with upfront flat-rate pricing.</p>",
                        'highlights' => ['Hot water & steam boilers', 'Leak & pressure diagnostics', 'No-heat emergency service', 'Repair or replace guidance'],
                        'sections' => [
                            ['heading' => 'Boiler Repair in NJ', 'body' => "<p>Boilers deliver steady, comfortable radiant heat — until a leak, low pressure, a failed circulator pump, or a faulty control leaves you in the cold. Our licensed technicians diagnose the real problem and repair it on the spot whenever possible, restoring safe, reliable warmth, and we'll quote it against typical <a href='/cost-guides/furnace-repair-cost'>heating repair costs</a>.</p><p>We service boilers across central New Jersey with honest quotes and clean workmanship, and we offer emergency service when your heat goes out.</p>"],
                            ['heading' => 'Boiler Types We Service', 'body' => "<p>We repair and maintain every common residential boiler type: natural gas, oil, and electric; hot water (hydronic) and steam systems; and high-efficiency condensing boilers. Whether your home in Freehold or Toms River runs cast-iron radiators, baseboard, or in-floor radiant heat, we have the parts and expertise to fix it.</p>"],
                            ['heading' => 'Boiler Maintenance', 'body' => "<p>Annual boiler maintenance prevents the most common breakdowns and keeps your system running efficiently, much like a yearly <a href='/heating/furnace-tune-up'>furnace tune-up</a>. We check pressure and water levels, inspect for leaks and corrosion, test safety controls, and clean key components — protecting your investment and your warranty.</p>"],
                            ['heading' => 'Boiler Service in Monmouth, Middlesex & Ocean Counties', 'body' => "<p>Guardian Air keeps boilers running for families across <a href='/service-areas/monmouth-county'>Monmouth</a>, Middlesex, and Ocean counties — Red Bank, Middletown, New Brunswick, Lakewood, and the towns nearby. Because our technicians are local, help arrives faster when your heat fails.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does boiler repair cost in NJ?', 'a' => 'Most boiler repairs in New Jersey range from about $200 to $700 depending on the failed part — a circulator pump, valve, or control board, for example. You approve a flat-rate price before we pick up a wrench.'],
                            ['q' => 'What are common boiler problems?', 'a' => 'The most common issues are low pressure, leaks from valves or fittings, a failed circulator pump, no heat from a faulty control or thermostat, and strange banging (kettling) from scale buildup. We diagnose and fix all of these.'],
                            ['q' => 'Is my boiler worth repairing, or should I replace it?', 'a' => 'Most boiler problems are repairable. A leaking heat exchanger or a unit over 15–20 years old with frequent failures usually points to replacement. We give you a straight repair-or-replace answer based on the numbers.'],
                            ['q' => 'How often should a boiler be serviced?', 'a' => 'Once every year, best scheduled in early fall before you fire it up for the season. A yearly service keeps the boiler efficient, catches scale and leaks early, and heads off a mid-winter no-heat call.'],
                        ],
                    ],
                    'heat-pump' => [
                        'name' => 'Heat Pump Service',
                        'title' => 'Heat Pump Installation & Repair in NJ | Guardian Air',
                        'description' => 'Considering heat pump installation in NJ? Guardian Air installs & repairs energy-efficient heat pumps across Monmouth, Middlesex & Ocean counties. Call today!',
                        'h1' => 'Heat Pump Installation & Repair in New Jersey',
                        'intro' => "<p>Professional heat pump installation in NJ delivers efficient heating and cooling from a single system. Guardian Air installs, repairs, and maintains heat pumps across Monmouth, Middlesex, and Ocean counties — from Toms River to Old Bridge — for dependable year-round comfort and lower energy bills.</p>",
                        'highlights' => ['Install, repair & replace', 'Year-round heating & cooling', 'Energy-efficient systems', 'Rebates & financing'],
                        'sections' => [
                            ['heading' => 'Heat Pump Installation in NJ', 'body' => "<p>A properly sized, professionally installed heat pump is one of the most efficient ways to heat and cool a New Jersey home. We help you choose between air-source and <a href='/cooling/ductless-mini-split'>ductless (mini-split) systems</a>, perform a load calculation for correct sizing, and install it cleanly with a clear, flat-rate quote.</p><p>We install heat pumps across central New Jersey, handling permitting and code compliance so the job is documented and warranty-backed.</p>"],
                            ['heading' => 'How Heat Pumps Work', 'body' => "<p>Instead of burning fuel, a heat pump moves heat — pulling warmth from outdoor air into your home in winter and reversing in summer to cool, which can replace a separate <a href='/cooling/ac-installation'>central air conditioner</a>. Because it transfers heat rather than generating it, a heat pump can deliver several times more energy than it consumes, which is why it's so efficient.</p>"],
                            ['heading' => 'Efficiency & Savings', 'body' => "<p>Modern heat pumps carry high SEER2 (cooling) and HSPF2 (heating) ratings, often cutting energy use compared with older systems and electric resistance heat. Pairing one system for heating and cooling also simplifies maintenance and can qualify for valuable rebates and tax incentives — ask about current <a href='/offers'>seasonal offers</a>.</p>"],
                            ['heading' => 'Cold-Climate Performance, Repair & Service', 'body' => "<p>Today's cold-climate heat pumps perform efficiently well below freezing, making them a strong fit for New Jersey winters. We also repair and tune up existing heat pumps — addressing refrigerant, defrost, and airflow issues — across Monmouth, Middlesex, and Ocean counties, including Freehold, Brick, Red Bank, and Lakewood.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does heat pump installation cost in NJ?', 'a' => 'Heat pump installation in New Jersey typically ranges from about $5,000 to $12,000 depending on system type (ducted or ductless), capacity, and the number of zones. We give you a free written quote, and financing is available to spread the cost.'],
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
                        'intro' => "<p>A professional furnace tune up in NJ keeps your heating system safe, efficient, and reliable all winter. Guardian Air provides multi-point furnace maintenance across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — catching small problems before they become no-heat emergencies.</p>",
                        'highlights' => ['Multi-point safety inspection', 'Prevents winter breakdowns', 'Improves energy efficiency', 'Maintenance plans available'],
                        'sections' => [
                            ['heading' => 'Furnace Tune-Up in NJ', 'body' => "<p>Most no-heat emergencies are preventable with a short annual tune-up that costs far less than a <a href='/heating/furnace-replacement'>full furnace replacement</a>. Our licensed technicians inspect, clean, and test your furnace so it runs safely and efficiently through the coldest months — and we recommend scheduling in early fall, before the first cold snap.</p><p>We provide furnace tune-ups across central New Jersey with flat-rate pricing and no upsells.</p>"],
                            ['heading' => 'What a Furnace Tune-Up Covers', 'body' => "<p>Our multi-point tune-up covers the components that matter: we inspect and clean the burners and flame sensor, check the heat exchanger for cracks, test the ignition and safety controls, verify gas pressure and airflow, replace or check the filter, and run a carbon monoxide safety check — then give you a clear report on your system's condition, including any <a href='/heating/boiler-repair'>boiler concerns</a> we spot.</p>"],
                            ['heading' => 'HVAC Maintenance Plans', 'body' => "<p>Our maintenance plans bundle your annual heating and <a href='/cooling/ac-tune-up'>cooling tune-ups</a> with priority scheduling and discounts on repairs. It's the easiest way to protect your equipment, keep warranties valid, and never forget seasonal service — popular with homeowners in Brick, Old Bridge, and Red Bank.</p>"],
                            ['heading' => 'Why It Matters & Where We Serve', 'body' => "<p>Regular maintenance prevents breakdowns, lowers energy bills, extends equipment life, and keeps your family safe. We tune up furnaces throughout Monmouth, Middlesex, and Ocean counties, from Howell and Freehold to Toms River, Old Bridge, and Lakewood.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a furnace tune-up cost in NJ?', 'a' => 'A single furnace tune-up in New Jersey typically runs about $100 to $200, and is often discounted or included with a maintenance plan. We quote the price upfront with no hidden fees.'],
                            ['q' => 'When should I schedule a furnace tune-up?', 'a' => 'Plan on one tune-up a year, ideally in early fall before the first cold snap. Catching a worn igniter or dirty burner now is far cheaper than a no-heat repair in January.'],
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
                        'intro' => "<p>Professional AC installation in NJ gives you years of reliable, low-cost cooling — when the system is sized and installed correctly. Guardian Air installs central air and high-efficiency systems for homeowners <a href='/service-areas'>across Monmouth, Middlesex, and Ocean counties</a>, from Toms River to Freehold, with a clear, written quote and no pressure.</p>",
                        'highlights' => ['Free installation estimates', 'Properly sized systems', 'High-efficiency central air', 'Flexible financing'],
                        'sections' => [
                            ['heading' => 'AC Installation in NJ', 'body' => "<p>Whether you're replacing a worn-out unit or adding cooling to a home that never had it, our licensed technicians handle the entire installation — from load calculation to startup and testing. We install central air, <a href='/heating/heat-pump'>heat pumps</a>, and ductless systems from every major brand.</p><p>Every installation begins with a free in-home assessment and a flat-rate quote, so you know exactly what you're paying before any work starts.</p>"],
                            ['heading' => 'Central Air Installation', 'body' => "<p>Central air conditioning cools your whole home evenly and quietly through your existing ductwork. We install efficient condensers, coils, and air handlers matched to your home, and we inspect and seal ductwork so you don't lose cooling to leaks — pairing well with professional duct cleaning.</p><p>If your home doesn't have ducts, we'll walk you through <a href='/cooling/ductless-mini-split'>ductless options</a> too.</p>"],
                            ['heading' => 'Sizing Your System', 'body' => "<p>Proper sizing is the single biggest factor in comfort and efficiency. An undersized AC runs constantly and struggles on the hottest days; an oversized one short-cycles, wastes energy, and leaves humidity behind — which a whole-home dehumidifier can help manage. We perform a Manual J load calculation based on your home's square footage, insulation, windows, and layout to size the system right.</p>"],
                            ['heading' => 'Financing', 'body' => "<p>A new air conditioner is a major purchase, so we offer flexible financing to fit your budget — see current <a href='/offers'>offers</a> — and we help you take advantage of manufacturer rebates and New Jersey energy-efficiency incentives on qualifying high-efficiency systems.</p>"],
                            ['heading' => 'Central Air Installation Near You', 'body' => "<p>Guardian Air installs central air and ductless systems for homes in Brick, Point Pleasant, Lakewood, Aberdeen, Woodbridge, and across the region. Local technicians mean a smooth install day and fast follow-up service whenever you need it.</p>"],
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
                        'intro' => "<p>Ductless AC installation in NJ delivers efficient, room-by-room comfort without any ductwork. Guardian Air sizes, installs, and services ductless mini-split systems for homeowners across Monmouth, Middlesex, and Ocean counties — from <a href='/cooling/old-bridge'>Old Bridge</a> to Toms River — for quiet, energy-saving heating and cooling.</p>",
                        'highlights' => ['No ductwork required', 'Room-by-room control', 'Heating & cooling in one', 'Quiet, efficient operation'],
                        'sections' => [
                            ['heading' => 'Ductless Mini-Splits in NJ', 'body' => "<p>A ductless mini-split pairs a small outdoor unit with one or more indoor air handlers, delivering targeted heating and cooling without ducts — a great alternative to <a href='/cooling/ac-installation'>traditional central air</a>. Our licensed technicians install single-zone and multi-zone systems cleanly, with a flat-rate quote upfront.</p><p>We install ductless systems across central New Jersey for homes of every age and layout.</p>"],
                            ['heading' => 'Where They Fit (Older Homes, Additions)', 'body' => "<p>Ductless mini-splits shine where traditional ducted AC can't easily go: older homes in Red Bank or Freehold without existing ductwork, finished attics and basements, garages, sunrooms, and home additions. They're also great for cooling a single hot room or adding zoned comfort to specific areas.</p>"],
                            ['heading' => 'Benefits', 'body' => "<p>Because there are no ducts to leak, mini-splits are extremely efficient — often the lowest-operating-cost option available. Each zone has its own thermostat for personalized comfort, they run very quietly, and they provide both heating and cooling from one system year-round, much like an air-source <a href='/heating/heat-pump'>heat pump</a>.</p>"],
                            ['heading' => 'Installation & Serving 3 Counties', 'body' => "<p>We handle sizing, mounting, and refrigerant line work for a clean, professional install — most completed in a day. Guardian Air installs ductless mini-splits across Monmouth, Middlesex, and Ocean counties, including Toms River, Brick, Old Bridge, and Lakewood.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a ductless mini-split cost in NJ?', 'a' => 'A single-zone ductless system in New Jersey typically runs about $3,500 to $6,000 installed, while multi-zone systems cost more depending on the number of indoor units. We quote it free in writing, with financing available.'],
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
                        'intro' => "<p>A professional AC tune up in NJ keeps your system cooling efficiently when you need it most. Guardian Air provides multi-point air conditioner maintenance across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — catching small problems before they become summer breakdowns.</p>",
                        'highlights' => ['Coil cleaning & inspection', 'Refrigerant level check', 'Prevents summer breakdowns', 'Maintenance plans available'],
                        'sections' => [
                            ['heading' => 'AC Tune-Up in NJ', 'body' => "<p>Most summer AC failures are preventable with a short annual tune-up that costs a fraction of a new <a href='/cooling/ac-installation'>AC installation</a>. Our licensed technicians clean, inspect, and test your system so it runs efficiently through the hottest months — and we recommend scheduling in early spring, before the first heatwave.</p><p>We provide AC tune-ups across central New Jersey with flat-rate pricing and no upsells.</p>"],
                            ['heading' => 'What an AC Tune-Up Covers', 'body' => "<p>Our multi-point tune-up covers the components that matter: we clean the condenser and evaporator coils, check refrigerant levels, test the capacitor and electrical connections, clear the condensate drain, inspect the blower, replace or check the filter, and verify the system is cooling efficiently — and we'll flag any repair against typical <a href='/cost-guides/ac-repair-cost'>AC repair costs</a>.</p>"],
                            ['heading' => 'Pre-Summer Checklist', 'body' => "<p>Before the heat hits, we make sure your AC is ready: clear debris from the outdoor unit, confirm proper airflow, calibrate the thermostat, and flag any worn parts so you can address them on your schedule — not during a 95-degree emergency. Book your spring tune-up early to lock in a convenient slot.</p>"],
                            ['heading' => 'Maintenance Plans & Service Area', 'body' => "<p>Our maintenance plans bundle your seasonal cooling and <a href='/heating/furnace-tune-up'>heating tune-ups</a> with priority scheduling and repair discounts. Guardian Air serves Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does an AC tune-up cost in NJ?', 'a' => 'Expect about $100 to $200 for a standalone AC tune-up in New Jersey, and less when it is bundled into a maintenance plan. We give you the price upfront, with no hidden fees or surprise add-ons.'],
                            ['q' => 'How often should I tune up my AC?', 'a' => 'Once a year is ideal, scheduled in early spring before the first heatwave. A yearly visit keeps efficiency up, surfaces small problems early, and helps you avoid a breakdown during peak summer.'],
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
                        'intro' => "<p>When water is pouring through your ceiling at midnight, you need an emergency plumber in NJ who actually answers. Guardian Air provides 24/7 licensed and insured emergency plumbing across <a href='/service-areas'>Monmouth, Middlesex, and Ocean counties</a> — from Toms River to Freehold — responding fast to stop the damage and get your home back to normal.</p>",
                        'highlights' => ['24/7 emergency response', 'Burst pipes & major leaks', 'Fast water shutoff & repair', 'Flat-rate pricing, even after hours'],
                        'sections' => [
                            ['heading' => 'Emergency Plumber NJ', 'body' => "<p>Plumbing emergencies never wait for business hours. Our licensed plumbers respond day or night to burst pipes, overflowing toilets, sewage backups, and no-water situations — arriving stocked to handle most repairs on the first visit.</p><p>We serve homeowners across central New Jersey with honest, flat-rate pricing benchmarked to typical <a href='/cost-guides/plumber-cost'>plumber costs</a>, so you'll never pay extra for nights, weekends, or holidays.</p>"],
                            ['heading' => '24 Hour Plumber', 'body' => "<p>As a true 24 hour plumber, we keep technicians on call around the clock. Save our number now so that when a pipe bursts in Brick or a <a href='/plumbing/water-heater'>water heater fails</a> in Old Bridge, help is one call away — not a voicemail you won't hear back from until morning.</p>"],
                            ['heading' => 'What Counts as a Plumbing Emergency', 'body' => "<p>Call immediately for burst or frozen pipes, major <a href='/plumbing/leak-detection'>leaks</a>, sewage backups, no water, a gas-line odor, or an overflowing toilet you can't stop. These can cause fast, expensive damage. For dripping faucets or a single slow drain, same-day or next-day service is usually fine — and we'll tell you honestly which one you have.</p>"],
                            ['heading' => 'Our Response Time', 'body' => "<p>Because our plumbers are local to Monmouth, Middlesex, and Ocean counties, we can often reach you within the hour for true emergencies. The first thing we'll do is help you shut off the water to limit damage, then diagnose and repair the problem with a clear, flat-rate quote.</p>"],
                            ['heading' => '24/7 Emergency Plumbing Across the Shore', 'body' => "<p>Guardian Air answers emergency calls day and night in Toms River, Brick, Howell, Middletown, Perth Amboy, and the surrounding towns. Because our plumbers live and work nearby, help reaches you faster when every minute counts.</p>"],
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
                        'intro' => "<p>Reliable water heater repair in NJ gets your hot water back fast. Guardian Air repairs, replaces, and installs both tank and tankless water heaters for homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Old Bridge — with upfront, flat-rate pricing.</p>",
                        'highlights' => ['Tank & tankless service', 'Repair or replace guidance', 'Fast, clean installation', 'Reliable hot water restored'],
                        'sections' => [
                            ['heading' => 'Water Heater Repair in NJ', 'body' => "<p>No hot water, rusty water, popping noises, or a leaking tank? Our licensed plumbers diagnose the real cause — a failed heating element, thermostat, anode rod, or valve — and repair it fast, often for less than typical <a href='/cost-guides/plumber-cost'>plumber costs</a>.</p><p>We service every major brand of gas, electric, and tankless water heater across <a href='/service-areas'>central New Jersey</a> with honest, flat-rate quotes.</p>"],
                            ['heading' => 'Water Heater Replacement', 'body' => "<p>When a tank is leaking from the bottom or simply past its prime, replacement is the smart move. We help you choose the right size and type — including efficient <a href='/plumbing/tankless-water-heater'>tankless models</a> — haul away the old unit, and install the new one cleanly and to code, usually the same day.</p>"],
                            ['heading' => 'Signs of Failure', 'body' => "<p>Watch for water that never gets hot enough or runs out quickly, rusty or discolored hot water, rumbling or popping sounds from sediment, moisture or rust around the base, and rising energy bills. Catching these early often means a simple repair instead of calling an <a href='/plumbing/emergency-plumber'>emergency plumber</a> for water damage from a burst tank.</p>"],
                            ['heading' => 'Tank vs Tankless', 'body' => "<p>A tank water heater costs less upfront and lasts 8–12 years. A tankless unit delivers endless hot water on demand, takes up far less space, and can last 20+ years. We'll explain the trade-offs and help you pick what fits your home and budget.</p>"],
                            ['heading' => 'Water Heater Service in Your Town', 'body' => "<p>Guardian Air repairs and replaces tank and tankless water heaters for homeowners in Freehold, Edison, Old Bridge, Lakewood, Barnegat, and beyond — always with fast, friendly, local service.</p>"],
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
                        'intro' => "<p>A tankless water heater in NJ delivers endless hot water on demand while saving space and energy. Guardian Air sizes and installs high-efficiency tankless systems for homeowners across <a href='/service-areas/monmouth-county'>Monmouth</a>, Middlesex, and Ocean counties — from Toms River to Freehold — with a clear, flat-rate quote.</p>",
                        'highlights' => ['Endless hot water on demand', 'Lower energy bills', 'Space-saving design', 'Longer lifespan than tanks'],
                        'sections' => [
                            ['heading' => 'Tankless Water Heaters in NJ', 'body' => "<p>Unlike a <a href='/plumbing/water-heater'>traditional tank that constantly reheats stored water</a>, a tankless unit heats water only when you need it. Our licensed plumbers install gas and electric tankless systems from every major brand across central New Jersey, handling venting, gas, and code compliance for a clean, professional result.</p>"],
                            ['heading' => 'Benefits vs Tank', 'body' => "<p>Tankless systems never run out of hot water during back-to-back showers, use less energy because there's no standby heat loss, free up valuable floor space, and typically last 20+ years — roughly double a conventional tank's lifespan. Many models also qualify for rebates and tax incentives.</p>"],
                            ['heading' => 'Installation', 'body' => "<p>Switching from a tank to tankless can involve upgrading the gas line and venting, which is why professional installation matters. We assess your home, size the unit to your hot-water demand, and install it to code — most jobs completed in a day, so <a href='/contact'>schedule your estimate</a> to get started.</p>"],
                            ['heading' => 'Sizing & Serving 3 Counties', 'body' => "<p>Proper sizing (measured in gallons per minute) ensures the unit keeps up with your household. We get it right the first time and serve Monmouth, Middlesex, and Ocean counties, including Toms River, Brick, Old Bridge, and Lakewood.</p>"],
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
                        'intro' => "<p>Professional leak detection in NJ finds hidden leaks before they cause thousands in damage. Guardian Air uses non-invasive equipment to pinpoint leaks behind walls, under floors, and in slabs for homeowners across Monmouth, Middlesex, and Ocean counties — from Toms River to Red Bank — then repairs the source fast.</p>",
                        'highlights' => ['Non-invasive detection', 'Finds hidden & slab leaks', 'Stops costly water damage', 'Permanent repairs'],
                        'sections' => [
                            ['heading' => 'Leak Detection in NJ', 'body' => "<p>A hidden leak can quietly rot framing, ruin drywall, and spike your water bill for months. Our licensed plumbers use acoustic sensors, thermal imaging, and pressure testing to locate the exact source — no demolition guesswork — then repair it cleanly, calling in an <a href='/plumbing/emergency-plumber'>emergency plumber</a> if a pipe has already burst.</p><p>Watch for an unexplained jump in your water bill, the sound of running water when everything is off, damp spots or stains, low pressure, or a musty smell that may point to <a href='/indoor-air-quality/mold-testing'>hidden mold</a>.</p>"],
                            ['heading' => 'Slab Leaks', 'body' => "<p>Leaks in the pipes beneath your concrete slab are especially damaging and hard to spot. Signs include warm spots on the floor, cracks, and the sound of running water. We locate slab leaks precisely and repair or reroute the line with minimal disruption — and if the line ties into your <a href='/drains/sewer-repair'>main sewer</a>, we handle that too.</p>"],
                            ['heading' => 'Burst Pipes', 'body' => "<p>From frozen winter pipe bursts to corroded older lines, we repair and replace damaged pipe fast — and our 24/7 emergency team responds the moment a line lets go. For aging galvanized or polybutylene plumbing common in older New Jersey homes, we offer repiping with modern, long-lasting materials.</p>"],
                            ['heading' => 'Non-Invasive Detection & Service Area', 'body' => "<p>Our goal is to find the leak with the least possible disruption to your home. Guardian Air provides leak detection and pipe repair across Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, Old Bridge, Red Bank, and Lakewood.</p>"],
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
                        'intro' => "<p>Professional air duct cleaning in NJ clears the dust, pollen, and debris that build up inside your ductwork and recirculate through every room. Guardian Air cleans residential duct systems across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — so your system runs efficiently and the air your family breathes is noticeably cleaner.</p>",
                        'highlights' => ['Removes dust & allergens', 'Improves airflow & efficiency', 'Reduces household dust', 'Healthier air in every room'],
                        'sections' => [
                            ['heading' => 'Air Duct Cleaning in NJ', 'body' => "<p>Over years of use, ductwork collects dust, pet dander, pollen, and construction debris that your system pushes back into your living space every time it runs. Our technicians clean the full system — supply and return ducts, registers, and the air handler — leaving your home cleaner across central New Jersey.</p><p>We provide honest, flat-rate quotes and treat your home with care — and if you'd like a written estimate, just get in touch to schedule.</p>"],
                            ['heading' => 'Our Process', 'body' => "<p>We use professional negative-air equipment and agitation tools to dislodge and capture debris without scattering it through your home. We protect floors and furnishings, clean each vent and trunk line, sanitize where needed, and verify airflow when we're done — a thorough job, not a quick vacuum at the register. Wondering what it costs? See our <a href='/cost-guides/duct-cleaning-cost'>duct cleaning cost guide</a>.</p>"],
                            ['heading' => 'Health & Efficiency Benefits (Up to 30%)', 'body' => "<p>Clean ducts mean fewer airborne irritants for allergy and asthma sufferers, less dust resettling on surfaces, and fresher-smelling air. Pairing a cleaning with a whole-home <a href='/indoor-air-quality/air-purifier'>air purifier</a> can capture even more. Clearing blocked ducts also restores airflow, which can improve HVAC efficiency by up to 30% — lowering energy bills and easing strain on your system.</p>"],
                            ['heading' => 'Before & After', 'body' => "<p>Most homeowners are surprised by what comes out of their ducts — years of gray dust, pet hair, and debris. After cleaning, vents deliver stronger, cleaner airflow, and the difference in household dust is often noticeable within days. If you also notice musty odors, ask about <a href='/indoor-air-quality/mold-testing'>mold testing</a>.</p>"],
                            ['heading' => 'Air Duct Cleaning in Monmouth County', 'body' => "<p>We're a popular choice for air duct cleaning in <a href='/service-areas/monmouth-county'>Monmouth County</a>, serving Freehold, Red Bank, Middletown, and Howell. The area's mix of older homes and humid summers makes regular duct cleaning especially worthwhile for cleaner, healthier air.</p>"],
                            ['heading' => 'Duct Cleaning Throughout Central NJ', 'body' => "<p>Guardian Air cleans duct systems in homes across Toms River, Howell, Edison, Middletown, Jackson, and the towns around them. Local technicians mean easy scheduling and friendly, on-time service.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How long does air duct cleaning take?', 'a' => 'Most whole-home duct cleanings take two to four hours, depending on the size of your home, the number of vents, and the level of buildup. We protect your floors and furnishings and verify airflow before we finish.'],
                            ['q' => 'What are the signs my ducts need cleaning?', 'a' => 'Watch for visible dust puffing from vents, excessive household dust, musty odors when the system runs, allergy flare-ups indoors, or visible debris and pet hair in the registers.'],
                            ['q' => 'Does duct cleaning really improve air quality?', 'a' => 'Yes — removing accumulated dust, dander, and debris reduces the irritants recirculated through your home, which is especially helpful for allergy and asthma sufferers, and it can improve airflow and efficiency.'],
                            ['q' => 'What pollutants are common in New Jersey homes?', 'a' => "Inside ductwork you'll mostly find settled dust, pet dander, pollen, drywall and construction debris, and mold wherever moisture collects. Each time the system runs, those particles get pushed back out into your rooms."],
                            ['q' => 'Can mold grow in air ducts?', 'a' => 'Yes. Humidity and condensation in ductwork can lead to mold growth, which then spreads spores through your home. If we find signs of mold, we recommend mold testing and the right remediation plan.'],
                            ['q' => 'How often should air ducts be cleaned?', 'a' => 'Most homes benefit from duct cleaning every three to five years, and sooner if you have pets, allergies, recent renovations, or signs of mold or heavy dust.'],
                        ],
                    ],
                    'mold-testing' => [
                        'name' => 'Mold Testing',
                        'title' => 'Mold Testing & Detection in NJ | Guardian Air',
                        'description' => 'Need mold testing in NJ? Guardian Air detects hidden mold & moisture across Monmouth, Middlesex & Ocean counties. Licensed & insured — call today!',
                        'h1' => 'Mold Testing & Detection in New Jersey',
                        'intro' => "<p>Professional mold testing in NJ finds the hidden moisture and mold behind musty odors and persistent allergy symptoms. Guardian Air assesses indoor air quality across Monmouth, Middlesex, and Ocean counties — from Toms River to Red Bank — and gives you a clear plan to fix the problem at its source.</p>",
                        'highlights' => ['Identifies hidden moisture', 'Clear, honest assessment', 'Targeted remediation plan', 'Healthier indoor air'],
                        'sections' => [
                            ['heading' => 'Mold Testing in NJ', 'body' => "<p>Musty smells, allergy flare-ups, and visible spots all point to a possible mold problem. We assess your home, identify moisture sources and affected areas, and recommend the right mix of remediation, filtration, ventilation, and <a href='/indoor-air-quality/humidifier-dehumidifier'>humidity control</a>.</p><p>We serve homeowners across central New Jersey with honest, clear assessments — no scare tactics.</p>"],
                            ['heading' => 'Mold in HVAC Ducts', 'body' => "<p>Ductwork is a common hiding place for mold because condensation and humidity collect there, then spores spread to every room. We check your duct system and air handler, and pair testing with <a href='/indoor-air-quality/duct-cleaning'>air duct cleaning</a> when mold is present.</p>"],
                            ['heading' => 'Coastal Humidity & Mold', 'body' => "<p>New Jersey's humid summers — especially near the <a href='/service-areas/ocean-county'>Ocean County</a> shore in Toms River and Brick — create ideal conditions for mold. Homes with basements, crawl spaces, or past water damage are particularly at risk, which is why humidity control matters.</p>"],
                            ['heading' => 'When to Test & Serving 3 Counties', 'body' => "<p>Test after water damage or flooding, when you notice musty odors or unexplained symptoms, or before buying a home. Guardian Air serves Monmouth, Middlesex, and Ocean counties, including Freehold, Old Bridge, Red Bank, and Lakewood.</p>"],
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
                        'intro' => "<p>Professional air purifier installation in NJ captures allergens, dust, smoke, and microscopic particles before they circulate through your home. Guardian Air installs whole-home purifiers, UV systems, and advanced filtration across Monmouth, Middlesex, and Ocean counties — from Toms River to <a href='/service-areas/old-bridge'>Old Bridge</a>.</p>",
                        'highlights' => ['Whole-home & UV options', 'Captures microscopic particles', 'Reduces allergens & odors', 'Works with your HVAC system'],
                        'sections' => [
                            ['heading' => 'Air Purifier Installation in NJ', 'body' => "<p>A whole-home air purifier installs directly into your HVAC system, treating all the air your system moves — far more effective than a portable unit in one room. We size and install the right solution for your home and concerns across central New Jersey.</p><p>We explain your options clearly and provide an upfront, flat-rate quote — contact us to set up a visit.</p>"],
                            ['heading' => 'UV Germicidal Systems', 'body' => "<p>UV germicidal lights installed at the coil neutralize <a href='/indoor-air-quality/mold-testing'>mold</a>, bacteria, and viruses as air passes through, keeping your system cleaner and the circulating air healthier — a great fit for homes dealing with humidity and mold in the Ocean County shore area.</p>"],
                            ['heading' => 'HEPA Filtration', 'body' => "<p>High-efficiency media and HEPA-style filtration captures fine particles — dust, pollen, dander, and smoke — that standard one-inch filters miss. Pairing it with <a href='/indoor-air-quality/duct-cleaning'>duct cleaning</a> keeps the whole system clean, and we make sure any upgrade is matched to your system so airflow stays healthy.</p>"],
                            ['heading' => 'Air Scrubbers & Serving 3 Counties', 'body' => "<p>Active air-scrubbing systems treat both the air and surfaces throughout your home. Guardian Air installs air purifiers across Monmouth, Middlesex, and Ocean counties, including Toms River, Freehold, Brick, and Lakewood.</p>"],
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
                        'intro' => "<p>A whole home humidifier in NJ — or a dehumidifier for damp summers — keeps your home at a healthy, comfortable balance year-round. Guardian Air installs whole-home humidity control across Monmouth, Middlesex, and Ocean counties, from Toms River to <a href='/service-areas/freehold'>Freehold</a>.</p>",
                        'highlights' => ['Balanced year-round humidity', 'Protects health & comfort', 'Prevents mold & dry air', 'Whole-home solutions'],
                        'sections' => [
                            ['heading' => 'Whole-Home Humidifiers', 'body' => "<p>Dry winter air causes static, cracked skin, irritated sinuses, and damage to woodwork and furniture. A whole-home humidifier installs into your HVAC system to add balanced moisture throughout the house automatically — no refilling portable units. We install and service them across central New Jersey.</p>"],
                            ['heading' => 'Dehumidifiers', 'body' => "<p>Too much moisture breeds <a href='/indoor-air-quality/mold-testing'>mold</a> and dust mites and leaves the air feeling heavy and clammy. A whole-home dehumidifier removes excess humidity to protect your home and comfort, especially valuable for basements and crawl spaces.</p>"],
                            ['heading' => 'Coastal Humidity (Ocean County)', 'body' => "<p>Homes near the shore in Toms River, Brick, and across <a href='/service-areas/ocean-county'>Ocean County</a> deal with high summer humidity that strains comfort and encourages mold. Whole-home humidity control keeps these homes healthier and more comfortable all season.</p>"],
                            ['heading' => 'Humidity Control for Homes Across NJ', 'body' => "<p>Guardian Air installs whole-home humidifiers and dehumidifiers throughout Monmouth, Middlesex, and Ocean counties — from Red Bank and Middletown to Woodbridge, Lakewood, and Barnegat — with honest, flat-rate pricing.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does a whole-home humidifier or dehumidifier cost in NJ?', 'a' => 'Installed, whole-home humidifiers in New Jersey typically run about $400 to $1,000, while whole-home dehumidifiers range from about $1,500 to $2,800 depending on capacity. We put the price in writing, free, before you commit.'],
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
                        'intro' => "<p>Professional sewer repair in NJ stops the repeat backups, foul odors, and health hazards a failing line causes. Guardian Air repairs and replaces cracked, collapsed, and root-invaded sewer lines across Monmouth, Middlesex, and Ocean counties — from Toms River to Freehold — and restores reliable flow with upfront, flat-rate pricing.</p>",
                        'highlights' => ['Cracked & collapsed lines', 'Root intrusion repair', 'Trenchless options', 'Camera-verified results'],
                        'sections' => [
                            ['heading' => 'Sewer Repair in NJ', 'body' => "<p>When sewage backs up repeatedly or you smell it in the yard, the problem is usually in the main line. Our licensed technicians start with a <a href='/drains/camera-inspection'>camera inspection</a> to pinpoint the exact cause and location, then repair the line — often without tearing up your whole yard.</p><p>We serve homeowners across central New Jersey with honest assessments and flat-rate quotes, not guesswork.</p>"],
                            ['heading' => 'Sewer Line Replacement', 'body' => "<p>When a line is too damaged to repair — collapsed, badly corroded, or invaded by roots throughout — full replacement is the lasting fix. We remove and replace failing sections (or the entire run) with durable modern materials and verify the result with a camera inspection.</p>"],
                            ['heading' => 'Trenchless Options', 'body' => "<p>Where conditions allow, trenchless methods like pipe lining and pipe bursting let us repair or replace your sewer with minimal digging — protecting driveways, landscaping, and walkways. It's faster, cleaner, and often more cost-effective than traditional excavation — see our <a href='/cost-guides/drain-cleaning-cost'>drain cleaning cost guide</a> for pricing context.</p>"],
                            ['heading' => 'Signs You Need Replacement', 'body' => "<p>Watch for multiple drains backing up at once, gurgling toilets, sewage odors, soggy or unusually green patches in the yard, and recurring clogs that keep coming back. A <a href='/drains/hydro-jetting'>hydro jetting</a> service can sometimes clear stubborn buildup, but many older New Jersey homes have clay or cast-iron lines that crack and attract roots over decades.</p>"],
                            ['heading' => 'Sewer Repair in Your Neighborhood', 'body' => "<p>Guardian Air repairs and replaces sewer lines for homes in Brick, Lakewood, Howell, Old Bridge, Point Pleasant, and nearby towns. Need a faster clean-out first? Ask about <a href='/drains/hydro-jetting'>hydro jetting</a>.</p>"],
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
                        'intro' => "<p>Professional hydro jetting in NJ uses high-pressure water to scrub the inside of your pipes completely clean — blasting away the grease, scale, and roots that snaking leaves behind. Guardian Air provides hydro jetting across Monmouth, Middlesex, and Ocean counties, from Toms River to Old Bridge, for stubborn and recurring clogs.</p>",
                        'highlights' => ['Clears grease, scale & roots', 'Best for recurring clogs', 'Scours pipes like new', 'Safe for healthy pipes'],
                        'sections' => [
                            ['heading' => 'Hydro Jetting in NJ', 'body' => "<p>Hydro jetting sends water through a specialized nozzle at up to 4,000 PSI, scouring the full diameter of the pipe rather than just punching a hole through a clog. For a line that's actually damaged, a <a href='/drains/sewer-repair'>sewer repair</a> may be the better fix, but for buildup the result is a like-new line that flows freely and stays clear far longer.</p><p>We provide hydro jetting across central New Jersey with flat-rate pricing, often pairing it with a <a href='/drains/camera-inspection'>camera inspection</a> to confirm the line is fully clear.</p>"],
                            ['heading' => 'Jetting vs Snaking', 'body' => "<p>Snaking is great for breaking through a single clog quickly and is sometimes all you need. Hydro jetting cleans the entire interior of the pipe — removing built-up grease, scale, and roots — so for recurring or severe clogs, it delivers a far more thorough and longer-lasting result. Curious about pricing? See our <a href='/cost-guides/drain-cleaning-cost'>drain cleaning cost guide</a>.</p>"],
                            ['heading' => 'When You Need It', 'body' => "<p>Consider hydro jetting for repeat clogs in the same line, grease buildup in kitchen lines, root intrusion, or slow main-line drainage. It's also ideal as preventive maintenance for restaurants and older homes prone to buildup — and a camera inspection first confirms it's the right approach.</p>"],
                            ['heading' => 'Hydro Jetting Across Three Counties', 'body' => "<p>Guardian Air jets clogged lines clean in Toms River, Edison, Freehold, Jackson, Lakewood, and the surrounding area. For a line that's actually damaged, ask about <a href='/drains/sewer-repair'>sewer repair</a> instead.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does hydro jetting cost in NJ?', 'a' => 'Hydro jetting in New Jersey typically ranges from about $400 to $800 depending on the line size, severity, and access. We provide a flat-rate quote upfront, and we often camera-inspect first to confirm it is the right approach.'],
                            ['q' => 'Is hydro jetting better than snaking?', 'a' => 'For recurring or severe clogs, yes. Snaking breaks through a single blockage, while hydro jetting cleans the entire pipe interior of grease, scale, and roots for a longer-lasting result. We recommend the right method for your situation.'],
                            ['q' => 'How often do drains need hydro jetting?', 'a' => 'For most homes, only as needed. Homes or businesses with recurring grease or root problems may benefit from preventive jetting every one to two years to avoid backups.'],
                        ],
                    ],
                    'camera-inspection' => [
                        'name' => 'Camera Inspection',
                        'title' => 'Video Camera Sewer Inspection in NJ | Guardian Air',
                        'description' => 'Need a video camera sewer inspection in NJ? Guardian Air diagnoses drains & sewers across Monmouth, Middlesex & Ocean counties. Licensed & insured — call!',
                        'h1' => 'Video Camera Drain & Sewer Inspection in New Jersey',
                        'intro' => "<p>A video camera sewer inspection in NJ shows the exact cause and location of a drain or sewer problem — no guesswork, no unnecessary digging. Guardian Air runs waterproof camera inspections across Monmouth, Middlesex, and Ocean counties, from Toms River to <a href='/service-areas/red-bank'>Red Bank</a>, so you know precisely what's wrong before spending a dollar on repairs.</p>",
                        'highlights' => ['See the real problem', 'Pinpoints exact location', 'No demolition guesswork', 'Verifies a clean line'],
                        'sections' => [
                            ['heading' => 'Camera Inspection in NJ', 'body' => "<p>We feed a high-resolution waterproof camera through your drain or sewer line and watch a live feed as it travels, locating clogs, cracks, bellies, and root intrusion. You see exactly what we see, and we can pinpoint the depth and position of any problem.</p><p>We serve homeowners across central New Jersey and often pair inspections with <a href='/drains/hydro-jetting'>hydro jetting</a> or repair.</p>"],
                            ['heading' => 'We Diagnose Before We Dig', 'body' => "<p>A camera inspection means no exploratory digging and no guesswork. We confirm the real issue first, so any <a href='/drains/sewer-repair'>sewer repair</a> is targeted and minimally invasive — saving you money and protecting your yard. It's also smart before buying a home.</p>"],
                            ['heading' => 'Root Intrusion', 'body' => "<p>Tree roots are a leading cause of sewer trouble in older New Jersey neighborhoods, growing into joints and cracks. A camera inspection confirms root intrusion and its location so we can clear it with hydro jetting and recommend a lasting fix.</p>"],
                            ['heading' => 'Camera Inspections Near You', 'body' => "<p>Guardian Air runs drain and sewer camera inspections for homeowners in Middletown, Brick, Old Bridge, Howell, Barnegat, and across the wider region.</p>"],
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
                        'h1' => 'Commercial HVAC Maintenance Contracts in New Jersey',
                        'intro' => "<p>A scheduled maintenance program protects your operation and your bottom line. We build custom preventative <a href='/commercial-hvac'>commercial HVAC</a> maintenance contracts with regular visits, priority response, and detailed service records so problems get caught before they become emergencies.</p>",
                        'highlights' => ['Custom scheduled visits', 'Priority emergency response', 'Documented service history', 'Lower long-term costs'],
                        'sections' => [
                            ['heading' => 'What Each Maintenance Visit Covers', 'body' => "<p>On every scheduled visit our technicians work a full checklist: we change or clean filters, tighten electrical connections, check refrigerant charge, clean condenser and evaporator coils, test belts and motors, flush condensate drains, and verify thermostat and control operation. Anything trending toward failure gets flagged in writing before it can strand you.</p><p>You receive a dated service report after each visit, so you always have documentation on hand for warranties, audits, and budgeting.</p>"],
                            ['heading' => 'Priority Dispatch, No Overtime Premiums', 'body' => "<p>When a covered system does go down, your call jumps to the front of our queue — ahead of one-off service requests — and you won't see an after-hours surcharge on the bill. For multi-site operators, that predictable response is the difference between a minor hiccup and a closed-for-the-day sign.</p><p>Need a fix outside your plan's scope? We quote it flat-rate first, just like our standard <a href='/commercial-hvac/repair'>commercial repair</a> service.</p>"],
                            ['heading' => 'Plans Built Around Your Equipment', 'body' => "<p>A storefront with two rooftop units doesn't need the same schedule as a facility running chillers and boilers, so we size each agreement to your equipment, runtime, and budget — usually two to four visits a year, timed for spring cooling and fall heating readiness.</p><p>We coordinate around your operating hours so maintenance never interrupts business, and we keep the same technicians on your account so they get to know your systems.</p>"],
                            ['heading' => 'The Return on Preventive Maintenance', 'body' => "<p>Maintained equipment runs more efficiently, fails far less often, and lasts years longer than neglected systems, which is why a contract usually pays for itself by heading off even one emergency breakdown and trimming monthly energy costs. It also keeps manufacturer warranties intact, since most require documented service to stay valid.</p>"],
                        ],
                        'faqs' => [
                            ['q' => "What's included in a maintenance plan?", 'a' => "Each plan covers scheduled multi-point visits — filters, coils, refrigerant, electrical, belts, drains, and controls — plus a written service report, priority dispatch, and no overtime surcharge on emergency calls. We tailor the visit count and scope to your equipment."],
                            ['q' => 'How often will you service my facility?', 'a' => "Most commercial plans run two to four visits a year, scheduled for spring cooling and fall heating readiness. Facilities with chillers, boilers, or heavy runtime may call for more frequent visits, which we map out when we build your plan."],
                            ['q' => 'Do maintenance-plan clients really get priority service?', 'a' => "Yes. On a contract, your service calls move ahead of one-off requests, so you're typically first in line during a heat wave or cold snap — often with a technician on-site the same day."],
                            ['q' => 'Does a maintenance contract help keep my warranty valid?', 'a' => "It does. Most manufacturers require documented annual maintenance to honor equipment warranties, and our dated service reports give you exactly that paper trail — protecting your investment if a major component ever fails."],
                        ],
                    ],
                    'repair' => [
                        'name' => 'Commercial HVAC Repair',
                        'title' => 'Commercial HVAC Repair in NJ | Guardian Air',
                        'description' => 'Fast commercial HVAC repair for offices, restaurants, retail, and multi-family buildings across New Jersey. 24/7 response, minimal downtime.',
                        'h1' => 'Commercial HVAC Repair in New Jersey',
                        'intro' => "<p>When your commercial HVAC fails, every minute of downtime costs money. We repair rooftop units, boilers, and chillers fast — diagnosing the real problem and getting your space comfortable again with minimal disruption to your business. Need a plan to prevent the next breakdown? Ask about <a href='/commercial-hvac/maintenance-contracts'>maintenance contracts</a>.</p>",
                        'highlights' => ['Rooftop units, boilers & chillers', '24/7 emergency response', 'Minimal business disruption', 'Licensed for commercial work'],
                        'sections' => [
                            ['heading' => 'Rooftop Unit (RTU) Repair', 'body' => "<p>Packaged rooftop units do the heavy lifting for most New Jersey commercial buildings, and when one quits, the whole floor feels it. Our technicians track down failed compressors, seized condenser fan motors, snapped belts, faulty economizers, and tripped safety switches, then make the fix up on the roof during the same visit whenever the part is on the truck.</p><p>We work on single and multi-zone RTUs from every major manufacturer, and we test the economizer and control wiring before we leave so the unit runs efficiently rather than just barely keeping up.</p>"],
                            ['heading' => 'Chiller, Boiler & Refrigeration Service', 'body' => "<p>Beyond rooftop units, we keep the specialized equipment behind larger operations running: air-cooled and water-cooled chillers, hydronic and steam boilers, and the refrigeration that restaurants and grocers depend on. A warm walk-in or a down chiller means spoiled product and lost sales, so these calls move to the front of our schedule.</p><p>Our team is EPA 608 certified for refrigerant handling and works hand in hand with our <a href='/commercial-plumbing'>commercial plumbing</a> crew whenever a repair crosses trades.</p>"],
                            ['heading' => 'Real Diagnostics, Not Guesswork', 'body' => "<p>We never swap parts and hope. Every call opens with a structured diagnostic — reading refrigerant pressures, motor amp draws, and control-board signals — so we isolate the actual fault the first time. You approve a written, flat-rate price before we begin, and there's no overtime surcharge tacked on for after-hours work.</p><p>Our trucks ride stocked with the contactors, capacitors, belts, motors, and refrigerant behind the bulk of commercial breakdowns, which is why a large share of repairs wrap up on the first trip.</p>"],
                            ['heading' => 'Repair or Replace? Straight Commercial Advice', 'body' => "<p>For business equipment, repair versus replace comes down to uptime and operating cost, not just today's invoice. When a unit is aging, energy-hungry, or failing again and again, we lay out the math on continued repairs against a planned replacement — including the utility savings a newer high-efficiency system brings. You make the call with real numbers in front of you, never a sales pitch.</p>"],
                        ],
                        'faqs' => [
                            ['q' => 'How much does commercial HVAC repair cost?', 'a' => 'It varies widely with the equipment and the fault — a contactor or capacitor on a rooftop unit is a few hundred dollars, while compressor or chiller work runs considerably more. You get a written, flat-rate quote before we start, with no added fees for nights or weekends.'],
                            ['q' => 'Can you repair my rooftop unit the same day?', 'a' => 'In most cases, yes. Our trucks carry the parts behind the majority of RTU failures, and clients on a maintenance plan jump to the front of the queue — frequently with a technician on the roof within hours of your call.'],
                            ['q' => 'Which commercial HVAC brands do you repair?', 'a' => 'We repair all the major commercial names, including Carrier, Trane, Lennox, York, Daikin, and Rheem, across packaged rooftop units, split systems, chillers, and boilers. If it heats or cools your building, we can almost certainly service it.'],
                            ['q' => 'Do you service restaurant refrigeration and walk-in coolers?', 'a' => "Yes. We look after the refrigeration food-service and retail rely on — walk-in coolers, reach-ins, and ice machines — alongside your rooftop and HVAC gear, and we book the work around your operating hours so the line keeps moving."],
                        ],
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
            'h1' => 'Commercial Plumbing in New Jersey',
            'intro' => "<p>Commercial plumbing demands more than a residential fix. From water heaters and drain lines to fixtures and backflow testing, we keep your facility running with code-compliant work sized for the higher demands of a busy property — and we coordinate with our <a href='/commercial-hvac'>commercial HVAC</a> crew whenever a job spans both trades.</p>",
            'highlights' => ['Water heaters & drain lines', 'Backflow testing & repair', 'Code-compliant work', 'Built for high-demand use'],
            'sections' => [
                ['heading' => 'Commercial Water Heating', 'body' => "<p>Restaurants, salons, gyms, and multi-family buildings burn through hot water fast, and a failed unit can bring service to a halt. We repair and replace commercial tank and tankless water heaters — including high-recovery and gas-fired units — and size new systems to your real peak demand rather than a rule of thumb.</p>"],
                ['heading' => 'Drain, Sewer & Grease Line Service', 'body' => "<p>We clear and maintain the high-traffic drain and sewer lines a busy property runs on, from floor drains and main stacks to kitchen grease lines. For recurring buildup we bring commercial hydro jetting to scour the pipe clean, plus a camera inspection to confirm the line is clear — the same tools behind our residential <a href='/drains'>drain service</a>, scaled up for volume.</p>"],
                ['heading' => 'Backflow Testing & Certification', 'body' => "<p>Most commercial properties are required to test their backflow preventers every year to protect the public water supply. Our certified team tests, repairs, and certifies backflow assemblies and files the paperwork with your water authority, so you stay compliant without chasing the deadline.</p>"],
                ['heading' => 'Fixtures, Repipes & Code Compliance', 'body' => "<p>From ADA-compliant restroom fixtures and tankless retrofits to full repipes of aging supply lines, we handle the upgrades commercial buildings need — permitted, inspected, and done to current code. We schedule the work around your hours to keep disruption to a minimum.</p>"],
            ],
            'faqs' => [
                ['q' => 'What commercial plumbing services do you offer?', 'a' => "We handle commercial water heaters, drain and sewer cleaning, grease-line service, backflow testing and certification, fixture installation, repiping, and leak repair — sized and scheduled for busy offices, restaurants, retail, and multi-family properties."],
                ['q' => 'Do you perform backflow testing and certification?', 'a' => "Yes. Our certified technicians test, repair, and certify commercial backflow preventers and file the required paperwork with your water authority, keeping your property compliant with annual testing rules."],
                ['q' => 'Can you service restaurant grease traps and kitchen drains?', 'a' => "Absolutely. We clear and maintain kitchen grease lines and floor drains, and for stubborn or recurring buildup we use commercial hydro jetting to scour the pipe back to full flow — scheduled around your service hours."],
                ['q' => 'Will the work be permitted and done to code?', 'a' => "Yes. We pull the necessary permits and complete commercial plumbing work to current code, with inspections where required, so your installations and upgrades pass cleanly and protect your business."],
            ],
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
                    "Guardian Air is your trusted choice for HVAC in Monmouth County, NJ. From the Jersey Shore in Long Branch to the boroughs around <a href='/service-areas/red-bank'>Red Bank</a> and inland Freehold, Howell, and Middletown, our licensed technicians deliver fast, reliable heating, cooling, plumbing, and drain service — often the same day.",
                    "Monmouth County homes range from historic shore cottages near Sandy Hook to newer developments off the Garden State Parkway, and we know the systems each one runs. Whether you're near Monmouth Park, the <a href='/service-areas/freehold'>Freehold</a> Raceway Mall, or the PNC Bank Arts Center in Holmdel, honest, flat-rate service is just a call away.",
                    "The county's coastal stretch puts salt air and humidity to work on outdoor AC condensers and shore-home plumbing, while the older inland boroughs still run plenty of aging boilers and oil heat. Our technicians come prepared for both, so a callback in Long Branch and a tune-up in Howell each get the right parts the first time.",
                ],
                'cities' => [
                    'freehold' => 'Freehold',
                    'red-bank' => 'Red Bank',
                    'middletown' => 'Middletown',
                    'aberdeen' => 'Aberdeen',
                    'long-branch' => 'Long Branch',
                    'howell' => 'Howell',
                ],
                'faqs' => [
                    ['q' => 'How fast can you reach my home in Monmouth County?', 'a' => "Because our technicians are based locally, we reach most Monmouth County addresses the same day you call, and within hours for heating or cooling emergencies in Freehold, Red Bank, Middletown, and the shore towns."],
                    ['q' => 'Which Monmouth County towns do you cover?', 'a' => "We work throughout the county, including Freehold, Red Bank, Middletown, Aberdeen, Long Branch, and Howell, plus the surrounding boroughs. If we haven't listed your town, give us a quick call — odds are we cover it."],
                    ['q' => 'Are you licensed and insured to work in Monmouth County?', 'a' => "Yes. Guardian Air is fully licensed and insured for heating, cooling, plumbing, and drain work across New Jersey, and our crews are NATE-certified for HVAC and trained to local code."],
                    ['q' => 'Do weekend or holiday calls cost more in Monmouth County?', 'a' => "No. Our flat-rate pricing stays the same every day, so a Saturday no-heat call or a holiday burst pipe in Middletown is billed at the same rate as a weekday visit."],
                ],
            ],
            'middlesex-county' => [
                'slug' => 'middlesex-county',
                'name' => 'Middlesex County',
                'title' => 'HVAC, Plumbing & Drain Services in Middlesex County, NJ',
                'description' => 'HVAC Middlesex County NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service across Edison, Woodbridge, Old Bridge, and New Brunswick. Call today!',
                'intro' => [
                    "Looking for dependable HVAC in Middlesex County, NJ? Guardian Air serves homeowners and businesses across Edison, Woodbridge, <a href='/service-areas/old-bridge'>Old Bridge</a>, New Brunswick, South Amboy, and Perth Amboy with licensed heating, cooling, plumbing, and drain service.",
                    "From the busy commercial corridors near Menlo Park Mall to the neighborhoods around Rutgers University and along the Raritan River, our local technicians respond fast with honest, flat-rate <a href='/plumbing'>plumbing</a> and HVAC pricing. Wherever you are in Middlesex County, the same trusted team keeps your home comfortable year-round.",
                    "Middlesex County packs dense suburban blocks, university housing, and busy retail corridors into one service area, so in a single day we might tune a tankless heater in a New Brunswick rowhome and chase down a rooftop-unit fault on an Edison strip mall. Staying local along Route 1, Route 18, and the Parkway is how we keep response times short.",
                ],
                'cities' => [
                    'old-bridge' => 'Old Bridge',
                    'edison' => 'Edison',
                    'woodbridge' => 'Woodbridge',
                    'new-brunswick' => 'New Brunswick',
                    'south-amboy' => 'South Amboy',
                    'perth-amboy' => 'Perth Amboy',
                ],
                'faqs' => [
                    ['q' => 'How quickly can you get to my home in Middlesex County?', 'a' => "Our technicians work out of the area, so we reach most Middlesex County homes the same day, with priority response for no-heat and no-cooling emergencies in Edison, Woodbridge, Old Bridge, and New Brunswick."],
                    ['q' => 'What towns in Middlesex County do you serve?', 'a' => "We cover Old Bridge, Edison, Woodbridge, New Brunswick, South Amboy, and Perth Amboy, along with the neighboring communities. Not sure about your street? A quick call confirms it."],
                    ['q' => 'Do you handle both homes and commercial buildings in Middlesex County?', 'a' => "Yes. We service single-family homes, apartments and condos, and commercial properties countywide — from a furnace tune-up to a packaged rooftop unit on a retail building."],
                    ['q' => 'Is your pricing the same everywhere in Middlesex County?', 'a' => "Yes. We quote flat-rate prices upfront for every job in the county, with no hidden travel fees and no surcharge for evenings, weekends, or holidays."],
                ],
            ],
            'ocean-county' => [
                'slug' => 'ocean-county',
                'name' => 'Ocean County',
                'title' => 'HVAC, Plumbing & Drain Services in Ocean County, NJ',
                'description' => 'HVAC Ocean County NJ — Guardian Air offers licensed heating, cooling, plumbing, and drain service across Toms River, Brick, Lakewood, and Point Pleasant. Call today!',
                'intro' => [
                    "Guardian Air delivers trusted HVAC in Ocean County, NJ to homes and businesses from the <a href='/service-areas/toms-river'>Toms River</a> and Brick area down the shore to Point Pleasant, Barnegat, and Lakewood. Our licensed technicians handle heating, cooling, plumbing, and drains with fast, same-day response.",
                    "Ocean County's shore climate is hard on equipment — salt air, humid summers, and seasonal homes near Barnegat Bay all take their toll. From the boardwalk at Point Pleasant Beach to the neighborhoods near Six Flags Great Adventure in Jackson, we keep your <a href='/cooling'>cooling</a> systems running with upfront, flat-rate pricing.",
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
                "Guardian Air is a trusted name for HVAC in Toms River, NJ. As the seat of <a href='/service-areas/ocean-county'>Ocean County</a>, Toms River blends busy Route 37 corridors with quiet bayside neighborhoods near Barnegat Bay — and our licensed technicians serve them all with fast, same-day heating, cooling, plumbing, and drain service.",
                "From homes near downtown and Ocean County Mall to shore properties out toward Seaside Heights, the salt air and humid summers here are hard on equipment. We keep your <a href='/cooling'>cooling and heating</a> systems running with honest, flat-rate pricing and clean workmanship on every visit.",
            ],
            'freehold' => [
                "Looking for dependable HVAC in Freehold, NJ? Guardian Air serves both Freehold Borough and Freehold Township throughout <a href='/service-areas/monmouth-county'>Monmouth County</a> with licensed heating, cooling, plumbing, and drain service — often the same day.",
                "From the shops around Freehold Raceway Mall to the historic neighborhoods near Monmouth Battlefield and the Route 9 and Route 33 corridors, our local technicians respond fast with upfront, flat-rate <a href='/heating'>heating</a> and cooling service and friendly, professional workmanship.",
                "Freehold splits between the older, walkable borough around Main Street and the fast-growing township subdivisions off Route 9 and Route 33, so we work on everything from century-old radiator-and-boiler setups to brand-new high-efficiency furnaces and central air. Knowing the difference means we arrive prepared instead of guessing, with a fair flat-rate quote before any work starts.",
            ],
            'brick' => [
                "Guardian Air delivers reliable HVAC in Brick, NJ to homes and businesses across Brick Township. From neighborhoods along the Metedeconk River to bayside homes near Barnegat Bay, our licensed technicians handle heating, cooling, <a href='/plumbing'>plumbing</a>, and drains with fast, same-day response.",
                "Brick's shore-area climate puts real strain on AC systems and <a href='/plumbing/water-heater'>water heaters</a>. Whether you're off Route 70, Route 88, or near the Brick Reservoir, we keep your home comfortable with honest, flat-rate pricing year-round.",
            ],
            'old-bridge' => [
                "Guardian Air is your local choice for HVAC in Old Bridge, NJ. We serve Old Bridge Township throughout <a href='/service-areas/middlesex-county'>Middlesex County</a> and nearby Sayreville and Matawan with licensed heating, cooling, plumbing, and drain service.",
                "From neighborhoods near Cheesequake State Park to homes along Route 9 and the Garden State Parkway, our technicians respond fast with upfront, flat-rate <a href='/drains'>drain and sewer</a> service — no overtime fees and no surprises.",
                "Many Old Bridge homes went up during the township's postwar boom and now run aging furnaces, original cast-iron waste lines, and panels that predate today's appliances. We help owners here modernize on their own timeline — handling the urgent repair today and mapping out the smart upgrade for when you're ready.",
            ],
            'middletown' => [
                "Guardian Air keeps Middletown, NJ comfortable all year, covering this sprawling <a href='/service-areas/monmouth-county'>Monmouth County</a> township from the Navesink River near Atlantic Highlands to the subdivisions along Route 35. Our crews handle heating, cooling, plumbing, and drains with honest, flat-rate pricing and a fast local response.",
                "Middletown's mix of older bayshore cottages and postwar subdivisions means we see the full range — original boilers and oil heat in one home, a modern high-efficiency system next door. Whether you're near Poricy Park, Croydon Hall, or the shops off Route 36, we arrive with the right parts and no surprises on the invoice.",
                "Right on Raritan Bay, Middletown takes on coastal moisture that rusts outdoor equipment and shortens the life of <a href='/plumbing/water-heater'>water heaters</a>. We keep your comfort systems dependable through muggy summers and the sharp cold that blows in off the water, leaving a clean job site every visit.",
            ],
            'red-bank' => [
                "Guardian Air provides trusted HVAC in Red Bank, NJ to homes and businesses throughout this riverside <a href='/service-areas/monmouth-county'>Monmouth County</a> town. Our licensed technicians deliver fast, same-day heating, cooling, plumbing, and drain service.",
                "From the historic homes near the Navesink River and the shops along Broad Street to the neighborhoods around the Count Basie Center for the Arts, we keep Red Bank comfortable with honest, flat-rate <a href='/heating'>heating</a> and cooling service on every visit.",
            ],
            'lakewood' => [
                "Guardian Air is a trusted provider of HVAC in Lakewood, NJ, serving one of <a href='/service-areas/ocean-county'>Ocean County</a>'s largest and fastest-growing communities. Our local crews cover heating, cooling, plumbing, and drain work, often the same day you call.",
                "From neighborhoods near Lake Carasaljo and FirstEnergy Park to homes along Route 9 and Route 70, we deliver honest, flat-rate pricing and clean, professional service — whether it's a no-heat morning or an <a href='/cooling'>AC failure</a> in peak summer.",
            ],
            'aberdeen' => [
                "Guardian Air brings reliable HVAC to Aberdeen, NJ, covering Aberdeen Township and the Cliffwood and Cliffwood Beach sections across <a href='/service-areas/monmouth-county'>Monmouth County</a>. Our local team handles heating, cooling, plumbing, and drains with straightforward flat-rate pricing.",
                "With the Matawan train station drawing daily commuters and quiet streets running off Route 34 and the Garden State Parkway, Aberdeen homes range from mid-century capes to newer construction. We keep them all comfortable, whatever sits behind the wall.",
                "Tucked against the Raritan Bayshore, Aberdeen catches the damp, salty air that wears on outdoor condensers and shortens the life of a <a href='/plumbing/water-heater'>water heater</a>. We service your equipment with that in mind and leave the job site clean every time.",
            ],
            'long-branch' => [
                "Guardian Air delivers dependable HVAC to Long Branch, NJ, the historic oceanfront city in <a href='/service-areas/monmouth-county'>Monmouth County</a>. From Pier Village to the West End, our licensed crews take on heating, cooling, plumbing, and drains with fast, flat-rate service.",
                "Long Branch blends beachfront condos and year-round homes near Seven Presidents Park with older neighborhoods inland off Route 36. Whether it's a high-rise air handler or a single-family furnace, we bring the right fix and a fair quote.",
                "Right on the Atlantic, Long Branch homes fight salt air and humidity that corrode coils and age equipment early. We keep your <a href='/cooling'>cooling</a> and heating dependable through every shore season, with clean workmanship on every call.",
            ],
            'howell' => [
                "Guardian Air is the local choice for HVAC in Howell, NJ, one of <a href='/service-areas/monmouth-county'>Monmouth County</a>'s largest townships. We cover the neighborhoods spread along Route 9 and Route 33 with licensed heating, cooling, plumbing, and drain service.",
                "Howell's wooded lots and newer subdivisions near the Manasquan Reservoir and Echo Lake mean larger homes, and plenty of properties on private wells. Our trucks roll in stocked for exactly that kind of setup.",
                "Because so many Howell homes run on well water and septic, we bring plumbing and <a href='/drains'>drain</a> know-how suited to them rather than city-water assumptions — paired with honest, flat-rate pricing on every visit.",
            ],
            'edison' => [
                "Guardian Air provides trusted HVAC in Edison, NJ, serving this busy <a href='/service-areas/middlesex-county'>Middlesex County</a> township from Menlo Park to Oak Tree Road. Our local technicians handle heating, cooling, plumbing, and drains with upfront, flat-rate pricing.",
                "Home to the Menlo Park Mall and the lab where Thomas Edison perfected the light bulb, the township packs dense neighborhoods, townhome communities, and commercial strips along Route 1 — and we serve every one of them.",
                "Edison's blend of decades-old houses and newer developments means we see tired boilers right next to modern <a href='/heating/heat-pump'>heat pumps</a>. We match the repair or upgrade to the home, never a one-size-fits-all sales pitch.",
            ],
            'woodbridge' => [
                "Guardian Air keeps Woodbridge, NJ comfortable, covering the township's many sections — Iselin, Colonia, Fords, Sewaren, and Avenel — across <a href='/service-areas/middlesex-county'>Middlesex County</a>. Heating, cooling, plumbing, and drains, all from one local team.",
                "Sitting where the Garden State Parkway meets the Turnpike near Woodbridge Center, the township is a commuter hub of well-established neighborhoods. We respond quickly with honest, flat-rate <a href='/plumbing'>plumbing</a> and HVAC service.",
                "A lot of Woodbridge's housing has stood for generations, so we're as comfortable coaxing another season out of an older boiler as we are installing a high-efficiency system. You set the pace; we lay out the options plainly.",
            ],
            'new-brunswick' => [
                "Guardian Air serves New Brunswick, NJ — the Raritan River 'Hub City' and home of Rutgers University — throughout <a href='/service-areas/middlesex-county'>Middlesex County</a>. Our licensed crews handle heating, cooling, plumbing, and drains across the city.",
                "Between campus housing, downtown apartments near the State Theatre, and the hospital district, New Brunswick runs a dense mix of rentals and historic homes. We work just as easily with homeowners as with property managers.",
                "Older multi-unit buildings here often hide tired boilers, weak water pressure, and aging <a href='/plumbing/leak-detection'>plumbing</a>. We find the real cause, fix it cleanly, and keep tenant downtime as short as possible.",
            ],
            'south-amboy' => [
                "Guardian Air provides reliable HVAC in South Amboy, NJ, the small waterfront city on Raritan Bay in <a href='/service-areas/middlesex-county'>Middlesex County</a>. We cover heating, cooling, plumbing, and drains with honest, flat-rate pricing.",
                "South Amboy's tight blocks near the waterfront and the NJ Transit station are mostly older homes, many still on their original heating and plumbing. Our local team keeps them running without the upsell.",
                "Because these homes sit so close together, we take extra care protecting floors and finishes and leaving the workspace spotless. Every repair is quoted flat-rate upfront, so nothing on the bill catches you off guard.",
            ],
            'perth-amboy' => [
                "Guardian Air brings dependable HVAC to Perth Amboy, NJ, the historic waterfront city on Raritan Bay in <a href='/service-areas/middlesex-county'>Middlesex County</a>. We handle heating, cooling, plumbing, and drains for homes and businesses citywide.",
                "From the Victorian-era homes near the waterfront and City Hall to the busy commercial blocks, Perth Amboy is one of the state's oldest cities — and its aging building stock keeps our repair crews steadily at work.",
                "In a city this old, no two basements look alike, so we diagnose each <a href='/heating'>heating</a> and plumbing system on its own terms instead of guessing. You get a clear, flat-rate quote before any work begins.",
            ],
            'jackson' => [
                "Guardian Air is the local HVAC team for Jackson, NJ, a large, fast-growing township in <a href='/service-areas/ocean-county'>Ocean County</a> known for Six Flags Great Adventure. We cover heating, cooling, plumbing, and drains along the Route 9 and Route 537 corridors.",
                "Jackson's wooded lots and spread-out subdivisions mean larger homes that need real airflow planning, not a quick guess. Whatever heats or cools yours, our local crew services it at flat-rate pricing.",
                "New construction is booming off Route 537 and around Adventure Crossing, so we're a go-to for sizing and installing <a href='/cooling/ac-installation'>new systems</a> in those big floor plans — while keeping established homes running with fast, honest service.",
            ],
            'barnegat' => [
                "Guardian Air provides trusted HVAC in Barnegat, NJ, a Barnegat Bay community in southern <a href='/service-areas/ocean-county'>Ocean County</a> along Route 9 and the Garden State Parkway. Heating, cooling, plumbing, and drains, all handled by a local team.",
                "Barnegat's mix of bayside homes and active-adult communities like Heritage Point keeps us busy with both quick repairs and full-system replacements. We explain every option in plain language, with zero pressure.",
                "With seasonal and second homes common near the bay, we handle spring start-ups, winterizations, and the off-season <a href='/plumbing'>plumbing</a> work that keeps a part-time house ready the moment you arrive.",
            ],
            'point-pleasant' => [
                "Guardian Air serves Point Pleasant, NJ, the lively shore town in <a href='/service-areas/ocean-county'>Ocean County</a> famous for its boardwalk and Jenkinson's. From the beach blocks to the homes along the Manasquan River, we cover heating, cooling, plumbing, and drains.",
                "Point Pleasant runs hot all summer, with tourists, seasonal rentals, and year-round homes all leaning on their cooling at once. Our local crew keeps pace, with fast response and flat-rate pricing right through the busy season.",
                "Salt air off the inlet is rough on outdoor units and <a href='/cooling/ac-tune-up'>condenser coils</a>, so a spring tune-up here genuinely pays for itself. We get your system beach-season ready and keep it running efficiently all summer long.",
            ],
        ];
    }

    /**
     * Optional per-city FAQ blocks for priority city hubs, rendered on
     * /service-areas/{city}. Cities without an entry simply show no FAQs.
     */
    public static function cityFaqs(): array
    {
        return [
            'freehold' => [
                ['q' => 'Do you cover both Freehold Borough and Freehold Township?', 'a' => "Yes. We serve the dense borough around Main Street and the spread-out township developments off Route 9 and Route 33 alike — the same local crew and the same flat-rate pricing, wherever you are in Freehold."],
                ['q' => 'Can you service the older boiler and radiator systems in downtown Freehold?', 'a' => "Definitely. Many homes near Main Street and Monmouth Battlefield still run hot-water or steam boilers with cast-iron radiators, and we repair, tune, and replace them — along with the oil and gas furnaces common in the surrounding neighborhoods."],
                ['q' => 'My cooling bills spike every summer in Freehold — what helps?', 'a' => "Inland Freehold gets long, hot summers that push older AC units hard. On a tune-up we check refrigerant charge, coil cleanliness, and airflow, and where a system is past its prime we size an efficient replacement that brings those July and August bills back down."],
                ['q' => 'Do you install smart thermostats and high-efficiency systems in Freehold?', 'a' => "Yes. The newer township homes are a natural fit for high-efficiency furnaces, heat pumps, and smart thermostats, and we retrofit the older borough homes too — matching the right equipment to each house for real comfort and lower running costs."],
            ],
            'middletown' => [
                ['q' => 'Can you come out the same day in Middletown?', 'a' => "Usually, yes. Middletown is right in our backyard, so most days we can have a technician at your door within hours — and we treat a dead furnace or a failed AC as the emergency it is, any day of the week."],
                ['q' => 'What system issues do Middletown homes run into most?', 'a' => "Along the Bayshore we often find corroded outdoor AC units, aging boilers and oil furnaces in older homes, and water heaters worn down early by coastal moisture. We track each issue to its source and fix it for good, not just for the season."],
                ['q' => 'Do you service the Middletown Bayshore neighborhoods?', 'a' => "Yes. We cover the whole township — Belford, Port Monmouth, Leonardo, Navesink, Lincroft, and River Plaza — so wherever you are in Middletown, a local technician is close by."],
                ['q' => 'Do you handle plumbing and drains in Middletown too?', 'a' => "Absolutely. Beyond HVAC, we clear clogged drains, repair and replace water heaters, track down hidden leaks, and handle sewer trouble across Middletown — one local team for your whole home."],
            ],
            'old-bridge' => [
                ['q' => 'Do you offer same-day HVAC service in Old Bridge?', 'a' => "Yes. Old Bridge sits right in our core service area, so we can usually have a licensed technician at your door the same day — and fast for heating or cooling emergencies across Old Bridge Township, Sayreville, and Matawan."],
                ['q' => 'What HVAC and plumbing problems are common in Old Bridge homes?', 'a' => "Around Old Bridge we frequently see furnaces and AC units nearing the end of their life, water heaters past their prime, and clogged or root-invaded drain lines in the older neighborhoods. We find the real cause and fix it, rather than just chasing the symptom."],
                ['q' => 'Are you licensed to work in Old Bridge, NJ?', 'a' => "Yes. Guardian Air is fully licensed and insured for heating, cooling, plumbing, and drain work throughout Old Bridge and the rest of Middlesex County, with NATE-certified technicians on every call."],
                ['q' => 'Do you give free estimates in Old Bridge?', 'a' => "For replacements and larger projects — a new furnace, AC system, or water heater — we provide a free written estimate in Old Bridge. Repairs are quoted at a flat rate upfront, before any work begins."],
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
                'intro' => "<p>Wondering how much furnace repair costs in NJ? Most <a href='/heating'>furnace repairs</a> across Monmouth, Middlesex, and Ocean counties fall between $150 and $750 depending on the failed part. This 2026 guide breaks down the typical ranges New Jersey homeowners can expect so there are no surprises — and if cooling is on your mind too, see our <a href='/cost-guides/ac-repair-cost'>AC repair cost guide</a>.</p>",
                'serviceLink' => ['label' => 'Furnace & Heating Repair', 'href' => '/heating'],
                'rows' => [
                    ['Igniter or flame sensor replacement', '$150 – $350'],
                    ['Blower motor repair / replacement', '$300 – $700'],
                    ['Control board replacement', '$400 – $750'],
                    ['Gas valve replacement', '$300 – $600'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Furnace Repair Cost', 'body' => "<p>Across New Jersey, the average <a href='/heating/furnace-tune-up'>furnace repair</a> runs about $150 to $750, with most homeowners landing in the middle for common fixes like an igniter, flame sensor, or capacitor. A diagnostic service call typically costs $89 to $150 and is often applied toward the repair. Guardian Air provides a flat-rate quote before any work begins, so you approve the price first.</p>"],
                    ['heading' => 'Furnace Repair Cost by Problem', 'body' => "<p>The table above shows typical ranges by part. Igniters and flame sensors are on the lower end; blower motors, control boards, and gas valves cost more because the parts and labor are greater. Older or specialty systems can run higher if parts are harder to source.</p>"],
                    ['heading' => 'Furnace Repair vs. Replacement', 'body' => "<p>If your furnace is under 15 years old and the repair is minor, fixing it is usually the better value. For aging systems with frequent or expensive failures, a new high-efficiency unit often pays off in lower bills — see our <a href='/heating/furnace-replacement'>furnace replacement</a> guide, or learn about routine <a href='/heating/furnace-tune-up'>furnace tune-ups</a> that prevent costly repairs.</p>"],
                    ['heading' => 'Furnace Repair in Your NJ Town', 'body' => "<p>Guardian Air handles <a href='/heating'>furnace repair</a> in Toms River, Howell, Freehold, Edison, Lakewood, and the towns nearby. Find your town on our <a href='/service-areas'>service areas</a> page.</p>"],
                ],
                'faqs' => [
                    ['q' => 'How much does furnace repair cost in NJ?', 'a' => 'Most furnace repairs in New Jersey cost $150 to $750 depending on the part. A diagnostic visit runs $89 to $150 and is often credited toward the repair. We quote a flat rate before any work.'],
                    ['q' => 'What affects the price of a furnace repair?', 'a' => 'The failed part, parts availability, your furnace type and age, and whether it is an emergency or after-hours call all affect the price. Our flat-rate pricing never adds overtime surcharges.'],
                    ['q' => 'Is an aging furnace still worth fixing?', 'a' => 'If the unit is over 15 years old and repairs are adding up, replacement is usually the smarter long-term investment. We give you an honest repair-or-replace recommendation.'],
                    ['q' => 'Are after-hours furnace repairs more expensive?', 'a' => 'No. Guardian Air charges flat-rate pricing with no extra fees for nights, weekends, or holidays, so emergency repairs cost the same as scheduled ones.'],
                ],
            ],
            'ac-repair-cost' => [
                'name' => 'AC Repair Cost',
                'title' => 'How Much Does AC Repair Cost in NJ? (2026 Guide) | Guardian Air',
                'description' => 'How much does AC repair cost in NJ? See 2026 price ranges by problem across Monmouth, Middlesex & Ocean counties — licensed & insured. Call Guardian Air!',
                'h1' => 'How Much Does AC Repair Cost in New Jersey?',
                'intro' => "<p>Wondering how much AC repair costs in NJ? Most <a href='/cooling'>air conditioning repairs</a> across Monmouth, Middlesex, and Ocean counties range from $150 to $600, though a compressor can cost more. This 2026 guide covers the most common AC repairs and their typical New Jersey prices.</p>\n\n<p>If your system is also due for heat-season attention, our <a href='/cost-guides/furnace-repair-cost'>furnace repair cost guide</a> walks through those numbers too.</p>",
                'serviceLink' => ['label' => 'AC Repair & Cooling', 'href' => '/cooling'],
                'rows' => [
                    ['Capacitor replacement', '$150 – $400'],
                    ['Refrigerant recharge', '$200 – $600'],
                    ['Contactor replacement', '$150 – $350'],
                    ['Compressor replacement', '$1,200 – $2,800'],
                    ['Diagnostic / service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average AC Repair Cost', 'body' => "<p>Across New Jersey, the average <a href='/cooling/ac-tune-up'>AC repair</a> runs about $150 to $600 for common issues like a failed capacitor, contactor, or a refrigerant recharge. A diagnostic service call is $89 to $150 and is often applied to the repair. Guardian Air quotes a flat rate upfront before any work begins.</p>"],
                    ['heading' => 'AC Repair Cost by Problem', 'body' => "<p>Capacitors and contactors are inexpensive parts on the lower end. Refrigerant recharges depend on the amount and type, and a leak repair adds to the cost. A compressor replacement is the most expensive AC repair, which is why it often tips the decision toward replacement on older units.</p>"],
                    ['heading' => 'AC Repair vs. Replacement', 'body' => "<p>If your AC is under 10 years old and the repair is minor, fixing it makes sense. For older systems or a failed compressor, a new high-efficiency unit is often the better value — see our <a href='/cooling/ac-installation'>AC installation</a> options, or keep your system healthy with an <a href='/cooling/ac-tune-up'>AC tune-up</a>.</p>"],
                    ['heading' => 'AC Repair Across Our Service Area', 'body' => "<p>Guardian Air handles <a href='/cooling'>AC repair</a> for homes in Brick, Middletown, Point Pleasant, Old Bridge, Aberdeen, and beyond. See the full list on our <a href='/service-areas'>service areas</a> page.</p>"],
                ],
                'faqs' => [
                    ['q' => 'How much does AC repair cost in NJ?', 'a' => 'Most AC repairs in New Jersey cost $150 to $600 depending on the part, while a compressor replacement runs $1,200 to $2,800. A diagnostic visit is $89 to $150, often credited toward the repair.'],
                    ['q' => 'What affects the price of an AC repair?', 'a' => 'The failed component, refrigerant type and amount, your system size and age, and accessibility all affect the price. We provide a flat-rate quote with no overtime surcharges.'],
                    ['q' => 'Is it worth repairing an old air conditioner?', 'a' => 'If the unit is over 10 years old and faces an expensive repair like a compressor, replacement is usually the smarter investment. We show you the math on both paths so the choice is clear.'],
                    ['q' => 'Do you charge extra for emergency AC repair?', 'a' => 'No. Our flat-rate pricing applies day or night, so emergency AC repair during a heatwave costs the same as a scheduled visit.'],
                ],
            ],
            'plumber-cost' => [
                'name' => 'Plumber Cost',
                'title' => 'How Much Does a Plumber Cost in NJ? (2026 Guide) | Guardian Air',
                'description' => 'How much does a plumber cost in NJ? See 2026 rates by job across Monmouth, Middlesex & Ocean counties — licensed & insured, flat-rate. Call Guardian Air!',
                'h1' => 'How Much Does a Plumber Cost in New Jersey?',
                'intro' => "<p>Wondering how much a plumber costs in NJ? Rates across Monmouth, Middlesex, and Ocean counties vary widely by job — from about $150 for a clogged drain to $2,500 for a <a href='/plumbing/water-heater'>water heater replacement</a>. This 2026 guide outlines typical New Jersey prices so you know what to expect before you call.</p>\n\n<p>For drain-specific jobs, our <a href='/cost-guides/drain-cleaning-cost'>drain cleaning cost guide</a> breaks those prices down by method.</p>",
                'serviceLink' => ['label' => 'Licensed Plumbing', 'href' => '/plumbing'],
                'rows' => [
                    ['Clogged drain clearing', '$150 – $400'],
                    ['Faucet repair / replacement', '$150 – $350'],
                    ['Water heater replacement', '$1,200 – $2,500'],
                    ['Leak detection', '$150 – $450'],
                    ['Service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Plumber Rates', 'body' => "<p>Most New Jersey plumbers charge either a flat rate per job or an hourly rate of roughly $100 to $200, plus a service call fee of $89 to $150. Guardian Air uses flat-rate pricing, so you get one clear price for the job before we start — no hourly meter running.</p>"],
                    ['heading' => 'Cost by Job', 'body' => "<p>Simple jobs like clearing a drain or swapping a faucet are on the lower end. <a href='/plumbing/water-heater'>Water heater replacement</a> and <a href='/plumbing/leak-detection'>leak detection</a> cost more due to parts, labor, and equipment. The table above lists typical ranges for the most common requests.</p>"],
                    ['heading' => 'Emergency Pricing', 'body' => "<p>Many companies add overtime for after-hours work — we don't. Our <a href='/plumbing/emergency-plumber'>24/7 emergency plumber</a> service is billed at the same flat rate, so a burst pipe at midnight costs no more than a scheduled visit.</p>"],
                    ['heading' => 'Plumbing Service Near You', 'body' => "<p>Guardian Air sends <a href='/plumbing'>licensed plumbers</a> to Freehold, Woodbridge, Perth Amboy, Lakewood, Barnegat, and the surrounding towns. Check our <a href='/service-areas'>service areas</a> page for your town.</p>"],
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
                'intro' => "<p>Wondering about air duct cleaning cost in NJ? Most New Jersey homes pay between $300 and $1,000 depending on the size of the home and number of vents. This guide breaks down the typical ranges across Monmouth, Middlesex, and Ocean counties so you know what to expect.</p>\n\n<p>Clean ducts are one part of healthier air — explore our full <a href='/indoor-air-quality'>indoor air quality</a> services to see what else helps.</p>",
                'serviceLink' => ['label' => 'Air Duct Cleaning', 'href' => '/indoor-air-quality/duct-cleaning'],
                'rows' => [
                    ['Small home (1–10 vents)', '$300 – $500'],
                    ['Average home (10–20 vents)', '$450 – $750'],
                    ['Large home (20+ vents)', '$700 – $1,000'],
                    ['Dryer vent cleaning (add-on)', '$100 – $200'],
                    ['Inspection / quote', 'Free'],
                ],
                'sections' => [
                    ['heading' => 'Average Duct Cleaning Cost', 'body' => "<p>Across New Jersey, professional <a href='/indoor-air-quality/duct-cleaning'>air duct cleaning</a> averages $300 to $1,000, with most homes in the $450 to $750 range. We provide a flat-rate quote based on your home rather than a vague per-vent fee, and inspections are free.</p>"],
                    ['heading' => 'What Affects Price', 'body' => "<p>The number of vents and returns, the size and layout of your home, system accessibility, and add-ons like dryer-vent cleaning or sanitizing all affect the price. Homes with heavy buildup, pets, or recent renovations may take longer.</p>"],
                    ['heading' => 'Is It Worth It?', 'body' => "<p>For homes with excess dust, allergies, pets, or visible debris in the vents, yes — clean ducts reduce recirculated allergens and can improve airflow and efficiency by up to 30%. Learn more on our <a href='/indoor-air-quality/duct-cleaning'>air duct cleaning</a> page, or explore <a href='/indoor-air-quality/mold-testing'>mold testing</a> if you suspect moisture.</p>"],
                    ['heading' => 'Duct Cleaning in Your Area', 'body' => "<p>Guardian Air cleans ducts in Howell, Edison, Toms River, Jackson, New Brunswick, and across the region. Your town is likely on our <a href='/service-areas'>service areas</a> page.</p>"],
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
                'intro' => "<p>Wondering about drain cleaning cost in NJ? Most New Jersey <a href='/drains'>drain cleanings</a> run $150 to $500, while hydro jetting a main line costs more. This guide covers typical prices by method across Monmouth, Middlesex, and Ocean counties so there are no surprises.</p>\n\n<p>If the problem turns out to be plumbing rather than just a clog, our <a href='/cost-guides/plumber-cost'>plumber cost guide</a> covers those rates.</p>",
                'serviceLink' => ['label' => 'Drain Cleaning & Sewer', 'href' => '/drains'],
                'rows' => [
                    ['Sink, tub, or shower drain', '$150 – $350'],
                    ['Main line snaking', '$250 – $500'],
                    ['Hydro jetting', '$400 – $800'],
                    ['Camera inspection', '$150 – $350'],
                    ['Service call', '$89 – $150'],
                ],
                'sections' => [
                    ['heading' => 'Average Drain Cleaning Cost', 'body' => "<p>Across New Jersey, clearing a typical sink, tub, or shower drain runs $150 to $350, while a main-line snaking is $250 to $500. We provide a flat-rate quote upfront, and a <a href='/drains/camera-inspection'>camera inspection</a> can confirm the cause before you commit to a bigger job.</p>"],
                    ['heading' => 'Cost by Method', 'body' => "<p>Snaking (augering) is the most economical method for a single clog. <a href='/drains/hydro-jetting'>Hydro jetting</a> costs more but scours the entire pipe for recurring or severe clogs. A <a href='/drains/camera-inspection'>camera inspection</a> is often added to diagnose chronic problems or root intrusion.</p>"],
                    ['heading' => 'When to Call', 'body' => "<p>Call when a drain is slow, gurgling, or backing up — and right away for multiple drains backing up at once, which points to a main-line issue that may need <a href='/drains/sewer-repair'>sewer repair</a>. Catching it early keeps the cost down.</p>"],
                    ['heading' => 'Drain Service Across Central NJ', 'body' => "<p>Guardian Air clears <a href='/drains'>drains and sewers</a> in Brick, Old Bridge, Middletown, Point Pleasant, South Amboy, and nearby. Browse all towns on our <a href='/service-areas'>service areas</a> page.</p>"],
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
