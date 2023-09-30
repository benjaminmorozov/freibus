@if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
        {{Session::get('success')}}
    </div>
@endif
    <div class="col-span-2 lg:pr-8">
						<form method="post" action="{{ route('contact.store') }}" class="mt-6 space-y-6">
        				@csrf
							<div class="grid gap-6 mb-6 md:grid-cols-2">
        						<div>
                        			<label for="name" class="block mb-2 text-sm font-medium text-gray-900">Meno a priezvisko</label>
									<div class="relative">
        								<input type="text" name="name" id="name" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Adam Hruška" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        			        	<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
        							<label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
									<div class="relative">
        								<input type="email" name="email" id="email" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          									<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            									<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          									</svg>
        								</div>
									</div>
								</div>
							</div>
							<div class="grid gap-6 mb-6 md:grid-cols-2">
								<div>
                        			<label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Predmet</label>
									<div class="relative">
        								<input type="text" name="subject" id="subject" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Predmet" required="">
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                              <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
          									</svg>
        							    </div>
									</div>
								</div>
								<div>
                        			<label for="message" class="block mb-2 text-sm font-medium text-gray-900">Správa</label>
									<div class="relative">
        								<textarea name="message" id="message" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Správa" required=""></textarea>
										<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex pt-3 px-3">
          								    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
          									</svg>
        							    </div>
									</div>
								</div>
							</div>
        					<button type="submit" class="mt-5 block w-full rounded-md bg-primary px-3 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Odoslať</button>
        				</form>
                    </div>