<?php

namespace App\Http\Controllers;

use App\Http\Requests\DashboardRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(DashboardRequest $request)
    {
        return view("dashboard.{$request->user()->type}.index", $request->data());
    }
}
