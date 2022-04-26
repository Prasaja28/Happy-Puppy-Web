<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $primaryKey = 'id';
    protected $fillable = ['province_id','city_id','citysub_id','thumbnail','name','address','phone','fax','link_ig','link_2','users_id'];
    
    public function relasi_users()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function relasi_city()
    {
    	return $this->belongsTo(City::class,'city_id');
    }

    public function relasi_citysub()
    {
    	return $this->belongsTo(Citysub::class,'citysub_id');
    }
}
