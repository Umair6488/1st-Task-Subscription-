<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateForm;
use Illuminate\Http\Response;
use Carbon\Carbon;
use App\Http\Middleware\TrimStrings;
use App\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ValidateForm $request
     * @return Response
     */
    public function store(ValidateForm $request)
    {
        $users = new Post;

        $users->name= $request['name'];
        $users->role= '1';
        $users->fb_profile_url1= $request['url'];
        $users->fb_profile_url2= $request['url2'];
        $users->fb_profile_url3= $request['url3'];
        $users->whatsapp_number= $request['phone'];
        $users->street_address= $request['street_address'];
        $users->province= $request['province'];
        $users->city= $request['city'];
        $users->notes= $request['notes'];
        $s_date = Carbon::parse($request['s_date']);
        $request['s_date'] = $s_date->format('Y-m-d H:i:s');
        $users->subscription_s_date= $request['s_date'];
        $e_date = Carbon::parse($request['e_date']);
        $request['e_date'] = $e_date->format('Y-m-d H:i:s');
        $users->subscription_e_date= $request['e_date'];
        $users->status= $request['check'];
        $users->save();

        return back()->with('message' , 'Your Form has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * U4pdate the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return void
     */
    public static function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
