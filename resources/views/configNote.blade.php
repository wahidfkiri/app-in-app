<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BootZard - Bootstrap Wizard Template</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('wizard/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('wizard/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('wizard/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{ asset('wizard/css/style.css')}}">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('wizard/ico/favicon.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('wizard/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('wizard/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('wizard/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('wizard/ico/apple-touch-icon-57-precomposed.png')}}">


       <script src="{{ asset('wizard/js/jquery-1.11.1.min.js')}}"></script>
      
       <script>
    $(document).ready(function(){
        $('#select1').click(function(){
            $('#img1').css('box-shadow','5px 5px 5px 5px rgba(0,0,0,0.2)');
                $('#img2').css('box-shadow','none');
            if($('#select2').prop("checked") == true){
               $('#select2').prop('checked', false);
            }
        });
         $('#select2').click(function(){
             $('#img2').css('box-shadow','5px 5px 5px 5px rgba(0,0,0,0.2)');
                 $('#img1').css('box-shadow','none');
            if($('#select1').prop("checked") == true){
                $('#select1').prop('checked', false);
            }
        });
        
    });
</script>
    </head>
  <body style="background-image:url(wizard/img/backgrounds/1.jpg);background-size: cover">
        
        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                        <form role="form" action="{{url('newNote')}}"  method="POST" class="f1" enctype="multipart/form-data">
                            @csrf
                            <h3>Ajouter une nouvelle note</h3>
                            <p>Fill in the form to get instant access</p>
                            <div class="f1-steps">
                                
                                
                                
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-calendar"></i></div>
                                    <p>Préparation des données</p>
                                </div>
                                <div class="f1-step ">
                                    <div class="f1-step-icon"><i class="fa fa-clock-o"></i></div>
                                    <p>Réglage de l'heure</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>Conservation des données</p>
                                </div>
                            </div>
                            
                            <fieldset>
                               <!--  <h4>Tell us who you are:</h4> -->
                                
                                <div class="form-group">
                                    <label style="float:left">Title</label>
                                    <input type="text" name="title" placeholder="{{ __('Titre de la note ') }}"  value="{{ old('title') }}"  autocomplete="title" autofocus class="f1-first-title form-control  @error('title') is-invalid @enderror" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label style="float:left">Sujet</label>
                                    <textarea  name="sujet" placeholder="{{ __('Write description here...') }}"  class="f1-first-name form-control @error('sujet') is-invalid @enderror" id="sujet"  autocomplete="sujet"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                    
                                </div>
                            </fieldset>
                            <fieldset>
                               <!--  <h4>Tell us who you are:</h4> -->
                                
                                <div class="form-group">
                                    <label style="float:left">Date du jour</label>
                                    <input type="date" name="dateJour"  value="{{ old('dateJour') }}"  autocomplete="dateJour" autofocus class="f1-first-name form-control  @error('dateJour') is-invalid @enderror" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label style="float:left">Heure</label>
                                    <input type="time"  name="timeDebut" class="f1-first-name form-control @error('timeDebut') is-invalid @enderror" id="timeDebut" autocomplete="timeDebut">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="row" style="background-size: cover;background-image: url(img/bg.jpg);
                                margin-bottom: 10px;text-align: center;border-radius: 5px;
                                box-shadow:5px 5px 5px 5px rgba(0,0,0,0.2); ">
                                 <h4 style="color: white;">Thank you for Supporting Us, <br>Now Submit your Information and Enjoy with us  </h4 style="color: white;">
                             </div>
                               
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                            
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Javascript -->
        <script src="{{ asset('wizard/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{ asset('wizard/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('wizard/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{ asset('wizard/js/retina-1.1.0.min.js')}}"></script>
        <script src="{{ asset('wizard/js/scripts.js')}}"></script>
        
        <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>