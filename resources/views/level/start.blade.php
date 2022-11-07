@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>Knowledge Level Test</h2>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 vertical-align d-none d-lg-block">
                <img class="img-fluid" src="{{ asset('frontend/img/fimg.png') }}" width="500px" height="500px">
            </div>
            <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                <div class="rightRegisterForm">
                    <form id="loginForm" class="form-horizontal" method="POST" action="{{ route('level.exam') }}">
                        {{ csrf_field() }}
                        <div class="p-4">
                            <input type="hidden" name="user_id" value="{{ $user_id }}">
                            <div class="form-group">
                                <label>Your Experience</label>
                                <input name="experience" type="text" class="form-control form-control-sm" placeholder="your experience" value="{{'experience'}}">
                            </div>
                            <div class="form-group">
                                <label>Your Age</label>
                                <input name="age" type="text" class="form-control form-control-sm" placeholder="your age" value="{{ 'age' }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-block login-page-button">Ready to Start</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection