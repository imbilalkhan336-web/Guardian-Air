<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use Illuminate\Database\Seeder;

class PageSeoSeeder extends Seeder
{
    /**
     * Seed each public page's default SEO meta so live pages have
     * proper titles, descriptions, and canonical URLs out of the box.
     *
     * Only creates rows that don't already exist, so admin edits are
     * never overwritten by re-running the seeder.
     */
    public function run(): void
    {
        foreach (PageSeo::PAGES as $slug => $config) {
            $defaults = PageSeo::DEFAULTS[$slug] ?? [];

            PageSeo::firstOrCreate(
                ['page' => $slug],
                [
                    'title' => $defaults['title'] ?? null,
                    'description' => $defaults['description'] ?? null,
                    'canonical' => $config['path'],
                    'robots' => 'index, follow',
                ]
            );
        }
    }
}
