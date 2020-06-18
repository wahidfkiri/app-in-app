@extends('layouts.dashApp')
@section('content')
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this Product"))
      event.preventDefault();
  }
 </script>
 <script>
  function deleteNote() {
      if(!confirm("Are You Sure to delete this Rappel"))
      event.preventDefault();
  }
 </script>
 
 <div class="container-fluid" style="margin-top: 150px">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="background-color: {{$InfoTheme->theme->background_coulour}}">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase " style="color:{{$InfoTheme->theme->couleur}}">Traffic</h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 350</span>
                    <span class="text-nowrap" style="color:{{$InfoTheme->theme->couleur}}">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="background-color: {{$InfoTheme->theme->background_coulour}}">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase" style="color: {{$InfoTheme->theme->couleur}}">Revenu </h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-exchange-alt"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"> <i class="ni ni-check-bold"></i> </span>
                    <span class="text-nowrap" style="color: {{$InfoTheme->theme->couleur}}">Compleated</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="background-color: {{$InfoTheme->theme->background_coulour}}">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase"style="color: {{$InfoTheme->theme->couleur}}">Stock</h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-shop"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                     @if ($InfoTheme->produit->count() > 0)
                     <span class="text-success mr-2"><i class="ni ni-check-bold" style="color: green"></i></span>
                    <span class="text-nowrap" style="color: {{$InfoTheme->theme->couleur}}">
                      
                       Terminé
                     </span>
                       @else
                        <span class="text-success mr-2"><i class="ni ni-settings"style="color: red" ></i></span>
                    <span class="text-nowrap" style="color: {{$InfoTheme->theme->couleur}}">
                       Pas encore
                     </span>
                       @endif
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6" >
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body" style="background-color: {{$InfoTheme->theme->background_coulour}}">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase" style="color: {{$InfoTheme->theme->couleur}}">Agenda</h5>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                     @if ($InfoTheme->note->count() > 0)
                     <span class="text-success mr-2" ><i class="ni ni-check-bold"style="color: green" ></i></span>
                    <span class="text-nowrap" style="color: {{$InfoTheme->theme->couleur}}"> 
                       Terminé
                     </span>
                       @else
                        <span class="text-success mr-2" ><i class="ni ni-settings"style="color: red" ></i></span>
                    <span class="text-nowrap" style="color: {{$InfoTheme->theme->couleur}}"> 
                       Pas encore
                     </span>
                       @endif
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <div class="row mt-5" style="margin-bottom: 30px; " >
        <div class="col" >
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0" >
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-white" >Produits</h3>
                </div>
                
                <div class="col text-right">
                  <a href="{{url('addProduct')}}" class="btn btn-sm btn-primary">Ajouter un produit</a>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <!-- Projects table -->
             @if ($InfoTheme->produit->count() > 0)
              <table class="table align-items-center text-white bg-default table-flush">
                <thead class="thead-dark" style="background-color: #172b4d">
                  <tr>
                    <th scope="col">Nom produit</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Status</th>
                    <th scope="col">Stock quantité</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($InfoTheme->produit as $getProd)
                  <tr>
                   <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img  src="upload/{{$getProd->image}}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{$getProd->name}}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      {{$getProd->prix}}dt
                    </td>
                    <td>
                      In stock
                    </td>
                    <td>
                      {{$InfoTheme->produit->count()}}
                    </td>
                   <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Modifier</a>
                          <a class="dropdown-item" onclick="return myFunction();" href="suppProd/{{$getProd->id}}">Supprimer</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
       @endforeach
                </tbody>
              </table>
              @else
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
        <span class="alert-inner--text"><strong>Info!</strong> Vous n'avez pas encore des produits</span>
      </div>
      @endif
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5" style="margin-bottom: 30px; " >
        <div class="col" >
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0" >
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0 text-white" >Notes</h3>
                </div>
                
                <div class="col text-right">
                  <a href="{{url('newNote')}}" class="btn btn-sm btn-primary">Ajouter un rappel</a>
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <!-- Projects table -->
             @if ($InfoTheme-> note->count() > 0)
              <table class="table align-items-center text-white bg-default table-flush">
                <thead class="thead-dark" style="background-color: #172b4d">
                  <tr>
                    <th scope="col">Titre de rappel</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Jour du rappel</th>
                    <th scope="col">Heure du rappel</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($InfoTheme->note as $getNote)
                  <tr>
                   <td>
                    {{$getNote->title}}
                    </td>
                    <td>
                      {{$getNote->sujet}}dt
                    </td>
                    <td>
                      {{\Carbon\Carbon::parse($getNote->dateJour)->format('j F, Y')}}
                    </td>
                    <td>
                      {{$getNote->timeDebut}}/H
                    </td>
                   <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="#">Modifier</a>
                          <a class="dropdown-item" onclick="return deleteNote();" href="suppNote/{{$getNote->id}}">Supprimer</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  
                 
       @endforeach
                </tbody>
              </table>
              @else


                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
        <span class="alert-inner--text"><strong>Info!</strong> Vous n'avez pas encore des rappels</span>
      </div>
               @endif
            </div>

          </div>
        </div>
      </div>
      <div id='calendar'></div>
@endsection