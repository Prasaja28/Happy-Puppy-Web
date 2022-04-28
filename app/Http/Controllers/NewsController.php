<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Session;
use File;
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
            'thumbnail' => 'max:1000'
        ]);
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = '.'.$file->getClientOriginalName();
                $path = 'img/news-img/';
                //dd($path);
                $file->move(public_path('/uploads/'.$path), $fileName);
            
            // dd($request->jenis_dokumen);
            News::create([
                'thumbnail' => $path . $fileName,
                'news_title_en' => $request->news_title_en,
                'news_title_id' => $request->news_title_id,
                'news_content_en' => $request->news_content_en,
                'news_content_id' => $request->news_content_id,
                'news_date' => $request->news_date,
                'news_category' => $request->news_category,
                'users_id' => $request->users_id,
                'status' => 1
            ]);
            // dd($test);
            return redirect('/news-admin')->with('status','Data Berhasil Di Simpan!!!'); 
        } else {
            return redirect('/news-admin')->with('status','Data Gagal Di Simpan!!!'); 
        }
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
            'thumbnail' => 'max:1000'
        ]);
        //dd($request);
        //dd($request->news_title_en);
        $path = null; 
            if($request->thumbnail)
            {
                $file = $request->file('thumbnail');
                $fileName = '.'.$file->getClientOriginalName();
                $path = 'img/news-img/';
                //dd($path);
                $file->move(public_path('/uploads/' . $path), $fileName);
           
            News::where('id',$id)
            ->update([
                'thumbnail' => $path . $fileName ,
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
        }else{
                return redirect('/news-admin')->with('status','Data Gagal Di update!!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::where('id',$id)->first();
        $path = public_path('uploads/'.$news->thumbnail);

        if(File::exists($path)) {
            File::delete($path);
        }
        $news->delete();
        return redirect('/news-admin')->with('status','Data Berhasil Di Hapus!!!'); 
    }
}
