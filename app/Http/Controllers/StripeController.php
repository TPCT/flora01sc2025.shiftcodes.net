<?php
namespace App\Http\Controllers;

use Stripe\Stripe;
use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function index()
    {
        return view('Premium.index');
    }


    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey('sk_test_51R1aPQP4ItdIYHQeH2zXpXImX2KQLApZpjgRVlBcr94rfpTJ6FD6Lc7lrpuMaNZuIqtPFj4Pu8iT1FEXVBepgIjQ00KB0p8X82');

        $plan = $request->input('plan');

        switch ($plan) {
            case '30_days':
                $amount = 999;
                $product_name = 'Premium Plan - 30 Days';
                break;
            case '120_days':
                $amount = 1999;
                $product_name = 'Premium Plan - 120 Days';
                break;
            case '180_days':
                $amount = 2999;
                $product_name = 'Premium Plan - 180 Days';
                break;
            case '365_days':
                $amount = 4999;
                $product_name = 'Premium Plan - 365 Days';
                break;
            default:
                return redirect()->back()->with('error', 'Invalid plan selected');
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $product_name,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($checkoutSession->url);
    }


public function paymentSuccess()
{

    return view('payment.success');
}

public function paymentCancel()
{

    return view('payment.cancel');
}
}
