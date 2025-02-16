<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timo's Landing Page</title>
    @vite("resources/css/nav/nav.css")
    @vite("resources/css/homepage.css")
    @vite("resources/css/footer/footer.css")
    @vite("resources/css/app.css")

    <meta name="description" content="Timo's landing page">
</head>
<body>
@include("partials.header")

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
@include("partials.footer")
</body>
</html>
