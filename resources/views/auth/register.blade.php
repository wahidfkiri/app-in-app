@extends('layouts.app')

@section('content')  
 <div class="pt-4 pb-4 bg-secondary">
        <div class="container pt-5 pb-5"> 
          <div class="row">
            <div class="col-md-6 pt-5">
              <div class="card-body">
                <div class="row">
                        <h3 class="title">Info propriétaire</h3>
                  

                      <div class="row py-3 align-items-center">
        <div class="col-sm-6">
          <small class="text-uppercase text-muted font-weight-bold">
            <i class="fa fa-check-circle align-middle text-global" style="font-size: 26px;"></i><span class="align-middle pl-2">Paragraph</span>
          </small> 
        </div>
        <div class="col-sm-12">
          <p>1 million de recherches "auto-école" par mois sur google. Ne passez plus a côté d'autant de clients potentiels</p>
        </div>
      </div>

  <div class="row py-3 align-items-center">
        <div class="col-sm-6">
          <small class="text-uppercase text-muted font-weight-bold">
            <i class="fa fa-check-circle align-middle text-global" style="font-size: 26px;"></i><span class="align-middle pl-2">Paragraph</span>
          </small> 
        </div>
        <div class="col-sm-12">
          <p>Proposez le paiement de l'heure d'évalutation en ligne.</p>
        </div>
      </div>

              </div>
              </div>
            </div>
            <div class="col-md-6 pt-5">
              <div class="card bg-white border-0">
                <div class="card-body">
                  @if ($message = Session::get('message')) 
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text"><strong>Success!</strong> {{ $message }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif
                 <form method="POST" action="{{ route('register') }}">
                        @csrf

                   <div class="row"> 
                      <div class="col-md-12">
                        <h3 class="title">1 mois d'essai gratuit, sans engagement !</h3>
                      </div>  

                      <div class="col-md-12">
                         <small class="d-block text-uppercase font-weight-bold mb-3">Nom et Prénom</small>
                        <div class="form-group"> 
                          <input id="name" type="text" placeholder="{{ __('Nom et Prénom Proprétére') }}" class="form-control form-control-muted form-control-alternative" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                           @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div> 

                   
                      <div class="col-md-12">
                         <small class="d-block text-uppercase font-weight-bold mb-3">adresse email</small>
                        <div class="form-group">
                          <input type="email" placeholder="{{ __('exemple@gmail.com') }}" class="form-control form-control-muted form-control-alternative @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>


                      <div class="col-lg-6 col-sm-6">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Mote de passe</small> 
                        <div class="form-group">
                          <input placeholder="{{ __('********') }}" type="password" 
                          class="form-control form-control-muted form-control-alternative @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Confirmé mote de passe</small>  
                        <div class="form-group">
                          <input placeholder="{{ __('********') }}" id="password-confirm" type="password"  class="form-control form-control-muted form-control-alternative" name="password_confirmation" required autocomplete="new-password">
                        </div>
                      </div> 
                      <!--
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Radio is off
                              <span class="circle">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </div>
                      </div>
                      -->
                      <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-lg text-white mb-3 mb-sm-0 bg-global border-0">{{ __('Inscription') }}</button> 
                     </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
@endsection
