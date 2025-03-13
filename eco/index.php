<?php
session_start();
require_once("includes/connection.php");
require_once("includes/head.php");
require_once("includes/functions.php");
require_once("includes/main.php");
?>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Soyez les bienvenus chez TAMAZIGH Cosmetics</h2>
        <p>les produits cosmetiques amazighiennes</p>
        <a href="#apropos" class="btn1">A propos</a>
        <a href="#produits" class="btn2">Nos produits</a>
    </div>
</section>
<!--fin page d acceuil-->
<section class="apropos" id="apropos">
   <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
               <h3>Nous somme une société Marocaine spécialisée dans les produits cosmetiques amazighiennes bio.</h3> 
               <br>
               <h3>Nous portons les produits à base d'Argan, Amande, noix.</h3>
        </div>
       <div id="img-apropos" class="col50">
            <div class="img">
                <img src="./images/index/argan.PNG" alt="image">
            </div>
        </div>
    </div>
</section>
<!--fin page apropos-->
<!--page  produits -->
<section class="produits" id="produits">
    <div class="titre">
        <h2 class="titre-texte"><span>N</span>os Produits</h2>
    </div>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/products/Argan Soap.PNG" alt="FM-2000-WHITE" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/mascaara à huile de ricin.PNG" alt="SOL-DC-1-min" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/creme hydratante.PNG" alt="vox-600-rouge" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/creme anti-age à base de figue barbarie.PNG" alt="vox-600-rouge" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/products/moroccan Black soap.PNG" alt="vox-600-rouge" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="plus">
      <a href="products.php" class="btn1">Voir Plus</a>
  </div>
</section>
<!---fin page produits-->
<!---page temoignage-->
<section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/index/be.png" alt="">
            </div>
            <div class="text">
                <p> Ma peau était sujette aux imperfections,après avoir utilisé leur routine de soins recommandée , ma peau est devenue beaucoup plus claire et plus uniforme. Les produits sont doux et agréables à utiliser. 
                    Je recommande vivement BR </p>
                <h3>Warren Buffett</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/bea.png" alt="">
            </div>
            <div class="text">
                <p>En tant que fervente adepte de produits cosmétiques,  mais BR se distingue vraiment par ses résultats exceptionnels., ma peau est devenue incroyablement lumineuse et éclatante.
                     J'adore leur sérum anti-âge.
                </p>
                <h3>SOFIA VERGARA. </h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/index/beau.png" alt="">
            </div>
            <div class="text">
                <p>. J'ai été agréablement surpris par les résultats que j'ai obtenus avec les produits BR. Leurs produits de nettoyage ont aidé à réduire
                     l'apparition des signes de vieillissement.</p>
                <h3> ARIANNA HUFFINGTON</h3>
            </div>
        </div>
        </div>
    </div>
 </section>
 <!---fin page de temoignage-->

<!-- page contact -->
<section class="contact" id="contact">
    <div class="titre noir">
        <h2 class="titre-text" id="color"><span>C</span>ontact</h2>
    </div>
    <div class="contactform">
        <form action="">
           <h3>Envoyer un message</h3>
           <input type="text" placeholder="Nom" class="inputboite">
           <input type="text" placeholder="email" class="inputboite">
           <textarea placeholder="message" class="inputboite"></textarea>
           <input type="submit" value="envoyer" class="inputboite">
        </form>
    </div>
</section>
<?php include "includes/footer.php" ?>
</body>
</html>
