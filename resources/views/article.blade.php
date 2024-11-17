<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $article->title }}</title>
</head>

<body class="bg-slate-100">
    @include('components/header')
    <article class="flex justify-center mt-10 mb-4">
        <div class="w-[70vw] bg-white p-4">
            <h1 class="text-2xl">{{ $article->title }}</h1>
            <div class="flex mt-6">
                <img src="{{ $article->url }}" alt="{{ $article->title }}" class="w-[50%]">
                <div class="px-2">
                    <p>{{ $article->information }}</p>
                    @if (!empty($article->color))
                        <p>
                            couleur:
                            <span class="font-bold">
                                {{ $article->color }}
                            </span>
                        </p>
                    @endif
                    <div class="flex mt-10 justify-between">
                        <p class="text-xl font-bold">{{$article->price}}€</p>
                        <button class="bg-black text-white px-4 py-2 rounded-xl text-lg font-bold">Ajouter panier</button>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @include('components.footer')
</body>

</html>
