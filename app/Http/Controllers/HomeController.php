<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Posts::paginate(2);
        $countPosts = DB::table('posts')->count();
        $post = new Posts();
        $countMyPosts = $post->where('user_id', $user->id)->count();
        return view('index', compact('user',
            'posts',
            'countPosts', 'countMyPosts'));
    }

    public function myPost()
    {
        $user = Auth::user();
        $post = new Posts();

        //count
        $countPosts = DB::table('posts')->count();
        $countMyPosts = Posts::where('user_id', $user->id)->count();

        $posts = Posts::where('user_id', $user->id)->paginate(2);
        return view('index', compact('user',
            'posts', 'countPosts', 'countMyPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
