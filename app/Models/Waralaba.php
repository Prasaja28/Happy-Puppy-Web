<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waralaba extends Model
{
    use HasFactory;

    protected $table = 'waralabaregister';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'gender', 'age', 'last_education', 'marital', 'city',
        'province', 'official_address', 'home_phone', 'official_phone',
        'mobile_phone', 'email', 'job', 'bussiness_field', 'other',
        'company_name', 'postion_company', 'other_2', 'address_2', 'city_2',
        'province_2', 'status_penguasaan', 'address_3', 'city_3', 'province_3',
        'known_as_area', 'other_3', 'building_area', 'left_business_name',
        'left_business_field', 'right_business_name', 'right_business_field',
        'front_business_name', 'front_business_field', 'behind_business_name',
        'behind_business_field', 'front_road_width', 'front_road_traffic',
        'confirm_completenes', 'confirm_register', 'status', 'created_at',
        'updated_at'
    ];
    public $timestamps = false;
}
