<?php
 $Servername="Localhost";
$Username="root";
$password="";
$dbname="your_database";

    $conn = new mysqli($Servername, $Username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    $address = $_POST["address"];

    // Insert data into orders table
    $sql = "INSERT INTO orders (name, email, phone, product, quantity, address)
            VALUES ('$name', '$email', '$phone', '$product', '$quantity', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>