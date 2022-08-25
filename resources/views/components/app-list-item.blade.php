@props(['app'])
<a href="/app">
    <li class="px-6 py-3 bg-gray-700 rounded-3xl mt-3 border border-black border-opacity-5 mx-6 hover:bg-gray-500">
        <p class="text-white font-semibold px-12 w-max">
            {{$app->title}}
        </p>
    </li>
</a>
