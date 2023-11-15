<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    // public function follow() {
    //     $follower_check = Follower::where('follower_id', auth()->user()->id)->where('followed_id', request()->user_id)->first();
    //     if($follower_check != null) {
    //         Follower::where('follower_id', auth()->user()->id)->where('followed_id', request()->user_id)->delete();
    //         return response(['message' => 'unfollowed!'], 200);

    //     }else {
    //         $follower = new Follower();
    //         $follower->follower_id = auth()->user()->id;
    //         $follower->followed_id = request()->user_id;
    //         $follower->save();
    //         return response(['message' => 'followed!'], 200);

    //     }
    //     return response(['message' => 'follower status updated!'], 200);
    // }
    public function follow() {
        if(!$this->isFollowed(request()->followd_id)) {
            Follower::create([
                'follower_id' => auth()->user()->id,
                'followed_id' => request()->followd_id
            ]);

        } else {
            Follower::where('follower_id', auth()->user()->id)
                ->where('followed_id', request()->followd_id)
                ->delete();

        }
    }

    public function isFollowed($user)
    {
        $user = User::where('id', $user)->with(['followers', 'following'])->first();
        return in_array(auth()->user()->id, $user->followers->pluck('follower_id')->toArray());
    }
}
