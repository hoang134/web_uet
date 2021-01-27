<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cet;

class InfomationController extends Controller
{
    public function home() {
        return view('admin.layout');
    }
    public function edit_infomation()
    {   
         $infomation = Cet::all();
       return view('admin.infomation.cet-infomation')->with('infomation',$infomation);
    }

    public function edit_infomation_cocau()
    {   $cet_infomation = Cet::all();
       return view('admin.infomation.cet-infomation-cocau');
    }

    public function edit_infomation_chucnang()
    {   $cet_infomation = Cet::all();
       return view('admin.infomation.cet-infomation-chucnang');
    }

    public function edit_infomation_logo()
    {   $cet_infomation = Cet::all();
       return view('admin.infomation.cet-logo');
    }

    public function save_infomation(Request $request) {
        if(isset($request->noidung)) {
            $cet_infomation = Cet::find(1);
            $cet_infomation->content = $request->noidung;
            $cet_infomation->save();
            return redirect()->route('edit.infomation')->with('success','Cập nhật thành công.');
        }
        if(isset($request->noidung1)) {
            $cet_infomation = Cet::find(1);
            $cet_infomation->content2 = $request->noidung1;
            $cet_infomation->save();
            return redirect()->route('edit.infomation.cocau')->with('success','Cập nhật thành công.');
        }
        if(isset($request->noidung2)) {
            $cet_infomation = Cet::find(1);
            $cet_infomation->content3 = $request->noidung2;
            $cet_infomation->save();
            return redirect()->route('edit.infomation.chucnang')->with('success','Cập nhật thành công.');
        }
        if(isset($request->noidung3)) {
            $cet_infomation = Cet::find(1);
            $cet_infomation->logo = $request->noidung3;
            $cet_infomation->save();
            return redirect()->route('edit.infomation.chucnang')->with('success','Cập nhật thành công.');
        }
    }
}
