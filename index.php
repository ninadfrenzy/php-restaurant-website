<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Our Menu</h1>
    </header>

    <main>
        <div class="menu-items">
            <?php
                // Define static menu items
                $menu_items = array(
                    array("item_name" => "Margherita Pizza", "description" => "Tomato sauce, mozzarella, basil", "price" => 9.99),
                    array("item_name" => "Spaghetti Carbonara", "description" => "Pasta, eggs, pancetta, cheese", "price" => 12.99),
                    array("item_name" => "Caesar Salad", "description" => "Romaine lettuce, croutons, parmesan, Caesar dressing", "price" => 7.99),
                    array("item_name" => "Cheesecake", "description" => "Cream cheese, graham cracker crust, fruit topping", "price" => 5.99)
                );

                // Display menu items
                foreach ($menu_items as $item) {
                    echo "<div class='menu-item'>";
                    echo "<h2>" . $item['item_name'] . "</h2>";
                    echo "<p>" . $item['description'] . "</p>";
                    echo "<span>$" . $item['price'] . "</span>";
                    echo "</div>";
                }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Your Restaurant Name. All rights reserved.</p>
    </footer>
</body>
</html>
