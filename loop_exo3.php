

<?php


/*Jeu de la fourchette - Un algo pour trouver un nombre entre 1 et 100 - 8 essais maxi.
     * @loop exo3
     */




function jeufourchette (){

$resultat= rand(1,100);
$i=0;


	do{
		echo "tu peux commencer à jouer, entre un chiffre entre 1 et 100 :   ";
		$saisie=fgets(STDIN);
		if ($saisie>$resultat){
			echo "valeur trop élevée";
		}
		if ($saisie<$resultat){
			echo "valeur trop basse";
		}
		$i++;
	   		

	} while ($saisie != $resultat && $i<8);

	if ($saisie == $resultat){
		echo "bravo";
	}
	else{
		echo "désolé le resultat était $resultat";
	}	


}

jeufourchette();



?>


