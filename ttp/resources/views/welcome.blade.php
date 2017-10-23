@extends('layouts.app')
@section('content')
    <div class="section-welcome">
    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-center">

                        <div class="row">
                            <div class="col-md-offset-4 col-md-4">
                                <img src="/public/images/photo_logo.png">
                            </div>

                        </div>
                            <div class="row">
                                <div class="col-md-12">
                            <h1>Bienvenue sur Times To Pics, </br>le dernier des sites Laravel </h1>
                                </div>
                            </div>
                        </br></br></br></br></br>
                            @if (Auth::guest())
                            <div class="row">
                            <div class="col-md-offset-2  col-md-3 tex-center">
                                <a href="{{ route('register') }}"class="btn btn-block btn-large bg-primary"  > Inscrivez-vous</a>
                            </div>
                                <div class="col-md-2">
                                    <h2>OU</h2>
                                 </div>
                                <div class="  col-md-3 tex-center">
                                    <a href="{{ route('login') }}"class="btn btn-block btn-large bg-info" > Connectez-vous</a>
                                </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">

                                   <a class="btn btn-block btn-large bg-info" href="{{ route('profile') }}"> Venez découvrir votre profil et télécharger votre photo de profil</a>
                                </div>
                            </div>
                            @endif
                                </div>
            </div>

        </div>
    </div>





@endsection
