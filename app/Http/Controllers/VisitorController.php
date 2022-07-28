<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VisitorController extends Controller
{

public function index()
{
    # code...
$data=[];
// $company_detail = Sitesetting::where('id', 1)->first();
// $data['compd'] = $company_detail;
$data['title']="Home";
    return view ('visitors.index', $data);
}




}