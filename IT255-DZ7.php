<?php
$a = $_POST['a'];

function fibonaci($a){
	if($a==1){
		$rezultat=0;
		return $rezultat;
 
    }else if($a ==2){
		$rezultat=1;
		return $rezultat;
 
    }  else {
		$rezultat = (fibonaci($a-1) + fibonaci($a-2));
         return $rezultat;
    }
}
header("Content-type: application/json");
$dz = array (
'rezultat' => fibonaci($a),
);
echo json_encode($dz);


?>