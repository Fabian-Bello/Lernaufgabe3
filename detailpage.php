<?php
include('lib/db.data.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user = getDataPerId($_GET['id']);

    if ($user) {
        $userFullName = $user['firstname'] . ' ' . $user['lastname'];
        $userEmail = $user['email'];
        $userBirthdate = date('d.m.Y', strtotime($user['birthdate']));
        $userPhone = $user['phone'];
        $userStreet = $user['street'];
    } else {
        echo 'Benutzer nicht gefunden.';
        exit;
    }
} else {
    echo 'Ungültige Anfrage.';
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Benutzerdetails</title>
</head>
<body>
<div class="container">
    <h1>Benutzerdetails</h1>

    <p><strong>Name:</strong> <?php echo $userFullName; ?></p>
    <p><strong>E-Mail:</strong> <?php echo $userEmail; ?></p>
    <p><strong>Geburtsdatum:</strong> <?php echo $userBirthdate; ?></p>
    <p><strong>Telefon:</strong> <?php echo $userPhone; ?></p>
    <p><strong>Straße:</strong> <?php echo $userStreet; ?></p>

    <a href="index.php">Backt to the lobby my friend</a>
</div>
</body>
</html>
