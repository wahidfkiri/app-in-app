@extends('layouts.dashApp')

@section('content')
<h1>Sales Graphs</h1>

<<div class="row">
       <div class="col-md-10 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-heading"><b>Charts</b></div>
               <div class="panel-body">
                   <canvas id="canvas" height="280" width="600"></canvas>
               </div>
           </div>
       </div>
     </div>
    
@endsection