@props(['app'])
<a href="/app/{{$app->id}}" class="focus:outline-none focus:bg-gray-200">
    <li class="px-6 mx-16 py-3 bg-gray-100 rounded-3xl mt-3 border border-gray-300 mx-6 hover:bg-gray-200 text-gray-700 ">
        <p class="font-semibold px-12 w-max">
            {{$app->title}}
        </p>
    </li>
</a>
