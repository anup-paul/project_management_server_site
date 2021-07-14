<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Check');
    }


    function register(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $password = Hash::make($req->input('password'));

        DB::table('users')->insert([
           'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }


    function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $user = DB::table('users')->where('email',$email)->first();
        if (!Hash::check($password, $user->password))
        {
            echo 'Not Matched';
        }
        else
        {
            echo $user->email;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
