<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Auth;

class UserSettingController extends Controller
{
    public function updatePlayerSettings(Request $request)
    {
        $settings = UserSetting::where('user_id', Auth::id())->firstOrFail();
        $settings->update($request->only(['player_quality', 'ads_mode']));

        return back()->with('success', 'تم تحديث إعدادات المشغل');
    }
}
