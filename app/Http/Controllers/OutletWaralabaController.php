<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\User;
use App\Models\City;
use App\Models\Citysub;
use App\Models\Settings;
use Session;

class OutletWaralabaController extends Controller
{
    public function index()
    {
        // $outlet = DB::table('outlet')
        //             ->join('users', 'outlet.users_id', '=', 'users.id')
        //             ->join('city', 'outlet.city_id', '=', 'city.id')
        //             ->join('citysub', 'outlet.citysub_id', '=', 'citysub.id')
        //             ->get();
        $outlet = Outlet::All();
        $city = City::All();
        $citysub = Citysub::All();
        DB::table('users')->get();
        DB::table('city')->get();
        DB::table('citysub')->get();
        return view('admin.outlet-admin.outlet-admin-index',compact('outlet', 'city', 'citysub'));
        // return view('admin.outlet-admin.outlet-admin-index')->with('outlet', $outlet);
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'thumbnail' => 'max:2000'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = time().'.'.$file->getClientOriginalName();
                $path = '/img/outlet-img/';
                //dd($path);
                $file->move(public_path('/uploads/'. $path), $fileName);
            }
            
            // dd($request->jenis_dokumen);
            Outlet::create([
                'thumbnail' => $path . $fileName,
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

    public function update(Request $request)
    {
        $request->validate([
            'thumbnail' => 'max:2000'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = time().'.'.$file->getClientOriginalName();
                $path = '/img/outlet-img/';
                //dd($path);
                $file->move(public_path('/uploads/'. $path), $fileName);
            }
            else { 
                $path = $request->thumbnail2;
            }
            Outlet::where('id',$id)
            ->update([
                'thumbnail' => $path . $fileName,
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

    public function destroy($id)
    {
        Outlet::where('id',$id)
        ->update([
            'status' => 1,
            'users_id'=> Session::get('users_id'),
            'city_id'=> Session::get('city_id'),
            'citysub_id'=> Session::get('citysub_id')
        ]);
        return redirect('/outlet-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }

    public function search(Request $request)
    {
        $settings = Settings::select('*')
        ->whereNotNull('value')
        ->get()
        ->pluck('value','key')
        ->toArray();
        $keyword = $request->keyword;
        $outlet = Outlet::from('outlet as o')
            ->select('o.*', 'c.city_name')
            ->where('o.name', 'like', '%'.$keyword.'%' )
            ->orWhere('c.city_name', 'like', '%'.$keyword.'%' )
            ->leftJoin('city as c', 'c.id', '=' , "o.city_id")
            ->get();
        if ($outlet->count() == 0) {
            return view('/lokasi-not-found', compact('settings'));
        }
        
        return view('lokasi-outlet', compact('outlet', 'keyword', 'settings'));
    }
}
