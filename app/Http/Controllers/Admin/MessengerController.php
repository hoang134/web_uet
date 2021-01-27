<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Messenger;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MessengerController extends Controller
{

    public function index()
    {
       $messengers = DB::table('messengers')->where('user_id_to',Auth::user()->id)->orderBy('created_at','desc')->distinct('')->get();
//       // $messengers = DB::table('messengers')->select('user_id_to','content')
//            ->groupBy('content')->get();
      return view('admin.messengers.index',[
          'messengers'=>$messengers
      ]);
    }

    public function detailMesenger( Request $request)
    {
        $messengers = DB::table('messengers')->where('user_id_from',Auth::user()->id)->where('user_id_to',$request->id)

            ->orWhere('user_id_to',Auth::user()->id)->where('user_id_from',$request->id)->get();

        return view('admin.messengers.detail-messenger',[
            'messengers'=> $messengers,
            'idUser'=> $request->id,
        ]);
    }

    public function replyMessenger(Request $request)
    {
        $messenger = new Messenger();
        $messenger ->user_id_from = Auth::user()->id;
        $messenger ->user_id_to = $request->id;
        $messenger ->content = $request->messenger;
        $messenger->save();
    }
}
