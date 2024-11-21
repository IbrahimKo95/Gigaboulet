
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gigaboulet Article</title>
    <meta name="author" content="Gigaboulet">
    <meta name="description" content="Article">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

@include('components/header')


<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$article->category->name}}</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$article->title}}</a>
                <p href="#" class="text-sm pb-8">
                    Par <a href="#" class="font-semibold hover:text-gray-800"> {{$article->author}} </a>, Publié le {{$article->published_at}}
                </p>
                <h1 class="text-2xl font-bold pb-3">Introduction</h1>
                <p class="pb-3">{{$article->introduction}}</p>
                <h1 class="text-2xl font-bold pb-3">Heading</h1>
                <p class="pb-3">{{$article->developpement}}</p>
                <h1 class="text-2xl font-bold pb-3">Conclusion</h1>
                <p class="pb-3">{{$article->conclusion}}</p>
            </div>
        </article>

        <div class="w-full flex pt-6">
            <a @isset($previous) href="/article/{{$previous->slug}}" @endisset class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Précédent</p>
                <p class="pt-2"> @isset($previous) {{$previous->title}} @else Aucun article précédent @endisset</p>
            </a>

            <a @isset($next) href="/article/{{$next->slug}}" @endisset class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Suivant <i class="fas fa-arrow-right pl-1"></i></p>
                <p class="pt-2">@isset($next) {{$next->title}} @else Aucun article suivant @endisset</p>
            </a>
        </div>
    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">À Propos</p>
            <p class="pb-2">Apprenez en plus sur Gigaboulet</p>
            <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                Apprenez en plus
            </a>
        </div>
    </aside>

</div>

@include('components.footer')

</body>
</html>
