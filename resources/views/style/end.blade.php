@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>It is Done (Thank You For Your Time)</h2>
        <div>Your Learning Style is : </div><br>
        @if ($styles['activist'] > 0 )
            <span> - activist! </span><br>
        @elseif ($styles['reflector'] > 0)
            <span> - reflector </span><br>
        @elseif ($styles['sensing'] > 0)
            <span> - sensing </span><br>
        @elseif ($styles['intuitive'] > 0)
            <span> - intuitive </span><br>
        @elseif ($styles['visual'] > 0)
            <span> - visual </span><br>
        @elseif ($styles['verbal'] > 0)
            <span> - verbal </span><br>
        @elseif ($styles['sequential'] > 0)
            <span> - sequential </span><br>
        @elseif ($styles['global'] > 0)
            <span> - global </span><br>
        @endif

        <a href="/command">Go to the Related Courses</a>
    </div>
@endsection