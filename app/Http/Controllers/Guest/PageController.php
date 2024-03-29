<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){
        
        $trains = Train::where("date", "LIKE", "2024-02-15%" )->get();
        return view("home", compact("trains"));
    }
}
