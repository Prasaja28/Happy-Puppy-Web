<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Outlet;
use App\Models\User;
use App\Models\Settings;
use Session;
use File;

class OutletWaralabaController extends Controller
{
    public function index()
    {
        $outlet = Outlet::select(
            'outlet.*',
            'regencies.name as regency_name',
            'districts.name as district_name',
            'provinces.name as province_name'
        )
            ->leftjoin('regencies', 'outlet.city_id', '=', 'regencies.id')
            ->leftjoin('districts', 'outlet.citysub_id', '=', 'districts.id')
            ->leftjoin('provinces', 'outlet.province_id', '=', 'provinces.id')
            ->paginate(10);

        $province = DB::table('provinces')->orderBy('name', 'asc')->get();
        $city = DB::table('regencies')
            ->orderBy('name', 'asc')->get();
        $citysub = DB::table('districts')->orderBy('name', 'asc')->get();
        return view('admin.outlet-admin.outlet-admin-index', compact('outlet', 'province', 'city', 'citysub'));
    }
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'thumbnail'             => 'required|max:2000'
            ],
            [
                'thumbnail.required'    => 'Gambar tidak boleh kosong',
                'thumbnail.max'      => 'Gambar tidak boleh lebih dari 2000',
            ]
        );
        $path = null;
        if ($request->thumbnail) {
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $path = 'img/outlet-img/';
            //dd($path);
            $file->move(public_path('/uploads/' . $path), $fileName);
        }

        // dd($request->jenis_dokumen);
        Outlet::create([
            'thumbnail' => $path . $fileName,
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'email' => $request->email,
            'link_ig' => $request->link_ig,
            'link_2' => $request->link_2,
            'users_id' => $request->users_id,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'citysub_id' => $request->citysub_id,
            'status' => 1
        ]);

        return redirect('/outlet-admin')->with('status', 'Data Berhasil Di Simpan!!!');
    }

    public function update(Request $request, $id)
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
        $path = null;
        if ($request->thumbnail) {
            $file = $request->file('thumbnail');
            $fileName = $file->getClientOriginalName();
            $path = 'img/outlet-img/';
            $file->move(public_path('/uploads/' . $path), $fileName);
        } else {
            $path = $request->thumbnail2;
        }
        Outlet::where('id', $id)
            ->update([
                'thumbnail' => $path . $fileName,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'fax' => $request->fax,
                'email' => $request->email,
                'link_ig' => $request->link_ig,
                'link_2' => $request->link_2,
                'users_id' => $request->users_id,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'citysub_id' => $request->citysub_id
            ]);
        return redirect('/outlet-admin')->with('status', 'Data Berhasil Di update!!!');
    }

    public function destroy($id)
    {
        $outlet = Outlet::find($id);
        $path = public_path('uploads/' . $outlet->thumbnail);
        if (File::exists($path)) {
            File::delete($path);
        }
        $outlet->delete();
        return redirect('/outlet-admin')->with('status', 'Data Berhasil Di Hapus!!!');
    }

    public function search(Request $request)
    {
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $keyword = $request->keyword;
        $outlet = Outlet::from('outlet as o')
            ->select('o.*', 'c.name as regency_name', 'o.name as outlet_name', 'p.name as province_name', 'd.name as district_name')
            ->where('o.name', 'like', '%'.$keyword.'%' )
            ->orWhere('c.name', 'like', '%'.$keyword.'%' )
            ->leftJoin('regencies as c', 'c.id', '=' , "o.city_id")
            ->leftJoin('provinces as p', 'p.id', '=' , "o.province_id")
            ->leftJoin('districts as d', 'd.id', '=' , "o.citysub_id")
            ->get();
        if ($outlet->count() == 0) {
            return view('/lokasi-not-found', compact('settings'));
        }

        return view('lokasi-outlet', compact('outlet', 'keyword', 'settings'));
    }
    public function getKotaById(Request $request)
    {
        $province_id = $request->province_id;
        $kota = DB::table('regencies')
            ->where('province_id', $province_id)
            ->orderBy('name', 'asc')
            ->get();
        foreach ($kota as $kota) {
            echo "<option value=$kota->id>$kota->name</option>";
        }
    }

    public function getKecamatanById(Request $request)
    {
        $city_id = $request->city_id;
        $kecamatan = DB::table('districts')
            ->where('regency_id', $city_id)
            ->orderBy('name', 'asc')
            ->get();
        foreach ($kecamatan as $kecamatan) {
            echo "<option value=$kecamatan->id>$kecamatan->name</option>";
        }
        echo "<option value= >Kosong</option>";
    }
}
