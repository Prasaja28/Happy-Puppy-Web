<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsEkspertise;

class JobEkspertiseController extends Controller
{
    public function index()
    {
        $jobsEkspertise = JobsEkspertise::select('*', 'name')
            ->join('careerform', 'careerform.id', 'jobexpertise.careerform_id')
            ->get();
        return view('admin.jobekspertise-admin', compact('jobsEkspertise'));
    }

    public function delete($id)
    {
        $jobsEkspertise = JobsEkspertise::findOrFail($id);
        $jobsEkspertise->delete();
        return back()->with([
            'status' => 'Data Berhasil Dihapus!'
        ]);
    }
}
