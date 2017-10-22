<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {


        return view('profile', array('user' => Auth::user(),

            )
        );
    }

    public function update_avatar(Request $request) {

        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }

        return view('profile', array('user' => Auth::user()) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->isEnzo = $request->update;
        $user->save();

        return redirect()->route('admin', [$user->id])->with('warning', 'Admin modifié');
    }


    public function destroyUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('admin')->with('danger', 'Profil supprimé');
    }
}
