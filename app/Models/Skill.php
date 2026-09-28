<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(TalentApplication::class, 'talent_application_skills');
    }

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(TalentProfile::class, 'talent_profile_skills');
    }
}
