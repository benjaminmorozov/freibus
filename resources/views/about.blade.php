<x-app-layout>
	<section>
		<div class="grid max-w-screen-xl px-4 pt-12 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
			<div class="mr-auto place-self-center lg:col-span-7">
				<h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl hero-title">O nás</h1>
				<p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">Sme hrdí na to, že sme lídrom v poskytovaní inteligentných autobusových služieb a organizovaní zájazdov po celej Európe. Freibus Slovakia je viac než len dopravná spoločnosť; sme spojením pohodlia, spoľahlivosti a zážitkov.</p>
				<dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">SMART autobusov</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">25</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">zájazdov</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">46 000</dd>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<dt class="text-base leading-7 text-gray-600">rezervácií</dt>
						<dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">120 000</dd>
					</div>
				</dl>
			</div>
			<div class="hidden lg:mt-0 lg:col-span-5 lg:flex self-center">
				<div class="overflow-hidden rounded-lg">
					<img src="{{ asset('/images/officepeople.jpeg') }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-96 w-full overflow-hidden">
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="grid max-w-screen-xl px-4 pt-2 pb-4 mx-auto lg:gap-8 xl:gap-0">
			<div class="place-self-center text-center">
				<h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl hero-title">Toto sme my</h1>
				<p class="mb-4 font-light text-gray-500 md:text-lg lg:text-xl">Spoznajte náš tím</p>
				<dl class="grid grid-cols-1 gap-x-8 text-center lg:grid-cols-3">
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<div class="overflow-hidden rounded-lg">
							<img src="{{ asset('/images/officepeople.jpeg') }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-48 w-full overflow-hidden">
						</div>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<div class="overflow-hidden rounded-lg">
							<img src="{{ asset('/images/officepeople.jpeg') }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-48 w-full overflow-hidden">
						</div>
					</div>
					<div class="mx-auto flex max-w-xs flex-col gap-y-4">
						<div class="overflow-hidden rounded-lg">
							<img src="{{ asset('/images/officepeople.jpeg') }}" alt="Two each of gray, white, and black shirts laying flat." class="object-cover h-48 w-full overflow-hidden">
						</div>
					</div>
				</dl>
			</div>
		</div>
	</section>
	<section>
		<div class="grid max-w-screen-xl px-4 pt-12 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:grid-cols-12">
			<div class="mr-auto place-self-center lg:col-span-7">
				<h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl hero-title">Časté otázky</h1>
				<p class="max-w-2xl mb-4 font-light text-gray-500 md:text-lg lg:text-xl">Máte otázku? My na ňu máme odpoveď!</p>
				<div class="rounded-t-lg border border-neutral-200 bg-white">
					<h2 class="mb-0 px-5 pt-4 font-bold" id="headingOne">Prečo Freibus?</h2>
					<div id="collapseOne" class="!visible" data-te-collapse-item data-te-collapse-show aria-labelledby="headingOne" data-te-parent="#accordionExample">
						<div class="px-5 py-4">
							Freibus Vám prináša <strong>revolučné cestovanie inteligentnými autobusmi</strong>. Poskytujeme pohodlne vybavené zájazdy do najkrajších destinácií Európy.
							Naše smart autobusy zabezpečujú spoľahlivé a pohodlné cestovanie, s <strong>dôrazom na ekologickosť</strong>.
							Vyberte si nový štandard v modernom a zodpovednom cestovaní.
						</div>
					</div>
				</div>
				<div class="border border-t-0 border-neutral-200">
					<h2 class="mb-0 px-5 pt-4 font-bold" id="headingOne">Ako si zarezervujem zájazd?</h2>
					<div id="collapseOne" class="!visible" data-te-collapse-item data-te-collapse-show aria-labelledby="headingOne" data-te-parent="#accordionExample">
						<div class="px-5 py-4">
				    		Zájazd je po vybratí možné zarezervovať <strong>stlačením tlačidlo "Zarezervovať" a vyplnení kontaktných a platobných údajov</strong>.
						</div>
					</div>
				</div>
				<div class="rounded-b-lg border border-t-0 border-neutral-200">
					<h2 class="mb-0 px-5 pt-4 font-bold" id="headingOne">Ako zruším objednávku?</h2>
					<div id="collapseOne" class="!visible" data-te-collapse-item data-te-collapse-show aria-labelledby="headingOne" data-te-parent="#accordionExample">
						<div class="px-5 py-4">
				    		Objednávku je možné zrušiť prostredníctvom emailu <strong><a href="mailto:mail@stvorka.cloud">mail@stvorka.cloud</a></strong>.
						</div>
					</div>
				</div>
			</div>
			<div class="lg:col-span-5 lg:flex place-self-center text-primary">
				<div class="overflow-hidden rounded-lg">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-72 h-72">
  						<path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
					</svg>
				</div>
			</div>
		</div>
	</section>
	<x-contact-hero />
</x-app-layout>
<script src="https://cdn.tailwindcss.com?plugins=typography"></script>