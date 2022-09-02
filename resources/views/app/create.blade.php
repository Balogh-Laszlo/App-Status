<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">New App!</h1>
            <form method="POST" action="/admin/app/store">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        title
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           id="title"
                           value="{{old('title')}}"
                           required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt"
                    >
                        excerpt
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                              name="excerpt"
                              id="excerpt"
                              placeholder="Excerpt..."
                              required
                    >{{old('excerpt')}}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="description"
                    >
                        description
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                              name="description"
                              id="description"
                              placeholder="Description..."
                              required
                    >{{old('description')}}</textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
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
