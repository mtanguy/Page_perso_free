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

                <ul id=sliderShows>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/roidetrefle.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/damedetrefle.jpg"/>
                        </div>            
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/roidecarreaux.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/damedecarreaux.jpg"/>
                        </div>            
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/JeuxNapoleonIII/small/roidepic.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/damedepic.jpg"/>
                        </div>            
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/roidecoeur.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="/Images/Small/JeuxNapoleonIII/damedecoeur.jpg"/>
                        </div>            
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/valetdetrefle.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/asdetrefle.jpg"/>
                        </div>            
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/valetdecarreaux.jpg"/>
                        </div>
                    </li>
                    <li class="slideShows">
                        <div >
                            <img src="Images/Small/JeuxNapoleonIII/asdecareaux.jpg"/>
                        </div>            
                    </li>
                </ul>
            </div>

            <div id="indexLeftColumn">
                <!--                debut du menu de navigation-->
                <div id="blockmenu">
                    <ul id="menu" >
                        <li><a href="index.php">Page d'accueil</a></li>
                    </ul>

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
                    include 'views/tablede9.html.php';
                }
                ?>


            </div>

            <div id="footer">
                footer
            </div>
        </div>
    </body>
</html>
