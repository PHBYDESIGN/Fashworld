<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Success</title>

    <link rel="stylesheet" href="../styles/style.css" type="text/css">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Order Status</h1>
    <p>Your order has submitted successfully. Order ID is #<?php echo $_GET['id']; ?></p>

    <a href="../php/home.php" class="button button-accent"><i class="glyphicon glyphicon-menu-left"></i> Back To Site</a>
</div>
</body>
</html>