<?php

namespace critipelis\Http\Controllers\Users;

use Carbon\Carbon;
use critipelis\User;
use Illuminate\Http\Request;

use critipelis\Http\Requests;
use critipelis\Http\Requests\EditUserProfileRequest;
use critipelis\Http\Requests\EditAvatarUserRequest;
use critipelis\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        //$user= Carbon::createFromFormat('d/m/y', '2001/12/22');
        return view('user.index',compact('user','birthdate'));

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
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserProfileRequest $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $user->fill($request->all());
        $birhdate = $request->year.'-'.$request->month.'-'.$request->day;
        $user->birthdate= Carbon::createFromFormat('Y-m-d',$birhdate);
        $user->save();
        Session::flash('message',"Se ha actualizado los datos con exito.");
        return redirect()->back();
    }

    public function updateAvatar(EditAvatarUserRequest $request){
        $user = User::find(Auth::user()->id);
        $imgName = $user->username.'.'.$request->file('img_avatar')->getClientOriginalExtension();
        $request->file('img_avatar')->move('images/avatars',$imgName);
        $user->update(['avatar'=>'avatars/'.$imgName]);
        Session::flash('message',"Se ha cambiado el avatar con exito.");
        return redirect()->back();
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
