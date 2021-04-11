<?php 

function Reinitialiser(){
	for ($i=1; $i < 19; $i++) { 
		$d = fopen("familles/f".$i.".txt", "w+");
		fclose($d);
	}
}

// La fonction qui trouve les 18 familles des lineaments
function T_famille($fid, $longitude1, $latitude1, $longitude2, $latitude2, $tetaDeg)
{

 if ( ($tetaDeg>0 && $tetaDeg<10 ) || ($tetaDeg>180 && $tetaDeg<190 ) ) {
 	$f1 = fopen("familles/f1.txt", 'a+');
fwrite($f1, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f1);


 } else if (($tetaDeg>10 && $tetaDeg<20 ) || ($tetaDeg>190 && $tetaDeg<200 ) ) {
 	$f2 = fopen("familles/f2.txt", 'a+');
fwrite($f2, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f2);


 } else if (($tetaDeg>20 && $tetaDeg<30 ) || ($tetaDeg>200 && $tetaDeg<210 ) ) {
 	$f3 = fopen("familles/f3.txt", 'a+');
fwrite($f3, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f3);


 } else if (($tetaDeg>30 && $tetaDeg<40 ) || ($tetaDeg>210 && $tetaDeg<220 ) ) {
 	$f4 = fopen("familles/f4.txt", 'a+');
fwrite($f4, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f4);


 } else if (($tetaDeg>40 && $tetaDeg<50 ) || ($tetaDeg>220 && $tetaDeg<230 ) ) {
 	$f5 = fopen("familles/f5.txt", 'a+');
fwrite($f5, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f5);


 } else if (($tetaDeg>50 && $tetaDeg<60 ) || ($tetaDeg>230 && $tetaDeg<240 ) ) {
 	$f6 = fopen("familles/f6.txt", 'a+');
fwrite($f6, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f6);


 } else if (($tetaDeg>60 && $tetaDeg<70 ) || ($tetaDeg>240 && $tetaDeg<250 ) ) {
 	$f7 = fopen("familles/f7.txt", 'a+');
fwrite($f7, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f7);


 } else if (($tetaDeg>70 && $tetaDeg<80 ) || ($tetaDeg>250 && $tetaDeg<260 ) ) {
 	$f8 = fopen("familles/f8.txt", 'a+');
fwrite($f8, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f8);


 } else if (($tetaDeg>80 && $tetaDeg<90 ) || ($tetaDeg>260 && $tetaDeg<270 ) ) {
 	$f9 = fopen("familles/f9.txt", 'a+');
fwrite($f9, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f9);


 } else if (($tetaDeg>90 && $tetaDeg<100 ) || ($tetaDeg>270 && $tetaDeg<280 ) ) {
 	$f10= fopen("familles/f10.txt", 'a+');
fwrite($f10, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f10);


 } else if (($tetaDeg>100 && $tetaDeg<110 ) || ($tetaDeg>280 && $tetaDeg<290 ) ) {
 	$f11 = fopen("familles/f11.txt", 'a+');
fwrite($f11, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f11);


 } else if (($tetaDeg>110 && $tetaDeg<120 ) || ($tetaDeg>290 && $tetaDeg<300 ) ) {
 	$f12 = fopen("familles/f12.txt", 'a+');
fwrite($f12, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f12);


 } else if (($tetaDeg>120 && $tetaDeg<130 ) || ($tetaDeg>300 && $tetaDeg<310 ) ) {
 	$f13 = fopen("familles/f13.txt", 'a+');
fwrite($f13, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f13);


 } else if (($tetaDeg>130 && $tetaDeg<140 ) || ($tetaDeg>310 && $tetaDeg<320 ) ) {
 	$f14 = fopen("familles/f14.txt", 'a+');
fwrite($f14, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f14);


 } else if (($tetaDeg>140 && $tetaDeg<150 ) || ($tetaDeg>320 && $tetaDeg<330 ) ) {
 	$f15 = fopen("familles/f15.txt", 'a+');
fwrite($f15, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f15);


 } else if (($tetaDeg>150 && $tetaDeg<160 ) || ($tetaDeg>330 && $tetaDeg<340 ) ) {
 	$f16 = fopen("familles/f16.txt", 'a+');
fwrite($f16, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f16);


 } else if (($tetaDeg>160 && $tetaDeg<170 ) || ($tetaDeg>340 && $tetaDeg<350 ) ) {
 	$f17 = fopen("familles/f17.txt", 'a+');
fwrite($f17, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f17);


 } else if (($tetaDeg>170 && $tetaDeg<180 ) || ($tetaDeg>350 && $tetaDeg<360 ) ) {
 	$f18 = fopen("familles/f18.txt", 'a+');
fwrite($f18, $fid.";".$longitude1.";".$latitude1.";".$longitude2.";".$latitude2.";".$tetaDeg."
");
fclose($f18);
 }
      

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
	         	    <br><i>Etudiant en Master 2 GI de l'université Nangui Abrogoua Abidjan.</i> </h2>
 			</div>

         	<br><br><br><br>

         	<h1>Organisation des données</h1> <mark></mark>
         	<h2>
         		<mark>Partie 1</mark> ( On va copier chacune des données c'est à dire le <mark><i>FID</i></mark>, <mark><i>Longitude1</i></mark>, <mark><i>Latitude1</i></mark>, <mark><i>Longitude2</i></mark> et <mark><i>Latitude2</i></mark> dans le fichier .txt du même nom que la données; le fichier FID.txt contiendra les fid... ) <br><br><br><br>
         	</h2>

<br><br><br><br><br>
<div class="container-fluid MCentre">
	<p class="Titre Mdiv MpLien">To find intersections, click  <a href="intersectionL.php"><button class="btn btn-primary">here</button></a>.</p>

<p class="Titre Mdiv MpLien">For statistics, click  <a href="statistiquesL.php"><button class="btn btn-success">here</button></a>.</p>
</div>


<?php Reinitialiser(); ?>
	<div class="container-fluid MdivCentre">

        <div class="responsive-table Mdiv">
            <table class="table table-bordered ">
         <div class="Mdiv">
         	<figcaption class="caption">

 		<h3>CALCULATION OF THE <b>DIRECTION</b> AND <b>LENGTH</b>  OF EACH LINEAMENT: <br>CASE OF <b style="color: red">LANDSAT</b> IMAGES TAKEN IN DINGUELE (Ivory Coast)</h3>
           </figcaption>
        </div>

        <h5 class="MCentre"><b style="color: red">NB: </b>Note that the coordinates were converted into radians before calculating <b>the angle</b> (in radians, converted into DEG) and <b>the length</b>.</h5>

		    <?php  ?>
		     <?php 
		     //******************************************************************************
		     $FFID = fopen("data/fid.txt", "r");
		     $Fx1 = fopen("data/x1.txt", "r");
		     $Fx2 = fopen("data/x2.txt", "r");
		     $Fy1 = fopen("data/y1.txt", "r");
		     $Fy2 = fopen("data/y2.txt", "r");

		     $FCSV = fopen("data.csv", "w+");

		     //saut de la première ligne
		     fgets($FFID);
		     fgets($Fx1);
		     fgets($Fx2);
		     fgets($Fy1);
		     fgets($Fy2);
		     

		        ?><th> FID </th> <?php  
		        ?><th> LONGITUDE_1<span>(deg)</span> </th> <?php  
		        ?><th> LATITUDE_1<span>(deg)</span> </th> <?php  
		        ?><th> LONGITUDE_2<span>(deg)</span> </th> <?php  
		        ?><th> LATITUDE_2<span>(deg)</span> </th> <?php  
		        ?><th> ANGLE(Teta)<span>(DEG)</span> </th> <?php  
		        ?><th> Lineaments LENGTH <span>(Km)</span> </th> <?php 


		        //Entête des données
			 fwrite($FCSV, "FID; LONGITUDE1(deg); LATITUDE1(deg); LONGITUDE2(deg); LATITUDE2(deg); TETADEG(DEG); LONGEUR(Km)
");

		     while (!feof($FFID)) {
		     	// $ii++;
		        $fid =  fgets($FFID);
				$longitude1 =  fgets($Fx1);
				$latitude1 =  fgets($Fy1);
				$longitude2 =  fgets($Fx2);
				$latitude2 =  fgets($Fy2);


				// Nétoyage
				$fid =  trim($fid);
				$longitude1 =  trim($longitude1);
				$latitude1 =  trim($latitude1);
				$longitude2 =  trim($longitude2);
				$latitude2 =  trim($latitude2);

				// CONSERVATION POUR L'AFFICHAGE
				$longitude1Afiche = $longitude1;
				$latitude1Afiche = $latitude1;
				$longitude2Afiche = $longitude2;
				$latitude2Afiche = $latitude2;

				// CONVERSION EN RADIAN
				$longitude1 = $longitude1*(pi()/180);
				$latitude1 = $latitude1*(pi()/180);
				$longitude2 = $longitude2*(pi()/180);
				$latitude2 = $latitude2*(pi()/180);
				
			//********************** La direction du lineament *************************
			// teta est la direction du lineament
			$teta = atan2( sin($longitude2-$longitude1 )*cos($latitude2) , cos($latitude1)*sin($latitude2)-sin($latitude1)*cos($latitude2)*cos($longitude2-$longitude1 ) );

			$tetaDeg = rad2deg($teta);

			if ($tetaDeg < 0) {
				$tetaDeg = $tetaDeg + 360;
			}

			// Je resort avec tetaDeg qui est positif
			//********************************************************************************


			//****************************** JE TROUVE LES FAMILLES **************************
			T_famille($fid, $longitude1Afiche, $latitude1Afiche, $longitude2Afiche, $latitude2Afiche, $tetaDeg);
			//********************************************************************************

			
			//************************* Calcul de laLaDistance ******************************
			$R = 6371;
			$DLatitude = $latitude2 - $latitude1;
			$DLongitude = $longitude2 - $longitude1;

			$a = sin(($latitude2 - $latitude1)/2)*sin(($latitude2 - $latitude1)/2)+ cos($longitude1 )*cos($longitude2)*sin(($longitude2 - $longitude1)/2)*sin(($longitude2 - $longitude1 )/2);


			$c = 2*atan2( sqrt($a), sqrt(1-$a) );

			$LaDistance = $R*$c;

			// Je resort avec la distance 
			//**************************************************************************
			 
			//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
			 ?> <tr> <?php 
			        ?><td><b> <?php echo $fid; ?> </b></td> <?php  
			        ?><td> <?php echo $longitude1Afiche; ?></td> <?php  
			        ?><td> <?php echo $latitude1Afiche; ?></td> <?php  
			        ?><td> <?php echo $longitude2Afiche; ?></td> <?php  
			        ?><td> <?php echo $latitude2Afiche; ?></td> <?php  
			        ?><td> <?php echo $tetaDeg; ?></td> <?php  
			        ?><td> <?php echo $LaDistance; ?></td> <?php 
			 ?> </tr> <?php 

			 //Sauvegarde des données
			 fwrite($FCSV, $fid."; ".$longitude1Afiche."; ".$latitude1Afiche."; ".$longitude2Afiche."; ".$latitude2Afiche."; ".$tetaDeg."; ".$LaDistance."
");

			      }

			fclose($FFID);
			fclose($Fx1);
			fclose($Fx2);
			fclose($Fy1);
			fclose($Fy2);
			fclose($FCSV);
	?></table><?php 

    ?>
		</div>
      </div>

  <h3>
	

</h3>


</body>
</html>


