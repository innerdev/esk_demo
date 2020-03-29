@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Creating news</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/dashboard/news/store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label>Header:</label>
                    <input type="text" class="form-control" name="header" value="{{old('header')}}">
                </div>

                <div class="form-group">
                    <label>Content:</label>
                    <textarea name="content" class="form-control" cols="30" rows="10">{{old('content')}}</textarea>
                </div>

                <div class="form-group">
                    <label>Slug:</label>
                    <input type="text" class="form-control" name="slug" value="{{old('slug')}}">
                    <small>Leave this field empty to auto generate slug.</small>
                </div>

                <div class="form-group">
                    <label>Upload image:</label> <input type="file" name="image">
                </div>

                @if (isset($galleries) && count($galleries) > 0)
                <div class="form-group">
                    <label>Or select existing gallery:</label>
                    <select name="gallery_guid" class="form-control">
                        <option value="-1">- none -</option>
                        @foreach ($galleries as $gallery)
                            <option value="{{ $gallery->guid }}">{{ $gallery->description }}</option>
                        @endforeach
                    </select>
                    <small>If you upload image AND select gallery, new gallery will be created and uploaded image will be linked to news item.</small>
                </div>
                @endif

                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
</div>
@endsection
