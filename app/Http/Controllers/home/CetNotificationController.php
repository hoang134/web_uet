<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CetNotificationController extends Controller
{
    public function cet_notification_events() {
        return view('user.cet-notification.cet-notification-events');
    }

    public function cet_notification_events_details($id) {
        return view('user.cet-notification.cet-notification-events-details');
    }

    public function cet_notification_exams() {
        $exams = DB::table('cet_kythi')->simplePaginate(2);
        return view('user.cet-notification.cet-notification-exams',[
            'exams' => $exams]);
    }

    public function cet_notification_exam_detail($Makythi) {
        $exam_detail = DB::table('cet_kythi_cathi')
        ->join('cet_kythi','cet_kythi.MaKythi','=','cet_kythi_cathi.MaKythi')
        ->join('cet_kythi_diadiem','cet_kythi_cathi.MaKythi','=','cet_kythi_diadiem.MaKythi')
        ->join('cet_kythi_monthi','cet_kythi_cathi.MaKythi','=','cet_kythi_monthi.MaKythi')
        ->where('cet_kythi_cathi.Makythi',$Makythi)
        ->get();
        return view('user.cet-notification.cet-notification-exams-details',[
            'exam_detail' => $exam_detail]);
    }
}
