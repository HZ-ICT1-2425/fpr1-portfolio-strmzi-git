<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Timo's portfolio")</title>

    @yield('css')

    @vite("resources/css/nav/nav.css")
    @vite("resources/css/footer/footer.css")
    @vite("resources/css/app.css")
    @vite("resources/css/global.css")


    <meta name="description" content="Timo's landing page">
</head>
<body>
@include("partials.header")

<main>
    @yield('main-content')
</main>
@include("partials.footer")
</body>
</html>
