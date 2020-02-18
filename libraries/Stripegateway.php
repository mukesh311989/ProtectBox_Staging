<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of Stripegateway
 *
 * @author wahyu widodo
 */
 
include("./vendor/autoload.php"); 
 
class Stripegateway {
	
	public function __construct(){
		$stripe = array(
			"secret_key" => "sk_test_bIg3qFSjJiL5sTswX8d4xtbP",
			"public_key" => "pk_test_ZiIw1LqChuQAwpzEiRk3Secs"
		);
		\Stripe\Stripe::setApiKey($stripe["secret_key"]);
	}
	
	public function checkout($token,$total_price,$service_id,$currency){
		$message = "";
		$total_price = $total_price * 100;
		$currency = $currency;
		$orderID = "SKA92712382139";
		$itemName = "Protectbox Subscription";
		
		try{

		$customer = \Stripe\Customer::create(array(
        /*'email' => $email,*/
        'source'  => $token
		));

	    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $total_price,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
        )
    ));

		

			/*// Create a Charge:
			$charge = \Stripe\Charge::create([
				'amount' => $price,
				'currency' => 'usd',
				'description' => 'Example charge',
				'source' => $token,
			]);

			// Create a Transfer to a connected account (later):
			$transfer = \Stripe\Transfer::create(array(
			  "amount" => $split_price,
			  "currency" => "usd",
			  "destination" => "{CONNECTED_STRIPE_ACCOUNT_ID}",
			  "transfer_group" => "{ORDER10}",
			));

			// Create a second Transfer to another connected account (later):
			$transfer = \Stripe\Transfer::create(array(
			  "amount" => $commission,
			  "currency" => "usd",
			  "destination" => "{OTHER_CONNECTED_STRIPE_ACCOUNT_ID}",
			  "transfer_group" => "{ORDER10}",
			));*/

			$message = $charge->status;											
		}catch (Exception $e){
			$message = $e->getMessage();
		}	
		return $message;
	}
	
}