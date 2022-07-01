<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestLagu;
use Illuminate\Support\Facades\Validator;
use Session;

class RequestLaguUserController extends Controller
{
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
        RequestLagu::create([
            'name' => $request->get('name'),
            'member_id' => $request->get('member_id'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'request' => $request->get('request'),
            'status' => 1
        ]);
        return redirect('/kontak')->with([
            'message' => 'Data Berhasil Dikirim!',
            'alert' => 'success'
        ]);
    }
}
