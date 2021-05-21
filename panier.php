<?php 
include('function/total.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon panier</title>
</head>
<body>
    <p>20 €HT | qté 3 | <?php echo totalPrice (20, 20, 3); ?></p>
    <p>50 €HT | qté 5 | <?php echo totalPrice (50, 20, 5); ?></p>
</body>
</html>
<?php

