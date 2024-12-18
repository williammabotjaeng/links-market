<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'url',
        'description',
        'category',
        'traffic',
        'ad_space_available',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the user that owns the website.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the report associated with the website.
     */
    public function report()
    {
        return $this->hasOne(Report::class);
    }
}