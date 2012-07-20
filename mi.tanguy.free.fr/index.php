<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <div id="main"><!--main conten of the web paget-->

            <div id="header">
                <?php include 'views/sliderShows.html.php'; ?>
            </div> 

            <div id="indexLeftColumn">
                <!--                debut du menu de navigation-->
                <div id="blockmenu">
                    <?php include 'views/menu.html.php';?>
                </div>
            </div>

            <div id="indexRightColumn">
                <?php
                $flags = ENT_QUOTES;
                $charset = 'UTF-8';

//request is a form
                if (!isset($_REQUEST['prenom'])) {
                    include 'views/form.html.php';
                } else {



                    $prénom = $_REQUEST['prenom'];
                    $nom = $_REQUEST['nom'];
                    echo "Bienvenue sur mon site,"
                    . htmlspecialchars($prénom, $flags, $charset) . ' '
                    . htmlspecialchars($nom, $flags, $charset) . '!';


                    $dizaine = 0;
                    $multiplicateur = 1;
                    $unite = 9;
                    for ($index = 1; $index < 11; $index++) {
                        $tabmultiplicateurs[] = $multiplicateur++;
                        $tabdizaines[] = $dizaine++;
                        $tabunites[] = $unite--;
                    }
                    
                }
                if ($_GET['menuLink']=='tablede9'){
                      include 'views/tablede9.html.php';
                    }
                    
//                    if ($_GET['menuLink']=='Le XIX'){
//                       echo "Nommez les personnes ci-dessous"; 
//                    }
                    if ($_GET['menuLink']=='Qui suis-je'){
                      include 'views/cv.html.php';
                    }
                ?>


            </div>

            <div id="footer">
                footer
            </div>
        </div>
    </body>
</html>
