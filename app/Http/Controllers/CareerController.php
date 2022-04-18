<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Jobs;
use App\Models\JobsEkspertise;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

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
        $jobs = Jobs::select('id', 'name_job', 'location')
            ->where('jobvacancy.id', '=', $jobvacancy_id)
            ->get();
        // dd($jobs);
        $careers = Career::select('*', 'name_job', 'location')
            ->join('jobvacancy', 'careerform.jobvacancy_id', 'jobvacancy.id')
            ->get();
        return view('formkarir', compact('careers', 'jobs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // $jobvacancy_id = $request->jobvacancy_id;
        // $name_job = $request->name_job;
        // $location = $request->location;

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'recaptcha',
        ]);
 
        if ($validator->fails()) {
            return back()
            ->withErrors("Lakukan Recaptcha Terlebih Dahulu Untuk Melanjutkan!!")
            ->withInput($request->all());     
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
            $path = Carbon::now()->format('Y') . '/';
            $path2 = Carbon::now()->format('Y') . '/';

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
                'expected_salary'       => $request->expected_salary,
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
            Storage::putFileAs(
                'public/' . $path,
                $file,
                $filename
            );
            Storage::putFileAs(
                'public/' . $path2,
                $file2,
                $filename2
            );

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
            $path = Carbon::now()->format('Y') . '/';
            $path2 = Carbon::now()->format('Y') . '/';

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
                'expected_salary'       => $request->expected_salary,
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

            Storage::putFileAs(
                'public/' . $path,
                $file,
                $filename
            );
            Storage::putFileAs(
                'public/' . $path2,
                $file2,
                $filename2
            );

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
            return redirect('/formkarir/' . $request->jobvacancy_id)->withInput()
            ->with([
                'message' => 'Fromulir Gagal Dikirim, Mohon Periksa Kembali Formulir Anda!',
                'alert' => 'warning'
            ]);
        }
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
        $careers = Career::select('*', 'name_job', 'location')
            ->join('jobvacancy', 'careerform.jobvacancy_id', '=', 'jobvacancy.id')
            ->get();
        return view('admin.career-admin', compact('careers'));
    }
}
