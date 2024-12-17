<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id',          
        'product_type',     
        'site_url',         
        'promoted_url',    
        'anchor_text',      
        'status',          
        'created_at',       
        'updated_at',       
    ];

    /**
     * Get the user that owns the task.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get a human-readable description of the task status.
     */
    public function getStatusDescriptionAttribute(): string
    {
        $descriptions = [
            'pending' => 'Task is pending and awaiting action.',
            'in_progress' => 'Task is currently being worked on.',
            'completed' => 'Task has been completed successfully.',
            'failed' => 'Task has failed. Please check the details.',
        ];

        return $descriptions[$this->status] ?? 'Unknown status';
    }
}