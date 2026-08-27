<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    protected $fillable = [
        'title',
        'company',
        'category',
        'type',
        'salary',
        'location',
        'experience',
        'degree',
        'description',
    ];

    public function responsibilities(): HasMany
    {
        return $this->hasMany(JobResponsibility::class);
    }
}
