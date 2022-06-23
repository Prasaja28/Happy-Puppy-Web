<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Jobs;
use App\Models\Settings;
use App\Models\Province;
use App\Models\JobsEkspertise;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CareerExport;
use App\Mail\ContactMail;

Carbon::setlocale(LC_ALL, 'IND');

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($jobvacancy_id)
    {
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value','key')
            ->toArray();
        $jobs = Jobs::select('id', 'name_job', 'location')
            ->where('jobvacancy.id', '=', $jobvacancy_id)
            ->get();
        // dd($jobs);
        $careers = Career::select('*', 'name_job', 'location')
            ->join('jobvacancy', 'careerform.jobvacancy_id', 'jobvacancy.id')
            ->get();
        $province = Province::select('*')
            ->get();
        return view('formkarir', compact('careers', 'jobs', 'settings', 'province'));
    }

    public function store(Request $request)
    {
        // //remove dot in expected salary and convert to integer
        // $test = $request(['expected_salary' => str_replace('.', '', $request->expected_salary)]);
        // dd($test);
        // $jobvacancy_id = $request->jobvacancy_id;
        // $name_job = $request->name_job;
        // $location = $request->location;

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
 
        if ($validator->fails()) {
            return back()
            ->withErrors("Lakukan Recaptcha Terlebih Dahulu Untuk Melanjutkan!!")
            ->withInput();     
        }
        // if ($request->email_confirm != $request->email) {
        //     return back()->with([
        //         'message' => 'Email Tidak Sesuai!',
        //         'alert' => 'warning'
        //     ]);
        // }

        if ($request->hasFile('cv') && $request->hasFile('ijazah')) {
            $file = $request->file('cv');
            $file2 = $request->file('ijazah');
            $filename = $file->getClientOriginalName();
            $filename2 = $file2->getClientOriginalName();
            $path = 'cv' . '/';
            $path2 = 'ijazah' . '/';
            if ($request->name == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Nama tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->formal_education == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Pendidikan Formal tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->place_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tempat Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->date_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tanggal Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->height == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tinggi badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->weight == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Berat badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->gender == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Jenis Kelamin tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->status_marital == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Status Marital tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Telp tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->mobile_phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'No. HP tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->email == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Email tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->address == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Alamat tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->no_ktp == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Berat badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->expected_salary == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Gaji yang Diharapkan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } 
            $data = [
                'id',
                'name'                  => $request->name,
                'formal_education'      => $request->formal_education,
                'place_birth'           => $request->place_birth,
                'date_birth'            => $request->date_birth,
                'height'                => $request->height,
                'weight'                => $request->weight,
                'gender'                => $request->gender,
                'status_marital'        => $request->status_marital,
                'phone'                 => $request->phone,
                'mobile_phone'          => $request->mobile_phone,
                'email'                 => $request->email,
                'address'               => $request->address,
                'no_ktp'                => $request->no_ktp,
                'expected_salary'       => str_replace('.', '', $request->expected_salary),
                'language'              => $request->language,
                'instrument_music'      => $request->instrument_music,
                'computer'              => $request->computer,
                'other_expertise'       => $request->other_expertise,
                'cv'                    => $path . $filename,
                'ijazah'                => $path2 . $filename2,
                'linkedin'              => $request->linkedin,
                'created_at'            => date('Y-m-d H:i:s'),
                'jobvacancy_id'         => $request->jobvacancy_id,
            ];
            $destinationPath = public_path('/uploads/' . $path);
            $destinationPath2 = public_path('/uploads/' . $path2);
            $file->move($destinationPath, $filename);
            $file2->move($destinationPath2, $filename2);

            $careerform_id = Career::create($data);
            $jobeks = new JobsEkspertise();
            //get spesific id form careerform table insert into jobexpertise table
            $jobeks->careerform_id = Career::max('id');
            $jobeks->company_name = $request->nama_perusahaan;
            $jobeks->length_work = $request->lama_kerja;
            $jobeks->position = $request->jabatan;
            // dd($jobeks);
            $jobeks->save();

            $company_name = $request->company_name;
            $length_work = $request->length_work;
            $position = $request->position;
            for ($i = 0; $i < count($company_name); $i++) {
                $data = [
                    'company_name' => $company_name[$i],
                    'length_work' => $length_work[$i],
                    'position' => $position[$i],
                    'careerform_id' => $careerform_id->id,
                ];
                // dd($data);
                DB::table('jobexpertise')->insert($data);
            }
            return redirect('/formkarir/' . $request->jobvacancy_id)->with([
                'message' => 'Fromulir Berhasil Dikirim!',
                'alert' => 'success'
            ]);
        } elseif ($request->hasFile('cv_mob') && $request->hasFile('ijazah_mob')) {
            $file = $request->file('cv_mob');
            $file2 = $request->file('ijazah_mob');
            $filename = $file->getClientOriginalName();
            $filename2 = $file2->getClientOriginalName();
            $path = 'cv' . '/';
            $path2 = 'ijazah' . '/';
            if ($request->name == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Nama tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->formal_education == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Pendidikan Formal tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->place_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tempat Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->date_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tanggal Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->height == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tinggi badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->weight == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Berat badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->gender == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Jenis Kelamin tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->status_marital == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Status Marital tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Telp tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->mobile_phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'No. HP tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->email == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Email tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->address == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Alamat tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->no_ktp == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Berat badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->expected_salary == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Gaji yang Diharapkan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } 
            $data = [
                'id',
                'name'                  => $request->name,
                'formal_education'      => $request->formal_education,
                'place_birth'           => $request->place_birth,
                'date_birth'            => $request->date_birth,
                'height'                => $request->height,
                'weight'                => $request->weight,
                'gender'                => $request->gender,
                'status_marital'        => $request->status_marital,
                'phone'                 => $request->phone,
                'mobile_phone'          => $request->mobile_phone,
                'email'                 => $request->email,
                'address'               => $request->address,
                'no_ktp'                => $request->no_ktp,
                'expected_salary'       => str_replace('.', '', $request->expected_salary),
                'language'              => $request->language,
                'instrument_music'      => $request->instrument_music,
                'computer'              => $request->computer,
                'other_expertise'       => $request->other_expertise,
                'cv'                    => $path . $filename,
                'ijazah'                => $path2 . $filename2,
                'linkedin'              => $request->linkedin_mob,
                'created_at'            => date('Y-m-d H:i:s'),
                'jobvacancy_id'         => $request->jobvacancy_id,
            ];
            
            $destinationPath = public_path('/uploads/' . $path);
            $destinationPath2 = public_path('/uploads/' . $path2);
            $file->move($destinationPath, $filename);
            $file2->move($destinationPath2, $filename2);
            

            $careerform_id = Career::create($data);
            $jobeks = new JobsEkspertise();
            //get spesific id form careerform table insert into jobexpertise table
            $jobeks->careerform_id = Career::max('id');
            $jobeks->company_name = $request->nama_perusahaan;
            $jobeks->length_work = $request->lama_kerja;
            $jobeks->position = $request->jabatan;
            // dd($jobeks);
            $jobeks->save();

            $company_name = $request->company_name;
            $length_work = $request->length_work;
            $position = $request->position;
            for ($i = 0; $i < count($company_name); $i++) {
                $data = [
                    'company_name' => $company_name[$i],
                    'length_work' => $length_work[$i],
                    'position' => $position[$i],
                    'careerform_id' => $careerform_id->id,
                ];
                // dd($data);
                DB::table('jobexpertise')->insert($data);
            }
            return redirect('/formkarir/' . $request->jobvacancy_id)->with([
                'message' => 'Fromulir Berhasil Dikirim!',
                'alert' => 'success'
            ]);
        } else {
            if ($request->name == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Nama tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->formal_education == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Pendidikan Formal tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->place_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tempat Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->date_birth == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tanggal Lahir tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->height == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Tinggi badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->weight == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Berat badan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->gender == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Jenis Kelamin tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->status_marital == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Status Marital tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Telp tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->mobile_phone == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'No. HP tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->email == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Email tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->address == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Alamat tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->no_ktp == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'KTP tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } if ($request->expected_salary == null) {
                return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()->with([
                    'message' => 'Gaji yang Diharapkan tidak boleh kosong!',
                    'alert' => 'danger'
                ]);
            } 
        }
        $data = [
            'id',
            'name'                  => $request->name,
            'formal_education'      => $request->formal_education,
            'place_birth'           => $request->place_birth,
            'date_birth'            => $request->date_birth,
            'height'                => $request->height,
            'weight'                => $request->weight,
            'gender'                => $request->gender,
            'status_marital'        => $request->status_marital,
            'phone'                 => $request->phone,
            'mobile_phone'          => $request->mobile_phone,
            'email'                 => $request->email,
            'address'               => $request->address,
            'no_ktp'                => $request->no_ktp,
            'expected_salary'       => str_replace(',', '', $request->expected_salary),
            'language'              => $request->language,
            'instrument_music'      => $request->instrument_music,
            'computer'              => $request->computer,
            'other_expertise'       => $request->other_expertise,
            'cv'                    => $path . $filename,
            'ijazah'                => $path2 . $filename2,
            'linkedin'              => $request->linkedin,
            'created_at'            => date('Y-m-d H:i:s'),
            'jobvacancy_id'         => $request->jobvacancy_id,
        ];
        Mail::to('prasaja55@gmail.com')->send(new ContactMail($data));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        return back()->with('success', 'Formulir berhasil dihapus');
    }
    public function adminIndex()
    {
        $careers = Career::select('careerform.*', 'name_job', 'location')
            ->join('jobvacancy', 'careerform.jobvacancy_id', '=', 'jobvacancy.id')
            ->get();
        // $careers = Career::all();
        return view('admin.career-admin', compact('careers'));
    }
    public function detail($id)
    {
        $career = Career::find($id);
        if (empty($career)) {
            return redirect()->route('career-admin')->with('error', 'Data Tidak Ditemukan');
        }
        $jobsEkspertise = JobsEkspertise::select('jobexpertise.*', 'name')
            ->join('careerform', 'careerform.id', 'jobexpertise.careerform_id')
            ->where('careerform.id', $id)
            ->get();
        return view('admin.jobekspertise-admin', compact('jobsEkspertise'));
    }
    public function Export(Request $request)
    {
        
        return Excel::download(new CareerExport($request->id), 'Data Pelamar.xlsx');
    }
}
