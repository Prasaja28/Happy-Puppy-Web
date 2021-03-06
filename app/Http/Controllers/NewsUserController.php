<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Settings;

class NewsUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = app()->getLocale();
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $news_terlaris = News::where('news_category', 'popular')
            ->orderBy('news_date', 'desc')
            ->get();
        $news_terbaru = News::where('news_category', 'lates')
            ->orderBy('news_date', 'desc')
            ->get();
        return view('news', compact('news_terlaris', 'news_terbaru', 'settings', 'locale'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailIndex($id)
    {
        $locale = app()->getLocale();
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $news_detail = News::select('*')
            ->where('id', '=', $id)
            ->get();
        $news_detail_terbaru = News::where('news_category', 'lates')
            ->where('id', '!=', $id)
            ->get();
        return view('news-detail', compact('news_detail', 'news_detail_terbaru', 'settings', 'locale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function translate()
    {
        $locale = App()->getLocale();
        $settings = Settings::select('*')
            ->whereNotNull('value')
            ->get()
            ->pluck('value', 'key')
            ->toArray();
        $news_terlaris = News::where('news_title', $locale)->where('news_category', 'popular')->where('news_content_', $locale)->get();
        $news_terbaru = News::where('news_category', 'lates')->get();
        return view('translate', compact('news_terlaris', 'news_terbaru', 'settings'));
    }
}
