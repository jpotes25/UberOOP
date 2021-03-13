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
    require_once('Car.php');
    require_once('UberX.php');
    require_once('UberPool.php');

    $uberX = new UberX('VRC81D', new Account('Javier Potes', '93355322'), "Yahama", "YBR125");
    $car = new Car('VRC81D', new Account('David Potes', '1006116326'));
    $uberPool = new UberPool('QWERTY', new Account('Javier David', '1006116326'), "Nissan", "GTR");

    
    $car->printDataCar();
    $uberX->printDataCar();
    $uberPool->printDataCar();
    
    
    ?>
</body>
</html>