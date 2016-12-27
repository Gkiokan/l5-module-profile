@extends('profile::layouts.master')

@section('content')
    <h1>Profile Settings<small></small></h1>
    <hr>

    {{ dump(Auth::user()) }}
@stop
