<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeIt(Reply $reply){

    $reply->like()->create(['user_id'=> 1  ]);

    }

    public function disLike(Reply $reply){

    $reply->like('user_id','1')->first()->delete();

    }
}
