<?php 

include 'functions/render-index.php';
$datahome = include 'data/index-data.php';

$renderNuts = renderIndexItem($datahome["data_nuts"]);
$renderOils = renderIndexItem($datahome["data_oils"]);
$renderNoodles = renderIndexItem($datahome["data_noodles"]);

$homedata = 
"<div class='agileinfo-ads-display col-md-9'>
    <div class='wrapper'>
        <div class='product-sec1'>
            <h3 class='heading-tittle'>Nuts</h3>
                $renderNuts
            <div class='clearfix'></div>
        </div>
        <div class='product-sec1'>
            <h3 class='heading-tittle'>Oils</h3>
            	$renderOils
            <div class='clearfix'></div>
        </div>
        <div class='product-sec1'>
            <h3 class='heading-tittle'>Pasta & Noodles</h3>
            	$renderNoodles
            <div class='clearfix'></div>
        </div>
    </div>
</div>";

include "./functions/render-product.php";
$productdata = include "./data/products-data.php";
$item1 = renderProductItem($productdata[0]);
$item2 = renderProductItem($productdata[1]);
$item3 = renderProductItem($productdata[2]);
$item4 = renderProductItem($productdata[3]);
$item5 = renderProductItem($productdata[4]);
$item6 = renderProductItem($productdata[5]);
$item7 = renderProductItem($productdata[6]);
$item8 = renderProductItem($productdata[7]);
$item9 = renderProductItem($productdata[8]);
$item10 = renderProductItem($productdata[9]);
$item11 = renderProductItem($productdata[10]);
$item12 = renderProductItem($productdata[11]);

$productdata =
"
<div class='agileinfo-ads-display col-md-9 w3l-rightpro'>
    <div class='wrapper'>
        <div class='product-sec1'>
            $item1
            $item2
            $item3
            <div class='clearfix'></div>
        </div>
        <div class='product-sec1'>
            $item4
            $item5
            $item6
            <div class='clearfix'></div>
        </div>
        <div class='product-sec1'>
            $item7
            $item8
            $item9
            <div class='clearfix'></div>
        </div>
        <div class='product-sec1'>
            $item10
            $item11
            $item12
            <div class='clearfix'></div>
        </div>
    </div>
</div>
";

?>