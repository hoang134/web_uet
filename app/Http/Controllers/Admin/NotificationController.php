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
        $imagetitle = $request->file('imagetitle');
      
        if($imagetitle){
            $get_name_image = $imagetitle->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.'.'.$imagetitle->getClientOriginalExtension();
            $imagetitle->move('/home/webapps/html/web_uet/public/images/events',$new_image);
            DB::select("insert into cet_event (title,content,timestart,timeend,imagetitle) values ('$title','$content','$timestart','$timeend','$new_image')");
            return redirect()->route('admin.add.notification')->with('success','Thêm thành công');
        }
        else {
            DB::select("insert into cet_event (title,content,timestart,timeend,imagetitle) values ('$title','$content','$timestart','$timeend','')");
            return redirect()->route('admin.add.notification')->with('success','Thêm thành công');
        }
    }

    public function index() {
        $events = DB::table('cet_event')->get();
        return view('admin.notification.index',[
            'events' => $events]);
    }

    public function delete_event($id) {
        DB::table('cet_event')->where('id',$id)->delete();
        return redirect()->route('admin.all.notification')->with('success','Xóa thành công.');
    }
}
