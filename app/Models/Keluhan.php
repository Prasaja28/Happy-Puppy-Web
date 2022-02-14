<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = 'keluhan';
    protected $primaryKey = 'id';
    protected $fillable = ['name','member_id','email','phone','outlet','keluhan','status','outlet_id'];
    protected $guarded = [];
    public function outlet()
    {
        return $this->belongsTo(User::class,'outlet_id');
    }
}
