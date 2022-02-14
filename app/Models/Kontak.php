<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';
    protected $primaryKey = 'id';
    protected $fillable = ['name','member_id','email','phone','complaint','status','outlet_id'];
    protected $guarded = [];
    public function outlet()
    {
        return $this->belongsTo(User::class,'outlet_id');
    }
}
