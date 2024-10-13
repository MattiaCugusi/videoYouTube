<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video YouTube</title>
</head>
<body>
    <?php
     $video1 = array("titolo" => "Fiorentina - Juventus 4-2 (Serie A 2013) Riccardo Trevisani | IL FILM", "idVideo" => "A8GX0-WJV-o");

     $video2 = array("titolo" => "Gino Infantino • Highlights • 2023 | HD", "idVideo" => "LmXIKRKb9cM");
     
     $video3 = array("titolo" => "De Gea pazzesco: Highlights Fiorentina vs Milan 2-1 (Adli, Pulisic, Gudmundsson)", "idVideo" => "j2nTmvFMYTU");

     $listaVideo = [$video1,$video2,$video3];

     function inserisciVideoYoutube($video, $larPerc, $altPx){
         echo "<h2>" . $video["titolo"] . "</h2>";

        echo "<iframe width='" . $larPerc . "%'  height='" . $altPx . "px' src='https://www.youtube.com/embed/" . $video["idVideo"] . "'>
          </iframe>";
     }

     $larghezza = 50;
     $altezza = 250;

     for ($i=0; $i<count($listaVideo); $i++){
        inserisciVideoYoutube($listaVideo[$i], $larghezza, $altezza);

        $larghezza = $larghezza + 25;
        $altezza = $altezza + 125;

     }
     

    ?>


</body>
</html>