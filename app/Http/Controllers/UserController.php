<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }
    public function register()
    {
        return view('admin.register');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function registerCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Đã xảy ra lỗi khi đăng nhập bằng Google.');
        }

        // Tìm hoặc tạo người dùng
        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                // Thêm các trường khác nếu cần
            ]
        );

        Auth::login($user);

        return redirect('/admin');
    }
}
