
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigaboulet - {{$article->title}}</title>
    <meta name="author" content="Gigaboulet">
    <meta name="description" content="Découvrez l'article '{{ $article->title }}' dans la catégorie {{ $article->category->name }}. Et apprenez en plus sur le sujet !">
    <script rel="preload" src="https://cdn.tailwindcss.com"></script>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" as="font" type="font/woff2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
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
        "@type": "BlogPosting",
        "headline": "{{$article->title}}",
        "description": "{{$article->introduction}}",
        "author": {
            "@type": "Person",
            "name": "Gigaboulet"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Gigaboulet",
        },
        "datePublished": "{{$article->published_at}}T08:00:00+00:00",
        "dateModified": "{{$article->published_at}}T09:00:00+00:00",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://gigaboulet.fr/article/{{$article->slug}}"
        }
    }
</script>

</head>
<body class="bg-white font-family-karla">

@include('components/header')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4" style="padding-left: 4%">
            <!-- Article Image -->
            <header class="bg-white flex flex-col justify-start p-6">
                <a href="/category" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$article->category->name}}</a>
                <h1 class="text-3xl font-bold pb-4" itemprop="headline">{{$article->title}}</h1>
                <p class="text-sm pb-8">
                    Par <span class="font-bold" itemprop="author"> {{$article->author}} </span>, Publié le <time itemprop="datePublished" datetime="{{ $article->published_at }}">{{ $article->published_at }}</time>
                </p>
            </header>
                <h2 class="text-2xl font-bold pb-3">Introduction</h2>
                <p class="pb-3" itemprop="description">{{$article->introduction}}</p>
                <h2 class="text-2xl font-bold pb-3">Heading</h2>
                <p class="pb-3" itemprop="description">{{$article->developpement}}</p>
                <h2 class="text-2xl font-bold pb-3">Conclusion</h2>
                <p class="pb-3">{{$article->conclusion}}</p>
        </article>

        <div class="w-full flex pt-6">
            @isset($previous)
            <a href="/article/{{$previous->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Précédent</p>
                <p class="pt-2">{{$previous->title}}</p>
            </a>
            @else
            <span class="w-1/2 bg-white shadow text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Précédent</p>
                <p class="pt-2"> Aucun article précédent </p>
            </span>
            @endisset

            @isset($next)
            <a href="/article/{{$next->slug}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Suivant <i class="fas fa-arrow-right pl-1"></i></p>
                <p class="pt-2">{{$next->title}}</p>
            </a>
            @else
            <span class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Suivant <i class="fas fa-arrow-right pl-1"></i></p>
                <p class="pt-2"> Aucun article suivant</p>
            </span>
            @endisset
        </div>
    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">À Propos</p>
            <p class="pb-2">Bienvenue sur Gigaboulet, votre blog dédié aux nouvelles technologies et à l’innovation. Notre objectif est simple : vous offrir une plateforme où vous pouvez découvrir, explorer et comprendre les avancées technologiques qui façonnent notre monde.</p>
            <a href="/a-propos" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                En savoir plus
            </a>
        </div>
    </aside>

</div>

@include('components.footer')

</body>
</html>
