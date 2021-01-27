<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ServiceController extends Controller
{

    public function index()
    {
        return view('frontend.service.index');
    }

    public function  service()
    {
        return view('frontend.service.service-1');
    }
}
