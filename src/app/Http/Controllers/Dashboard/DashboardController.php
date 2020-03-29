<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Tag;
use App\Models\News;
use App\Models\Gallery;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $lastGalleries = Gallery::orderBy('created_at', 'desc')->limit(5)->get();
        $lastNews = News::orderBy('created_at', 'desc')->limit(5)->get();

        return view('dashboard.dashboard', [
            'lastGalleries' => $lastGalleries,
            'lastNews' => $lastNews
        ]);
    }
}
