<?php

namespace App\Http\Controllers;

use App\Models\News;
use app\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('comments')->get();
        return view('newses', ['data' => $news->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new = new News();
        return view('news-form', ['data' => $new->all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = News::create($request->all());

        return response()->json($news, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id)->with('comments');
        return view('onenews', [
            'data' => $news->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $id)
    {
        $item = News::find($id);

        return view('update-news', ['data' => $item->find($id)]);
    }

    public function update($id, ContactRequest $ref)
    {

        $newNews = News::find($id);
        $newNews->title = $ref->input('title');
        $newNews->text = $ref->input('text');
        $newNews->desc = $ref->input('desc');

        $newNews->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return response()->json(null, 204);
    }
}
