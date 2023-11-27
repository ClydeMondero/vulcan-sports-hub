<?php
    include("conn.php");
    
    $select_query = 'select `product_id`, `product_name`, `product_category`, `product_sport`, `product_image`,`product_price` from `tbproducts` where product_category = "Shoes"';
    $query_result = $conn->query($select_query);

    foreach ($query_result as $row) {
        $image = $row["product_image"];
        $name = $row["product_name"];
        $category = $row["product_category"];
        $sport = $row["product_sport"];
        $price = $row["product_price"];
        
        
        echo '<div class="product">';        
        echo '<img src="../products/' . $image . '" alt="' . $row['product_name'] . '">';
        echo '<div class="product-details">';
        echo '<p class="product-name">'.$name.'</p>';
        echo '<p class="product-tags">'.$category.'</p>';
        echo '<p class="product-tags">'.$sport.'</p>';
        echo '<p>₱'.$price.'</p>';
        echo '</div>';
        echo '</div>';
    }

?>

<style><?php include "../styles/product.css"; ?></style>

<!-- <div class="product">
    <img src="../assets/imgs/shoes/airforce1.jpg" alt="">
    <div class="product-details">
        <p class="product-name">Nike Air Force 1</p>
        <p class="product-tags">Shoes</p>
        <p class="product-tags">Casual</p>
        <p>₱6,195</p>        
    </div>    
</div> -->