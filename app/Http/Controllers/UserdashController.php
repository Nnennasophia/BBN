<?php

namespace App\Http\Controllers;

class Userdashcontroller extends Controller
{
    //
  //  public $owneremail = "gettingsnano@gmail.com";
    public function __construct()
    {
        $this->middleware('auth');
      //  $logged_in_user = Auth::user();
    }

    public function logged_in_user()
    {
       // return  $logged_in_user = Auth::user();
    }



    public function dash_index()
    {
    $data=[];

    $data['title']='Dashboard';
        return view('dashb.dash_index', $data);
    }








}