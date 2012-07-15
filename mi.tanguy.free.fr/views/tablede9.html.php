<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Comment construire la table de neuf </title>
    </head>
    <body>
        <br/>
        <h1> <?php echo 'Voici la construction de la table de neuf'; ?> </h1>
        <div id="explain">
            
            <div id="table">
                <div id="leftmember">Produit
                    <?php foreach ($tabmultiplicateurs as $tabmultiplicateur): ?>
                        <div class="multiplicateur"> 
                            <?php
                            $flags = ENT_QUOTES;
                            $charset = 'UTF-8';
                            echo "9 X" . htmlspecialchars($tabmultiplicateur, $flags, $charset);
                            ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div id="rightmember">
                    <div id="dizaines"> Dizaines
                        <?php foreach ($tabdizaines as $tabdizaine): ?>
                            <div class="dizaine"> 
                                <?php
                                $flags = ENT_QUOTES;
                                $charset = 'UTF-8';
                                sleep(1000);
                                echo htmlspecialchars($tabdizaine, $flags, $charset);
                                sleep(1000);
                                ?>
                            </div>

                            <?php endforeach; ?>
                    </div>
                    <div id="unites" c>Unites 
                        <?php foreach ($tabunites as $tabunite): ?>
                            <div class="unite"> 
                            <?php
                            $flags = ENT_QUOTES;
                            $charset = 'UTF-8';
                            echo htmlspecialchars($tabunite, $flags, $charset);
                            ?>
                            </div>
                                <?php
                                sleep(1);
                            endforeach;
                            ?>
                    </div>
                </div>

            </div>
            <div id="explaintext">
                <p> On obtient les chiffres des dizaines en classant du plus
                    petit au plus grand les chiffres de 0 à 9 </p>
                 <p>On obtient les chiffres des unités en classant du plus
                   grand  au plus petits les chiffres de 0 à 9</p>
            </div>
        </div>

    </body>
</html>
