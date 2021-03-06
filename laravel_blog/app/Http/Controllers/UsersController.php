<?php

namespace App\Http\Controllers;

use App\User;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        //
    }

    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }


    public function update(Request $request, User $user)
    {
        $id = $user->id;

        $request->validate([
           'image' =>  'image | mimes:jpeg,png,jpg | max: 5000',
        ]);

        $user->nickname = $request->nickname;
        if($request->image){
            $icon = $request->file('image');
            $filename = $id . time(). '.' . $icon->getClientOriginalName();
            Image::make($icon)->resize(200,200, function($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/storage/icon/' . $filename));

            $user->icon = $filename;
        }
        $user->save();

        return redirect('user/'. $id . '/edit')->with('update_message', 'プロフィールの更新が完了しました');
    }


    public function destroy($id)
    {
        //
    }
}
