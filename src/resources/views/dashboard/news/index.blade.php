@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>News <a href="/dashboard/news/create" class="btn btn-primary">Create</a></h2>

            <table class="table table-striped dashboard__index-table">
                <tr>
                    <th>Header</th>
                    <th>Preview Image</th>
                    <th>Content (first 50 symbols)</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
                @foreach ($news as $newsItem)
                    <tr>
                        <td>{{$newsItem->header}}</td>
                        <td>@if (!is_null($newsItem->gallery)) {{$newsItem->gallery->filename}} @endif</td>
                        <td>{{$newsItem->getLimitedContent(50)}}</td>
                        <td>{{$newsItem->created_at}}</td>
                        <td>
                            <a href="/dashboard/news/edit/{{$newsItem->id}}">Edit</a> |
                            <a href="/dashboard/news/remove/{{$newsItem->id}}">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="pagination">
                {{ $news->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
