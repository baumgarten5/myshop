<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogs;

class BaseController extends Controller
{
    public function getIndex(){
        $all=Catalogs::where('showhide', 'show')->get();
        return view('index')->with('all', $all);
    }
}
