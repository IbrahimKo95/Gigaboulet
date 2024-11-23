<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script rel="preload" src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>{{ $category }}</title>
</head>

<body class="bg-slate-100">
    @include('components/header')
    <main class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            @foreach ($articles as $article)
                <article class="flex flex-col shadow my-4 w-full">
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="/category/{{ $article->category }}"
                            class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $article->category->name }}</a>
                        <a href="/article/{{ $article->slug }}"
                            class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $article->title }}</a>
                        <p class="text-sm pb-3">
                            Par <span class="font-semibold hover:text-gray-800">{{ $article->author }}</span>, Publié le
                            {{ $article->published_at }}
                        </p>
                        <a href="#" class="pb-6">{{ $article->introduction }}</a>
                        <a href="/article/{{ $article->slug }}" class="uppercase text-gray-800 hover:text-black">Voir
                            plus <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            @endforeach
            <!-- Pagination -->
            <div class="flex items-center py-8">
                @if ($articles->onFirstPage())
                @else
                    <a href="{{ $articles->previousPageUrl() }}"
                        class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                @endif

                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}"
                        class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">
                        Next <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                @else
                @endif
            </div>
        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">À propos</p>
                <p class="pb-2">Bienvenue sur Gigaboulet, votre blog dédié aux nouvelles technologies et à
                    l’innovation. Notre objectif est simple : vous offrir une plateforme où vous pouvez découvrir,
                    explorer et comprendre les avancées technologiques qui façonnent notre monde.</p>
                <a href="/a-propos"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    En savoir plus
                </a>
            </div>
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Avis Utilisateurs</p>
                <p class="pb-2">Bienvenue sur Gigaboulet, votre blog dédié aux nouvelles technologies et à
                    l’innovation. Notre objectif est simple : vous offrir une plateforme où vous pouvez découvrir,
                    explorer et comprendre les avancées technologiques qui façonnent notre monde.</p>
            </div>
        </aside>
    </main>
    @include('components.footer')
</body>

</html>
