<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Session;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::select('*')
            ->orderBy('id', 'desc')
            ->get();
        return view('admin.profil.profil-index', compact('profil'));
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
            'content_history_id' => $request->content_history_id,
            'content_history_en' => $request->content_history_en,
            'users_id' => $request->users_id,
            'status' => 1
        ]);
        return redirect('/profil-admin')->with('status', 'Data Berhasil Di Simpan!!!');
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
        Profil::where('id', $id)
            ->update([
                'year' => $request->year,
                'content_history_id' => $request->content_history_id,
                'content_history_en' => $request->content_history_en,
                'status' => $request->status,
                'users_id' => $request->users_id
            ]);
        return redirect('/profil-admin')->with('status', 'Data Berhasil Di update!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profil::where('id', $id)->delete();
        return redirect('/profil-admin')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
