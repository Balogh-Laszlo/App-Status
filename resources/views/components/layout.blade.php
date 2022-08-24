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

<body style="font-family: Open Sans, sans-serif" class="bg-gray-200">
<section>
    <nav class="md:flex md:justify-between md:items-center py-6 px-6 border border-black rounded-xl border-opacity-5 bg-gray-300">
        <a href="/" class="font-semibold text-xl border-b border-white hover:border-gray-400">
            <h1>App Status</h1>
        </a>
        <a href="/register" class="font-semibold text-l border-b border-white hover:border-gray-400 float-right">
            <h2>Log In</h2>
        </a>
    </nav>
    {{$slot}}
    <div class="position-absolute">
        <footer id="newsletter"
                class="bg-gray-300 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 ">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        </footer>
    </div>
</section>
</body>
