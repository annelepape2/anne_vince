@extends('layouts.app')

@section('content')
<div class="container">
        <div id="container">
            <div id="logo_bar">
                <img id="logo" src="https://lh3.googleusercontent.com/-TDrwLA2Z46E/VdnclUW79oI/AAAAAAAACSs/lq2kFXEj3jE/s160-Ic42/logo_icon.png" alt="logo"> <span>Yaswanth Gupta</span>
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

<style>
    body {
        background-repeat: no-repeat;
        background-size: cover;
        font-size: 25px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
    }

    @media screen and (max-width: 1300px) {
        body {
            background-size: auto;
        }
    }

    #container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #logo_bar {
        background: rgba(0, 0, 0, 0.5);
        width: 300px;
        color: white;
        margin-bottom: 10px;
        padding: 10px 0;
        text-align: center;
        border-radius: 10px;
    }

    #logo {
        max-width: 50px;
        max-height: 50px;
        vertical-align: middle;
    }

    #form_box {
        background: rgba(0, 0, 0, 0.5);
        width: 200px;
        text-align: center;
        border-radius: 10px;
        padding-top:30px;
    }

    #form_heading {
        color: #ff7b00;
        padding: 15px 0 0 10px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 1.5em;
    }

    #font_20 {
        font-size: 15px;
    }

    input {
        background: none;
        -webkit-transition: all 0.30s ease-in-out;
        -moz-transition: all 0.30s ease-in-out;
        -ms-transition: all 0.30s ease-in-out;
        -o-transition: all 0.30s ease-in-out;
        outline: none;
        padding: 10px;
        margin: 10px;
        border: 1px solid #DDDDDD;
        color: white;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 17px;
    }

    input:focus {
        box-shadow: 0 0 10px rgba(255, 123, 0, 1);
        padding: 10px;
        margin: 10px;
        border: 1px solid rgba(255, 123, 0, 1);
    }

    input[type=submit]:hover {
        cursor: pointer;
    }

    #credits_box {
        background: rgba(0, 0, 0, 0.4);
        color: white;
        width: 380px;
        position: absolute;
        bottom: 0px;
        right: 0px;
        font-family: 'Raleway', 'arial';
        font-weight: 100;
        font-size: 20px;
        text-align: center;
        padding: 10px;
    }

    a {
        text-decoration: none;
        color: antiquewhite;
        cursor: pointer;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
