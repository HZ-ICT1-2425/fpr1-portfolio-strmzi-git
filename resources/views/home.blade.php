@extends('layout.app')

@section('title', "Timo's homepage")

@section('css')
    @vite("resources/css/homepage.css")
@endsection

@section('main-content')
    <main>
        <div class="main-content">


            <h2>Why did I choose ICT?</h2>
            <p>I believe ICT is a good fit for me simply because I'm interested
                in the following tech-related fields:</p>
            <ul>
                <li>Software development</li>
                <li>Artificial intelligence</li>
                <li>Cybersecurity/Ethical hacking</li>
            </ul>
            <p>Fortunately, the ICT program at HZ covers some of those topics to some extent. </p>
            <p>Furthermore, i'm a big fan of the approach to teaching/learning at HZ. Since I took a gap year and did all my learning by myself, I can learn without any third-party intervention which I think is going to be a valuable skill in the next 4 years at HZ.</p>
        </div>
    </main>
@endsection
