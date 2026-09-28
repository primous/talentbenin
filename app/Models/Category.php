<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
    ];

    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(TalentApplication::class, 'talent_application_categories');
    }
}
