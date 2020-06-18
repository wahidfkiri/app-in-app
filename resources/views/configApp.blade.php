<!DOCTYPE html>
<html lang="en">
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>laravel</title>
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
                        <form role="form" action="{{url('newApp')}}"  method="POST" class="f1" enctype="multipart/form-data">
                            @csrf
                            <h3>Register To Our App</h3>
                            <p>Fill in the form to get instant access</p>
                            <div class="f1-steps">
                                
                                
                                
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                                </div>
                                <div class="f1-step active">
                                    <div class="f1-step-icon"><i class="fa fa-briefcase"></i></div>
                                    <p> App</p>
                                </div>
                                <div class="f1-step ">
                                    <div class="f1-step-icon"><i class="fa fa-image"></i></div>
                                    <p>Theme</p>
                                </div>
                                <div class="f1-step">
                                    <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                                    <p>Finish</p>
                                </div>
                            </div>
                            
                            <fieldset>
                                <div class="form-group">
                                    <label style="float:left">Application name</label>
                                    <input type="text" name="name" placeholder="{{ __('Application Name') }}"  value="{{ old('name') }}"  autocomplete="name" autofocus class="f1-first-name form-control  @error('name') is-invalid @enderror" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label style="float:left">Catégory</label>
                                    <select  name="categorie" class="f1-last-name form-control @error('categorie') is-invalid @enderror" id="f1-last-name" autocomplete="categorie">
                                        <option>Gestion de stock</option>
                                        <option>Gestion de médecine</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="float:left">Logo</label>
                                    <input type="file" name="file"  class="f1-first-name form-control @error('file') is-invalid @enderror" id="file" accept="image/*" data-type='image' autocomplete="file">
                                </div>
                                <div class="f1-buttons">
                                    <a href="{{url('home')}}" class="btn btn-previous" style="background-color:#bbb;
                                        height:40px;color:white;min-width:105px;padding-top: 0px;
                                        padding-right: 20px;
                                        padding-bottom: 10px;
                                        padding-left: 20px;font-family: 'Roboto', sans-serif;
                                        font-size: 16px;
                                        font-weight: 300;
                                    line-height: 40px;">Cancel</a>
                                    <button type="button" class="btn btn-next">Next</button>
                                    
                                </div>
                            </fieldset>
                            
                            
                            <fieldset>
                                <h4>Choose your theme:</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/bg.jpg')}}" id="img1" style="box-shadow:5px 5px 5px 5px rgba(0,0,0,0.2)">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('img/bg.jpg')}}" id="img2">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="select1" type="checkbox" checked value="normal" name="normal" >
                                            <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Défault theme</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="select2" type="checkbox" value="premium" name="premium">
                                            <label class="custom-control-label" for=" customCheckLogin">
                                                <span class="text-muted">Premium theme</span>
                                            </label>
                                        </div>
                                    </div>
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