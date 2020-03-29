<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\News;
use App\Models\Gallery;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class NewsController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->limit(20)->paginate();
        return view('dashboard.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('dashboard.news.create', ['galleries' => Gallery::all()]);
    }

    public function store(Request $request)
    {
        // See App\Observers\NewsObserver.php
        News::create($request->validate([
            'header' => 'required|max:255',
            'content' => 'required'
        ]));
        return redirect('/dashboard/news'); // TODO Those kind of URIs can be placed in route
    }

    public function edit($id)
    {
        return view('dashboard.news.edit', [
            'newsItem' => News::where('id', $id)->first(),
            'galleries' => Gallery::all()
        ]);
    }

    public function update(Request $request)
    {
        $newsItem = News::where('id', $request->get("id"))->first();
        // TODO create own Request and put validator there
        $data = $request->validate([
            'header' => 'required|max:255',
            'content' => 'required'
        ]);
        $newsItem->update($data);
        return redirect('/dashboard/news');
    }

    public function remove($id)
    {
        News::destroy($id);
        return redirect('/dashboard/news');
    }
}
