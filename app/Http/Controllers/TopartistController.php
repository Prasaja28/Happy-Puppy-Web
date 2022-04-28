<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topartist;
use Session;
use Illuminate\Support\Facades\File; 
class TopartistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topartist = Topartist::all();
        return view('admin.topartist-admin.topartist-admin-index',compact('topartist'));
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
            'thumbnail' => 'max:255',
            'name' => 'max:50'
        ]);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = '.'.$file->getClientOriginalName();
                $path = 'img/topartist-img/';
                //dd($path);
                $destinationPath = public_path('/uploads/' . $path);
                $file->move($destinationPath, $fileName);
            
            // dd($request->jenis_dokumen);
            Topartist::create([
                'thumbnail' => $path . $fileName,
                'name' => $request->name,
                'users_id' => $request->users_id,
                'status' => 1
            ]);
            return redirect('/topartist-admin')->with('status','Data Berhasil Di Simpan!!!'); 
        }else{
            return redirect('/topartist-admin')->with('status','Data Gagal Di Simpan!!!');
        }
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
            'thumbnail' => 'max:255',
            'name' => 'max:50'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = $file->getClientOriginalName();
                $path = 'img/topartist-img/';
                $destinationPath = public_path('/uploads/' . $path);
                $file->move($destinationPath, $fileName);

                Topartist::where('id',$id)
                ->update([
                    'thumbnail' => $path . $fileName,
                    'name' => $request->name,
                    'status' => $request->status,
                    'users_id' => $request->users_id
                ]);
                return redirect('/topartist-admin')->with('status','Data Berhasil Di update!!!');
            }else{
                $path = $request->thumbnail2;
                $file = $request->file('thumbnail');
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path('/uploads/' . $path);
                $file->move($destinationPath, $fileName);
                Topartist::where('id',$id)
                ->update([
                    'thumbnail' => $path . $fileName,
                    'name' => $request->name,
                    'status' => $request->status,
                    'users_id' => $request->users_id
                ]);
                return redirect('/topartist-admin')->with('status','Data Berhasil Di update!!!');
            }
            if($path != null){
                return redirect('/topartist-admin')->with('status','Data Gagal Di update!!!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $topartist = Topartist::where('id',$id)->first();
        
        $path = public_path('uploads/'.$topartist->thumbnail);
    
        if (File::exists($path)) {
            File::delete($path);
        }
        
        $topartist->delete();
        
        return redirect('/topartist-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }
}
