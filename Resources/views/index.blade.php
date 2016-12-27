@extends('profile::layouts.master')

@section('content')
    <h1>Hellow to your Profile <small>{{ Auth::user()->username }}</small></h1>
    <hr>
    <div class='space_50'></div>


        <h3>Account Information</h3>
        <hr>

        <div class='form-horizontal'>
              {{-- Username --}}
              <div class="form-group">
                  <label class="control-label col-sm-2 col-sm-offset-2" for="user.name">Username:</label>
                  <div class='col-sm-6'>
                      <input type='text' class='form-control' id='user.name' value='{{ $user->username}}' readonly>
                  </div>
              </div>

              {{-- E-Mail --}}
              <div class="form-group">
                  <label class="control-label col-sm-2 col-sm-offset-2" for="user.email">Email:</label>
                  <div class='col-sm-6'>
                      <input type='text' class='form-control' id='user.email' value='{{ $user->email}}' readonly>
                  </div>
              </div>
              <div class='space_50'></div>
        </div>

        {{-- Star Profile Information --}}
        <h3>Profile Information</h3>
        <hr>

        <form class="form-horizontal text-left">
        {{--First Row --}}
        <div class='row'>
        <div class='col-xs-12 col-sm-5'>
            {{-- Firstname --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="firstname">Firstname</label>
                <div class='col-sm-9'>
                    <input type='text' id='firstname' class='form-control' name='firstname' value='{{ $profile->firstname }}'>
                </div>
            </div>

            {{-- Lastname --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="lastname">Lastname</label>
                <div class='col-sm-9'>
                    <input type='text' id='lastname' class='form-control' name='lastname' value='{{ $profile->lastname }}'>
                </div>
            </div>

            {{-- BDay --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="bday">B-Day</label>
                <div class='col-sm-9'>
                    <input type='text' id='bday' class='form-control' name='bday' placeholder='dd.mm.yyyy' value='{{ $profile->bday }}'>
                </div>
            </div>
        </div>
        <div class='col-xs-12 col-sm-7'>
              {{-- Adress --}}
              <div class="form-group">
                  <label class="control-label col-sm-3" for="adress">Adress</label>
                  <div class='col-sm-9'>
                      <input type='text' id='adress' class='form-control' name='street' placeholder="Strees Adress and number" value='{{ $profile->street }}'>
                  </div>
              </div>


              {{-- ZIP/City --}}
              <div class="form-group">
                  <label class="control-label col-xs-12 col-sm-3" for="plz">ZIP/City</label>
                  <div class='col-xs-5 col-sm-3 col-sm-offset-0'>
                      <input type='text' id='plz' maxlength=5 class='form-control' name='plz' placeholder='code' value='{{ $profile->plz }}'>
                  </div>
                  <div class='col-xs-7 col-sm-6 col-sm-offset-0'>
                      <input type='text' id='city' class='form-control' name='city' placeholder="Your cities name" value='{{ $profile->city }}'>
                  </div>
              </div>

              {{-- State --}}
              <div class="form-group">
                  <label class="control-label col-sm-3" for="state">State</label>
                  <div class='col-sm-9'>
                      <input type='text' id='state' class='form-control' name='state' placeholder='In which State do you life?' value='{{ $profile->state }}'>
                  </div>
              </div>

              {{-- Country --}}
              <div class="form-group">
                  <label class="control-label col-sm-3" for="country">Country</label>
                  <div class='col-sm-9'>
                      <input type='text' id='country' class='form-control' name='country' placeholder="What's your contries name" value='{{ $profile->country }}'>
                  </div>
              </div>
        </div>
        </div>
        {{-- END First row --}}

        <div class='space_50'></div>
        <h3>Contact Information </h3>
        <hr>

        {{-- 2nd Row --}}
        <div class='row'>
        <div class='col-xs-5'>
            {{-- E-Mail --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="email">E-Mail</label>
                <div class='col-sm-9'>
                    <input type='text' id='email' class='form-control' name='email' value='{{ $user->email }}'>
                </div>
            </div>


        </div>
        <div class='col-xs-7'>
            {{-- Tel --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="tel">Tel</label>
                <div class='col-sm-9'>
                    <input type='text' id='tel' class='form-control' name='tel' value='{{ $profile->tel }}'>
                </div>
            </div>

            {{-- Mobil --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="mobil">Mobil</label>
                <div class='col-sm-9'>
                    <input type='text' id='mobil' class='form-control' name='mobil' value='{{ $profile->mobil }}'>
                </div>
            </div>

            {{-- Fax --}}
            <div class="form-group">
                <label class="control-label col-sm-3" for="fax">Fax</label>
                <div class='col-sm-9'>
                    <input type='text' id='fax' class='form-control' name='fax' value='{{ $profile->fax }}'>
                </div>
            </div>

        </div>
        </div>
        {{-- END 2nd row --}}


    </form>

    <div class='space_200'></div>
@stop
