<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Log In!</h1>
            <form method="POST" action="/login">
                @csrf
                <x-form.input name="email"></x-form.input>
                <x-form.input name="password" type="password"></x-form.input>
                <div class="flex flex-col justify-center items-center">
                    <button type="Submit"
                            class="bg-blue-500 text-white rounded-3xl px-6 py-2 font-semibold">
                        Log In
                    </button>
                </div>


            </form>
            <div class="text-center text-gray-400 text-sm py-3">
                Don't have an account. <a href="/register" class="text-blue-500 text-sm font-semibold">Register for
                    free!</a>
            </div>
        </main>
    </section>
</x-layout>
