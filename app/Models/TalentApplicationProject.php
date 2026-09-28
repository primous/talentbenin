<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TalentApplicationProject extends Model
{
    protected $fillable = [
        'talent_application_id',
        'title',
        'description',
        'url',
        'image_path',
    ];

    public function application(): BelongsTo
    {
        return $this->belongsTo(TalentApplication::class, 'talent_application_id');
    }
}
