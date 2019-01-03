<?php

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Stripe\Error\Card;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test-charge', function() {
	// Start by creating a charge
	$stripe = Stripe::make(env('STRIPE_SECRET'));

	try {
			$customer_id = "cus_EGXANRyRWg3uFF";

			try {
				$customer = $stripe->customers()->find($customer_id);
			} catch (Exception $e) {
				// Create a customer
				$customer = $stripe->customers()->create([
					"email" => "ishy.singh@gmail.com"
				]);
			}

			// Create the token
			$token = $stripe->tokens()->create([
				'card' => [
					'number'    => "4242424242424242",
					'exp_month' => "04",
					'exp_year'  => "20",
					'cvc'       => "123"
				]
			]);

			if (!isset($token['id'])) {
				\Session::put('error','The Stripe Token was not generated correctly');
				return redirect()->back();
			}
			
			// Create a card for customer
			$card = $stripe->cards()->create($customer["id"], $token["id"]);

			$subscription = $stripe->subscriptions()->create($customer["id"], [
			    'plan' => 'another-test'
			]);

			var_dump($subscription);
		} catch (Exception $e) {
			return $e->getMessage();
		} catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
			return $e->getMessage();
		} catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
			return $e->getMessage();
		}
});

Route::get('/check-charge', function() {
	$customer_id = "cus_EGXANRyRWg3uFF";
	$subscription_id = "sub_EGXA6epim5wXCR";

	$stripe = Stripe::make(env('STRIPE_SECRET'));

	$subscription = $stripe->subscriptions()->find($customer_id, $subscription_id);

	if ($subscription['status'] == 'active') {
		echo 'We\'re good.';
	}
});

Route::get('/make-plan', function() {
	$stripe = Stripe::make(env('STRIPE_SECRET'));

	$plan = $stripe->plans()->create([
    	'id'                   => 'another-test',
	    'name'                 => 'Monthly (30$)',
	    'amount'               => 30.00,
	    'currency'             => 'USD',
	    'interval'             => 'month',
	    'statement_descriptor' => 'LoA - Monthly'
	]);

	var_dump($plan);
});

Route::get('/customer', function() {
	try {
		$stripe = Stripe::make(env('STRIPE_SECRET'));
		$customer_id = "cus_EGXANRyRWg3uFF";
		$customer = $stripe->customers()->find($customer_id);

		var_dump($customer);
	} catch (Exception $e) {
		echo "Customer does not exist";
	}
	
	
});