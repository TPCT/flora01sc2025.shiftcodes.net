<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ChangeEmailController extends Controller
{

    public function showForm()
    {
        return view('Change_email.index');
    }
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_email' => 'required|email',
            'new_email' => 'required|email|unique:users,email',
            'confirm_email' => 'required|same:new_email',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        $user = Auth::user();
        if ($request->current_email !== $user->email) {
            return back()->with('error', 'البريد الإلكتروني الحالي غير صحيح.');
        }


        $user->email = $request->new_email;
        $user->save();

        return redirect()->route('login')->with('success', 'تم تغيير البريد الإلكتروني بنجاح.');
    }
}
