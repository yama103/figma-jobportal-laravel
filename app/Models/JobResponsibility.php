<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobResponsibility extends Model
{
    protected $fillable = [
        'job_id',
        'responsibility',
    ];
}
