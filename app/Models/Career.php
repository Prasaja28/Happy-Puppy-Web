<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $table = 'careerform';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'formal_education', 'informal_education', 'jurusan',
        'place_birth', 'date_birth', 'height', 'weight',
        'gender', 'status_marital', 'phone', 'mobile_phone',
        'email', 'address', 'no_ktp', 'expected_salary', 'language',
        'instrument_music', 'computer', 'other_expertise', 'cv', 'ijazah',
        'linkedin', 'created_at', 'updated_at', 'jobvacancy_id'
    ];
    public function users()
    {
        return $this->belongsTo(Jobs::class, 'jobvacancy_id');
    }
}
