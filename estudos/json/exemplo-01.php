<?php 

	$pessoas = array(); 

	array_push($pessoas, array('nome'=>'João', 
							   'idade' =>20)); 
	array_push($pessoas, array('nome'=>'Rodrigo', 
							   'idade' =>25
							    )); 

    $p_aux = array('nome'=>'Marcos','idade'=>18);
    array_push($pessoas, $p_aux); 
    /*
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux);
    array_push($pessoas, $p_aux); */

	echo json_encode($pessoas); 
 ?>