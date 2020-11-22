<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{
    public function getUserInfo(Request $request){
        // echo $request;
        $userId = $request->input('userId');
        $userInfo = DB::select('select * from user where id = :id', ['id' => $userId]);
        return $userInfo;
        // return view('home', ['name' => 'James','userId' => $userId]);
    }
}
