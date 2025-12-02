<?php

require 'headerassign3.php';

function get_reorder_message($stock)
{
    return ($stock < 10) ? 'Yes' : 'No'; 
}


function get_total_value($price, $quantity)
{
    return $price * $quantity;
}


function get_tax_due($price, $quantity, $tax_rate_percent)
{
    $total_value = get_total_value($price, $quantity); 

    // Calculation: Value * (Tax Rate / 100).
    return $total_value * ($tax_rate_percent / 100);
}



//Product Inventory Data 


// Data Array 
$inventory_products = [
    'Classic Leather Backpack' => ['price' => 1299.00, 'stock' => 12],
    'Elegant Tote Bag'        => ['price' => 899.00, 'stock' => 0],
    'Travel Duffel Bag'       => ['price' => 1599.00, 'stock' => 5],
    'Crossbody Shoulder Bag'  => ['price' => 749.50, 'stock' => 1],
    'Minimalist Sling Bag'    => ['price' => 550.00, 'stock' => 25], 
    'Vintage Canvas Satchel'  => ['price' => 950.00, 'stock' => 8],  
    'Laptop Messenger Bag'    => ['price' => 1899.00, 'stock' => 15], 
];


?>