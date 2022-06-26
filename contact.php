<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `contact` ');

$voornaam = '';
$achternaam = '';
$email = '';
$bericht = '';


//fouten opslaan in errors
$errors = [];

// checken of er gegevens zijn opgestuurd
if($_SERVER['REQUEST_METHOD'] == "POST") {
    //gegevens opslaan
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $tijdstip = date('Y-m-d H:i:s');

    //fouten 

    if(isEmpty($voornaam)) {
        $errors['voornaam'] = 'Vul uw voornaam in aub';
    }

    if(isEmpty($achternaam)) {
        $errors['achternaam'] = 'Vul uw achternaam in aub';
    }

    if(!isValidEmail($email)) {
        $errors['email'] = 'dit is geen geldig email adres';
    }
    if(!hasMinLength($bericht, 5)) {
        $errors['bericht'] = 'Vul minimaal 5 tekens in';
    }

    //print_r($errors);

    if(count($errors) == 0) {
        $sql = "INSERT INTO `contact` (`voornaam`, `achternaam`, `email`, `bericht`, `tijdstip`)
        VALUES (:voornaam, :achternaam, :email, :bericht, :tijdstip);";

    


        $statement = $connection->prepare($sql);
        $params = [
            'voornaam' => $voornaam,
            'achternaam' => $achternaam,
            'email' => $email,
            'bericht' => $bericht,
            'tijdstip' => $tijdstip
    ];

    $statement->execute($params);

    //stuur bezoeker door naar bedankt pagina
    header('Location: bedankt.html');
    exit;

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <title>Contact</title>
</head>
<body>
<div class="container jewellery-details">

<section class="contact">

    <header>
        <h2>Heeft u een vraag over uw bestelling of iets anders, laat het ons weten!</h2>
    </header>

    <form action="contact.php" method="POST">
        <div class="form__field">
            <label for="voornaam">Voornaam</label>
            <input type="text" value="<?php echo $voornaam;?>" id="voornaam" name="voornaam" placeholder="vul uw voornaam in" required>

            <?php if( !empty($errors['voornaam']) ):?>
                <p class="form-error"><?php echo $errors['voornaam']?></p>
            <?php endif;?>

        </div>
        <div class="form__field">
            <label for="achternaam">Achternaam</label>
            <input type="text" value="<?php echo $achternaam;?>" id="achternaam" name="achternaam" placeholder="vul uw achternaam in" required>

            <?php if( !empty($errors['achternaam']) ):?>
                <p class="form-error"><?php echo $errors['achternaam']?></p>
            <?php endif;?>

        </div>
        <div class="form__field">
            <label for="email">E-mail</label>
            <input type="email" value="<?php echo $email;?>" id="email" name="email" placeholder="vul uw email in" required>

            <?php if( !empty($errors['email']) ):?>
                <p class="form-error"><?php echo $errors['email']?></p>
            <?php endif;?>

        </div>
        <div class="form__field">
            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht" placeholder="vul hier uw bericht in" required><?php echo $bericht;?></textarea>

            <?php if( !empty($errors['bericht']) ):?>
                <p class="form-error"><?php echo $errors['bericht']?></p>
            <?php endif;?>

        </div>
        <button type="submit" class="form__button">Opsturen</button>
    </form>
    <a href="index.php">Terug naar het overzicht</a>

</section>
</div>
</body>
</html>