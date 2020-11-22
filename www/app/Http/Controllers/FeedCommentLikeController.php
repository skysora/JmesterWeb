<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FeedCommentLikeController extends Controller
{
    public function getLikeNumber(Request $request){
        // echo $request;
        $feedCommentId = $request->input('feedCommentId');
        $feedCommentInfo = DB::select('select count(id) LikeNumber from feed_comment_like where feed_comment_id = :id', ['id' => $feedCommentId]);
        return $feedCommentInfo;
        // return view('home', ['name' => 'James','userId' => $userId]);
    }
}
