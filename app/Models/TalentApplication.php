<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TalentApplication extends Model
{
    const STATUS_PENDING = 'pending';
    const STATUS_UNDER_REVIEW = 'under_review';
    const STATUS_INFORMATION_REQUESTED = 'information_requested';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_ARCHIVED = 'archived';

    protected $fillable = [
        'reference',
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'age_range',
        'profile_photo_path',
        'linkedin_url',
        'instagram_url',
        'facebook_url',
        'twitter_url',
        'website_url',
        'primary_activity',
        'current_status',
        'experience_duration',
        'featured_achievement',
        'has_online_earnings',
        'online_activity_type',
        'approximate_earnings',
        'current_main_activity',
        'current_challenge',
        'reasons_to_join',
        'primary_goal',
        'next_big_goal',
        'desired_opportunities',
        'availability',
        'status',
        'admin_notes',
        'information_request_message',
        'candidate_response_message',
        'rejection_reason',
        'submitted_at',
        'reviewed_at',
        'reviewed_by',
    ];

    protected $casts = [
        'reasons_to_join' => 'array',
        'desired_opportunities' => 'array',
        'submitted_at' => 'datetime',
        'reviewed_at' => 'datetime',
    ];

    public static function generateUniqueReference(): string
    {
        $year = date('Y');
        $latest = static::where('reference', 'like', "TC-{$year}-%")->latest('id')->first();
        
        $nextNumber = 1;
        if ($latest && preg_match("/TC-{$year}-(\d+)/", $latest->reference, $matches)) {
            $nextNumber = intval($matches[1]) + 1;
        }

        return sprintf("TC-%s-%04d", $year, $nextNumber);
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_PENDING => 'En attente',
            self::STATUS_UNDER_REVIEW => 'En cours d\'examen',
            self::STATUS_INFORMATION_REQUESTED => 'Informations demandées',
            self::STATUS_ACCEPTED => 'Acceptée',
            self::STATUS_REJECTED => 'Refusée',
            self::STATUS_ARCHIVED => 'Archivée',
            default => $this->status,
        };
    }

    public function getStatusBadgeColorAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_PENDING => 'warning',
            self::STATUS_UNDER_REVIEW => 'info',
            self::STATUS_INFORMATION_REQUESTED => 'orange',
            self::STATUS_ACCEPTED => 'success',
            self::STATUS_REJECTED => 'danger',
            self::STATUS_ARCHIVED => 'gray',
            default => 'gray',
        };
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'talent_application_categories');
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'talent_application_skills');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(TalentApplicationProject::class);
    }

    public function talentProfile(): HasOne
    {
        return $this->hasOne(TalentProfile::class);
    }

    public function reviewer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
