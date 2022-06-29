<?php

namespace App\Http\Controllers;

use App\Models\Waralaba;
use App\Models\Settings;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\ContactMail1;

class WaralabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $waralaba = Waralaba::from("waralabaregister as w")
            ->leftjoin('provinces as p1', 'p1.id', '=', 'w.province')
            ->leftJoin('provinces as p2', 'p2.id', '=', 'w.province_2')
            ->leftJoin('provinces as p3', 'p3.id', '=', 'w.province_3')
            ->select('w.*', 'p1.name as province_name_1', 'p2.name as province_name_2', 'p3.name as province_name_3')
            ->get();
        return view('admin.waralaba-admin', compact('waralaba'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);

        if ($validator->fails()) {
            return redirect('/form-waralaba')
                ->withErrors("Lakukan Recaptcha Terlebih Dahulu Untuk Melanjutkan!!")
                ->withInput();
        }
        if ($request->email_confirm != $request->email) {
            return back()->withInput()->with([
                'message' => 'Email Tidak Sesuai!',
                'alert' => 'danger'
            ]);
        }
        if ($request->name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->official_address == null) {
            return back()->withInput()->with([
                'message' => 'Alamat Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->home_phone == null) {
            return back()->withInput()->with([
                'message' => 'Nomor Telepon Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->province == null) {
            return back()->withInput()->with([
                'message' => 'Provinsi Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->city == null) {
            return back()->withInput()->with([
                'message' => 'Kabupaten/Kota Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->age == null) {
            return back()->withInput()->with([
                'message' => 'Usia Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->last_education == null) {
            return back()->withInput()->with([
                'message' => 'Pendidikan Terakhir Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->marital == null) {
            return back()->withInput()->with([
                'message' => 'Status Pernikahan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->official_phone == null) {
            return back()->withInput()->with([
                'message' => 'Nomor Telepon Bekerja Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->mobile_phone == null) {
            return back()->withInput()->with([
                'message' => 'Nomor Telepon Seluler Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->job == null) {
            return back()->withInput()->with([
                'message' => 'Pekerjaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->bussiness_field == null) {
            return back()->withInput()->with([
                'message' => 'Sektor Pekerjaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->email == null) {
            return back()->withInput()->with([
                'message' => 'Email Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->company_name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Perusahaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->postion_company == null) {
            return back()->withInput()->with([
                'message' => 'Jabatan Di Perusahaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->address_2 == null) {
            return back()->withInput()->with([
                'message' => 'Alamat Perusahaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->address_3 == null) {
            return back()->withInput()->with([
                'message' => 'Alamat Waralaba Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->province_2 == null) {
            return back()->withInput()->with([
                'message' => 'Provinsi Perusahaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->city_2 == null) {
            return back()->withInput()->with([
                'message' => 'Kabupaten/Kota Perusahaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->province_3 == null) {
            return back()->withInput()->with([
                'message' => 'Provinsi Waralaba Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->city_3 == null) {
            return back()->withInput()->with([
                'message' => 'Kabupaten/Kota Waralaba Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->status_penguasaan == null) {
            return back()->withInput()->with([
                'message' => 'Status Penguasaan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->known_as_area == null) {
            return back()->withInput()->with([
                'message' => 'Nama Area Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->building_area == null) {
            return back()->withInput()->with([
                'message' => 'Luas Bangunan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->left_business_name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Usaha Tetangga Kiri Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->right_business_name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Usaha Tetangga Kanan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->front_business_name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Usaha Depan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->behind_business_name == null) {
            return back()->withInput()->with([
                'message' => 'Nama Usaha Belakang Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->left_business_field == null) {
            return back()->withInput()->with([
                'message' => 'Bidang Usaha Tetangga Kiri Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->right_business_field == null) {
            return back()->withInput()->with([
                'message' => 'Bidang Usaha Tetangga Kanan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->front_business_field == null) {
            return back()->withInput()->with([
                'message' => 'Bidang Usaha Depan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->behind_business_field == null) {
            return back()->withInput()->with([
                'message' => 'Bidang Usaha Belakang Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->front_road_width == null) {
            return back()->withInput()->with([
                'message' => 'Lebar Jalan Depan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->front_road_traffic == null) {
            return back()->withInput()->with([
                'message' => 'Lalu Lintas Jalan Depan Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->confirm_completenes == null) {
            return back()->withInput()->with([
                'message' => 'Konfirmasi Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        if ($request->confirm_completenes == null) {
            return back()->withInput()->with([
                'message' => 'Konfirmasi Tidak Boleh Kosong!',
                'alert' => 'danger'
            ]);
        }
        // dd($request->all());
        if ($request->confirm_completenes != null && $request->confirm_completenes != null) {

            Mail::to(config('mail.to_address2'))->send(new ContactMail1([
                'name' => $request->name,
            ]));

            Waralaba::create($request->all());
            return back()->with([
                'message' => 'Fromulir Berhasil Dikirim!',
                'alert' => 'success'
            ]);
        } elseif ($request->confirm_completenes_mob != null && $request->confirm_completenes_mob != null) {
            $waralaba = new Waralaba();
            $waralaba->name = $request->name;
            $waralaba->gender = $request->gender;
            $waralaba->age = $request->age;
            $waralaba->last_education = $request->last_education;
            $waralaba->marital = $request->marital;
            $waralaba->city = $request->city;
            $waralaba->province = $request->province;
            $waralaba->official_address = $request->official_address;
            $waralaba->home_phone = $request->home_phone;
            $waralaba->official_phone = $request->official_phone;
            $waralaba->mobile_phone = $request->mobile_phone;
            $waralaba->email = $request->email;
            $waralaba->job = $request->job;
            $waralaba->bussiness_field = $request->bussiness_field;
            $waralaba->other = $request->other;
            $waralaba->company_name = $request->company_name;
            $waralaba->postion_company = $request->postion_company;
            $waralaba->other_2 = $request->other_2;
            $waralaba->address_2 = $request->address_2;
            $waralaba->city_2 = $request->city_2;
            $waralaba->province_2 = $request->province_2;
            $waralaba->status_penguasaan = $request->status_penguasaan;
            $waralaba->address_3 = $request->address_3;
            $waralaba->city_3 = $request->city_3;
            $waralaba->province_3 = $request->province_3;
            $waralaba->known_as_area = $request->known_as_area;
            $waralaba->other_3 = $request->other_3;
            $waralaba->building_area = $request->building_area;
            $waralaba->left_business_name = $request->left_business_name;
            $waralaba->left_business_field = $request->left_business_field;
            $waralaba->right_business_name = $request->right_business_name;
            $waralaba->right_business_field = $request->right_business_field;
            $waralaba->front_business_name = $request->front_business_name;
            $waralaba->front_business_field = $request->front_business_field;
            $waralaba->behind_business_name = $request->behind_business_name;
            $waralaba->behind_business_field = $request->behind_business_field;
            $waralaba->front_road_width = $request->front_road_width;
            $waralaba->front_road_traffic = $request->front_road_traffic;
            $waralaba->confirm_completenes = $request->confirm_completenes_mob;
            $waralaba->confirm_register = $request->confirm_register_mob;
            $waralaba->status = 0;
            $waralaba->save();

            Mail::to(config('mail.to_address2'))->send(new ContactMail1([
                'name' => $request->name,
            ]));

            return back()->with([
                'message' => 'Fromulir Berhasil Dikirim!',
                'alert' => 'success'
            ]);
        } else {
            return back()->with([
                'message' => 'Formulir Harus Lengkap!',
                'alert' => 'warning'
            ]);
        }
    }


    public function destroy($id)
    {
        $waralaba = Waralaba::findOrFail($id);
        $waralaba->delete();
        return back()->with('status', 'Data berhasil dihapus');
    }
    public function form()
    {
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $provincies = Province::select('*')
            ->orderBy('name', 'asc')
            ->get();
        $regencies = Regency::select('*')
            ->orderBy('name', 'asc')
            ->get();
        return view('formwaralaba', compact('settings', 'provincies', 'regencies'));
    }
    public function GetKota($id)
    {
        $regencies = Regency::where('province_id', $id)->pluck('name');
        return response()->json($regencies);
    }
}
