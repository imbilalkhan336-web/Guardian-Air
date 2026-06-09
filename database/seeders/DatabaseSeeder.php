<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => bcrypt('password')],
        );

        // Admin account for the content/SEO panel.
        User::firstOrCreate(
            ['email' => 'admin@guardianairnj.com'],
            [
                'name' => 'Guardian Air Admin',
                'password' => bcrypt('GuardianAir!2026'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ],
        );

        $this->call([
            ContentBlockSeeder::class,
            PostSeeder::class,
            ReviewSeeder::class,
            SiteSettingSeeder::class,
            PageSeoSeeder::class,
        ]);
    }
}
