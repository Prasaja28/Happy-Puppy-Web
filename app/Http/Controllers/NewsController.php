<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Session;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.news-index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $request->validate([
            'thumbnail' => 'max:88'
        ]);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $path = '/img/news-img/'.time().'-'.$file->getClientOriginalName();
                //dd($path);
                $file->move(public_path('img/news-img'), $path);
            }
            // dd($request->jenis_dokumen);
            News::create([
                'thumbnail' => $path,
                'news_title_en' => $request->news_title_en,
                'news_title_id' => $request->news_title_id,
                'news_content_en' => $request->news_content_en,
                'news_content_id' => $request->news_content_id,
                'news_date' => $request->news_date,
                'news_category' => $request->news_category,
                'status' => 1,
                'users_id' => $request->users_id
            ]);
            return redirect('/news-admin')->with('status','Data Berhasil Di Simpan!!!'); 
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
        $request->validate([
            'thumbnail' => 'max:88'
        ]);
        //dd($request);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $path = '/img/news-img/'.time().'-'.$file->getClientOriginalName();
                //dd($path);
                $file->move(public_path('img/news-img'), $path);
            }else{
                $path = $request->thumbnail2;
            }
            News::where('id',$id)
            ->update([
                'thumbnail' => $path,
                'news_title_en' => $request->news_title_en,
                'news_title_id' => $request->news_title_id,
                'news_content_en' => $request->news_content_en,
                'news_content_id' => $request->news_content_id,
                'news_date' => $request->news_date,
                'news_category' => $request->news_category,
                'status' => $request->status,
                'users_id' => $request->users_id
            ]);
            return redirect('/news-admin')->with('status','Data Berhasil Di update!!!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id',$id)
        ->update([
            'status'=> 0,
            'users_id'=> Session::get('user_id')
        ]);
        return redirect('/news-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }
}
