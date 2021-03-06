<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
    public function langDet($id, $locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->route('detailNews', $id);
    }
    public function langKar($jobvacancy_id, $locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->route('karirForm', $jobvacancy_id);
    }
}
