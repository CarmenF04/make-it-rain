<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `jewellery` ');



if( !isset($_GET['id'])) {
    echo "De ID is niet gezet";
    exit;
}

$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal";
    exit;
}



$id = $_GET['id'];
filter_var($id, FILTER_VALIDATE_INT);

$statement = $connection->prepare('SELECT * FROM `jewellery` WHERE id=?');

$params = [$id];
$statement->execute($params);
$jewellery = $statement->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/details.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Details</title>
</head>

<body>
    <main>
    <ul class="details">
        <li class="details__detail">
            <figure class="details__figure">
            <img src="/img/<?php echo $jewellery['foto'];?>" alt="" class="details__img">
            </figure>

            <section class="details__body">
                <button class="return__button"><a href="index.php">Terug</a></button>
                <h2 class="details__h2"><?php echo $jewellery['titel'];?></h2>
                <h3 class="details__h3"><?php echo $jewellery['prijs'];?></h3>
                <div class="details__stars">★★★★★</div>
                <button class="details__button">Add to Cart</button>
            </section>

        </li>
    </main>
</body>

</html>