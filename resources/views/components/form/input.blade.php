@props(['name', 'type' => 'text', 'display_name' => $name])
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{$name}}"
    >
        {{$display_name}}
    </label>

    <input class="border border-gray-400 p-2 w-full"
           type="{{$type}}"
           name="{{$name}}"
           id="{{$name}}"
           value="{{old($name)}}"
           required
    >
    <x-form.error name="{{$name}}"></x-form.error>
</div>
