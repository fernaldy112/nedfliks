<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage() {
        $tags = Tag::all();
        // foreach ($tags as $tag) {
        //     $tvShows = $tag->shows->filter(function ($show) {
        //         return $show->type === "MOVIE";
        //     });
        //     $tag->shows = $tvShows;
        // }
        $tags = $tags->filter(function($tag){
            return count($tag->shows) > 0;
        });
        return view("home", [
            "sections" => $tags,
            "show_jumbotron" => true,
        ]);
    }

    public function tv_shows() {
        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tvShows = $tag->shows->filter(function ($show) {
                return $show->type === "TV_SHOW";
            });
            $tag->shows = $tvShows;
        }
        $tags = $tags->filter(function($tag){
            return count($tag->shows) > 0;
        });
        return view("home", [
            "sections" => $tags,
            "show_jumbotron" => false,
        ]);
    }

    public function movies() {
        $tags = Tag::all();
        foreach ($tags as $tag) {
            $tvShows = $tag->shows->filter(function ($show) {
                return $show->type === "MOVIE";
            });
            $tag->shows = $tvShows;
        }
        $tags = $tags->filter(function($tag){
            return count($tag->shows) > 0;
        });
        return view("home", [
            "sections" => $tags,
            "show_jumbotron" => false,
        ]);
    }
}
