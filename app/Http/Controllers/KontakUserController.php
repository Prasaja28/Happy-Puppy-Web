<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
use App\Models\Settings;
use App\Models\Outlet;
use Illuminate\Support\Facades\Validator;
use Session;

class KontakUserController extends Controller
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
            ->pluck('value', 'key')
            ->toArray();
        $kontakUser = Kontak::all();
        $outlet = Outlet::all();
        return view('kontak', compact('kontakUser', 'settings', 'outlet'));
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
                ->withErrors("Lakukan Recaptcha Terlebih Dahulu Untuk Melanjutkan!!")
                ->withInput();
        }
        Kontak::create([
            'name' => $request->name,
            'member_id' => $request->member_id,
            'email' => $request->email,
            'phone' => $request->phone,
            'complaint' => $request->complaint,
            'status' => 1
        ]);
        return redirect('/kontak')->with([
            'message' => 'Data Berhasil Dikirim!',
            'alert' => 'success'
        ]);
    }
}
