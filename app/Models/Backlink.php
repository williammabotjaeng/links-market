<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Backlink extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id',          
        'url',             
        'anchor_text',     
        'domain_authority', 
        'page_authority',   
        'status',           
        'created_at',       
        'updated_at',      
    ];

    /**
     * Get the user that owns the backlink.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}