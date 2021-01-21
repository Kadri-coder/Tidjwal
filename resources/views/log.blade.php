@if($errors==Session::get('error'))

        <div class="alert alert-danger">
            
            <strong>{{$error}}</strong>
        </div>
        @endif
 <form method="POST" action="{{route('log.inscription')}}">
        @csrf

                                <div class="form-holder">
                                    <div class="wrap">
                                        <div class="hold">
                                            <label for="login_username"> Email</label>
                                            <input type="text" id="login_username" name="login_username" class="form-control">
                                        </div>
                                        <div class="hold">
                                            <label for="login_password">Password</label>
                                            <input type="password" id="login_password" name="login_password" class="form-control">
                                        </div>
                                        <div class="btn-hold">
                                            <input type="hidden" id="redirect_link" value="https://themes.waituk.com/entrada-modern/my-account/">
                                            <button type="submit" class="btn btn-default">Login</button>
                                        </div>
                                        <div class="btn-hold">
                                            <a href="https://themes.waituk.com/entrada-modern/my-account/lost-password">Lost your password?</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
