<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
