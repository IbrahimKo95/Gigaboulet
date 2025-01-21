
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigaboulet - Blog des Révolutions Technologiques</title>
    <meta name="author" content="Gigaboulet">
    <meta name="description" content="Découvrez Gigaboulet, votre blog dédié à l'IA, la cybersécurité et aux innovations technologiques en tout genre. Rejoignez les passionnés du futur.">
    <meta property="og:image" content="https://gigaboulet.fr/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@gigaboulet">
    <meta name="twitter:title" content="Gigaboulet - Le Blog des Révolutions Technologiques">
    <meta name="twitter:description" content="Découvrez Gigaboulet, votre blog dédié à l'IA, la cybersécurité et aux innovations technologiques en tout genre. Rejoignez les passionnés du futur.">
    <meta name="twitter:image" content="https://gigaboulet.fr/logo.png">
    <meta name="twitter:image:alt" content="Logo Gigaboulet">
    <script rel="preload" src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="canonical" href="https://gigaboulet.fr/">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style rel="preload">
        .font-family-karla {
            font-family: karla, sans-serif;
        }
    </style>
    <script rel="preconnect" src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js" defer></script>
    <script rel="preconnect" src="https://kit.fontawesome.com/b49e7cf498.js" crossorigin="anonymous" defer></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "Gigaboulet",
            "url": "https://gigaboulet.fr",
            "description": "Le blog dédié aux révolutions technologiques et numériques. Découvrez des articles sur les nouvelles technologies, les innovations, et bien plus.",
            "publisher": {
                "@type": "Organization",
                "name": "Gigaboulet",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://gigaboulet.fr/logo.png",
                    "width": 1024,
                    "height": 1024
                }
            },
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://gigaboulet.fr/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
</head>
<body class="bg-white font-family-karla">

@include('components/header')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        @foreach($articles as $article)
            <article class="flex flex-col shadow my-4 w-full">
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="/category/{{$article->category}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$article->category->name}}</a>
                    <h2 class="pb-4">
                        <a href="/article/{{$article->slug}}" class="text-3xl font-bold hover:text-gray-700">{{$article->title}}</a>
                    </h2>
                    <p class="text-sm pb-3">
                        Par <span class="font-semibold hover:text-gray-800">{{$article->author}}</span>, Publié le {{$article->published_at}}
                    </p>
                    <a href="#" class="pb-6">{{$article->introduction}}</a>
                    <a href="/article/{{$article->slug}}" class="uppercase text-gray-800 hover:text-black">Voir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        @endforeach
            <!-- Pagination -->
            <div class="flex items-center py-8">
                @if ($articles->onFirstPage())

                @else
                    <a href="{{ $articles->previousPageUrl() }}" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                @endif

                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">
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
            <p class="pb-2">Bienvenue sur <strong>Gigaboulet</strong>, votre blog dédié aux nouvelles technologies et à l’innovation. Notre objectif est simple : vous offrir une plateforme où vous pouvez découvrir, explorer et comprendre les avancées technologiques qui façonnent notre monde.</p>
            <a href="/a-propos" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                En savoir plus
            </a>
        </div>
    </aside>

</div>

@include('components/footer')

</body>
</html>
