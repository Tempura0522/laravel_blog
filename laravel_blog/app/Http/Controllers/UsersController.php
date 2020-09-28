<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->nickname = $request->nickname;
        $user->save();

        return redirect('user/'.$id.'/edit');
    }


    public function destroy($id)
    {
        //
    }
}
