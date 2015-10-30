<h2 id="titre_page" class="hidden-xs">Bienvenue &agrave; la pension Pets Sitting</h2>
<h2 id="titre_page" class="visible-xs">Pets Sitting<br />Bienvenue !</h2>
<?php
$accueilDB = new AccueilDB($db);
$presentation = $accueilDB->getTexteAccueil();
var_dump($presentation);
//print_r($presentation);
?>
<div class="row">
    <div class="col-md-4 col-xs-12">
        <img src="./admin/images/chenil.jpg" alt="Pension Pets Sitting" id="chenil_img" class="img-responsive"/>&nbsp;
    </div>
    <div class="col-md-8 up txtBlue" id="texte_accueil">  
        <p class="presentation_accueil">
        <?php print utf8_encode($presentation[0]->description);          
        ?>
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-3">
        <span class="txtGras"><br />Pendant votre absence, nous aurons &agrave; coeur le bien-&ecirc;tre des petits 
            compagnons que vous nous confierez !</span>
    </div>
</div>
<?php
//$accueilManager->faireQqch();
?>
<!--
<section id="avertisst">    
    Toute r&eacute;servation ...
    <input type="button" id="cacher" value="Cacher"/>
</section>
-->

<section id="avertisst">    
    Attention : Pour préserver le confort de nos pensionnaires, nous limitons volontairement notre capacité d'accueil.<br />
    Veuillez donc réserver au moins trois mois avant votre départ !   
</section>
<input type="button" id="cacher" value="Cacher"/>

<section id="no-js" class="txtRed txtGras">
    Pour plus de confort d'utilisation, veuillez activer javascript!
</section>