<!-- Sign In -->
<div id="loginModal" class="sign-wind modal">
    <div class="canClose SignContainerBackground"></div>
    <div class="sign-in-cont-wrap">
        <div class="sign-in-container">
            <h3>SIGN IN TO YOUR ACCOUNT</h3>
            <div class="sign-bl-wrap">
                <div class="sign-bl">
                    <img class="login-img" src="{{ asset('frontend/img/login-tb.jpg') }}" alt="login">
                    {!! Form::open(array('url' => URL::route('customer.login.post'), 'id' => 'aform-modal', 'method' => 'post', 'autocomplete' => 'on')) !!}
                        <img class="res-icon" src="{{ asset('frontend/img/res-icon.svg') }}" alt="res-icon">
                        <input class="sign-bl-login" type="text" placeholder="Login" name="email" id="login-email">
                        <input class="sign-bl-pass" type="password" placeholder="Password" name="password" id="login-password">
                        <a class="log-res-pass" href="{{ route('customer.forgot') }}">RESET PASSWORD</a>
                        <button type="submit" class="button sign-in log-but" id="btn-login">Sign in</button>
                    {!! Form::close() !!}
                    
                    <div class="button-wrap">
                        <a href="{{URL::route('customer.register') }}">
                            <span class="medium-but sign-up-but" style="display:block;">NEW USER <span class="desktop">SIGN UP</span><span class="mobile">CREATE AN ACCOUNT</span> HERE</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>