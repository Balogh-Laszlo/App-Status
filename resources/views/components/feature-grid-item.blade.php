@props(['feature'])
<div class="w-screen flex px-12 md:justify-between md:items-center">
    <h3 class="text-white font-semibold">{{$feature->title}}</h3>
    <a class="">
        {{$feature->status}}
    </a>
</div>
