 <!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
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

    <section class="testimonial"  style="margin-top:100px;margin-bottom:90px;">
          <div class="container">
            
            @foreach ($codes as $code)
   <h1 class="text-center" style="margin-bottom:-10px;">Code : {{ $code->ref }}</h1>
    <hr width="15%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 

     <div class="row">
         
               <div class="col-md-6 col-sm-6"style="margin-bottom:70px;">
                    <div class="info-left">
                 
                    <p> <h3 style="color:#008B8B"><a>Date entrée:</h3> <h4>{{ $code->dateEntree}}</h4></a></p><br>
                     <p> <h3 style="color:#008B8B"><a>Date sortie:</h3> <h4>{{ $code->dateSortie}}</h4></a></p><br>
                      <p> <h3 style="color:#008B8B"><a>Prix:</h3> <h4>{{ $code->prix}}</h4></a></p><br>

                 </div>
                       </div>



               <div class="col-md-6 col-sm-6"style="margin-bottom:70px;">
                    <div class="info-right">
                 
                    
                        <img class="d-block w-100" src="images/Capture.PNG" alt="Third slide">
                        <h1 class="text-center" style="margin-bottom:-10px;">Merci pour votre confiance</h1>
    <hr width="15%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
                 </div>
                       </div>
                     
                    
                 
                
       @endforeach
    </div>
   </div>

</section>
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


@endsection