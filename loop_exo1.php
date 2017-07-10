

<?php



/*Un algo qui affiche le début et la fin d'une plage de nombre 
// Les nombres doivent être affichés sous forme de liste
// Les nombres paires sont en bleu
// Les nombres impaires sont en orange
// Les nombres qui sont des carrés parfaits sont en gras

     * @loop exo1
     */






nbre(1,10);



function nbre($nbre1,$nbre2){
	while($i<$nbre2){
		$i++;

		if (fmod(sqrt($i),1)==0){
			echo "<strong>";
		}
		if ($i % 2 == 0){
		echo "<font color='blue'>$i</font></br>";
		}
		elseif ($i % 2 == 1){
			echo "<font color='orange'>$i</font></br>";
		}

		if (fmod(sqrt($i),1)==0){
			echo "</strong>"."\n";
		}

	}
}
	
	
?>