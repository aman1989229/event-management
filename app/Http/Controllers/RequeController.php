<?php

namespace App\Http\Controllers;

use App\Reque;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class RequeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
      
        $requests= new Reque;
         $user = Auth::user();
         $post=Post::find($id);
         
         $requests->user_id=$user->id;
         $requests->post_id=$post->id;

         $requests->save();
         Session::flash('success','The request has been saved successsfully!!!');

        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reque  $reque
     * @return \Illuminate\Http\Response
     */
    public function show(Reque $reque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reque  $reque
     * @return \Illuminate\Http\Response
     */
    public function edit(Reque $reque)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reque  $reque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reque $reque)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reque  $reque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reque $reque)
    {
        //
    }
}
