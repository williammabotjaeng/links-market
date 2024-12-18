<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id',          
        'client_id',        
        'project_id',       
        'website_id',      
        'backlink_id',      
        'account_id',      
        'title',           
        'content',         
        'created_at',       
        'updated_at',     
    ];

    /**
     * Get the user that owns the report.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the client associated with the report.
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get the project associated with the report.
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Get the website associated with the report.
     */
    public function website(): BelongsTo
    {
        return $this->belongsTo(Website::class);
    }

    /**
     * Get the backlink associated with the report.
     */
    public function backlink(): BelongsTo
    {
        return $this->belongsTo(Backlink::class);
    }

    /**
     * Get the account associated with the report.
     */
    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
