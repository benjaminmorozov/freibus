<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Zabudli ste heslo?
                </h1>
                <form method="POST" action="{{ route('password.email') }}" class="space-y-4 md:space-y-6">
                @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <button type="submit" class="w-full bg-primary text-white font-bold text-sm uppercase rounded hover:bg-secondary flex items-center justify-center px-2 py-3 mt-4">Odoslať odkaz na obnovenie hesla</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Spomenuli ste si? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Prihlásiť sa</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>