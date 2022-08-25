<x-layout>
    <div class="mx-16 my-6">
        <h1 class="text-white font-bold text-center">{{$app->title}}</h1>
    </div>

    <div>
        <div>

        </div>
        @foreach($app->features as $feature)
            <x-feature-grid-item :feature="$feature"></x-feature-grid-item>
        @endforeach
    </div>
</x-layout>
