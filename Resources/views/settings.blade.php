@extends('profile::layouts.master')

@section('content')
    <h1>Profile Settings<small></small></h1>
    <hr>

    <div class='space_50'></div>

    {{ dump($user->id) }}<br>

    <h3>User </h3>
    {{ dump($user) }}
    {{ dump($user->profile->lastname) }}


    <h3>Profile {{ $profile->count() }}</h3>
    {{ dump($profile->firstname) }} <br>
    {{ dump($profile->lastname) }} <br>
    {{ dump($profile->user->email) }}

@stop
