<?php

namespace Gkiokan\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Gkiokan\Profile\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    use ValidatesRequests;

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user    = \Auth::user();
        $user    = \Gkiokan\Profile\UserProfile::where('id', $user->id)->first();

        // If we have any profile connection, we gonna create one
        if(!$user->profile):
            $profile = new \Gkiokan\Profile\Profile;
            $user->profile()->save($profile);

            session()->flash('message.content', 'New Profile connection has been created');
            session()->flash('message.type', 'info');

        // otherweise just use the found one
        else:
            $profile = \Gkiokan\Profile\Profile::where('user_id', $user->id)->first();
        endif;

        return view('profile::index', compact(['user', 'profile']));
    }


    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(ProfileUpdateRequest $request)
    {
        // Get the User and account and stuff you know
        $user    = \Auth::user();
        $user    = \Gkiokan\Profile\UserProfile::where('id', $user->id)->first();

        // Update that stuff here
        $update  = $user->profile->update($request->all());

        // Setup some notifications
        session()->flash('message.content', $update ? 'Profile Update successfull.' : 'An Error has accured.. try again');
        session()->flash('message.type', $update ? 'success' : 'danger');

        return redirect()->route('profile.index');
    }


    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
