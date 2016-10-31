<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nothing;

class NothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nothings = Nothing::all();
        $nothing = Nothing::all();
        return view('nothing', compact('nothing'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $params = $request->only(['nothing']);
        $input = Input::create($params);

        return Redirect::route('nothing.index');
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nothing)
    {
        $nothing = Nothing::find($nothing);
        $params = $request->only(['payload']);
        $date->update(['created_at' => $params['payload']]);
    }
}
