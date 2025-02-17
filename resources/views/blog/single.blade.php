@extends('layout.app')

@section('title', $blog_data->title)

@section('css')
    @vite("resources/css/blog/single.css")
@endsection

@section('main-content')
<main>
    <h2><?= $blog_data->title ?></h2>
    <p>{!! nl2br(e($blog_data->content)) !!}</p>
</main>

@endsection
