<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citysub extends Model
{
    use HasFactory;
    protected $table = 'citysub';
    protected $primaryKey = 'id';
    protected $fillable = ['id','csub_name','city_id'];

    public function outlet()
    {
        return $this->hasMany(Outlet::class,'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'id');
    }
}
