<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Messenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessengerController extends Controller
{
    public function messenger()
    {
        $messengers = DB::table('messengers')->where('user_from', Auth::user()->id)
            ->orWhere('user_to', Auth::user()->tendangnhap)->get();

        return view('messengers.index', [
            'messengers' => $messengers
        ]);
    }

    public function replyMessenger(Request $request)
    {
        $messenger = new Messenger();
        $messenger->user_id_from = Auth::user()->id;
        $messenger->user_id_to = 1;
        $messenger->content = $request->messenger;
        $messenger->save();
    }
}
