<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="w-full rounded-lg md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Zabudli ste heslo?
                </h1>
                <form method="POST" action="{{ route('password.email') }}" class="space-y-4 md:space-y-6">
                @csrf
                    <div>
        				<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
						<div class="relative">
        					<input type="email" name="email" id="email" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
							<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          					    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            						<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          						</svg>
        				    </div>
						</div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div>
                    <button type="submit" class="mt-5 block w-full rounded-md bg-primary px-3 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Odoslať odkaz na obnovenie hesla</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Spomenuli ste si? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Prihlásiť sa</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>