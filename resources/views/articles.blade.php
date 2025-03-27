<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Blog Articles</title>
</head>
<body>
    <h1>{{ $nomBlog }}</h1>
    <p>Bienvenue, {{ $nbArticles }} articles rien que pour votre plaisir et votre culture vous attendent ici</p>
    
    @if($nbArticles > 0)
        <ul>
            @foreach($articles as $id => $article)
                <li class="">
                    <div style="background-image: linear-gradient(to right, rgba(0,0,0,1), rgba(0,0,0,0)), url('{{ $article->thumbnail }}'); background-size: cover; backdrop-filter: blur(5px); padding: 20px; margin: 10px; border-radius: 10px;">
                        <a href="/article/{{ $article->id }}">
                            <div class="">
                                <h1>{{ $article['title'] }}</h1>
                                <p>{{ $article->views }} vues</p>
                            </div>
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>Aucun article n'a été trouvé.</p>
    @endif

    <a href="/" class='btn'>retour</a>
    <a href="/add" class='btn'>Ajouter un article</a>
</body>
</html>