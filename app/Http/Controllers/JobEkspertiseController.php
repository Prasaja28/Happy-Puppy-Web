<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobsEkspertise;

class JobEkspertiseController extends Controller
{
    public function index()
    {
        $jobsEkspertise = JobsEkspertise::all();
        return view('admin-jobekspertise', compact('jobsEkspertise'));
    }

    public function delete($id)
    {
        $jobsEkspertise = JobsEkspertise::findOrFail($id);
        $jobsEkspertise->delete();
        return redirect('/admin-jobekspertise');
    }
}
