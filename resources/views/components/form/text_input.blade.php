@props(['name', 'placeholder' => 'Type here...', 'display_name' => $name])
<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
           for="{{$name}}"
    >
        {{$display_name}}
    </label>

    <textarea class="border border-gray-400 p-2 w-full"
              name="{{$name}}"
              id="{{$name}}"
              placeholder="{{$placeholder}}"
              required
    >{{old($name)}}</textarea>
    <x-form.error name="{{$name}}"></x-form.error>
</div>
