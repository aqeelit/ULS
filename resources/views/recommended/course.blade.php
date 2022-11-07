@extends('layouts.frontend.index')
@section('content')
    <!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="homepage-slide-blue">
            <h1>{{ Sitehelpers::get_option('pageHome', 'banner_title') }}</h1>
            <span class="title-sub-header">{{ Sitehelpers::get_option('pageHome', 'banner_text') }}</span>
            <form method="GET" action="{{ route('course.list') }}">
                <div class="searchbox-contrainer col-md-6 mx-auto">
                    <input name="keyword" type="text" class="searchbox d-none d-sm-inline-block" placeholder="Search for courses by course titles"><input name="keyword" type="text" class="searchbox d-inline-block d-sm-none" placeholder="Search for courses"><button type="submit" class="searchbox-submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- banner end -->
    <div class="page-header">
        <h2 style="padding-left: 15px;">Recommended based On Knowledge Level & Learning Style</h2>
        <?php // echo $courses['price']; ?>

                <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">

                            <div class="course-block mx-auto">
                                <a href="{{ route('course.view', $courses['course_slug']) }}">
                                    <main>
                                        <img src="@if(Storage::exists($courses['thumb_image'])){{ Storage::url($courses['thumb_image']) }}@else{{ asset('backend/assets/images/course_detail_thumb.jpg') }}@endif">
                                        <div class="col-md-12"><h6 class="course-title">{{ $courses['course_title']}}</h6></div>

                                        <div class="instructor-clist">
                                            <div class="col-md-12">
                                                <i class="fa fa-chalkboard-teacher"></i>&nbsp;
                                                <span>Learning Style <b>{{ $courses['keywords']}}</b></span>
                                            </div>
                                        </div>
                                    </main>
                                    <footer>
                                        <div class="c-row">
                                            <div class="col-md-6 col-sm-6 col-6">
                                                @php $course_price = $courses['price']? config('config.default_currency').$courses['price'] : 'Free'; @endphp
                                                <h5 class="course-price">{{  $course_price }}&nbsp;<s>{{ $courses['strike_out_price']  ? $courses['strike_out_price'] : '' }}</s></h5>
                                            </div>
                                            <div class="col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-5 offset-1">
                                                <star class="course-rating">
                                                    @for ($r=1;$r<=5;$r++)
{{--                                                        <span class="fa fa-star {{ $r <= $courses['average_rating'] ? 'checked' : '' }}"></span>--}}
                                                    @endfor
                                                </star>
                                            </div>
                                        </div>
                                    </footer>
                                </a>
                            </div>

                        </div>
                </div>


@endsection