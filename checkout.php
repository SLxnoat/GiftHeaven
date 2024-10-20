<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "giftheaven_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the cart data from POST request
$data = file_get_contents("php://input");
$request = json_decode($data, true);

if (isset($request['cart_data'])) {
    $cartData = $request['cart_data'];
    $userId = 1; // Assuming user ID is 1 for now

    // Loop through the cart data and insert into the database
    foreach ($cartData as $product) {
        $productId = $product['id'];
        $quantity = $product['quantity'];
        $totalPrice = $product['price'] * $quantity;

        // Insert into orders table
        $sql = "INSERT INTO orders (user_id, product_id, quantity, total_price) 
                VALUES ('$userId', '$productId', '$quantity', '$totalPrice')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $conn->error;
            exit;
        }
    }

    echo "Order placed successfully!";
} else {
    echo "No cart data found!";
}

$conn->close();
?>
