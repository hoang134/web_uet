<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cet;

class CetInfomationController extends Controller
{
    public function cet_infomation_home() {
        $home_infomation = DB::table('cet_kythi')->orderBy('Handangky','desc')->limit(3)->get();
        return view('user.cet-infomation.cet-home',[
            'home_infomation'=>$home_infomation]);
    }

    public function cet_infomation_cocau() {
        //$cet_infomation = DB::table('cet_infomation')->orderBy('id','desc')->limit(1)->get();
        return view('user.cet-infomation.cet-cocau');
    }

    public function cet_infomation_chucnang() {
        $cet_infomation = DB::table('cet_infomation')->orderBy('id','desc')->limit(1)->get();
        return view('user.cet-infomation.cet-chucnang');
    }
}
