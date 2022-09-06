<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Feature Status!</h1>
            <form method="POST" action="/admin/feature/status">
                @csrf
                <div class="md:flex md:justify-between md:items-center my-4">
                    <label class="peer-checked:border-red-500 flex">
                        @if($feature->status == 1)
                            <input checked class="peer" type="radio" name="status" id="ok" value="1">
                        @else
                            <input checked class="peer" type="radio" name="status" id="ok" value="1">
                        @endif
                        <div class="px-4">
                            <img src="/images/success-sign.png" class="w-5 h-5">
                        </div>
                    </label>
                    <label class="peer-checked:border-red-500 flex">
                        @if($feature->status == 2)
                            <input checked class="peer" type="radio" name="status" id="warning" value="2">
                        @else
                            <input class="peer" type="radio" name="status" id="warning" value="2">
                        @endif
                        <div class="px-4">
                            <img src="/images/warning-sign.png" class="w-5 h-5">
                        </div>
                    </label>
                    <label class="peer-checked:border-red-500 flex">
                        @if($feature->status == 3)
                            <input checked class="peer" type="radio" name="status" id="error" value="3">
                        @else
                            <input class="peer" type="radio" name="status" id="error" value="3">
                        @endif
                        <div class="px-4">
                            <img src="/images/error-sign.png" class="w-5 h-5">
                        </div>
                    </label>
                </div>
                <x-form.text_input name="description" placeholder="Description..."></x-form.text_input>

                <input class="hidden" name="feature_id" id="feature_id" value="{{$feature->id}}">
                <div class="flex flex-col justify-center items-center">
                    <button type="Submit"
                            class="bg-blue-500 text-white rounded-3xl px-6 py-2 font-semibold">
                        Change!
                    </button>
                </div>


            </form>
        </main>
    </section>
</x-layout>
