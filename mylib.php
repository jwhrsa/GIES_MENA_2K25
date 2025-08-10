<?php 

function loadDict($link)
{	
	$dict = '';
	$fichier = file_get_contents($link);
	$dict = json_decode('{'.$fichier.'}',true);
	return $dict;
}

function __dump($obj)
{
	print '<pre>';
	print_r($obj);
	print '</pre>';
}

function trans($dict,$key)
{

	if($_GET['lang'] == 'en')
		return !empty($dict[$key])?$dict[$key]:$key;
	else 
		return $key;
}

?>