 <head>
        <link rel="stylesheet" type="text/css" href="css/styles.css"
              media="screen and (min-device-width:481px)">
          <link rel="stylesheet" type="text/css" href="css/styles_mobiles.css"
                 media="handhled or (max-device-width:480px)">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
        
        <?php

$flags = ENT_QUOTES;
$charset = 'UTF-8';
//request is a form
if (!isset($_REQUEST['prenom'])) {
    include 'form.html.php';
} else {
    


$prénom = $_REQUEST['prenom'];
$nom = $_REQUEST['nom'];
echo "Bienvenue sur mon site,"
 . htmlspecialchars($prénom, $flags, $charset) . ' '
 . htmlspecialchars($nom, $flags, $charset) . '!';
 include 'cv.html.php';
}
?>
    