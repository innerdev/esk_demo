@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Last 5 news <a href="/dashboard/news" class="btn btn-primary">List</a> <a href="/dashboard/news/create" class="btn btn-primary">Create</a></h3>
            <table class="table table-striped">
            @foreach ($lastNews as $newsItem)
                <tr><td><a href="/dashboard/news/edit/{{$newsItem->id}}">{{$newsItem->header}}</a></td></tr>
            @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Last 5 galleries <a href="/dashboard/galleries" class="btn btn-primary">List</a> <a href="/dashboard/galleries/create" class="btn btn-primary">Create</a></h3>
            <table class="table table-striped">
                @foreach ($lastGalleries as $galleryItem)
                    <tr><td><a href="/dashboard/gallery/edit/{{$galleryItem->guid}}">{{$galleryItem->description}}</a></td></tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
