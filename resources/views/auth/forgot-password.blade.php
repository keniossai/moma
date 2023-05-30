@extends('layouts.auth')

@section('content')
    <section class="fxt-template-animation fxt-template-layout23" data-bg-image="{{ asset('admin/images/bg-1.png') }}">
        <div class="fxt-bg-overlay" data-bg-image="{{ asset('admin/images/overlay.png') }}">
            <div class="fxt-content">
                <div class="fxt-header">
                    <a href="login-23.html" class="fxt-logo"><img src="{{ asset('admin/images/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="fxt-form">
                    <p>Login into your account</p>
                    <form action="PUT">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-4">
                                <button type="submit" class="fxt-btn-fill">Send Me Email</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="fxt-footer">
                    <div class="fxt-transformY-50 fxt-transition-delay-9">
                        <p>Don't have an account?<a href="register-23.html" class="switcher-text2 inline-text">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
