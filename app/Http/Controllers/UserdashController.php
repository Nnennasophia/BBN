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


    public function bets()
    {
    $data=[];

    $data['title']='Bets';
        return view('dashb.bets', $data);
    }


    public function deposit()
    {
    $data=[];

    $data['title']='Deposit';
        return view('dashb.deposit', $data);
    }



    public function history()
    {
    $data=[];

    $data['title']='History';
        return view('dashb.history', $data);
    }



    public function kyc()
    {
    $data=[];

    $data['title']='Kyc';
        return view('dashb.kyc', $data);
    }


    public function settings()
    {
    $data=[];

    $data['title']='Settings';
        return view('dashb.settings', $data);
    }



    public function withdraw()
    {
    $data=[];

    $data['title']='Withdraw';
        return view('dashb.withdraw', $data);
    }




}