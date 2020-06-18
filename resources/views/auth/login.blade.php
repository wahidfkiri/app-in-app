@extends('layouts.app')
@section('content')
<div class="pt-5 pb-5 bg-secondary">
      <div class="container  pt-5 pb-5">
        <div class="row justify-content-center">
            <!-- 
            <div class="col-md-5 p-0  mr-0 bg-global">
            <img src="img/secure.jpg" width="50%" height="50%">
                
            </div>-->
          <div class="col-md-7 bg-white mr-auto ml-auto pt-5">
            <div class="card bg-white border-0">
              <div class="card-body pl-0">
                 <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <div class="row ">
                    <div class="col-md-12 text-center">
                      <h3 class="title ">{{ __('Connectez-Vous') }}</h3>
                    </div> 
                    <div class="col-md-7 mr-auto ml-auto">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Adresse e-mai</small>
                      <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="{{ __('exemple@gmail.com') }}" class="form-control form-control-muted form-control-alternative @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-7 mr-auto ml-auto">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Mot de passe</small> 
                      <div class="form-group">
                        <input type="password" name="password" placeholder="{{ __('********') }}"
                        class="form-control form-control-muted  form-control-alternative @error('password') is-invalid @enderror" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>
                    </div>
                    
                  </div>
                  
                  
                  <div class="row">
                    <div class="col-md-12 text-left">
                        <div class="form-group "> 
                                <div class="form-check">
                             <div class="col-md-12 text-center">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Souviens-toi de moi') }}
                                    </label> 
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btns bg-global text-white">  {{ __('Connexion') }}  </button> 
                    </div>
                    <div class="col-md-12 text-center"> 
                          @if (Route::has('password.request'))
                                    <a class="btns btn-link" href="{{ route('password.request') }}">
                                        {{ __('Informations de compte oubliées ?') }}
                                    </a>
                                @endif
                    </div>

                  </div>

                  
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
@endsection
