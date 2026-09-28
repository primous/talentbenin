<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TalentProfile extends Model
{
    protected $fillable = [
        'talent_application_id',
        'user_id',
        'public_name',
        'title',
        'avatar_path',
        'city',
        'country',
        'public_bio',
        'availability',
        'starting_price',
        'is_verified',
        'is_active',
        'featured_badge',
        'website_url',
        'linkedin_url',
        'instagram_url',
        'github_url',
    ];

    protected $casts = [
        'is_verified' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(TalentApplication::class, 'talent_application_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class, 'talent_profile_skills');
    }
}
