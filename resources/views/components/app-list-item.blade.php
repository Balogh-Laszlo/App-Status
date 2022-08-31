@php use App\Http\Controllers\FavouriteController; @endphp
@props(['app'])
<article {{$attributes->merge(['class' => 'bg-gray-100 m-3 transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl relative'])}}>
    <div class="py-6 px-5">
        <a href="/app/{{$app->id}}">
            <img src="/images/objective-icon.svg" alt="Blog Post illustration" class="rounded-xl w-32 h-32">
            <header class="mt-8 flex flex-col justify-between">
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a class="font-semibold text-blue-400 text-md">
                            {{$app->title}}
                        </a>
                    </h1>
                    <div class="py-3 text-gray-400">
                        {{$app->excerpt}}
                    </div>
                </div>
            </header>
            <footer>
                <a href="/favourite/{{$app->id}}" class="absolute bottom-0 left-0 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="{{FavouriteController::isFavourite($app, auth()->user()) ? 'red' : 'none'}}"
                         viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="gray" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                    </svg>
                </a>
                <a href="/app/{{$app->id}}"
                   class="transition-colors duration-300 text-xs font-semibold bg-blue-200 hover:bg-blue-300 rounded-full py-2 px-8 float-right m-3 absolute bottom-0 right-0"
                >Check</a>
            </footer>
        </a>
    </div>
</article>
