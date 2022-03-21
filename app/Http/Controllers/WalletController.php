<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Wallet;
use Session;
use Redirect;

class WalletController extends Controller
{
    public function payWithRazorpay()
    {        
        return view('wallet/create');
    }

    public function payment(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'user_id' => '1',
                   'amount' => $request->amount,
                ];
                
        Wallet::insertGetId($payInfo);  
        
        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }


}
