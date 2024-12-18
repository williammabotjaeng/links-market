<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id',          
        'name',             
        'description',      
        'budget',           
        'start_date',       
        'end_date',         
        'status',           
        'created_at',       
        'updated_at',      
    ];

    /**
     * Get the user that owns the project.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the campaigns associated with the project.
     */
    public function campaigns()
    {
        return $this->hasMany(Campaign::class);
    }
}






