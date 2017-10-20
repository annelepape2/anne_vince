<body>
<div class="bg flex-center  full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/image-gallery') }}">Galerie photo</a>
                @else
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
        </div>
    @endif

    <div class="content">

        <div id="container">
            <div id="logo_bar">
                <img id="logo" src="http://hpics.li/e5d67c6" alt="logo"> <span>Yaswanth Gupta</span>
            </div>
            <div id="form_box">
                <form>
                    <p id="form_heading">Connectez-vous !</p>
                    <input type="email" placeholder="Enter Email"><br />
                    <input type="password" placeholder="Enter Password"><br />
                    <input type="checkbox" id="checkbox"><label for="checkbox" style="color:white; font-size:15px;">Remember Me</label><br />
                    <input type="submit" value="Login"><br />
                    <a id="font_20">Forgot your Password?</a><br /><br />
                </form>
            </div>
        </div>




</div>
</div>
</body>

<style>


    // Fonts
    @import url("https://fonts.googleapis.com/css?family=Raleway:300,400,600");

    // Variables
    @import "variables";

    // Bootstrap
    @import "~bootstrap-sass/assets/stylesheets/bootstrap";

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

    .bg {
        background-image:url("");
    }

    #logo_bar {
        background: rgba(0, 0, 0, 0.5);
        width: 300px;
        color: white;
        margin-bottom: 20px;
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
        width: 300px;
        text-align: center;
        border-radius: 10px;
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