<?php
function renderIndexItem($data_array){
    $result = "";

    foreach ($data_array as $itemData) {
        $result.="<div class='col-md-4 product-men'>
                    <div class='men-pro-item simpleCart_shelfItem'>
                        <div class='men-thumb-item'>
                            <img src='{$itemData['image']}' alt=''>
                            <div class='men-cart-pro'>
                                <div class='inner-men-cart-pro'>
                                    <a href='index.php?control=homeproductdetail&id={$itemData['id']}' class='link-product-add-cart'>Quick View</a>
                                </div>
                            </div>
                            <span class='product-new-top'>New</span>
                        </div>
                        <div class='item-info-product '>
                            <h4>
                            <p>#{$itemData['id']}</p>
                                <a href='index.php?control=homeproductdetail&id={$itemData['id']}'>{$itemData['name']}, {$itemData['weight']}g</a>
                            </h4>
                            <div class='info-product-price'>
                                <span class='item_price'>$ {$itemData['reducePrice']}</span>
                                <del>$ {$itemData['originalPrice']}</del>
                            </div>
                        </div>
                    </div>
                </div>";
    }
	
    return $result;
}
?>

