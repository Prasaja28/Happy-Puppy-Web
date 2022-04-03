<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topartist;
use App\Models\Songlist;
use App\Models\News;

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
        $songlist_terlaris = Songlist::where('kategori_lagu','terlaris')
            ->limit(6)
            ->get();
        $songlist_terbaru = Songlist::where('kategori_lagu','terbaru')
            ->limit(6)
            ->get();
        $news_terbaru = News::where('news_category','lates')
            ->limit(6)
            ->get();
        return view('home',compact('topartist','songlist_terlaris','songlist_terbaru','news_terbaru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detailIndex($id)
    {
        // dd($id);
        $news_detail = News::select('*')
            ->where('id', '=', $id)
            ->get();
        $news_detail_terbaru = News::where('news_category', 'lates')
            ->where('id', '!=', $id)
            ->get();
        return view('news-detail', compact('news_detail', 'news_detail_terbaru'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
