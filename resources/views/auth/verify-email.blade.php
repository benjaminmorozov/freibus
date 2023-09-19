<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Overenie emailu
                </h1>
                <p class="text-sm mt-2 text-gray-800">Váš email nie je overený.</p>
                <form method="POST" action="{{ route('verification.send') }}" class="space-y-4 md:space-y-6">
                @csrf
                    <button type="submit" class="w-full bg-indigo-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">Odoslať overovací odkaz</button>
                </form>
                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">Overovací email bol odoslaný.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>