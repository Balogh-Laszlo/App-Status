<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">New App!</h1>
            <form method="POST" action="/admin/app/store">
                @csrf
                <x-form.input name="title"></x-form.input>
                <x-form.text_input name="excerpt" placeholder="Excerpt..."></x-form.text_input>
                <x-form.text_input name="description" placeholder="Description..."></x-form.text_input>
                <div class="flex flex-col justify-center items-center">
                    <button type="Submit"
                            class="bg-blue-500 text-white rounded-3xl px-6 py-2 font-semibold">
                        Create
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
