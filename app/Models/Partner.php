<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'number',
        'organization_name',
        'website',
        'primary_technology',
        'technology2',
        'technology3',
        'global_locaton',
        'onsite_location1',
        'onsite_location2',
        'india_location1',
        'india_location2',
        'services',
        'primary_services',
        'staff_augmentation',
        'monthly_budget',
        'nda_document',
        'contact1',
        'first_name',
        'last_name',
        'designation',
        'email_id',
        'mobile_number',
        'location',
        'contact2',
        'first_name2',
        'last_name2',
        'designation2',
        'email_id2',
        'mobile_number2',
        'location2',
        'user_id',
        'status',
    ];
}
