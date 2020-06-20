<!doctype html>
  <html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Titre de la page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="script.js"></script>
  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>








  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
      
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="jquery-3.4.1.min.js"></script>
    <style>
    *
    {outline:none;
      font-family: 'Montserrat', sans-serif;
      color: #000;
    }
    .form-control {
  background-image: url('https://res.cloudinary.com/dt9b7pad3/image/upload/v1502810110/angle-down-dark_dkyopo.png');
  background-position: right center 5px;
}

.search_field .input{
  
  
 border:0;
 padding-left:10px;
 width: 350px;
}

.search_field .fas{
  border-radius: 30px;
  color: #000;
  cursor: pointer;
  background-color:#fff;
  padding-left:5px;
  font-size: 22px;
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
}
::-moz-placeholder { /* Firefox 19+ */
 color: #9fa3b1;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #9fa3b1;
}


.search_field 
{
    border-radius: 30px;
    padding:5px;
    border:solid 1px #000;


  
}
::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #9fa3b1;
  font-family: Roboto;
  letter-spacing: 2px;
/*  text-transform: uppercase;/*
}
::-moz-placeholder { /* Firefox 19+ */
  color: #9fa3b1;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #9fa3b1;
}
/*

.search_field .close-btn{
 
  

  font-size: 35px;
  cursor: pointer;
  color: #000;
  opacity: 1;
  transition: opacity 0.5s ease;
}

.search_field .close-btn.active{
  opacity: 0.5;
  animation: animate 0.5s linear;
}

@keyframes animate{
  0%{
    transform: scale(1);
  }
  25%{
    transform: scale(1.2);
  }
  50%{
    transform: scale(1.5);
  }
  75%{
    transform: scale(1.2);
  }
  100%{
    transform: scale(1);
  }
}

*/

.navbar-light .navbar-nav .nav-link
{
 font-size:14px;
 font-weight:700;
}
.navbar-light .navbar-nav .nav-item
{
  margin :0 15px;
}
@keyFrames dropdown
{
  from{top:-25%;};
  to{top:100%;}
   
}
.dropdown-menu
{
  animation-name:dropdown;
  animation-duration:0.3s;
  animation-timing-function:cubic-bezier(.68,.41,.1,1.41);

}

#topBtn{
  position:fixed;
  top:230px;
  right:1vh;
  font-size:22px;
  width:10vh;
  height:50vh;
  background:#e74c3c;
  color:white;
  border:none;
  cursor:pointer;
}
@media only screen and (max-width:500px)
{
  #topBtn
  {
    
    position:fixed;
  top:230px;
  right:1px;
  font-size:10px;
  width:35px;
  height:300px;
  background:#e74c3c;
  color:white;
  border:none;
  cursor:pointer;
  }

}
/*navbar color
.bg-light
{
  background-color:#DC143C !important;
}*/
    </style>

     
  </head>
  <body>
       <header>

   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light "style="outline:none;" >
    
      <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
           
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-lg-auto">
          <li>
          
          <form class="form-inline my-2 my-lg-0"> 
              <div class="search_field"style="background-color:#fff">
                  <i class="fas fa-search"></i>
                <input type="text" class="input" placeholder="Search">
                <!-- <div class="close-btn">&times;</div>-->
                    
                
          
              </div>
          </form>
          </li>
           
            <li class="nav-item dropdown"class= "nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#000">
                 Rugbique
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown"class= "nav-item active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:#000">
                 
                 Langue
                </a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Francais</a>
                  <a class="dropdown-item" href="#">Anglais</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
         
              
             
              
            </ul>

          </div>
      </div>
      
  </nav>

  
</header>
<body>
<section>
 
 <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
<script type="text/javascript" src="script.js"></script>
 </section>
 
