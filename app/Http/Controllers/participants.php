<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class participants extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

    $participants = participant::all();

    return view('players.index' , compact('participants'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('players.create');

}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
{
    $this->validate(request(),[
        'firstname' => 'required',
        'lastname' => 'required',
        'group_id' => 'required'

    ]);


    participant::create(request(['firstname' , 'lastname', 'group_id']));

    return redirect('/');



}


    public function show($id)
{
    $participant = participant::find($id);

    return view('participants.show' , compact('participant'));


}


    public function edit($id)
{
    //
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
