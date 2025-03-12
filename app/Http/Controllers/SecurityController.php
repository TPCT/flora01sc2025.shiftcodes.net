<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecuritySetting;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    public function updateSecurity(Request $request)
    {


        $request->validate([
            'two_factor_auth' => 'nullable|boolean',
            'allowed_ips' => 'nullable|string',
            'email_new_ip' => 'nullable|boolean',
        ]);

        $security = SecuritySetting::updateOrCreate(["user_id" => Auth::id()], ["two_factor_auth" => $request->boolean("two_factor_auth"), "allowed_ips" => $request->input("allowed_ips"), "email_new_ip" => $request->boolean("email_new_ip")]);

        $security->update([
            'two_factor_auth' => $request->has('two_factor_auth'),
            'allowed_ips' => $request->input('allowed_ips'),
            'email_new_ip' => $request->has('email_new_ip'),
        ]);

        return back()->with('success', 'تم تحديث إعدادات الأمان بنجاح');
    }


}
