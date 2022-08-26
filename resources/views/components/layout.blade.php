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

<body style="font-family: Open Sans, sans-serif" class="bg-gray-50">
<section>
    <nav class="md:flex md:justify-between md:items-center py-5 px-6 border border-gray-300 bg-gray-100 rounded-b-xl">
        <div class="flex items-center space-x-4">
            <a href="/" class="font-semibold text-blue-500 text-xl hover:text-blue-600 focus:outline-none focus:text-blue-600">
                <h1>App Status</h1>
            </a>
            <div class="relative ">
                <input type="text" class="rounded border border-gray-300 bg-gray-100 placeholder-gray-500 text-gray-900 w-96 px-3 py-1 focus:border-gray-400 focus:outline-none" placeholder="Search...">
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <a href="#" class="font-semibold text-l text-red-300 hover:text-red-400 focus:outline-none focus:text-red-400">
                Favourites
            </a>
            <a href="/register" class="font-semibold text-l text-blue-500 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                <h2>Log In</h2>
            </a>

        </div>
    </nav>
    <div>
    {{$slot}}
    </div>
    <div class="">
        <footer id="newsletter"
                class="bg-gray-100 border rounded-t-xl border-gray-300 text-center py-10 px-16 mt-16 ">
            <h5 class="text-3xl"></h5>
        </footer>
    </div>
</section>
</body>
