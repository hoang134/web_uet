<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function add_event() {
        return view('admin.notification.add-event');
    }

    public function save_event(Request $request) {
        $title = $request->title;
        $content = $request->addevent;
        $timestart = $request->timestart;
        $timeend = $request->timeend;
        DB::select("insert into cet_event (title,content,timestart,timeend) values ('$title','$content','$timestart','$timeend')");
        return redirect()->route('admin.add.notification')->with('success','Thêm thành công');
    }

    public function index() {
        $events = DB::table('cet_event')->get();
        return view('admin.notification.index',[
            'events' => $events]);
    }
}
