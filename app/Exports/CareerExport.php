<?php

namespace App\Exports;

use App\Models\Career;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CareerExport implements FromCollection, WithStrictNullComparison, WithHeadings,ShouldAutoSize
{
    protected $id;

    public function __construct($id) {
        $this->id = $id;
        // dd($this->id);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        
        return Career::select('careerform.name',
        'jobvacancy.name_job as name_job', 
        'jobvacancy.location as location', 
        'careerform.email',
        'careerform.address',
        'careerform.formal_education',
        'provinces.name as place_birth',
        'careerform.date_birth',
        'careerform.height',
        'careerform.weight',
        'careerform.gender',
        'careerform.status_marital',
        'careerform.phone',
        'careerform.mobile_phone',
        'careerform.no_ktp',
        'careerform.expected_salary',
        'careerform.language',
        'careerform.instrument_music',
        'careerform.computer',
        'careerform.other_expertise',
        'careerform.cv',
        'careerform.ijazah',
        'careerform.linkedin',
        'jobexpertise.*')
        ->join('jobvacancy', 'careerform.jobvacancy_id', '=', 'jobvacancy.id')
        ->join('provinces', 'careerform.place_birth', '=', 'provinces.id')
        ->join('jobexpertise', 'careerform.id', '=', 'jobexpertise.careerform_id')
        ->where('careerform.id', $this->id)
        ->where('jobexpertise.careerform_id', $this->id)
        ->get();
    }
    public function headings(): array
    {
        return [
            [
                'Nama',
                'Job Vacancy',
                'Lokasi',
                'Email',
                'Alamat',
                'Jenjang Pendidikan',
                'Tempat Lahir',
                'Tanggal Lahir',
                'Tinggi (cm)',
                'Berat (kg)',
                'Jenis Kelamin',
                'Status Marital',
                'No. Telfon',
                'No. Telfon HP',
                'No. KTP',
                'Gaji yang Diharapkan',
                'Keahlian Bahasa',
                'Keahlian Instrument Musik',
                'Keahlian Komputer',
                'Keahlian Lainnya',
                'CV',
                'Ijazah',
                'Linkedin',
            ],
            //if
            [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ']
        ];
    }    
}
