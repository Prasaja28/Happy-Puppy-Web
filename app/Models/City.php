<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'city_name', 'citysub_id'];
    protected $guarded = [];
    
    public function citysub()
    {
        return $this->belongsTo(Citysub::class,'id');
    }
    public function outlet()
    {
        return $this->hasMany(Outlet::class,'id');
    }
}
