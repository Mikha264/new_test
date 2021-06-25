<?php
//--https://www.phpflow.com/php/datatables-example-server-side-processing-with-php/
//--https://www.phpflow.com/demo/datatable/
$data = array(
	array('Name'=>'parvez', 'Empid'=>11, 'Salary'=>101),
	array('Name'=>'alam', 'Empid'=>1, 'Salary'=>102),
	array('Name'=>'phpflow', 'Empid'=>21, 'Salary'=>103)							
	);
             

	$results = array(
			"sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
          "aaData"=>$data);
/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
}*/

echo json_encode($results);
?>