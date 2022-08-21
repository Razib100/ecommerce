<x-guest-layout>
<!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="login_form mb-50">
                        <h5 class="mb-3">Login</h5>
                            <x-jet-validation-errors class="mb-4" />
                                <form name="frm-login" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" id="frm-login-uname" class="form-control" name="email" placeholder="Type your email address" :value="old('email)" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="frm-login-pass" class="form-control" name="password" placeholder="************" required autocomplete="current-password">
                                    </div>
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox mb-3 pl-1">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="rememberme" value="forever">
                                            <label class="custom-control-label" for="customChe">Remember me for this computer</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm" value="Login" name="submit">>Login</button>
                                    <!-- Forget Password -->
                                    <div class="forget_pass mt-15">
                                        <a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">Forgotten password?</a>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Area End -->
</x-guest-layout>    