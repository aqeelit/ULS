@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>It is Done (Thank You For Your Time)</h2>
        <div>The Details </div> <br>
        <div>Your Knowledge Level : <strong>{{ $level['k_level']}}</strong></div><br>
        <div>The Grade : <strong>{{ $level['grade']}}</strong></div><br>
        <div>Your Attempts : <strong>{{ $level['attempts']}}/3</strong></div><br>
        <a href="/command">Go to the Related Courses</a>
    </div>
@endsection