@extends('layouts.front')
@section('content')
<div class="title m-b-md">{{ env('APP_NAME') }}</div>

<div class="links">
    {!! HTML::link('/signin','Signin') !!}
    {!! HTML::link('/signup','Signup') !!}
    {!! HTML::link('/about-us','About Us') !!}
    {!! HTML::link('/contact-us','Contact us') !!}
</div>
@endsection