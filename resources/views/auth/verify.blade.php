@extends('layouts.app')

@section('content')
<div class="banner-top">
    <div class="container">
        <h3>Login</h3>
        <h4><a href="{{ url('/') }}">Home</a><label>/</label>Verify</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="container form-auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-5"><h2>{{ __('Verify Your Email Address') }}</h2></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
