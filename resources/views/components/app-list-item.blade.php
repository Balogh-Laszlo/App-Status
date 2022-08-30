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
                <a href="/app/{{$app->id}}"
                   class="transition-colors duration-300 text-xs font-semibold bg-blue-200 hover:bg-blue-300 rounded-full py-2 px-8 float-right m-3 absolute bottom-0 right-0"
                >Check</a>
            </footer>
        </a>
    </div>
</article>
