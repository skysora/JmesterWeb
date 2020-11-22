<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FeedCommentController extends Controller
{
    public function getComment(Request $request){
        // echo $request;
        $feedId = $request->input('feedId');
        $feedCommentInfo = DB::select('select * from feed_comment where feed_id = :id', ['id' => $feedId]);
        return $feedCommentInfo;
        // return view('home', ['name' => 'James','userId' => $userId]);
    }
    public function getCommentNumber(Request $request){
        // echo $request;
        $feedId = $request->input('feedId');
        $feedCommentInfo = DB::select('select count(id) commentNumber from feed_comment where feed_id = :id', ['id' => $feedId]);
        return $feedCommentInfo;
        // return view('home', ['name' => 'James','userId' => $userId]);
    }
}
