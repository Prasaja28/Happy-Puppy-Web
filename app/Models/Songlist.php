<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Songlist extends Model
{
    use HasFactory;
    protected $table = 'songlist';
    protected $primaryKey = 'id';
    protected $fillable = ['thumbnail','artist','title_song','kategori_lagu','status'];
    protected $guarded = [];
}
