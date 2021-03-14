<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once('Account.php');
    require_once('Driver.php');
    require_once('Car.php');
    require_once('UberX.php');
    require_once('UberPool.php');

    $driver = new Driver("David Potes", "1006116326");
    $uberX = new UberX("VRC81D", $driver, "Chevrolet", "Camaro RS");

    $uberX->printDataCar();
    
    
    ?>
</body>
</html>