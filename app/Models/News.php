<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = ['thumbnail','news_title_en','news_title_id','news_content_en','news_content_id','news_date','news_category','status','users_id'];
    protected $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
