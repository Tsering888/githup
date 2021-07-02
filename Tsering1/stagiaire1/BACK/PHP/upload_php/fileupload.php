<html>
<head>
  <meta charset="utf-8">
</head>
<body>
    <form enctype="multipart/form-data" action="fileupload.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
      Transfère le fichier <input type="file" id="monfichier" name="monfichier" />
                          <input type="submit" value="enregistrer" />
      
    </form>
<?php

/*
$cheminEtNomTemp = $_FILES["monfichier"]["tmp_name"];
$extention=substr(strrchr($_FILES['monfichier']['name'],"."), 1);
$newNom = $_POST['monfichier'].'.'.$extension;
$cheminEtNomDif = 'upload/'.$newNom;

$moveIsOk = move_uploaded_file($cheminEtNomTemp, $cheminEtNomDif);


if($moveIsOk)
{
    $message= 'le fichier a été uploadé dans :'.$cheminEtNomDif;
}
else
{
   $message = "le ficgier n'est ps été uploadé";
}
*/


// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif");





if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/images/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
        echo "Le fichier ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}


?>
</body>
</html>
    