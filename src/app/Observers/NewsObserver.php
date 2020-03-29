<?php

namespace App\Observers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsObserver
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function saving(News $news)
    {
        if (empty($news->slug)) {
            $news->slug = Str::slug($news->header);
        }

        // TODO remove magic number '-1', it is value from html form by default
        if (is_null($this->request->image) && $this->request->get('gallery_guid') != -1) {
            $news->gallery_guid = $this->request->get('gallery_guid');
        }

        if (!is_null($this->request->image)) {
            $guid = Str::uuid();
            $path = Storage::putFile(Gallery::DIRECTORY_NAME, $this->request->file('image'));
            Gallery::create(['guid' => $guid, 'filename' => basename($path), 'description' => $news->header]);
            $news->gallery_guid = $guid;
        }
    }
}
