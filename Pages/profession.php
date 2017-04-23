<?php

// include the database
function getProfession()
{
 global $obj;	
$obj->query("SELECT distinct profession FROM artisan ");
$data = array();
while($row = $obj->fetch())
{
   $data[] = $row;

}

	return $data;
}

?>