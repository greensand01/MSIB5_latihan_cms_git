<?php

namespace App\Http\Controllers;

use App\Models\contens;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     * @return app\Models\contens;
     */
    public function index()
    {
        return view('home',[
            "title" => "home",
            "posts" => contens::all()
        ]);
    }
}
