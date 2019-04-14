<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use TCG\Voyager\Models\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use  PDF;
class EventController extends VoyagerBreadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  $user = Auth::user();
        if (request()->has('availability')) {
            $posts=Post::where('availability',request('availability'))->paginate(5);
        }
        else{
            $posts = Post::paginate(10);
        
    }
        return view('events.event')->withPosts($posts)->withUser($user);
    }


  public function date(Request $request)
     {

        $posts= Post::whereBetween('schedule',[$request->from,$request->to])->get();
        return view('events.event')->withPosts($posts);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $user = Auth::user();
        $post=Post::find($id);

         return view('events.show')->withPost($post)->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $user = Auth::user();
        $post=Post::find($id);
        $pdf = PDF::loadView('events.pdf',compact('post'));
          return $pdf->download('invoice.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
