@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>

    <div>
        @foreach ($banners as $banner)
            <div>
                <a href="{{ $banner->link }}">
                    <img src="{{ asset($banner->url_img) }}" alt="Banner Image">
                </a>
            </div>
        @endforeach
    </div>
@endsection
