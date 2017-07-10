

<?php



/*Un algo qui calcule le plus grand écart entre deux entiers consecutifs dans un tableau passé en paramètre d entrée.
     * @loop exo2
     */


$arraygap = [6, 8, 16, 18];
$temp = 0;
$entier = ($arraygap[i+1])-($arraygap[i]);


function maxgap($arraygap){

	for($i = 0; $i < count($arraygap); $i++){
		if($entier > $temp){
			$temp = $entier;
		}
	}
}

print_r($entier);


?>


