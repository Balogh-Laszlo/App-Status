<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">New Feature!</h1>
            <form method="POST" action="/admin/feature/store">
                @csrf
                <x-form.input name="title"></x-form.input>
                <x-form.text_input name="description" placeholder="Description..."></x-form.text_input>
                <input class="hidden" name="app_id" id="app_id" value="{{$app->id}}">
                <div class="flex flex-col justify-center items-center">
                    <button type="Submit"
                            class="bg-blue-500 text-white rounded-3xl px-6 py-2 font-semibold">
                        Add Feature
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
