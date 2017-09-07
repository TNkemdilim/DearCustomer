<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/index');
    }

    /**
     * Show the sent mails view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function sent_mails()
    {
        return view('dashboard/sent-mails');
    }

    /**
     * Show the custom messages view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function custom_messages()
    {
        return view('dashboard/custom-messages');
    }

    /**
     * Show the subscribers view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function subscribers()
    {
        return view('dashboard/subscribers');
    }

    /**
     * Show the mail scheduler view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function mail_scheduler()
    {
        return view('dashboard/mail-scheduler');
    }
    
    /**
     * Show the analytics view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function analytics()
    {
        return view('dashboard/analytics');
    }

    /**
     * Show the profile view on dashboard
     * 
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('dashboard/profile');
    }
}
