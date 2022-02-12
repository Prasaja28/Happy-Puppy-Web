<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $primaryKey = 'id';
    protected $fillable = ['year','content_history','status','users_id'];
    protected $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
