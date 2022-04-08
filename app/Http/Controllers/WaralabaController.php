<?php

namespace App\Http\Controllers;

use App\Models\Waralaba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class WaralabaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $waralaba = Waralaba::all();
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
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
 
        if ($validator->fails()) {
            return redirect('formwaralaba')
                ->withErrors("Lakukan Recaptcha Terlebih Dahulu Untuk Melanjutkan!!")
                ->withInput();
        }
        if ($request->email_confirm != $request->email) {
            return back()->with([
                'message' => 'Email Tidak Sesuai!',
                'alert' => 'warning'
            ]);
        }
        // dd($request->all());
        if ($request->confirm_completenes != null && $request->confirm_completenes != null) {
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
}
