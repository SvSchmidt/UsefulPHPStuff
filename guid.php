<?php

/**
 * Calculates a globally unique identifier (GUID)
 * @return String GUID (e.g. {D3232798-88C4-E335-9AED-67B308BA5CD8})
 */
function guid() {
	if(function_exists("com_create_guid")) return com_create_guid();

	$chars = strtoupper(md5(uniqid(time(),true)));
	return "{".
			substr($chars,0,8)."-".
			substr($chars,8,4)."-".
			substr($chars,12,4)."-".
			substr($chars,16,4)."-".
			substr($chars,20,12).
			"}";

}
 
print guid();

?>	