<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsEkspertise extends Model
{
    use HasFactory;

    protected $table = 'jobexpertise';
    protected $primaryKey = 'id';
    protected $fillable = [
        'company_name', 'length_work', 'position', 'careerform_id',
        'created_at', 'updated_at'
    ];

    public $timestamps = false;

    public function jobexpertise()
    {
        return $this->hasOne(Career::class, 'careerform_id', 'id');
    }
}
