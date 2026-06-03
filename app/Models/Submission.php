<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'form_type',
        'name',
        'email',
        'phone',
        'service',
        'preferred_date',
        'message',
        'is_read',
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'is_read' => 'boolean',
    ];

    public function scopeUnread($query)
    {
        return $query->where('is_read', false);
    }

    public function scopeLatestFirst($query)
    {
        return $query->latest();
    }
}
