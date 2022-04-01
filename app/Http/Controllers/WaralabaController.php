<?php

namespace App\Http\Controllers;

use App\Models\Waralaba;
use Illuminate\Http\Request;

class WaralabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waralaba = Waralaba::all();
        return view('admin-waralaba', compact('waralaba'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $test = Waralaba::create($request->all());
        // dd($test);
        return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Waralaba  $waralaba
     * @return \Illuminate\Http\Response
     */
    public function show(Waralaba $waralaba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Waralaba  $waralaba
     * @return \Illuminate\Http\Response
     */
    public function edit(Waralaba $waralaba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Waralaba  $waralaba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waralaba $waralaba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waralaba  $waralaba
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $waralaba = Waralaba::findOrFail($id);
        $waralaba->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
