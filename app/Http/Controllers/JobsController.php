<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Jobs;
use App\Models\Settings;
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
        $settings = Settings::select('*')
        ->whereNotNull('value')
        ->get()
        ->pluck('value','key')
        ->toArray();
        $jobs = Jobs::select('*')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        return view('karir', compact('jobs', 'settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value','key')
            ->toArray();
            $nama_job = $request->nama_job;
            $lokasi = $request->lokasi;
        $jobs = Jobs::select('*')
            ->where([
                ['name_job', 'like', '%' . $nama_job . '%'],
                ['location', 'like', '%' . $lokasi . '%']
            ])
            ->get();
        //return not found if no data match with where clause
        if ($jobs->count() == 0) {
            $nama_job = $request->nama_job;
            $lokasi = $request->lokasi;
            $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value','key')
            ->toArray();
            return view('errors.karror', compact('jobs','settings', 'nama_job', 'lokasi'));
        }
        return view('karir-filter', compact('jobs','settings', 'nama_job', 'lokasi'));
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
