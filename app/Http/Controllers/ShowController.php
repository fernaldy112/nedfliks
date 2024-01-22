<?php

namespace App\Http\Controllers;

use App\Models\Show;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function show_detail(Show $show){
        $user = User::find(Auth::id());

        $is_in_my_list = !$user->shows()->where("id", $show->id)->get()->isEmpty();

        return view("show", [
            "show" => $show,
            "is_in_my_list" => $is_in_my_list,
        ]);
    }

    public function my_list(){
        $user = User::find(Auth::id());

        $shows = $user->shows()->simplePaginate(8);

        return view('my-list', [
            'shows' => $shows
        ]);
    }

    public function update_my_list(Show $show){
        $user = User::find(Auth::id());

        $is_in_my_list = !$user->shows()->where("id", $show->id)->get()->isEmpty();

        if ($is_in_my_list){
            $user->shows()->detach($show["id"]);
        } else {
            $user->shows()->attach($show["id"]);
        }

        return back();
    }
}
