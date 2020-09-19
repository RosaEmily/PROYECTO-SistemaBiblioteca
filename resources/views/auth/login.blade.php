@extends('layouts.app')

@section('content')
<div class="row" style="height: 100vh">
  <div class="col-10 col-md-7 col-lg-5 col-xl-4 mx-auto my-auto">
        @if(session()->has('flash'))
            <div style="background-color: #fff3cd; z-index:2;" class="alert alert-warning alert-dismissible fade show" role="alert">
                {{session('flash')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>		
        @endif
        <div class="target-switch">
            <button class="switch" id="switch" style="outline: none">
                <span><i id="switch-element" class="switch-element fas fa-sun"></i></span>
                <span><i id="switch-element" class="switch-element fas fa-moon"></i></span>
            </button>
        </div>
        <div class="target">
            <div class="mx-auto" style="padding-bottom: 30px; width: 130px;">
                <div class="circulo">
                    <img style="height: 90px;" class="img_login" src="img/login.svg" alt="">
                </div>
            </div>
            <form method="POST" action="{{route('login')}}">
            @csrf
                <div class="form-group">
                    <input name="email" type="text" class="form-control input" id="emailInput" placeholder="EMAIL" value="admin@gmail.com" required>
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control input" id="passwordInput" placeholder="CONTRASEÑA" value="password" required>
                </div>
                <div>
                    <input type="submit" style="width: 100%;" class="btn negrita botones-az" value="INICIAR SESIÓN">
                </div>
            </form>
        </div>    
  </div>
</div>
@endsection
