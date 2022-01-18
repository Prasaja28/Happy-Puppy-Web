<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'outlet';
    protected $primaryKey = 'id';
    protected $fillable = ['thumbnail','name','address','phone','fax','link_ig','link_2'];
    protected $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
