<?php

namespace App\Http\Controllers;

use App\Totalescore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Groups;


class TotalescoreController extends Controller
{
    public function index()
    {
        $groups = groups::all()->toArray();
        return view('/total', compact('groups'));
    }

    public function getGroups()
    {
        Groups::select('group_name')
            ->where('groups')
            ->get();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id' => 'required',
            'group_name' => 'required',
            'score' => 'required'


        ]);


        participant::create(request(['id', 'group_name', 'score']));

        return redirect('/');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
groups::where('id', $id)->update(array('score' =>''));
    }
}
