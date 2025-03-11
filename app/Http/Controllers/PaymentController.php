<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentInfo;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function updatePayment(Request $request)
    {
        $payment = PaymentInfo::where('user_id', Auth::id())->firstOrFail();
        $payment->update($request->only(['payment_method', 'card_number']));

        return back()->with('success', 'تم تحديث معلومات الدفع');
    }
}
