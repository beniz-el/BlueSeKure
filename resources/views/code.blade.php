<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon code</title>
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

          	@if(count($errors)>0)
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif
@if(\Session::has('success'))
<div class="alert alert-success">
<p>{{\Session::get('success')}}</p>
</div>
@endif

</div>
</section>
<!--code-->
 <section id="info1"  >
      <div class="container">
<br>
<h1 style="color: #1E90FF;">Code :</h1>
 

 <ul class="navbar-nav ml-lg-auto">
          <li>
 <form class="form-inline my-2 my-lg-0" action="/codesearch" method="POST"> 
          @csrf
           <div class="form-group">
<input name="q" id="q" type="text"  class="form-control" placeholder="Entrez votre code">

</div>
</form>
</li>
</ul>
</div>
</section>

<!--code-->


<!--avis-->
<section id="info1"   >
      <div class="container">


      	<br><br>
<form  action="{{ url('commentaire') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
      <h1 style="color: #1E90FF;">Avis :</h1><br>
      	 <div class="form-group">
      	 	<textarea rows="5" cols="10" name="text" class="form-control" placeholder="Comment"></textarea>
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-outline-success">Envoyer</button><br><br><br><br>
     </div>
</form>
</div>
</section>

 <section id="info1"  >
      <div class="container">
         <h1 style="color: #1E90FF;">Commentaires de nos Clients :</h1>
       <div class="row">
       
       
@foreach ($commentaires as $commentaire)
       <div class="col-md-9 col-sm-8" style="margin-bottom:40px;" style="margin-top:0px;">
                    <div class="info-left" style="border:1px solid #DCDCDC; padding:10px;" >
                      <h5>{{$commentaire->auteur}}</h5>
                      <br>
                      <p>{{$commentaire->text}}</p><br>
                    </div>
                  
                   
                 </div>
@endforeach
                 
                   <!-- image diri chi image 3andk-->

          
               

                
                </div>
         </div>
    </section>

<section id="info1"  >
      <div class="container">
       <div class="row">
          
              <div class="col-md-6 col-sm-6" style="margin-bottom:90px;margin-top:-0px;">
                  <div class="info-right">
  <a class="dropdown-item" href="mailto:Bluesekure@gmail.com" target="_blank"> <button type="button"  class="btn btn-primary btn-lg btn-block"> Reclamation</button></a>  
                     </div>
                        
                  </div>
                  
                 

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