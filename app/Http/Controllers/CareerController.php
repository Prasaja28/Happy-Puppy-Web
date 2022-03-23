<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Storage;

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
                'informal_education'    => $request->informal_education,
                'jurusan'               => $request->jurusan,
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
                'cv'                    => $filename,
                'ijazah'                => $filename2,
                'linkedin'              => $request->linkedin,
                'created_at'            => date('Y-m-d H:i:s'),
                'jobvacancy_id'         => $request->jobvacancy_id,
            ];
            Storage::putFileAs(
                'public/uploads/cv' . $path,
                $file,
                $filename
            );
            Storage::putFileAs(
                'public/uploads/ijazah' . $path2,
                $file2,
                $filename2
            );

            Career::create($data);
            return back()->with('success', 'Data berhasil ditambahkan');
        } else return back()->with('error', 'Data gagal ditambahkan');
        if ($request->hasFile('cv_mob') && $request->hasFile('ijazah_mob')) {
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
                'informal_education'    => $request->informal_education,
                'jurusan'               => $request->jurusan,
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
                'cv_mob'                => $filename,
                'ijazah_mob'            => $filename2,
                'linkedin'              => $request->linkedin,
                'created_at'            => date('Y-m-d H:i:s'),
                'jobvacancy_id'         => $request->jobvacancy_id,
            ];
            Storage::putFileAs(
                'public/uploads/cv' . $path,
                $file,
                $filename
            );
            Storage::putFileAs(
                'public/uploads/ijazah' . $path2,
                $file2,
                $filename2
            );

            Career::create($data);
            return back()->with('success', 'Data berhasil ditambahkan');
        }
    }

    // public function update(Request $request)
    // {
    //     $update = Career::findorFail($request->id);
    //     if ($request->hasFile('cv')) {
    //         $file = $request->file('cv');
    //         $filename = time() . '.' . $file->getClientOriginalExtension();
    //         $file->move(public_path('/uploads/cv'), $filename);
    //         $file2 = $request->file('ijazah');
    //         $filename2 = time() . '.' . $file2->getClientOriginalExtension();
    //         $file2->move(public_path('/uploads/ijazah'), $filename2);

    //         Storage::putFileAs('public/uploads/cv', $file, $filename);
    //         Storage::putFileAs('public/uploads/ijazah', $file2, $filename2);

    //         $update->cv = $filename;
    //         $update->ijazah = $filename2;
    //     }
    //     $update->name = $request->name;
    //     $update->formal_education = $request->formal_education;
    //     $update->informal_education = $request->informal_education;
    //     $update->jurusan = $request->jurusan;
    //     $update->place_birth = $request->place_birth;
    //     $update->date_birt = $request->date_birt;
    //     $update->height = $request->height;
    //     $update->weight = $request->weight;
    //     $update->gender = $request->gender;
    //     $update->status_marital = $request->status_marital;
    //     $update->phone = $request->phone;
    //     $update->mobile_phone = $request->mobile_phone;
    //     $update->email = $request->email;
    //     $update->address = $request->address;
    //     $update->no_ktp = $request->no_ktp;
    //     $update->expected_salary = $request->expected_salary;
    //     $update->language = $request->language;
    //     $update->instrument_music = $request->instrument_music;
    //     $update->computer = $request->computer;
    //     $update->other_expertise = $request->other_expertise;
    //     $update->linkedin = $request->linkedin;
    //     if ($update->save()) {
    //         return redirect('/career')->with('success', 'Data berhasil diubah');
    //     }
    //     return redirect('/career')->with('error', 'Data gagal diubah');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Career::where('id', $id)
            ->update([
                'status' => 1
            ]);
        return back()->with('status', 'Data Berhasil Di Hapus!!!');
    }
    public function form(Request $request)
    {
        # code...
    }
}
