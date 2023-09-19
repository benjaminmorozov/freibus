<x-app-layout>
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <div class="w-full bg-white rounded-lg shadow dark:border dark:bg-gray-800 dark:border-gray-700 flex flex-row">
            <div class="w-1/2 basis-1/3 p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        		    Informácie o profile
        		</h1>
        		<form id="send-verification" method="post" action="{{ route('verification.send') }}">
        		    @csrf
        		</form>
        		<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        			@csrf
        			@method('patch')
        			<div>
        				<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meno</label>
        				<input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adam Hruška" required="">
        				<x-input-error :messages="$errors->get('name')" class="mt-2" />
        			</div>
        			<div>
        				<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        				<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
        				<x-input-error :messages="$errors->get('email')" class="mt-2" />
        				@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        			        <div>
        			            <p class="text-sm mt-2 text-gray-800">
        			        	    Váš email nie je overený.
        			        	    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        			        	    Znovu odoslať overovací email.
        			        	    </button>
        			            </p>
        			            @if (session('status') === 'verification-link-sent')
        			        	    <p class="mt-2 font-medium text-sm text-green-600">Overovací email bol odoslaný.</p>
        			            @endif
        			        </div>
        				@endif
        			</div>
        			<button type="submit" class="w-full bg-indigo-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">Uložiť</button>
        			@if (session('status') === 'profile-updated')
        				<p
        					x-data="{ show: true }"
        					x-show="show"
        					x-transition
        					x-init="setTimeout(() => show = false, 2000)"
        					class="text-sm text-gray-600"
        					>{{ __('Uložené.') }}
                        </p>
        			@endif
        		</form>
        	</div>
        	<div class="w-1/2 basis-1/3 p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        		    Zmeniť heslo
        		</h1>
        		<form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        			@csrf
        			@method('put')
        			<div>
        				<label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Súčasné heslo</label>
        				<input type="password" name="current_password" id="current_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        				<x-input-error :messages="$errors->get('current_password')" class="mt-2" />
        			</div>
        			<div>
        				<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heslo</label>
        				<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        				<x-input-error :messages="$errors->get('password')" class="mt-2" />
        			</div>
        			<div>
        				<label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heslo znovu</label>
        				<input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        				<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        			</div>
        			<button type="submit" class="w-full bg-indigo-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">Uložiť</button>
        			@if (session('status') === 'password-updated')
        			<p
        				x-data="{ show: true }"
        				x-show="show"
        				x-transition
        				x-init="setTimeout(() => show = false, 2000)"
        				class="text-sm text-gray-600"
        				>Uložené</p>
        			@endif
        		</form>
        	</div>
        	<div class="w-1/2 basis-1/3 p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        		    Zrušiť účet
        		</h1>
        		<form method="post" action="{{ route('profile.destroy') }}" class="mt-6 space-y-6">
        			@csrf
        			@method('delete')
        			<div>
        				<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heslo</label>
        				<input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
        				<x-input-error :messages="$errors->get('password')" class="mt-2" />
        			</div>
        			<button type="submit" class="w-full bg-red-800 text-white font-bold text-sm uppercase rounded hover:bg-red-700 flex items-center justify-center px-2 py-3 mt-4">Zrušiť účet</button>
        		</form>
        	</div>
        </div>
    </div>
</x-app-layout>