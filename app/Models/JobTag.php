<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobTag extends Model
{
    protected $fillable = [
        'job_id',
        'tag',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
