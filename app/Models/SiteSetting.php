<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = ['key', 'value'];

    /**
     * Default values, used when a setting has not been saved yet.
     */
    public const DEFAULTS = [
        'reviews_count' => '200',
        'reviews_rating' => '4.8',
        'phone' => '(732) 239-0932',
    ];

    /**
     * Get a single setting value, falling back to the default.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        $value = static::query()->where('key', $key)->value('value');

        return $value ?? $default ?? (self::DEFAULTS[$key] ?? null);
    }

    /**
     * Get all settings as a key => value map, merged over defaults.
     */
    public static function map(): array
    {
        $stored = static::query()->pluck('value', 'key')->toArray();

        return array_merge(self::DEFAULTS, $stored);
    }

    /**
     * Create or update a setting.
     */
    public static function set(string $key, ?string $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
