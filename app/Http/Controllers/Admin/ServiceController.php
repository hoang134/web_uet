<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{

    public function index()
    {
        return view('admin.service.index');
    }

    public function createService()
    {
        return view('admin.service.create');
    }

    public function saveService(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->fee = $request->fee;
        $service->save();
    }
    public function configService(Request $request)
    {

    }
}
