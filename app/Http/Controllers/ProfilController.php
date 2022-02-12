<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Session;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        return view('admin.profil.profil-index',compact('profil'));
    }

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
        Profil::create([
            'year' => $request->year,
            'content_history' => $request->content_history,
            'users_id'=> $request->users_id,
            'status' => 1
        ]);
        return redirect('/profil-admin')->with('status','Data Berhasil Di Simpan!!!'); 
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
        Profil::where('id',$id)
        ->update([
            'year' => $request->year,
            'content_history' => $request->content_history,
            'status' => $request->status,
            'users_id'=> $request->users_id
        ]);
        return redirect('/profil-admin')->with('status','Data Berhasil Di update!!!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profil::where('id',$id)
        ->update([
            'status'=> 0,
            'users_id'=> Session::get('user_id')
        ]);
        return redirect('/profil-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }

}
