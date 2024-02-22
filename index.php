<?php
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page</title>
</head>
<body>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #f4f4f4;
        color: #333;
    }
    
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    
    h1 {
        font-size: 3em;
        margin-bottom: 20px;
        color: #333;
    }
    
    p {
        font-size: 1.5em;
        margin-bottom: 40px;
        color: #666;
    }
    
    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1.2em;
        text-decoration: none;
        color: #fff;
        background-color: #3498db; /* Blue button color */
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    
    .button:hover {
        background-color: #2980b9; /* Darker blue on hover */
    }
    
</style>
<div class="container">
    <h1>Welcome to Our Website</h1>

    <p>Laptop Renting System</p>
    <a href="register.php" class="button">Get Started</a>
</div>

</body>
</html>
