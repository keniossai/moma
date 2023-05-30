@extends('layouts.auth')

@section('content')
    <section class="fxt-template-animation fxt-template-layout23" data-bg-image="{{ asset('admin/images/register.png') }}">
        <div class="fxt-bg-overlay" data-bg-image="{{ asset('admin/images/overlay.png') }}">
            <div class="fxt-content" >
                <div class="fxt-header">
                    <a href="/" class="fxt-logo"><img src="{{ asset('admin/images/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="fxt-form">
                    <p class="text-center">Login into your account</p>
                    <form action="{{ route('api.register') }}" method="post" class="x-submit" data-then="reload">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="name" class="form-control" name="first_name" placeholder="First name" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="name" class="form-control" name="last_name" placeholder="Last name" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="email" class="form-control" name="phone" placeholder="Phone number" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select type="text" id="email" class="form-control" name="location" placeholder="Phone number" required="required">
                                            <option value="Select Location">Select</option>
                                            <option value="Abuja">Abuja</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Port Harcourt">Port Harcourt</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">
                                        <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="********" required="required" autocomplete="new-password">
                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-checkbox-area">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1">Keep me logged in</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-4">
                                <button type="submit" class="fxt-btn-fill">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="fxt-style-line">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                        <h3>Or Login With</h3>
                    </div>
                </div>
                <ul class="fxt-socials">
                    <li class="fxt-google">
                        <div class="fxt-transformY-50 fxt-transition-delay-6">
                            <a href="#" title="google"><i class="fab fa-google-plus-g"></i><span>Google +</span></a>
                        </div>
                    </li>
                    <li class="fxt-twitter">
                        <div class="fxt-transformY-50 fxt-transition-delay-7">
                            <a href="#" title="twitter"><i class="fab fa-twitter"></i><span>Twitter</span></a>
                        </div>
                    </li>
                    <li class="fxt-facebook">
                        <div class="fxt-transformY-50 fxt-transition-delay-8">
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i><span>Facebook</span></a>
                        </div>
                    </li>
                </ul>
                <div class="fxt-footer">
                    <div class="fxt-transformY-50 fxt-transition-delay-9">
                        <p>Have an account?<a href="login" class="switcher-text2 inline-text">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
