<!doctype html>
<?php
include ('./lib/php/p_liste_include.php');
$db = Connexion::getInstance($dsn, $user, $pass);
session_start();

?>

<html>
    <head>
        <title>Pet-Sitting - Bienvenue</title>
        <link rel="stylesheet" type="text/css" href="./lib/css/p_style.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/bootstrap-3.3.5-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="./admin/lib/css/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css"/>
        <!-- -link des fichiers css non bootstrap -->


        <meta charset='UTF-8'/>
    </head>

    <body>

        <div class="container">
            <header>
                <?php
                    if (file_exists('./admin/lib/php/header.php')) {
                        include ('./admin/lib/php/header.php');
                    }
                ?>  
            </header>
            <nav id="p_menu">    
                <?php
                    if (file_exists('./lib/php/p_menu.php')) {
                        include ('./lib/php/p_menu.php');
                    }
                ?>                                  
                </div>	
            </section>
        </div>
        <section id="main">
            <div class="container">
                <?php
                //inclusion des fichiers du dossier ./pages
                if(!isset($_SESSION['page'])){
                    $_SESSION['page']="accueil";
                }
                if(isset($_GET['page'])){
                    $_SESSION['page']=$_GET['page'];
                }
                $chemin='./pages/'.$_SESSION['page'].'.php';
                if(file_exists(('chemin.php'))){
                    include ('chemin');
                }
                ?>  
            </div>
        </section>

        <footer>
            <?php
                if (file_exists('./admin/lib/php/footer.php')) {
                    include ('./admin/lib/php/footer.php');
                }
            ?>   
        </footer>

    </body>
</html>
