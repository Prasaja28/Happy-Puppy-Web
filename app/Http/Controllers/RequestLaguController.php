<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestLagu;
use Session;

class RequestLaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = RequestLagu::all();
        return view('admin.kontak-kami.requestlagu-admin.request-admin-index', compact('request'));
    }
}
