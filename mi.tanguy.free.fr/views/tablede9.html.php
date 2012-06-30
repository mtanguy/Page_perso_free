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
        <h1> <?php echo 'Voici la construction de la table de neuf';?> </h1>
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
                            echo htmlspecialchars($tabdizaine, $flags, $charset);
                            ?>
                        </div>
                   
                    <?php
                    sleep(1);
                    endforeach; ?>
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
                    endforeach; ?>
                </div>
            </div>

        </div>
    </body>
</html>
