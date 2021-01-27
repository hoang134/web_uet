<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use App\Models\User;

class MailController extends Controller
{

	public function string_random($length) {
    	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}

    public function sendEmail(Request $request) {
        $verify_code = $this->string_random(60);
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->verify = $verify_code;
        $user->save();
        $details = [
            'password' => $request->password,
            'verify_code' => $verify_code
        ];

        Mail::to($user->email)->send(new SendEmail($details));
        return redirect()->route('login')->with('success','Đăng ký thành công,hãy kiểm tra email của bạn.');
    }

    public function verifyUser(Request $request) {
    	$verify_code = \Illuminate\Support\Facades\Request::get('code');
    	$user = User::where('verify',$verify_code)->first();
    	if($user!=null && $user->verifyUser!=1) {
    		$user->verifyUser = 1;
    		$user->save();
    		return redirect()->route('login')->with('success','Bạn đã xác thực thành công.');
    	}
    	else {
    		return redirect()->route('login')->with('error','Đã xảy ra lỗi gì đó.');
    	}
    }

    // public function verifyUser(Request $request) {
    //     $verification_code = \Illuminate\Support\Facades\Request::get('code');
    //     $user = User::where('email_verfication',$verification_code)->first();
    //     if($user!=null && $user->Trangthai!=1) {
    //         $user_verify = array();
    //         $user_verify['tendangnhap'] = $user->tendangnhap;
    //         $user_verify['email'] = $user->email;
    //         $user_verify['email_verfication'] = $user->email_verfication;
    //         $user_verify['Trangthai'] = 1;
    //         $user_verify['password'] = $user->password;

    //         User::where('id',$user->id)->insert($user_verify);
    //         return redirect()->route('login')->with('success','Bạn đã xác thực thành công.');
    //     }
    //     else {
    //         return redirect()->route('login')->with('error','Đã xảy ra lỗi gì đó.');
    //     }
    // }
}
