<?php 

include("functions/render-product-detail.php");

function detaildata($dataArr, $id){
	$result = "";
	foreach ($dataArr as $data) {
		if($data["id"] === $id){
			$result = renderProductDetail($data);
		}
	}
	return $result;
}

?>