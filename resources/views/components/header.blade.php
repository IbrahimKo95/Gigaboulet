<!-- Top Bar Nav -->
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

        <nav class="w-full md:w-auto">
            <ul class="flex items-center md:justify-between justify-center font-bold text-sm text-white uppercase no-underline">
                <li><a class="hover:text-gray-200 hover:underline px-6 py-2" href="{{route('home')}}">Accueil</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-6 py-2" style="min-width: 48px; min-height: 48px; display: flex; align-items: center; justify-content: center;" href="#">À propos</a></li>
            </ul>
        </nav>

        <div class="flex items-center justify-center md:justify-end text-lg no-underline text-white md:pr-6 w-full md:w-auto">
            <a class="p-4 w-12 h-12 flex items-center justify-center" href="https://www.facebook.com/">
                <i class="fab fa-facebook text-2xl"></i>
                <p class="sr-only">Facebook</p>
            </a>
            <a class="p-4 w-12 h-12 flex items-center justify-center" href="https://www.instagram.com/">
                <i class="fab fa-instagram text-2xl"></i>
                <p class="sr-only">Instagram</p>
            </a>
            <a class="p-4 w-12 h-12 flex items-center justify-center" href="https://www.twitter.com">
                <i class="fab fa-twitter text-2xl"></i>
                <p class="sr-only">Twitter</p>
            </a>
            <a class="p-4 w-12 h-12 flex items-center justify-center" href="https://www.linkedin.com">
                <i class="fab fa-linkedin text-2xl"></i>
                <p class="sr-only">Linkedin</p>
            </a>
        </div>
    </div>

</nav>

<!-- Text Header -->
<header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
        <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{route('home')}}">
            Gigaboulet
        </a>
        <p class="text-lg text-gray-600">
            Plongez au coeur de l'actualité technologique et des innovations.
        </p>
    </div>
</header>

<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100">
    <div class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
            <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Sports</a>
        </div>
    </div>
</nav>
