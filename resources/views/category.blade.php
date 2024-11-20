<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $category }}</title>
</head>

<body class="bg-slate-100">
    @include('components/header')
    <main>

        <div class="flex justify-center">
            <div class="w-[70vw]">
                <h2 class="text-2xl font-bold">{{ $category }}</h2>
            </div>
        </div>
        @php
        $count = 0;
        @endphp
        @foreach ($articles as $key => $article)
        <div class="flex flex-columne justify-center">
            @if ($count % 2 == 0)
            <div class="flex">
                @endif
                <a href="article/{{ $article->article_id }}/{{ $article->color }}" class="m-4">
                    <article class="bg-white py-2 px-4 w-[35vw]">
                        <h1 class="font-bold text-xl">
                            {{ $article->title }}
                        </h1>
                        {{-- <img src="{{ $article->url }}" alt="{{ $article->title }}" loading="lazy"> --}}
                        <p class="font-medium">{{ $article->color }}</p>
                        <p>{{ $article->information }}</p>
                        <p class="text-lg font-semibold">{{ $article->price }}€</p>
                    </article>
                </a>
                @if ($count % 2 != 0 || $key == count($articles) - 1)
            </div>
            @endif
        </div>
        @php
        $count++;
        @endphp
        @endforeach
    </main>
        @include('components.footer')
</body>

</html>