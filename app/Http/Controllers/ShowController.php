<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show_detail(Show $show){
        return view("show", [
            "show" => $show,
        ]);
    }
}
