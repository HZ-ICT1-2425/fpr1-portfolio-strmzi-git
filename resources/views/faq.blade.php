<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timo's FAQ</title>
    @vite("resources/css/nav/nav.css")
    @vite("resources/css/footer/footer.css")
    @vite("resources/css/app.css")
    @vite("resources/css/faq.css")

    <meta name="description" content="Timo's FAQ">
</head>
<body>
@include("partials.header")
<main>
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
@include("partials.footer")

</body>
</html>
