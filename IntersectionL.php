<!DOCTYPE html>
<html>
<head>
	<title>Traitement de données sur Exel</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

 			<div class="Titre">
		            <h1>Traitement de données sur Exel.</h1>
	                <h2>Code source généré par <b>Mr Justin OUATTARA</b>.
	         	    <br><i>Etudiant en Master 2 GI de l'université Nangui Abrogoua Abidjan.</i> </h2>
 			</div>

         	<br><br><br><br>

         	<h1>Organisation des données</h1> <mark></mark>
         	<h2>
         		<mark>Partie 1</mark> ( On va copier chacune des données c'est à dire le <mark><i>FID</i></mark>, <mark><i>Longitude1</i></mark>, <mark><i>Latitude1</i></mark>, <mark><i>Longitude2</i></mark> et <mark><i>Latitude2</i></mark> dans le fichier .txt du même nom que la données; le fichier FID.txt contiendra les fid... ) <br><br><br><br>
         	</h2>

<br><br><br><br><br>
<h1> Intersection des lineaments</h1>

<br><br><br><br><br>

		     <?php 
		     //******************************************************************************
		     $FFID = fopen("data/fid.txt", "r");
		     $Fx1 = fopen("data/x1.txt", "r");
		     $Fx2 = fopen("data/x2.txt", "r");
		     $Fy1 = fopen("data/y1.txt", "r");
		     $Fy2 = fopen("data/y2.txt", "r");

		     $FCSV = fopen("L_Intersection.csv", "w+");

		     //saut de la première ligne
		     fgets($FFID);
		     fgets($Fx1);
		     fgets($Fx2);
		     fgets($Fy1);
		     fgets($Fy2);
		     
		        //Entête des données
			 fwrite($FCSV, "LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/ LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;LONGITUDE/LATITUDE;
");
		        $ii=0;
		     while (!feof($FFID)) {
		     	// $ii++;
		        $fid =  fgets($FFID);
				$longitude1 =  fgets($Fx1);
				$longitude2 =  fgets($Fx2);
				$latitude1 =  fgets($Fy1);
				$latitude2 =  fgets($Fy2);

				// Nétoyage
				$fid =  trim($fid);
				$longitude1 =  trim($longitude1);
				$latitude1 =  trim($latitude1);
				$longitude2 =  trim($longitude2);
				$latitude2 =  trim($latitude2);


				$T_Lineament[$ii][0] = $longitude1;
				$T_Lineament[$ii][1] = $latitude1 ;
				$T_Lineament[$ii][2] = $longitude2;
				$T_Lineament[$ii][3] = $latitude2;


				 $ii++;
} // FIN while (!feof($FFID))
		     
		        $cp=1;
				for ($i=0; $i<1691; $i++) { 
					$longitude1 = $T_Lineament[$i][0];
					$latitude1 = $T_Lineament[$i][1];
					$longitude2 = $T_Lineament[$i][2];
					$latitude2 = $T_Lineament[$i][3];


					//******************** INTERSECTION ENTRE DUEX LINEAMENTS *************************
					for ($j=($i+1); $j < 1692 ; $j++) { 
						
						$longitude3 = $T_Lineament[$j][0];
						$latitude3 = $T_Lineament[$j][1];
						$longitude4 = $T_Lineament[$j][2];
						$latitude4 = $T_Lineament[$j][3];

						$denominateur = ( ($latitude4-$latitude3)*($longitude2-$longitude1 )-($longitude4-$longitude3)*($latitude2-$latitude1) );

						if ($denominateur != 0) {
							$ua=( ($longitude4 - $longitude3)*($latitude1-$latitude3)-($latitude4-$latitude3)*($longitude1 -$longitude3) )/( ($latitude4-$latitude3)*($longitude2-$longitude1 )-($longitude4-$longitude3)*($latitude2-$latitude1) );

							$ub=( ($longitude2 - $longitude1)*($latitude1-$latitude3)-($latitude2-$latitude1)*($longitude1 -$longitude3) )/( ($latitude4-$latitude3)*($longitude2-$longitude1 )-($longitude4-$longitude3)*($latitude2-$latitude1) );

							$InterX= $longitude1 +  $ua*($longitude2-$longitude1 );
							$InterY= $latitude1 +  $ub*($latitude2-$latitude1 );

						}else{
							$InterX = "PARALELLES";
							$InterY = "PARALELLES";
						}

			   //Sauvegarde des données
				if ($cp < 11) {
					fwrite($FCSV, $InterX."/". $InterY.";");
					$cp++;
				} else {
					fwrite($FCSV, "
");
					$cp=1;
				}
				
			}//fin FOR 2

		}//fin FOR 1
        	fclose($FFID);
			fclose($Fx1);
			fclose($Fx2);
			fclose($Fy1);
			fclose($Fy2);
			fclose($FCSV);
    ?>

<h3>
	
</h3>

<script type="text/javascript">alert('Intersection OK !')</script>
<?php header("location:Geospaciale.php"); ?>

</body>
</html>