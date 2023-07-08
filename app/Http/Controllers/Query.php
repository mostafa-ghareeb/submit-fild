<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Query extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('post.edit' , compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('posts')->where('id',$id)->update([
            'title'=> $request->title,
            'body'=> $request->body
        ]);
        return redirect()->route('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts');
    }
    public function destroy_all()
    {
        DB::table('posts')->truncate();
        return redirect()->route('posts');
    }
    public function destroy_all_data()
    {
        DB::table('posts')->delete();
        return redirect()->route('posts');
    }
}
