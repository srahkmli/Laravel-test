<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addresses;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{ public function index()
    {
         $posts=Addresses::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function store(Request $request)
    {
        $this->validate($request,[
      'city'=>'required',
    ]);
    $adds = new Addresses;

    $userId=Auth::user()->id;

    $adds->city= $request->input('city');
     $adds->street= $request->input('street');
      $adds->alley= $request->input('alley');

   User::find($userId)->address()->save($adds);

    return redirect('/posts')->with('success','Data saved');
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Addresses::findOrFail($id);
       return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post=Addresses::findOrFail($id);
       return view('posts.edit', compact('post'));
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
        $post=Addresses::findOrFail($id);

        $post->update($request->all());

       return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $post=Addresses::whereId($id)->delete();

             return redirect('/posts');
    }


}
