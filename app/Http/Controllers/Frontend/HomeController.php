<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SliderTime;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // get the user whose created at date is today to 48 hours
        // $users = User::role('CRIMINAL')->where('status', 0)->whereBetween('created_at', [now()->subDays(2), now()])->get();
        $users = User::role('CRIMINAL')->where('status', 0)->get();
        $slider_times = SliderTime::all();
        return view('frontend.home')->with(compact('users', 'slider_times'));
    }
}
