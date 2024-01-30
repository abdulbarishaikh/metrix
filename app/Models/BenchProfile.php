<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BenchProfile extends Model
{
    use HasFactory,SoftDeletes;
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
    public function platforms(){
        return $this->belongsTo(Platform::class,'platform_id','id');
    }
    public function technology(){
        return $this->belongsTo(Technology::class,'techonology_type_id','id');
    }
}
