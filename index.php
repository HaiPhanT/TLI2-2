<?php

$control = "home";
$renderView = "";
$title = "";
$leftbar = "";
$id = "";

if(isset($_GET["control"]) == true){
	$control = $_GET["control"];
}

if(isset($_GET["id"]) == true){
	$id = $_GET["id"];
}

switch ($control) {
	case "productlist":
		include("sessiondata/datalist.php");
		include("sessiondata/leftbar.php");
		$renderView = $productdata;
		$title = "Our Products List";
		$leftbar = $leftbar;
		break;
	case "productdetail":
		include("sessiondata/datadetail.php");
		$productdata = include("data/products-data.php");
		$renderView = detaildata($productdata, $id);
		$title = "Single Page";
		break;
	case "homeproductdetail":
		include("sessiondata/datadetail.php");
		$homedata = include("data/index-data.php");
		$mergeData = array_merge($homedata["data_nuts"], $homedata["data_oils"], $homedata["data_noodles"]);
		$renderView = detaildata($mergeData, $id);
		$title = "Single Page";
		break;
	case "home":
	default:
		include("sessiondata/datalist.php");
		include("sessiondata/leftbar.php");
		$renderView = $homedata;
		$title = "Our Top Products";
		$leftbar = $leftbar;
		break;
}

include("template/layout1.php");

?>