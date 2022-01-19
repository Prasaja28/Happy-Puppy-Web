<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
use Session;

class OutletWaralabaController extends Controller
{
    public function index()
    {
        $outlet = Outlet::all();
        return view('admin.outlet-admin.outlet-admin-index',compact('outlet'));
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
            'thumbnail' => 'max:255'
        ]);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $path = '/img/songlist-img/'.time().'-'.$file->getClientOriginalName();
                //dd($path);
                $file->move(public_path('img/outlet-img'), $path);
            }
            // dd($request->jenis_dokumen);
            Outlet::create([
                'thumbnail' => $path,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'fax'=> $request->fax,
                'link_ig'=> $request->link_ig,
                'link_2'=> $request->link_2,
                'users_id'=> $request->users_id,
                'city_id'=> $request->city_id,
                'citysub_id'=> $request->citysub_id,
                'status' => 1
            ]);
            return redirect('/outlet-admin')->with('status','Data Berhasil Di Simpan!!!'); 
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
            'thumbnail' => 'max:255'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $path = '/img/outlet-img/'.time().'-'.$file->getClientOriginalName();
                //dd($path);
                $file->move(public_path('img/outlet-img'), $path);
            }else{
                $path = $request->thumbnail2;
            }
            Outlet::where('id',$id)
            ->update([
                'thumbnail' => $path,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'fax'=> $request->fax,
                'link_ig'=> $request->link_ig,
                'link_2'=> $request->link_2,
                'users_id'=> $request->users_id,
                'city_id'=> $request->city_id,
                'citysub_id'=> $request->citysub_id
            ]);
            return redirect('/outlet-admin')->with('status','Data Berhasil Di update!!!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Outlet::where('id',$id)
        ->update([
            'status' => 1,
            'users_id'=> Session::get('user_id'),
            'city_id'=> Session::get('city_id'),
            'citysub_id'=> Session::get('citysub_id')
        ]);
        return redirect('/outlet-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }
}
