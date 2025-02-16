<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timo's Landing Page</title>
    @vite("resources/css/nav/nav.css")
    @vite("resources/css/footer/footer.css")
    @vite("resources/css/app.css")
    @vite("resources/css/profile.css")


    <meta name="description" content="Timo's landing page">
</head>
<body>
@include("partials.header")
<main>
    <div class="main-content">
    <h1>Get to know Timo</h1>
    <img src="{{ asset('images/Profile.png') }}" height="200px" width="200px" class="img" alt="Profile">
        <div class="text-wrap">
            <p>
                I enjoy solving problems which being able to code allows me to do.
                Starting from a white, blank page and being able to build anything
                given the right skill set and an adequate time frame I think is
                pretty cool which is one of the reasons I chose this program and
                tend to pursue either courses or build whatever I find interesting
                during my free-time.
            </p>
            <p>
                The second reason I choose to pursue a career in tech is because I
                believe, as someone to wishes to explore the world and experience
                many things, tech is one of the few domains which provide the
                highest chance of eventually achieving financial and time freedom.
            </p>
        </div>
    </div>
</main>
@include("partials.footer")

</body>
</html>
