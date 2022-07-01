<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topartist;
use App\Models\Songlist;
use App\Models\News;
use App\Models\User;
use App\Models\Settings;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topartist = Topartist::select('*')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();
        $songlist_terlaris = Songlist::where('kategori_lagu', 'terlaris')
            ->orderBy('urutan', 'asc')
            ->limit(6)
            ->get();
        $songlist_terbaru = Songlist::where('kategori_lagu', 'terbaru')
            ->limit(6)
            ->get();
        $news_terbaru = News::where('news_category', 'lates')
            ->orderBy('news_date', 'desc')
            ->limit(6)
            ->get();
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $user = User::all();
        return view('home', compact('topartist', 'songlist_terlaris', 'songlist_terbaru', 'news_terbaru', 'settings', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailIndex($id)
    {
        $news_detail = News::select('*')
            ->where('id', '=', $id)
            ->get();
        $news_detail_terbaru = News::where('news_category', 'lates')
            ->where('id', '!=', $id)
            ->get();
        return view('news-detail', compact('news_detail', 'news_detail_terbaru'));
    }
}
