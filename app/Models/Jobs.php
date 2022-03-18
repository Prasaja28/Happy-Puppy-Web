<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;

    protected $table = 'jobvacancy';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_job',
        'location', 'status', 'created_at', 'updated_at'
    ];
}
