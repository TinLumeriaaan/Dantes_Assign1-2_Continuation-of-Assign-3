<?php

require 'headerassign2.php';
?>

<div class="container">
    <h2>Our Latest Collection (<?php echo $total_products; ?> Items Listed)</h2>
    
    <?php
    echo '<table>';
    ?>
    <thead>
        <tr>
            <th>Photo</th>
            <th>Bag Name / Status</th>
            <th>Category / Stock</th>
            <th>Original Price</th>
            <th>Special Price</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>

    <?php
    //  Foreach Loop (Control Statement 1)
    foreach($bag_data as $item) { 
        
        // Operator
        $discount_amount = $item['price'] * $discount_rate;
        $final_price = $item['price'] - $discount_amount;
        
        // CONDITIONS: If/Elseif/Else  
        $price_message = $currency . number_format($final_price, 2); 
        if ($item['category'] == 'Women') {
            $price_message .= ' (Women\'s Sale!)';
        } elseif ($item['category'] == 'Men') {
            $price_message .= ' (Men\'s Sale!)';
        }

        // CONDITIONS: If/Elseif/Else (Control Statement 2) 
        if ($item['stock'] == 0) {
            $stock_status_text = '<span style="color: red; font-weight: 500;">SOLD OUT</span>';
            $stock_quantity_text = 'Stock: Out of production!';
            $action_button_html = '<span class="cart-action out-btn">Out of Stock</span>';
        } elseif ($item['stock'] <= 2) {
            $stock_status_text = '<span style="color: green; font-weight: 500;">In Stock</span>';
            $stock_quantity_text = '<span style="color: orange; font-weight: bold;">Stock: LOW! (Only ' . $item['stock'] . ')</span>';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        } else {
            $stock_status_text = '<span style="color: green; font-weight: 500;">In Stock</span>';
            $stock_quantity_text = 'Stock: Plenty';
            $action_button_html = '<a href="#" class="cart-action add-btn">Add to Cart</a>';
        }
        
        ?>
        <tr>
            
            <td class="product-img-cell">
                <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>">
            </td>
            
            <td>
                <strong><?php echo $item['name']; ?></strong> <br>
                <?php echo $stock_status_text; ?>
            </td>

            <td>
                <small>Category: <?php echo $item['category']; ?></small><br>
                <?php echo $stock_quantity_text; ?>
            </td>
            
            <td>
                <del><?php echo $currency . number_format($item['price'], 2); ?></del>
            </td>
            
            <td class="discount-price">
                <?php echo $price_message; ?>
            </td>
            
            <td>
                <?php echo $action_button_html; ?>
            </td>
            
        </tr>
    <?php
    } 
    ?>

    </tbody>
    </table>
    
    <center>
        <p style="margin-top: 25px; font-style: italic; color: #5d3f9b;">
            *Check the status column! Item availability (In Stock, Sold Out, Low) is updated automatically.
        </p>
    </center>

<?php

require 'footerassign2.php';
?>