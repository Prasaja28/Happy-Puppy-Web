<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobs::select('*')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        return view('karir', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $jobs = Jobs::select('*')
            ->where([
                ['name_job', 'like', '%' . $request->nama_job . '%'],
                ['location', 'like', '%' . $request->lokasi . '%']
            ])
            ->get();
        return view('karir', compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $jobs = Jobs::all();
        return view('admin.jobvacancy-admin.jobvacancy-admin-index', compact('jobs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobs = new Jobs;
        $jobs->name_job = $request->name_job;
        $jobs->location = $request->location;
        $jobs->status = $request->status;
        $jobs->save();
        return back()->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Jobs::findOrFail($id)
            ->update([
                'name_job' => $request->name_job,
                'location' => $request->location,
                'status' => $request->status
            ]);
        return back()->with([
            'status' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jobs::findOrFail($id)->delete();
        return back()->with([
            'status' => 'Data berhasil dihapus'
        ]);
    }
}
