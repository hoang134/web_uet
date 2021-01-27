<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function question()
    {
        $questions = DB::table('questions')->where('type',Question::QUESTION_PUBLIC)->get();

        return view('home.question.question',[
            'questions'=> $questions
        ]);
    }
}
