<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog Article</title>
</head>
<body class="article">
    <h1>{{ $article->title }}</h1>
    <section class="article-page">
        <article class="article-case" style="overflow-y: auto;">
            <p>{{ $article->content }}</p>
            <p>{{ $article->views }} vues</p>
        </article>
        <br />
        <article class="article-case article-thumbnail">
            <img src="{{ $article->thumbnail }}" alt="">
        </article>
    </section>
    <a href="/articles" class="btn">retour</a>
    <a href="/delete/{{ $article->id }}" class="btn">Supprimer</a>
</body>
</html>