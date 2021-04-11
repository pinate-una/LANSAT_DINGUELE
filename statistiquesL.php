<?php 

// La longeur des lineaments
function Longeur($longitude1, $latitude1, $longitude2, $latitude2){
// CONVERSION EN RADIAN
                $longitude1 = $longitude1*(pi()/180);
                $latitude1 = $latitude1*(pi()/180);
                $longitude2 = $longitude2*(pi()/180);
                $latitude2 = $latitude2*(pi()/180);
            
            //************************* Calcul de laLaDistance ******************************
            $R = 6371;
            $DLatitude = $latitude2 - $latitude1;
            $DLongitude = $longitude2 - $longitude1;

            $a = sin(($latitude2 - $latitude1)/2)*sin(($latitude2 - $latitude1)/2)+ cos($longitude1 )*cos($longitude2)*sin(($longitude2 - $longitude1)/2)*sin(($longitude2 - $longitude1 )/2);


            $c = 2*atan2( sqrt($a), sqrt(1-$a) );

            $LaDistance = $R*$c;

            // Je resort avec la distance 
            //**************************************************************************
            return $LaDistance;
}

// détermine la longeur emaiximu et longeur minimum 
function Maxi_mini($T_DistanceR){
    foreach ($T_DistanceR as $valeur) {

         if ($valeur != 0) {
            // echo "<br>Initialiser à l'indice $cp";
             $Max = $valeur;
             $min = $valeur;
             break;
         }
     } 

    $sommeLongueur = 0;
    $nbLinea = 0;
    foreach ($T_DistanceR as $d) {
        $sommeLongueur+= $d;        
        $nbLinea++;

        if ($d !=0) {
                        
            if ($d>$Max) {
                
                $Max=$d;
            }

            if ($d<$min) {
                $min=$d;
                // echo "$d est plus petit que $min donc min== $min <br><br>";
            }
            if ($d == $min) {
                // echo "MIN===$d est égale à $min <br>";
            }

            if ($d == $Max) {
                // echo "MAX===$d est égale à $Max <br>";
            }
        }

    }

    $resulta= array("min" => $min,
                    "max" => $Max,
                    "MoyenneLongueur" => ($sommeLongueur/$nbLinea)
                    );

    return $resulta;
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Traitement de données sur Exel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
            <div class="Titre Mdiv">
                    <h1>Traitement de données sur Exel.</h1>
                    <h2>Code source généré par <b>Mr Justin OUATTARA</b>.
                    <br><i>Etudiant en Master 1 GI de l'université Nangui Abrogoua Abidjan.</i> </h2>
            </div>

            <br><br><br><br>

            <h1>Organisation des données</h1> <mark></mark>
            <h2>
                <mark>Partie 1</mark> ( On va copier chacune des données c'est à dire le <mark><i>FID</i></mark>, <mark><i>Longitude1</i></mark>, <mark><i>Latitude1</i></mark>, <mark><i>Longitude2</i></mark> et <mark><i>Latitude2</i></mark> dans le fichier .txt du même nom que la données; le fichier FID.txt contiendra les fid... ) <br><br><br><br>
            </h2>

<br><br><br><br><br>
<h2><a href="Geospaciale.php"><button class="btn btn-primary MbtnMenu">Menu</button></a></h2>


    <div class="container-fluid MdivCentre">

        <div class="responsive-table Mdiv">
            <table class="table table-bordered ">
         <div class="Mdiv">
           <h3>LINEAMENT<b> STATISTICS</b> EXTRACTED FROM <b style="color: red"> LANDSAT IMAGES OF DINGUELE</b></h3>
           </div>

         <?php 
                ?><th> N° Family </th> <?php  
                ?><th> Orientation </th> <?php  
                ?><th> Lineament Number </th> <?php  
                ?><th> Nb Linea (%)  </th> <?php  
                ?><th> Min length (km) </th> <?php  
                ?><th> Max length (km) </th> <?php  
                ?><th> Average (km) </th> <?php 

                $STATISTIQUExlsx = fopen("Les_statatistiques.csv", 'w+');
                fwrite($STATISTIQUExlsx, "N° Family; Orientation; Lineament Number; Nb Linea (%) ; Min length (km); Max length (km); Average (km)
");
                $a=0;  $b=10;  $c=180; $d=190;

                $operation = "";
                $sommm = 0;
                $calculs = "";
                $nbLineamentTotal = 0;

         for ($i=1; $i < 19 ; $i++) { 
            $famille = fopen("familles/f".$i.".txt", 'r');

            // Définition d'un nouveau tableau à chaque tours
            $T_Distance = [];

            $nbLineament = 0;
            $nbVirgule = 0;
            $data="";
            $mini=0;
            $Maxi=0;
            
            $cpTD=0;             
            while (!feof($famille)) {
                $L = fgetc($famille);

                if ($L ==";") {
                    $nbVirgule++;
                    if ($nbVirgule==1) {
                        $data="";
                    } else if ($nbVirgule==2){
                        $longitude1= $data;
                        $data="";
                    } else if ($nbVirgule==3){
                        $latitude1= $data;
                        $data="";
                    } else if ($nbVirgule==4){
                        $longitude2= $data;
                        $data="";
                    } else if ($nbVirgule==5){
                        $latitude2= $data;

                        
                        $T_Distance[$cpTD] = Longeur( $longitude1, $latitude1, $longitude2, $latitude2 );
                        $cpTD++;
                        $nbLineament++;
                        $nbVirgule=0;
                        $data="";
                    }
                    
                }else{
                    $data = $data.$L;
                }
 
            
         }
            fclose($famille);
            $T_min_Max = Maxi_mini($T_Distance);

            $calculs =  $calculs." + ".$nbLineament;
            $nbLineamentTotal = $nbLineamentTotal+$nbLineament;
            ?><tr><?php
                    ?><td><?php echo "<b>".$i."</b>"; ?></td><?php
                    ?><td><?php echo $a."–".$b."/".$c."–".$d; ?></td><?php
                    ?><td><?php echo $nbLineament; ?></td><?php
                    ?><td><?php echo ($nbLineament*100)/1692; ?></td><?php
                    ?><td><?php echo $T_min_Max['min']; ?></td><?php
                    ?><td><?php echo $T_min_Max['max']; ?></td><?php
                    ?><td><?php echo $T_min_Max['MoyenneLongueur']; ?></td><?php

            ?></tr> <?php
$operation .=(($nbLineament*100)/1692)." + ";
$sommm += (($nbLineament*100)/1692);

    fwrite($STATISTIQUExlsx, $i.";".$a."-".$b."/".$c."-".$d.";".$nbLineament.";".(($nbLineament*100)/1692).";".$T_min_Max['min'].";".$T_min_Max['max'].";".$T_min_Max['MoyenneLongueur']."
" );

    // INCREMENTATION APRES AFFICHAGE ET SAUVEGARD
    $a +=10;  $b+=10;  $c+=10; $d+=10;

     }
           ?> <?php 
           fclose($STATISTIQUExlsx);

          ?>
    </table>
     </div>
        </div>
</h3>

<h1>Les lineaments</h1>
 <h1>Le calcul est: <?= $calculs ?></h1>
<h1>La somme des lineaments est: <?= $nbLineamentTotal ?></h1>

<br><br>

<h1>Les pourcentages</h1>
 <h1>Le calcul est: <?= $operation ?></h1>
<h1>La somme des pourcentages est: <?= $sommm ?></h1>
</body>
</html>