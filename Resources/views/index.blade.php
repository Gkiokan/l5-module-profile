@extends('profile::layouts.master')

@section('content')
    <h1>Hellow to your Profile <small>{{ Auth::user()->username }}</small></h1>
    <hr>

    <p>
        This view is loaded from module: {!! config('profile.name') !!}
    </p>
    <div class='space_50'></div>


    @php
      $user = Auth::user();
    @endphp

    <form class="form-horizontal">

        <h3>Account Information</h3>
        <hr>

        {{-- Username --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Username:</label>
            <div class='col-sm-10'>
                <input type='text' class='form-control' value='{{ $user->username}}' readonly>
            </div>
        </div>

        {{-- E-Mail --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class='col-sm-10'>
                <input type='text' class='form-control' value='{{ $user->email}}' readonly>
            </div>
        </div>
        <div class='space_50'></div>

        {{-- Star Profile Information --}}
        <h3>Profile Information</h3>
        <hr>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class='col-sm-10'>
                <input type='text' class='form-control' value='{{ $user->email}}' readonly>
            </div>
        </div>


    </form>

@stop
