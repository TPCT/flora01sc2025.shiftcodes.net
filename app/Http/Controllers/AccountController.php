<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserSetting;
use App\Models\SecuritySetting;
use App\Models\PaymentInfo;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('account.index', compact('user'));
    }

    public function updateAccount(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only(['name', 'email', 'country']));

        return back()->with('success', 'تم تحديث الحساب بنجاح');
    }
}
