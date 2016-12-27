<?php

namespace Gkiokan\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ProfileSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user    = \Auth::user();
        $user    = \Gkiokan\Profile\UserProfile::where('id', $user->id)->first();
        $profile = \Gkiokan\Profile\Profile::where('user_id', $user->id)->first();
        return view('profile::settings', compact(['user', 'profile']));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

}
