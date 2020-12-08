<!DOCTYPE html>
<html>
<head>
	<title>O'Baoulé</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="MDB/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="MDB/css/style.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</head>


<style type="text/css">
  *{
    font-family: Luminari;
  }
  #h1{
    font-family: Luminar, fantasy;
    height: 100vh;
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;padding: 0 20px;

  }

  #h1 h1{
     font-size: 110px;
     font-family: Luminari, fantasy;
  }
  .cercle-pt { 
    height: 150px; 
    width: 150px; 
    border: 2px solid rgba(255, 255, 255, 255);
    border-radius: 50%; 
    background-image: url('img/ps1.jpg')
  } 


  .cercle-dej { 
    height: 150px; 
    width: 150px; 
    border: 2px solid rgba(255, 255, 255, 255);
    border-radius: 50%; 
    background-image: url('img/gr.jpg')
  } 

.cercle-din { 
    height: 150px; 
    width: 150px; 
    border: 2px solid rgba(255, 255, 255, 255);
    border-radius: 50%; 
    background-image: url('img/ra.jpg')
  } 

  *{
    }
    .gallery{
      border: 1px solid #ccc;
    }
    .gallery img{
      width: 100%;
      height: 200px;
      filter: grayscale(%);
      transition: 2s;
    }

    .gallery img:hover{
      filter: grayscale(0);
      transform: scale(1.1);
      cursor: pointer;

          }
    .des{
      padding: 15px;
      text-align: center;
    }
    .responsive{
      padding: 0 6px;
      float: left;
      width: 25%;
    }
    @media only screen and (max-width: 700px){
      .responsive{
        width: 50%;
        margin: 6px 0;
      }
    }
    @media only screen and(max-width: 500px){
      .responsive{
        width: 100%;
      }
    }


</style>
<header class="class">
	
	
<nav class="navbar  fixed-top navbar-expand-lg navbar-dark text-warning  " style="background-color: white" >
	 <a class="navbar-brand" href="index.php">
    <img  class="w-120" src="img/lol.png" height="30" alt="mdb logo">
  </a>
  
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link text-success" href="index.php " style="">Accueil </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="gallery.php">Nos spécialités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-success" href="contact.php">Réservation</a>
      </li>
       <li class="nav-item">
        <a class="nav-link text-success" href="formation.php">Formation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="connectAdmin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
 <div class="carousel-inner" role="listbox" >
    <div class="carousel-item active">
      <div class="view" >
        <img class="d-block w-100" src="img/rat.jpg" alt="First slide" style="">
        <div class="mask rgba-black-light">
        </div>
      </div>
      <div class="carousel-caption">
      	<div id="h1">
        <h1  class="h1-responsive">O'Baoulé</h1>
        <p class="p-responsive">L'amour de la cuisine ivoirienne</p>
        <a href="contact.php" class="button">Réserver</a>
        </div>
        <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-4">
        	<div class="cercle-pt"></div>
        	<p style="">Des peits-déjeuners</p>
        </div>
        	<div class="col-lg-4">
        	<div class="cercle-dej"></div>
        	<p style=""> Des déjeuners</p>

        </div>
        	<div class="col-lg-4">
        	<div class="cercle-din"></div>
        	<p style="text-indent: -120px;">Des diners</p>
        	
        </div>
      
        </div>
        </div>
    </div>

     
</header>
<body>

<hr>

<p></p>

<h1 style="text-align: center; margin-bottom: 20px; font-family: Luminar">A propos de <i style="color: orange">O'Baoulé</i> </h1>

<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/resp.jpg"
        alt="Card image cap" style="height: 500px">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body" style="text-align: center; font-family: Luminari;">

      <!--Title-->
      <h4 class="card-title" style="font-family: Luminari, fantasy;">Kouamé N'da Ahou</h4>
      <!--Text-->
      <p class="card-text">Madame Kouamé est une femme battante qui fait du comrce pour aider son mari dans les dépenses de la maison. Elle est la patrone du restaurant O'Baoulé. Elle est spécilisée dans la cuisine de plats traditionnels ivoiriens.Elle cuisine d'excellent plats et sonrestaurant fait partie des  références dans la ville de Dabou.</p>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="img/apa.jpg"
        alt="Card image cap" style="height: 500px">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body" style="text-align: center; font-family: Luminari;">

      <!--Title-->
       <h4 class="card-title" style="font-family: Luminari, fantasy;">A propos de O'Baoulé</h4>
      <!--Text-->
      <p class="card-text">O'Baoulé est un restaurant situé à Dabou en face du collège moderne Sainte Marie.C'est un espace assez ouvert et il y a une ambiance conviviale et familiale.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
     

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay" >
      <img class="card-img-top" src="img/ouv.jpg"
        alt="Card image cap" style="height: 500px">
      <a href="#!">
        <div class="mask rgba-white-slight">Le personnel</div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body" style="text-align: center;font-family: Luminari;">

      <!--Title-->
      <h4 class="card-title" style="font-family: Luminari, fantasy;">Le personnel </h4>
      <!--Text-->
      <p class="card-text">Le personnel est composé de 3 vaillantes dames qui l'aident à la cuisine et pour le service. C'est une petite famille. Il reigne l'entente et la paix et on s'y sent chez soi </p>
     

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->

