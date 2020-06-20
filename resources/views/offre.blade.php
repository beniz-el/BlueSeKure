<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Forum</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  

<style>

.container:hover .image {
  opacity: 0.3;
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
                          

                             <section class="info1"  style="margin-top:100px;margin-bottom:0px;">
      <div class="container">
    
       <div class="row">
              <!--offre-->
                <div class="col-md-9 col-sm-8"style="margin-bottom:70px;">
                    <div class="info-left">
                      <h1  style=" color:#1E90FF;">Offre :</h1>
                    
<p> Aucune offre n’est disponible pour le moment.</p>
                    </div>
                   
                  </div>
                    <!--offre-->

            <!--calendrier-->
              <div class="col-md-2 col-sm-2"style="margin-bottom:70px;">
                  <div class="info-right">
                
                 <!-- <img class="d-block w-100" src="../img/youssef.jpg" alt="Third slide">-->

                   
                  </div>
                  </div>
                    <!--calendrier-->
                    
                        <!--crte abonnement-->
                  <div class="col-md-9 col-sm-8"style="margin-bottom:50px;">
                    <div class="info-left">
                    <h1  style=" color:#1E90FF;">Carte d’abonnement :</h1>
                      <p>
                      Ce service n’est pas encore activé.

</p>
                    </div>
                   
                  </div>

                   <!--carte abonnemet-->
                 <!--img carte-->
              <div class="col-md-2 col-sm-2"style="margin-bottom:50px;">
                  <div class="info-right">
                
                  <!--<img class="d-block w-100" src="../img/valise.jpg" alt="Third slide">-->

                   
                  </div>
                  </div>
                    <!--img carte-->
           </div>
         </div>
    </section>



    <section id="info1"  >
      <div class="container">
       <div class="row">
               <!--ville-->
                <div class="col-md-6 col-sm-6"style="margin-bottom:90px;">
                    <div class="info-left">
                      <!--carouselle-->
                      <h1 style=" color:#1E90FF;"> <i class="fas fa-city" style=" color:#708090;"></i> &nbsp;Villes :</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="images/Tanger.jpg" alt="Tanger"height='170px'>
                           <div style="text-align:center"> Tanger</div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/tanger1.jpg" alt="Second slide"height='170px'>
                            <div style="text-align:center"> Tanger</div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/Tanger.jpg" alt="Third slide"height='170px'>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/tanger2.jpg" alt="Third slide"height='170px'>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" style="color:#000;" ></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>


                      </div>
                      
                  </div>
                     <!--carouselle-->

        
                  
                     <!--places-->

          
              <div class="col-md-6 col-sm-6"style="margin-bottom:90px;">
                  <div class="info-right">
                
                  <h1 style=" color:#1E90FF;"> <i class="fas fa-map-marker-alt"  style=" color:#708090;"></i>&nbsp; Places :</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="images/Gelateria1.jpg" alt="Tanger"height='170px'>
                           <div style="text-align:center"> Gelateria tanger</div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/salon.jpg" alt="Second slide"height='170px'>
                            <div style="text-align:center"> Salon Bleu Tanger</div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/Ruche.jpg" alt="Third slide"height='170px'>
                            <div style="text-align:center">   By La Ruche tanger</div>
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="images/Tanger.jpg" alt="Third slide"height='170px'>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" style="color:#000;" ></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                  </div>
                      <!--places-->

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

