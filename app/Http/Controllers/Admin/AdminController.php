<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminController extends Controller
{
    // Phương thức đăng nhập
    public function login(Request $request)
    {
        // Thông điệp lỗi tùy chỉnh
        $messages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
        ];

        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], $messages);

        // Kiểm tra xem email có tồn tại không
        $user = User::where('email', $request->email)->first();
        
        if (!$user) {
            // Nếu không tìm thấy email
            return redirect()->back()->with('err', "Email không tồn tại trong hệ thống.");
        }

        // Kiểm tra mật khẩu
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Nếu mật khẩu không khớp
            return redirect()->back()->with('err', "Mật khẩu không chính xác.");
        }

        // Đăng nhập thành công, chuyển hướng đến trang chủ
        return redirect()->route('home');
    }

    // Phương thức đăng ký
    public function register(Request $req)
    {
        // Kiểm tra xem email đã tồn tại chưa
        if (User::where('email', $req->email)->exists()) {
            // Nếu email đã tồn tại, trả về với thông báo lỗi
            return redirect()->back()->with('err', 'Email đã tồn tại trong hệ thống!');
        }
        // Mã hóa mật khẩu trước khi lưu
        $req->merge(['password' => Hash::make($req->password)]);

        try {
            // Tạo người dùng mới
            User::create($req->all());
            return redirect()->route('home')->with('success', 'Đăng ký thành công!');
        } catch (Throwable $th) {
            // Trả về với thông báo lỗi
            dd( $th->getMessage());
            return redirect()->back()->with('err', "Có lỗi xảy ra khi tạo người dùng: " . $th->getMessage());
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
