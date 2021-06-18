<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserDetailController extends Controller
{
    public function index(){
        $user = Auth::user();
        $post = new Posts();

        //count

        $countMyPosts = Posts::where('user_id', $user->id)->count();

        $posts = Posts::where('user_id', $user->id)->paginate(2);
        return view('user\UserDetail', compact('user',
            'posts', 'countMyPosts'));

    }
}
