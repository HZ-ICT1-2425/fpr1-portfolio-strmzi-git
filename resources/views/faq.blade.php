@extends('layout.app')

@section('title', "Timo's faq")

@section('css')
    @vite("resources/css/faq.css")
@endsection

@section('main-content')
    <main>
        <h2>FAQ</h2>
        <div>
            <?php
            foreach ($data as $faq): ?>
            <details class="faq-item">
                <summary> <?= $faq->question ?></summary>
                <p>{!! nl2br(e($faq->answer)) !!}</p>
            </details>

            <?php endforeach; ?>
        </div>
    </main>
@endsection
