@extends('layouts.app')
@section('content')

  <!-- entète - header -->
  <header style="background-image:url(wizard/img/backgrounds/1.jpg);background-size: cover">
      <div class="gradient">
        <div class="container header-text">
            <span style="color: white">Gérer votre travail en ligne</span>
            <p style="color: white">
              L'application de gestion la plus innovante, adaptée et efficace pour votre travail en ligne
            </p>
            <a href="#" class="btn btn-lg text-white bg-global mt-5" style="color: white">Essayez gratuitement!</a><br><br><br>
            <div>
            <a href="#demo" class="serviceButton"><img src="img/arrowdown.svg"></a>
              <text class="quelquesService" style="color: white">Quelques service</text>
            </div>
        </div>
      </div>
  </header>

    <div class="features" id="demo">
        <div class="feature">
            <img src="img/gestion.jpg" />
            <span>Gestion</span>
            <p>Réalisation des emplois du temps, recherche, notification SMS, comptabilité, statstiques... </p>
        </div>
        <div class="feature">
            <img src="img/earn.jpg" />
            <span> Services </span>
            <p>Si vous inscrivez votre Auto-école, vous bénéficiez d'une publicité gratuite qui sera affichée au public. </p>
        </div>
        <div class="feature">
            <img src="img/secure.jpg" />
            <span>Sécurité</span>
            <p>Rappels automatiques, consultation du compte, reservation en ligne, planning en ligne, suivis...</p>
        </div>
    </div>
    
  <section class="section1_halim">
    <div class="section1_halim_dev">
      <div class="section1_halim_dev_dev1">
        <img src="img/secure.jpg">
      </div>

      <div class="section1_halim_dev_dev1">


            <span class="section1_halim_dev_dev1_span">Sécurité</span>
            <p class="section1_halim_dev_dev1_p">

              Vos données sont immédiatement sauvegardées et protégées juridiquement et technologiquement. La perte de données n'existe plus.
            </p><br>
            <a href="#" class="btn colored">Inscription</a>

    </div>
    </div>
  </section>

  <section class="section1_halim">
    <div class="section1_halim_dev">


      <div class="section1_halim_dev_dev1">
            <span class="section1_halim_dev_dev1_span">N'importe où!</span>
            <p class="section1_halim_dev_dev1_p">
            Grâce a cette application vous pouvez gérer les données de votre auto-école a tout moment et en tout lieu et sur n'importe quel support (Ordinateurs, téléphones, tablettes).
            </p><br>
            <a href="#" class="btn colored">Inscription</a>
    </div>

    <div class="section1_halim_dev_dev1">
        <img src="img/place.jpg">
      </div>
    </div>
  </section>
  @endsection
    
   
    
