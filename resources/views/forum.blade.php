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
      <h1 class="text-center" style="margin-bottom:-10px;">Forum</h1>
    <hr width="15%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
       <div class="row">
              <!--text1-->
                <div class="col-md-9 col-sm-8"style="margin-bottom:70px;">
                    <div class="info-left">
                      <h4>Comment puisse je réserver une place chez un hôte?</h4>
                      <p>Pour le moment , vous pouvez réserver votre espace de stockage sécurisé par téléphone directement. Votre hôte vous répondrait à tout moment pour plus détails.
Une réservation par le site sera prochainement installé. Merci pour votre compréhension.
</p>
                    </div>
                   
                  </div>
                    <!--text1-->

            <!--img-->
              <div class="col-md-2 col-sm-2"style="margin-bottom:px;">
                  <div class="info-right">
                
                  <img class="d-block w-100" src="images/booking.PNG" alt="Third slide">

                   
                  </div>
                  </div>
                    <!--img-->
                    
                        <!--text2-->
                  <div class="col-md-9 col-sm-8"style="margin-bottom:90px;">
                    <div class="info-left">
                      <h4>Comment puisse récupérer mon bagage à partir d’un point différent de celui ou j’ai déposé ma valise?</h4>
                      <p>Il vous suffit de le signaler à votre hôte réceptionniste et de lui indiquer toutes autres informations afin que vous puissiez les trouver dans la place souhaitée.
Une fois arrivé chez l'hôte, présentez votre propre reçu pour récupérer votre bagages.

</p>
                    </div>
                   
                  </div>

                   <!--text2-->
                 <!--img-->
              <div class="col-md-2 col-sm-2"style="margin-bottom:90px;">
                  <div class="info-right">
                
                  <img class="d-block w-100" src="images/bagages.jpg" alt="Third slide">

                   
                  </div>
                  </div>
                    <!--img-->
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

