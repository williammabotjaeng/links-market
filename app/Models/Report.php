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
        'user_id',          // Foreign key for the user who created the report
        'client_id',        // Foreign key for the associated client (nullable)
        'project_id',       // Foreign key for the associated project (nullable)
        'social_media_id',  // Foreign key for the associated social media account (nullable)
        'website_id',       // Foreign key for the associated website (nullable)
        'backlink_id',      // Foreign key for the associated backlink (nullable)
        'account_id',       // Foreign key for the associated account (nullable)
        'title',            // Title of the report
        'content',          // Content of the report
        'created_at',       // Timestamp for when the report was created
        'updated_at',       // Timestamp for when the report was last updated
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
     * Get the social media account associated with the report.
     */
    public function socialMedia(): BelongsTo
    {
        return $this->belongsTo(SocialMedia::class);
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
