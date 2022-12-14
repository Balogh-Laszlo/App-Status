<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register">
                @csrf
                <x-form.input name="name" display_name="username"></x-form.input>
                <x-form.input name="email" type="email"></x-form.input>
                <x-form.input name="password" type="password"></x-form.input>
                <div class="flex flex-col justify-center items-center">
                    <button type="Submit"
                            class="bg-blue-500 text-white rounded-3xl px-6 py-2 font-semibold">
                        Register
                    </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
