<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class IndexController extends Controller
{
    private function getMostPopularPosts() {

        $feeds = DB::select('select feed.*, user.first_name, user.last_name from feed, user WHERE feed.user_id = user.id  order by feed.create_datetime desc');
        $feeds_like_number = DB::table('feed_like')->select('feed_id', DB::raw('count(*) as count'))->groupBy('feed_id')->get();

        if(Auth::User()){
            $user_id = Auth::User()->id;
            $liked_post = DB::select("select * from feed_like WHERE user_id = $user_id");

            return Array(
                "feeds"=>$feeds,
                "liked_post"=>collect($liked_post)->pluck('feed_id')->all(),
                "like_number"=>$feeds_like_number,
            );
        }else {
            return Array(
                "feeds"=>$feeds,
                "like_number"=>$feeds_like_number,
            );
        }
    }

    public function getIndex() {
        return view('index', [
            "feeds" => $this->getMostPopularPosts()
        ]);
    }
}
