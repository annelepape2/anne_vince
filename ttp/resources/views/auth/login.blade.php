@extends('layouts.app')

@section('content')
<div class="container">
        <div id="container">
            <div id="logo_bar">
                <img id="logo" src="https://icon-icons.com/icons2/537/PNG/512/camera_icon-icons.com_52946.png" alt="logo"> <span>Times to pics</span>
            </div>
            <div id="form_box">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <p id="form_heading">Connectez-vous !</p>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <br/>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password"  name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                    <input type="checkbox" id="checkbox" {{ old('remember') ? 'checked' : '' }} ><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
                    <input type="submit" value="Login"><br />
                    <a id="font_20" href="{{ route('password.request') }}" >Forgot your Password?</a><br /><br />
                </form>
            </div>
    </div>
</div>
@endsection

