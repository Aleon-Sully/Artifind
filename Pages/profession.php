<?php

/*
 * This file is part of the ArtiFind folder
 *
 * (c) Delco developpers
 * 	@ author Cynthia Gouanfo
 *
 */

/*
 * This function returns the distinct professions in the artisan database
 *	@return $data profession
 */
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