<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Infos Point</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  


<!-- for animation-->

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<!--end link for animation-->
 </head>
  <body>


@extends('layouts.gabarit')
@section('content')
<section class="testimonial" style="margin-top:150px; margin-bottom:90px;">
  <div class="container">
    @foreach ($points as $point)
     <h3 class="text-center" style="margin-bottom:-10px;">Nombre de places disponibles : {{ $point->nbr_place_dispo }}</h3>
     <hr width="40%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
             
         
              
                  <!--map-->

            <div class="map" style="height:50vh;">
           <center>  <img class="img-fluid" src="images/map.PNG"> </center>
              </div>
         
             
       
                                 <!-- maaap-->
             <h3 class="text-center" style="margin-bottom:-10px; margin-top:350px;">Infos sur le point:</h3>
     <hr width="20%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
                    <h5  class="text-center">{{ $point->description}}</h5>
                     <h3 class="text-center" style="margin-bottom:-10px;margin-top:50px;">Horaire:</h3>
     <hr width="10%" style=" display: block:px;border: 2px solid #1E90FF;margin-bottom:50px;"> 
                  <h5  class="text-center">{{ $point->horaire }}</h5>
                
       @endforeach
</div>
</section>
@endsection
</body>
</html>
