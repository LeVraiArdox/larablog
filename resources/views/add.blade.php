<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Ajout d'article</title>
</head>
<body>
    <h1>Ajouter un article</h1>
    <form action="/form" method="post">
        @csrf
        <input type="text" name="title" id="title" placeholder="Titre de l'article" required>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>
        <input type="text" name="thumbnail" id="image_url" placeholder="URL de l'image">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>