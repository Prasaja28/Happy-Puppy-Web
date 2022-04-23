<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songlist;
use Session;
class SonglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songlist = Songlist::all();
        return view('admin.songlist-admin.songlist-admin-index',compact('songlist'));
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
        $request->validate([
            'thumbnail' => 'max:1000'
        ]);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = '.'.$file->getClientOriginalName();
                $path = '/img/songlist-img/';
                //dd($path);
                $file->move(public_path('/uploads/' . $path), $fileName);
            }
            // dd($request->jenis_dokumen);
            Songlist::create([
                'thumbnail' => $path . $fileName,
                'title_song' => $request->title_song,
                'kategori_lagu' => $request->kategori_lagu,
                'artist' => $request->artist,
                'users_id'=> $request->users_id,
                'status' => 1
            ]);
            return redirect('/songlist-admin')->with('status','Data Berhasil Di Simpan!!!'); 
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
        $request->validate([
            'thumbnail' => 'max:1000'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = '.'.$file->getClientOriginalName();
                $path = '/img/songlist-img/';
                //dd($path);
                $file->move(public_path('/uploads/'. $path), $fileName);
            }else{
                $path = $request->thumbnail2;
            }
            Songlist::where('id',$id)
            ->update([
                'thumbnail' => $path . $fileName,
                'title_song' => $request->title_song,
                'kategori_lagu' => $request->kategori_lagu,
                'artist' => $request->artist,
                'status' => $request->status,
                'users_id'=> $request->users_id
            ]);
            return redirect('/songlist-admin')->with('status','Data Berhasil Di update!!!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Songlist::where('id',$id)->delete();
        return redirect('/songlist-admin')->with('status','Data Berhasil Di Hapus!!!');
    }
}
