<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\User;
use App\Models\Settings;
use Session;

class OutletWaralabaController extends Controller
{
    public function index()
    {
        $outlet = Outlet::select('outlet.*', 
        'regencies.name as regency_name', 
        'districts.name as district_name', 
        'provinces.name as province_name')
            ->join('regencies', 'outlet.city_id', '=', 'regencies.id')
            ->join('districts', 'outlet.citysub_id', '=', 'districts.id')
            ->join('provinces', 'outlet.province_id', '=', 'provinces.id')
            ->get();
        $regency = DB::table('regencies')->get();
        $district = DB::table('districts')->get();
        $province = DB::table('provinces')->get();    
        return view('admin.outlet-admin.outlet-admin-index',compact('outlet','regency','district','province'));
        // return view('admin.outlet-admin.outlet-admin-index')->with('outlet', $outlet);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'thumbnail' => 'max:2000'
        ]);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = time().'.'.$file->getClientOriginalName();
                $path = 'img/outlet-img/';
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
                'province_id'=> $request->province_id,
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
                $path = 'img/outlet-img/';
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
                'province_id'=> $request->province_id,
                'city_id'=> $request->city_id,
                'citysub_id'=> $request->citysub_id
            ]);
            return redirect('/outlet-admin')->with('status','Data Berhasil Di update!!!'); 
    }

    public function destroy($id)
    {
       $outlet = Outlet::find($id);
       $path = public_path('uploads/'. $outlet->thumbnail);
       if (File::exists($path)) {
           File::delete($path);
       }
         $outlet->delete();
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
            ->select('o.*', 'c.name')
            ->where('o.name', 'like', '%'.$keyword.'%' )
            ->orWhere('c.name', 'like', '%'.$keyword.'%' )
            ->leftJoin('regencies as c', 'c.id', '=' , "o.city_id")
            ->get();
        if ($outlet->count() == 0) {
            return view('/lokasi-not-found', compact('settings'));
        }
        
        return view('lokasi-outlet', compact('outlet', 'keyword', 'settings'));
    }
    public function getKotaById($id)
    {
        $city = Regency::where('province_id', $id)->pluck('name', 'id');
        return response()->json($city);
    }
    public function getKecamatanById($id)
    {
        $district = District::where('regency_id', $id)->pluck('name', 'id');
        return response()->json($district);
    }
}
