@extends('layouts.app')

@section('sidebar')
<div class="b-sidebar shadow" id="b-sidebar">
    <div class="list-group-flush">
        <a href="#" class="d-flex align-items-center header-profile">

            <img src="{{asset('images/default_profile_image.png')}}"
                 class="profile-image mr-3"/>

            <h6 class="m-0">
                @if(auth()->check())
                    @php
                        $userName = auth()->user()->first_name.' '.auth()->user()->last_name;
                          $userName = strlen($userName) > 14 ? substr($userName,0,14)."..." : $userName;
                          echo  ucwords(strtolower($userName));
                    @endphp
                @endif
            </h6>
        </a>
        @include(isset($body) ? $body : '')


        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();"
           class="font-weight-bold text-danger d-flex align-items-center footer-logout">
            <i class="mdi mdi-logout-variant mdi-18px pr-3"></i>
            <span>
                Logout
            </span>
        </a>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

    <div class="d-flex border-top href-item">
        <div class="px-3">
                <span class="d-block font-size-16">
                  Copyright © 2020 MyGlit. All Rights Reserved.
                </span>
            <button class="btn btn-outline-secondary btn-sm badge-pill px-3 mt-2" disabled>Beta</button>
        </div>
    </div>
</div>
@endsection
