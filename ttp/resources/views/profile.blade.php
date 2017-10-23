@extends('layouts.app')

@section('content')
    <br><br>

    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>Informations du compte</h1></div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <div class="">
                                <div class="profile-img">

                                 <img class="profile-avatar" src="/uploads/avatars/{{ $user->avatar }}"
                                         style="width: 150px;height: 150px;float: left;border-radius: 50%;margin-right: 25px;"
                                         width="150" height="150">
                                </div>
                            </div>
                            <form enctype="multipart/form-data" action=" {{ route('profile',$user->id)}}"
                                  method="POST" style="margin-top:100px;width:120px;">
                                <input type="file" name="avatar">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class=" btn-sm btn btn-primary"
                                        style="background-color:#e74c3c!important; margin-top: 20px;">
                                    Enregistrer
                                </button>
                            </form>
                        </div>

                        <div class="col-md-6">
                             @if(Auth::check())
                                <p class="profile-detail">Bonjour
                                    <strong> {{ Auth::user()->name}}</strong></p>

                                <p class="profile-detail">Votre adresse mail actuelle est :
                                    <strong>{{ Auth::user()->email}}</strong></p>

                                </p>

                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