<hr>


	<h1 class="bg-warning" style="margin-bottom: 100px; color: white; font-family: Luminar, fantasy"><marquee behavior="alternate" scrollamount="15"> Menu du jour</marquee></h1>

<div> 
  <div style=" position: relative; top: -30px;">
  <h2 class="title text-success" style=" font-family: Luminar, fantasy">Petits-déjeuner</h2>
  </div>

      <div class="responsive">
    <div class="gallery">
      <a href="img/om.jpg" target="_blank"><img src="img/om.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Omelette</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/jaune.jpg" target="_blank"><img src="img/jaune.jpg" width="300" height="200"></a>
      <div class="des"> 

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Gateau jaune</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/pas.jpg" target="_blank"><img src="img/pas.jpg" width="300" height="200"></a>
      <div class="des">

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">pastel</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/beau.jpg" target="_blank"><img src="img/beau.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">beau-flottant</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>


  </div>
</div>



<div style="position: relative; top: 100px; margin:10px; "> 
  <div style=" position: relative; top: -30px">
  <h2 class="title text-success " style="font-family: Luminar, fantasy">Déjeuner</h2>
  </div>

      <div class="responsive" style="">
    <div class="gallery">
      <a href="img/0.pg" target="_blank"><img src="img/0.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Foutou banane</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive" >
    <div class="gallery">
      <a href="img/ign.jpg" target="_blank"><img src="img/ign.jpg" width="300" height="200"></a>
      <div class="des"> 

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Foutou igname</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/Riiiz-blanc-2.jpg" target="_blank"><img src="img/Riiiz-blanc-2.jpg" width="300" height="200"></a>
      <div class="des">

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Riz</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/at.jpg" target="_blank"><img src="img/at.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Attiéké</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>



  <div class="responsive">
    <div class="gallery">
      <a href="img/arr.jpg" target="_blank"><img src="img/arr.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Sauce arrachide</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/gra.jpg" target="_blank"><img src="img/gra.jpg" width="300" height="200"></a>
      <div class="des"> 

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Sauce graine</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1000 fr</div>
        </div>
      </div>
    </div>
  </div>


  <div class="responsive" >
    <div class="gallery">
      <a href="img/hqdefault.jpg" target="_blank"><img src="img/hqdefault.jpg" width="300" height="200"></a>
      <div class="des">

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Sauce aubergine</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1000 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/dj.jpg" target="_blank"><img src="img/dj.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Sauce gjoumblé</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1000 fr</div>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>





<div style="position: relative; top: 200px; margin:10px;"> 
  <div style=" position: relative; top: -30px">
  <h2 class="title text-success" style="font-family: Luminar, fantasy">Diner</h2>
  </div>

      <div class="responsive" style="">
    <div class="gallery">
      <a href="img/attieke.png" target="_blank"><img src="img/attieke.png" width="300" height="300"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Attiéké+Poisson+alloco</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">2500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive" >
    <div class="gallery">
      <a href="img/rig.jpg" target="_blank"><img src="img/rig.jpg" width="300" height="200"></a>
      <div class="des"> 

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Riz gras</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/rie.jpg" target="_blank"><img src="img/rie.jpg" width="300" height="200"></a>
      <div class="des">

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Riz+Sauce feuille</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/ii.png" target="_blank"><img src="img/ii.png" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Igname+pate</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1500 fr</div>
        </div>
      </div>
    </div>
  </div>



  <div class="responsive">
    <div class="gallery">
      <a href="img/ah.jpg" target="_blank"><img src="img/ah.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Attiéké huilé+Sauce</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">2000 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/f.jpg" target="_blank"><img src="img/f.jpg" width="300" height="200"></a>
      <div class="des"> 

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Foufou+ sauce claire</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1500 fr</div>
        </div>
      </div>
    </div>
  </div>


  <div class="responsive" >
    <div class="gallery">
      <a href="img/ps.png" target="_blank"><img src="img/ps.png" width="300" height="200"></a>
      <div class="des">

        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Alloco+Poisson grillé</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">1500 fr</div>
        </div>
      </div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="img/l.jpg" target="_blank"><img src="img/l.jpg" width="300" height="200"></a>
      <div class="des">
        <div class="row">
        <div class="col-lg-8" style="border: 1px solid green; color: orange">Banane +poisson grillé</div>
        <div class="col-lg-4" style="border: 1px solid green ; color: orange">500 fr</div>
        </div>
      </div>
    </div>
  </div>

  </div>
</div>



</body>

<div style="position: relative; bottom: -250px">
  
 <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
 
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="img/jj.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption" style="bottom: 30%;font-size: 40px; font-family: recursive; font-weight: bold; ">
        <h3 class="h3-responsive" >Week-end de folies</h3>
        <p>Réduction de 50% tous les samedi entre 19h et 23h</p>
         <a href="contact.php" class="button">Réserver</a>
      </div>
    </div>
    
   
</div>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> Line.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script type="text/javascript" src="MDB/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
