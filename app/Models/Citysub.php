<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citysub extends Model
{
    use HasFactory;
    public function outlet()
    {
        return $this->hasMany(Outlet::class,'id');
    }
}
