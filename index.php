<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Define menu items
$menu_items = [
    ["id" => 1, "item_name" => "Margherita Pizza", "description" => "Tomato sauce, mozzarella, basil", "price" => 500], // INR
    ["id" => 2, "item_name" => "Spaghetti Carbonara", "description" => "Pasta, eggs, pancetta, cheese", "price" => 800], // INR
    ["id" => 3, "item_name" => "Caesar Salad", "description" => "Romaine lettuce, croutons, parmesan, Caesar dressing", "price" => 400], // INR
    ["id" => 4, "item_name" => "Cheesecake", "description" => "Cream cheese, graham cracker crust, fruit topping", "price" => 350], // INR
    ["id" => 5, "item_name" => "Paneer Tikka", "description" => "Marinated cottage cheese cubes cooked in tandoor", "price" => 300], // INR
    ["id" => 6, "item_name" => "Butter Chicken", "description" => "Chicken cooked in a rich buttery tomato sauce", "price" => 600], // INR
    ["id" => 7, "item_name" => "Masala Dosa", "description" => "Crispy rice crepe filled with spiced potato filling", "price" => 150], // INR
    ["id" => 8, "item_name" => "Chole Bhature", "description" => "Spicy chickpea curry served with fried bread", "price" => 200], // INR
    ["id" => 9, "item_name" => "Samosa", "description" => "Deep-fried pastry filled with spiced potato", "price" => 20], // INR

];

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Return the menu items as JSON
    echo json_encode($menu_items);
} else {
    // Method not allowed
    http_response_code(405);
    echo json_encode(["error" => "Method Not Allowed"]);
}
?>
