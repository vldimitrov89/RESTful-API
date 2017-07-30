<?php 

function getUrl($requestUri)
{
	$uri = trim(trim(parse_url($requestUri, PHP_URL_PATH), "/"));


	$uriArr = explode("/", $uri);
	
	$uriResult = [];

	$uriResult['uri'] = $uriArr[0] . "/" . "list";
	$uriResult['getValue'] = NULL;

	if ($uriArr[0] == "jobs" && $uriArr[1] != "list") {
		$uriResult['uri'] = $uriArr[0];
		$uriResult['getValue'] = $uriArr[1];

	} 

	if ($uriArr[0] == "candidates" && $uriArr[1] != "list") {
		$uriResult['uri'] = $uriArr[0] . "/" . $uriArr[1];
		$uriResult['getValue'] = $uriArr[2];
	} 


	return $uriResult;
}