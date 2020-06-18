@extends('layouts.dashApp')
@section('content')
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>
 <div class="pb-4 bg-secondary pb-2 pt-50"  style="margin-top:110px;">
        <div class="container"> 
          <div class="row">
            <div class="col-md-7 pt-5" style="background-color: {{$InfoTheme->theme->background_coulour}}">
              <div class="container">
             
                <div class="row text">
               <!-- start table -->
              <h3 class="mb-0 text-secondary text-uppercase">Listes Des Produits</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="text-secondary">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">N° du produit</th>
                    <th scope="col">Title</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Status</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
               @foreach ($InfoTheme->produit as $get)
                  <tr class="text-secondary">
                    <td>
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="/upload/{{$get->image}}">
                        </a>
                      </div>
                    </td>
                     <td>
                    {{$get->id}}
                    </td>
                    <td>
                    {{$get->name}}
                    </td>
                    <td>
                     {{$get->prix}}
                    </td>
                    <td>
                      In stock
                    </td>
                   
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="détail/">Détail</a>
                          <a class="dropdown-item" href="modification/">Modifier</a>
                          <a class="dropdown-item" onclick="return myFunction();" href="suppProd/{{$get->id}}">Supprimer</a>
                        </div>
                      </div>
                    </td>
                  </tr>
               @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Précédent</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">suivant</span>
                    </a>
                  </li>
                </ul>
              </nav>
          <!-- end table -->



              </div>
             <!--  @if ($message = Session::get('successSUP')) 
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text"><strong>Success!</strong> {{ $message }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif -->
              </div> 
            </div>
            <div class="col-md-5 mr-auto ml-auto  pt-5">
              <div class="card bg-white">
                <div class="card-body">
                  <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                 <form method="POST" action="{{ url('gestionMonitor') }}" enctype="multipart/form-data">
                        @csrf

                   <div class="row"> 
                  <!--  @if ($message = Session::get('success')) 
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-inner--text"><strong>Success!</strong> {{ $message }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      @endif -->
                      <div class="col-md-12">
                        <h3 class="title ">Ajouter un Produit</h3>
                      </div> 

                      

                      <div class="col-md-12">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Nom du produit</small>
                        <div class="form-group"> 
                          <input id="name" type="text" placeholder="{{ __('Nom du produit') }}" class="form-control form-control-muted form-control-alternative  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                           <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                      </div>



                      <div class="col-md-12">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Prix</small>
                        <div class="form-group"> 
                          <input id="cin" type="text" placeholder="{{ __('Prix') }}" class="form-control form-control-muted form-control-alternative  @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}"  autocomplete="cin" autofocus>
                          <!--  @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                      </div>
                    


                   
                      <div class="col-md-12">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Quantité</small>
                        <div class="form-group">
                          <input type="email" placeholder="{{ __('Quantité') }}" class="form-control form-control-muted form-control-alternative @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                         <!--   @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                      </div>



                      <div class="col-md-12">
                        <small class="d-block text-uppercase font-weight-bold mb-3">Image</small>
                        <div class="form-group">
                          <input type="file" placeholder="{{ __('file') }}" class="form-control form-control-muted form-control-alternative @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}"  autocomplete="file">
                          <!--  @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                      </div>


                       

                      <div class="col-md-12 text-center">
                    <button type="submit" style="border:none;width: 150px;" class="btn btn-lg text-white mb-3 mb-sm-0 bg-global">{{ __('Enregistrer') }}</button> 
                     </div>
                    </div> 
                  </form>

                  </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
@endsection