<?php

namespace critipelis\Http\Controllers\Users;

use Carbon\Carbon;
use critipelis\User;
use critipelis\UserProfile;
use Illuminate\Http\Request;

use critipelis\Http\Requests;
use critipelis\Http\Requests\EditUserProfileRequest;
use critipelis\Http\Requests\EditAvatarUserRequest;
use critipelis\Http\Requests\EditPasswordUserRequest;
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
        return view('user.index',compact('user'));

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

    public function updatePassword(EditPasswordUserRequest $request){
        $user = User::find(Auth::user()->id);
        $credentials = [
            'id' => $user->id,
            'password' =>  $request->input('current_password')
        ];
        if (!Auth::validate($credentials)) { // Checks the User's credentials
            Session::flash('error_message',"El password actual es incorrecto.");
            return redirect()->back();
        }
       else {
            $user->password = bcrypt($request->input('new_password'));

        }
        $user->save();
        Session::flash('message',"Se ha actualizado el password con exito.");
        return redirect()->back();
    }
    public function updateProfile(Request $request){
        $user = User::find(Auth::user()->id);
        $userProfile = $user->userProfile;
        if(count($userProfile)){
            $userProfile->fill($request->all());
            $userProfile->save();
            Session::flash('message',"Se ha actualizado el perfil con exito.");
            return redirect()->back();
        }
        else{
            $profile = new UserProfile;
            $profile->fill($request->all());
            $user->userProfile()->save($profile);

            Session::flash('message',"Se ha actualizado el perfil con exito.");
            return redirect()->back();

        }


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
