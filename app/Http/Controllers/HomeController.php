<?php

namespace App\Http\Controllers;

use Request;
use App\Post;
use DB;

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
     */
    public function index()
    {
        $consumers =Post::where('role', '=', 1)
            ->get();

        return view('home', compact('consumers'));

    }

    /**
     * U4pdate the specified resource in storage.
     *
     * @param int $id
     * @return void
     */


}
