<!doctype html>

<title>App-Status</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif" class="bg-gray-900">
<section>
    <nav class="md:flex md:justify-between md:items-center py-5 px-5 border border-black border-opacity-5 bg-gray-800">
        <div class="flex items-center space-x-4">
            <a href="/" class="font-semibold text-xl border-b border-white hover:border-gray-400 text-white hover:text-gray-400">
                <h1>App Status</h1>
            </a>
            <div class="relative">
                <input type="text" class="rounded bg-gray-700 placeholder-white text-white w-72 px-3 py-1" placeholder="Search...">
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="font-semibold text-l border-b border-white hover:border-gray-400 text-white hover:text-gray-400">
                Favourites
            </a>
            <a href="/register" class="font-semibold text-l border-b border-white hover:border-gray-400 text-white hover:text-gray-400">
                <h2>Log In</h2>
            </a>

        </div>
    </nav>
    <div>
    {{$slot}}
    </div>
    <div class="">
        <footer id="newsletter"
                class="bg-gray-800 border border-black border-opacity-5 text-center py-10 px-10 mt-16 ">
            <h5 class="text-3xl"></h5>
        </footer>
    </div>
</section>
</body>
