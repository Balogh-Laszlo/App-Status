<x-layout>
    <h1 class="text-red-400 font-bold text-xl text-center py-6">Favourites!</h1>
    <div class="lg:grid lg:grid-cols-6 px-12 py-12">
        @foreach($apps as $app)
            <x-app-list-item :app="$app"
                             class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"
            ></x-app-list-item>
        @endforeach
    </div>
    <div class="m-16">
        {{$apps->links()}}
    </div>
</x-layout>
