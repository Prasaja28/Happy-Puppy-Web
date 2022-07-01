<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Settings;

class ProfilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $profill = Profil::select('*')
            ->orderBy('year', 'asc')
            ->get();
        return view('profil', compact('profill', 'settings'));
    }
}
