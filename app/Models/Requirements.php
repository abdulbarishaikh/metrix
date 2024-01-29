<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirements extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'job_desc',
        'experience_band',
        'location',
        'functiona_tec',
        'monthly_budget',
        'type_oppurtunity',
        'duration_month',
        'remark',
        'status',
        'user_id',
    ];
}
