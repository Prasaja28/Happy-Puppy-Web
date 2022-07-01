<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Outlet;
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
        $outlet = Outlet::all();
        return view('kontak', compact('outlet'));
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
        return redirect('/kontak')->with([
            'message' => 'Data Berhasil Dikirim!',
            'alert' => 'success'
        ]);
    }
}
