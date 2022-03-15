@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code')
<a href="{{ url('/') }}">Go Home</a>
@endsection
@section('message', __('Page Not Found'))
