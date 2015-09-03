<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class StartController extends Controller
{
    public function index()
    {
        return view('start');
    }
}