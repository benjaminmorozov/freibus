<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<x-app-layout>
    
    <div class="container justify-center mx-auto flex flex-wrap py-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="w-full bg-white md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Platba kartou
                </h1>
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif

                <form role="form" action="{{ route('stripe.post') }}" method="post" class="space-y-4 md:space-y-6 require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf
                    <div>
        				<label for="card-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meno a priezvisko</label>
						<div class="relative">
        					<input type="text" name="card-name" id="card-name" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Adam Hruška" required="">
							<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          					    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          						</svg>
        				    </div>
						</div>
                        <x-input-error :messages="$errors->get('card-name')" class="mt-2" />
					</div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
        			    	<label for="card-number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Číslo karty</label>
					    	<div class="relative">
        			    		<input type="text" name="card-number" id="card-number" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="**** **** **** ****" required="">
					    		<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          			    		    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
          			    			</svg>
        			    	    </div>
					    	</div>
                            <x-input-error :messages="$errors->get('card-number')" class="mt-2" />
					    </div>
                        <div>
        			    	<label for="card-cvc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CVC</label>
					    	<div class="relative">
        			    		<input type="text" name="card-cvc" id="card-cvc" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="313" required="">
					    		<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          			    		    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
          			    			</svg>
        			    	    </div>
					    	</div>
                            <x-input-error :messages="$errors->get('card-cvc')" class="mt-2" />
					    </div>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
        			    	<label for="card-expiry-month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mesiac platnosti</label>
					    	<div class="relative">
        			    		<input type="number" min=0 max=12 name="card-expiry-month" id="card-expiry-month" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="6" required="">
					    		<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          			    		    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
          			    			</svg>
        			    	    </div>
					    	</div>
                            <x-input-error :messages="$errors->get('card-expiry-month')" class="mt-2" />
					    </div>
                        <div>
        			    	<label for="card-expiry-year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rok platnosti</label>
					    	<div class="relative">
        			    		<input type="number" min=23 max=99 name="card-expiry-year" id="card-expiry-year" class="pl-8 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="26" required="">
					    		<div class="pointer-events-none absolute inset-y-0 left-0 inline-flex items-center px-3">
          			    		    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
          			    			</svg>
        			    	    </div>
					    	</div>
                            <x-input-error :messages="$errors->get('card-expiry-month')" class="mt-2" />
                        </div>
                    </div>
                    <div class='col-md-12 error form-group hide'>

                                <div class='alert-danger alert'></div>

                            </div>
                    <button type="submit" class="mt-5 block w-full rounded-md bg-primary px-3 py-3 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Zaplatiť {{ $order->price }},00€</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),

        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');

        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('#card-number').val(),
            cvc: $('#card-cvc').val(),
            exp_month: $('#card-expiry-month').val(),
            exp_year: $('#card-expiry-year').val()
          }, stripeResponseHandler);
        }
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>
<script>
document.getElementById('card-expiry-month').onchange = document.getElementById('card-expiry-month').onkeydown = document.getElementById('card-expiry-month').onkeyup = function() {
	changeMonth(this);
}

function changeMonth(element){
	element.value = Math.abs(element.value)
	if(element.value >= 12) {
		element.value = 12;
		return;
	}
}
</script>
</x-app-layout>