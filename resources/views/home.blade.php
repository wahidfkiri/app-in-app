@extends('layouts.dasch')
@section('content')
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this App"))
      event.preventDefault();
  }
 </script>
<div class="container" style="margin-top:150px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bonjour,<span style="color:blue;font-weight:bold;"> 
                   {{ Auth::user()->name }}
                </span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      @forelse($Info->application as $get)
                      <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID App</th>
                    <th scope="col">Application Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">User name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                        </thead>
                        <tbody>
                  
                  @foreach($Info->application as $get)
                            <tr>
                                <td style="color: blue;">{{$get->id}}</td>
                                <td style="color: blue;"> {{$get->name}}</td>
                                <td style="color: blue;">{{\Carbon\Carbon::parse($get->created_at)->format('j F, Y')}}</td>
                                <td style="color: blue;">{{$get->user->name}}</td>
                                <td> <a  href="{{ url('Info') }}" style="background-color: blue; color:white;border-radius: 3px;padding: 10px;">{{ __('Accéder à votre espace') }}</a></td>
                                <td><a href="delete/{{$get->id}}" class="fas fa-trash-alt" style="color: red;" onclick="return myFunction();"></a></td>
                            </tr>
                       
                   @endforeach
                   
                   
                     </tbody>
                    </table>
                </div>
                 @empty
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-bell-55"></i></span>
        <span class="alert-inner--text"><strong>Info!</strong> Vous n'avez pas encore d'un espace de gestion pour votre travail</span>
      </div>
       <a class="btn btn-lg text-white bg-global mt-5" href="{{ url('config') }}">{{ __('Créer un espace') }}</a>
                    
                    @endforelse
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
