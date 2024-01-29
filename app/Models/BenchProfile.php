<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenchProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'platform_id',
        'techonology_type_id',
        'experience',
        'exp_band',
        'mode_delivery',
        'current_location',
        'preferred_location',
        'skills',
        'professional_summary',
        'status',
        'user_id',
    ];
}
