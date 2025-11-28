<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syris Bag Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f0ff;
        }
        
        header {
            background-color: #9b7ec4;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
        }
        
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }
        
        .product-card {
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 8px rgba(155, 126, 196, 0.2);
        }
        
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            background-color: #e8dff5;
        }
        
        .product-card h3 {
            color: #7952b3;
            margin: 10px 0;
        }
        
        .product-card p {
            color: #666;
            font-size: 14px;
        }
        
        .price {
            color: #9b7ec4;
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }
        
        .category {
            display: inline-block;
            background-color: #e8dff5;
            color: #7952b3;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
$products = array(
    array(
        "name" => "Classic Leather Backpack",
        "price" => P1399,
        "category" => "Men",
        "description" => "Durable leather backpack perfect for daily use"
    ),
    array(
        "name" => "Elegant Tote Bag",
        "price" => P899,
        "category" => "Women",
        "description" => "Stylish tote bag for work or casual outings"
    ),
    array(
        "name" => "Travel Duffel Bag",
        "price" => P1599,
        "category" => "Men",
        "description" => "Spacious bag ideal for weekend trips"
    ),
    array(
        "name" => "Crossbody Shoulder Bag",
        "price" => P749,
        "category" => "Women",
        "description" => "Compact and trendy crossbody bag"
    ),
    array(
        "name" => "Laptop Messenger Bag",
        "price" => P1099,
        "category" => "Men",
        "description" => "Professional messenger bag with laptop compartment"
    ),
    array(
        "name" => "Mini Fashion Handbag",
        "price" => P650,
        "category" => "Women",
        "description" => "Cute mini handbag for evening occasions"
    )
);
?>

<header>
    <h1>Bag store</h1>
    <p>Find a perfect bag for your style</p>
</header>

<div class="container">
    <h2 style="color: #7952b3;">Our Collection</h2>
    
    <div class="products">
        <?php
        foreach($products as $product) {
            echo '<div class="product-card">';
            echo '<img src="https://via.placeholder.com/300x200/e8dff5/7952b3?text=' . urlencode($product['name']) . '" alt="' . $product['name'] . '">';
            echo '<span class="category">' . $product['category'] . '</span>';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<div class="price">₱' . number_format($product['price'], 2) . '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>