<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>BlueSecure</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


<style>
.testimonial .map{
  background:#f1f1f1;
  
  
  

}
</style>

<!-- for animation-->

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<!--end link for animation-->
 </head>
  <body>

@extends('layouts.gabarit')
@section('content')


                                     <!--map-->

    <section class="testimonial"  style="margin-top:150px;margin-bottom:350px;">
          <div class="container">
            <h1 class="text-center" style="margin-bottom:-10px;">Les points les plus proches</h1>
    <hr width="45%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
          <div class="map" style="height:50vh;">
           <center>  <img class="img-fluid" src="images/map.PNG"> </center>
              </div>
          </div>
   </section>
                                 <!-- maaap-->


     <section id="info1"  >
      <div class="container">
       <div class="row">
               <!--servives-->
                <div class="col-md-6 col-sm-6"style="margin-bottom:90px;">
                    <div class="info-left">
                      <h1>Services</h1>
                      <p>
                        <li>Activer votre GPS pour localiser le point le proche de votre emplacement ou bien rechercher dans l’endroit que vous souhaitez.</li>
                        <li>Vérifier si la place est disponible chez l'hôte.</li>
                        <li>Visiter l'hôte et déposer vos bagages</li>
                        <li>Prendre un reçu contenant toutes les informations et s’assurer de ces dernières.</li>
                        <li>Faire un suivi de vos bagages grâce au code imprimé sur le reçu, l’horaire de travail de l'hôte, et toute autre information.</li>
                        <li>Profiter de votre journée librement</li>
                        <li>Récupérer vos bagages en toute sécurité.</li>
                        <li>Laisser un avis sur le site.</li>
                      </p>
                    </div>
                    <br>
                    <a href="{{ asset('/apropos') }}" class="btn btn-default btn-lg showcase-btn" style="border:1px solid #000;">À propos de nous</a>
                  </div>
                     <!--servives-->

              <!--carouselle-->
              <div class="col-md-6 col-sm-6" style="margin-bottom:90px; margin-top:100px;">
                  <div class="info-right">
                
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="images/byLaRuche.jpg" alt="First slide"height='170px'>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/gelateria.jpg" alt="Second slide"height='170px'>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/SalonBleu.jpg" alt="Third slide"height='170px'>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>


                      </div>
                        <br>
                  </div>
                     <!--carouselle-->

                <!-- Left and right controls -->
           </div>
         </div>
    </section>



  
    <script
  src="https://code.jquery.com/jquery-3.2.1.js" 
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"style="width:900px;"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.showcase-btn', {
          duration: 200,
          delay: 2000,
          origin:'bottom'
        });
        sr.reveal('.testimonial div', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.info-left', {
          duration: 2000,
          origin:'left',
          distance:'300px',
          viewFactor: 0.2
        });
        sr.reveal('.info-right', {
          duration: 2000,
          origin:'right',
          distance:'300px',
          viewFactor: 0.2
        });
    </script>

    <script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
  </body>
</html>
