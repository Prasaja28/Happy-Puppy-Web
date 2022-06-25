<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songlist;
use Session;
use File;
class SonglistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songlist = Songlist::select('*')
        ->orderBy('urutan', 'asc')
        ->get();
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
        $this->validate(
            $request, 
            [   
                'thumbnail'             => 'required|max:2000',
            ],
            [   
                'thumbnail.required'    => 'Gambar tidak boleh kosong',
                'thumbnail.max'      => 'Gambar tidak boleh lebih dari 2 MB',
            ]
        );
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = $file->getClientOriginalName();
                $path = 'img/songlist-img/';
                //dd($path);
                $file->move(public_path('/uploads/' . $path), $fileName);
            
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
        } else {
            return redirect('/songlist-admin')->with('status','Data Gagal Di Simpan!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkid()
    {
        $user = DB::table('songlist')->where('urutan', Input::get('urutan'));
        if($user->count() > 0)
        {
            return response()->json(false);
        }
        else
        {
            return response()->json(true);
        }
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
        $this->validate(
            $request, 
            [   
                'thumbnail'             => 'max:2000',
                'urutan'                => 'required|unique:songlist,urutan,'.$id,
            ],
            [   
                'thumbnail.max'      => 'Gambar tidak boleh lebih dari 2 MB',
            ]
        );
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = $file->getClientOriginalName();
                $path = 'img/songlist-img/';
                //dd($path);
                $file->move(public_path('/uploads/'. $path), $fileName);
            }else{
                $request->thumbnail = $request->thumbnail2;
            }    
            
            Songlist::where('id',$id)
            ->update([
                // 'thumbnail' => $path . $fileName,
                'title_song' => $request->title_song,
                'kategori_lagu' => $request->kategori_lagu,
                'artist' => $request->artist,
                'status' => $request->status,
                'urutan' => $request->urutan,
                'users_id'=> $request->users_id
            ]);
            return redirect('/songlist-admin')->with('status','Data Berhasil Di update!!!'); 
        // }else{
        //     return redirect('/songlist-admin')->with('status','Data Gagal Di update!!!');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $songlist = Songlist::where('id',$id)->first();
       $path = public_path('uploads/'.$songlist->thumbnail);

         if(File::exists($path)){
            File::delete($path);
         }
         $songlist->delete();
        return redirect('/songlist-admin')->with('status','Data Berhasil Di Hapus!!!');
    }
}
