<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use Illuminate\Support\Facades\Validator;
use Session;

class KeluhanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
 
        if ($validator->fails()) {
            return redirect('/kontak')
                ->withErrors($validator)
                ->withInput();
        }
        Keluhan::create([
            'name' => $request->name,
            'member_id' => $request->member_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'outlet' => $request->outlet,
            'keluhan' => $request->keluhan,
            'status' => 1
        ]);
        return redirect('/kontak')->with('Data Berhasil Di Simpan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
