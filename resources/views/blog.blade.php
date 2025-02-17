@extends('layout.app')

@section('title', "Timo's blog")

@section('css')
    @vite("resources/css/blog.css")
@endsection

@section('main-content')
    <main>
        <h2>Welcome to my blog</h2>
        <?php foreach($data as $blog_item): ?>
        <a href="/blog/<?= htmlspecialchars($blog_item->id) ?>" class="blog-item">
            <h4><?= htmlspecialchars($blog_item->title) ?></h4>
            <p><?= nl2br(htmlspecialchars($blog_item->content_description)) ?></p>
        </a>
        <?php endforeach; ?>

    </main>
@endsection
