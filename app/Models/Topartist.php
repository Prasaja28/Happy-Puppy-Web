<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topartist extends Model
{
    use HasFactory;
    protected $table = 'topartist';
    protected $primaryKey = 'id';
    protected $fillable = ['thumbnail','name','status','users_id'];
    protected $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
