@extends('layouts.frontbase')

@section('title',' User Panel | ')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="bg">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="title text-center">User Panel</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="contact-form">
                                <h2 class="title text-center">User Menu</h2>
                                <div class="status alert alert-success" style="display: none"></div>
                                    @include('MyHome.user.usermenu')
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="contact-info">
                                <h2 class="title text-center">User Profile</h2>
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
