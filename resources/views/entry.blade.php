<html xmlns="http://www.w3.org/1999/xhtml">
@extends('layouts')
<body id="top">
@include('header')
<div class="wrapper col4">
    <div id="container">
        <div id="content">
            <h2>Вхід</h2>
            <form class="main_form" method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Електрона адреса">
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль" >
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="col-md-12">
                        <div class="col-md-6 offset-md-20">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-20 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Увійти') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Забули пароль?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    {{--                        <div class=" col-md-12">--}}
                    {{--                            <button class="send" href="{{ route('login') }}" >Увійти</button>--}}
                    {{--                        </div>--}}
                </div>
            </form>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper col5">
    <div id="footer">
        <div id="contactform">
            <h2>Why Not Contact Us Today !</h2>
            <form action="#" method="post">
                <fieldset>
                    <legend>Contact Form</legend>
                    <label for="fullname">Name:
                        <input id="fullname" name="fullname" type="text" value="" />
                    </label>
                    <label for="emailaddress" class="margin">Email:
                        <input id="emailaddress" name="emailaddress" type="text" value="" />
                    </label>
                    <label for="phone">Telephone:
                        <input id="phone" name="phone" type="text" value="" />
                    </label>
                    <label for="subject" class="margin">Subject:
                        <input id="subject" name="subject" type="text" value="" />
                    </label>
                    <label for="message">Message:<br />
                        <textarea id="message" name="message" cols="40" rows="4"></textarea>
                    </label>
                    <p>
                        <input id="submitform" name="submitform" type="submit" value="Submit" />
                        &nbsp;
                        <input id="resetform" name="resetform" type="reset" value="Reset" />
                    </p>
                </fieldset>
            </form>
        </div>
        <!-- End Contact Form -->
        <div id="compdetails">
            <div id="officialdetails">
                <h2>Company Information !</h2>
                <ul>
                    <li>Company Name Ltd</li>
                    <li>Registered in England &amp; Wales</li>
                    <li>Company No. xxxxxxx</li>
                    <li class="last">VAT No. xxxxxxxxx</li>
                </ul>
                <h2>Stay in The Know !</h2>
                <p><a href="#">Get Our E-Newsletter</a> | <a href="#">Grab The RSS Feed</a></p>
            </div>
            <div id="contactdetails">
                <h2>Our Contact Details !</h2>
                <ul>
                    <li>Company Name</li>
                    <li>Street Name &amp; Number</li>
                    <li>Town</li>
                    <li>Postcode/Zip</li>
                    <li>Tel: xxxxx xxxxxxxxxx</li>
                    <li>Fax: xxxxx xxxxxxxxxx</li>
                    <li>Email: info@domain.com</li>
                    <li class="last">LinkedIn: <a href="#">Company Profile</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!-- End Company Details -->
        <div id="copyright">
            <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
            <br class="clear" />
        </div>
        <div class="clear"></div>
    </div>
</div>
</body>
</html>

