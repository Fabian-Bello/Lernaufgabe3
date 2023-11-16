<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://www.cooltrainers.at/wp-content/uploads/2019/06/logo-imst.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Benutzerdetails</title>
</head>

<body>

<?php
include('lib/db.data.php');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $userDetails = getDataPerId($userId);

    echo '<div class="container mt-5">';
    echo '<h1 class="display-4">Benutzerdetails</h1>';
    echo '<p class="lead">ID: ' . $userDetails['id'] . '</p>';
    echo '<p class="lead">Name: ' . $userDetails['firstname'] . ' ' . $userDetails['lastname'] . '</p>';
    echo '<p class="lead">E-Mail: ' . $userDetails['email'] . '</p>';
    echo '<p class="lead">Geburtsdatum: ' . (new DateTime($userDetails['birthdate']))->format('d.m.Y') . '</p>';
    echo '</div>';

} else {
    echo '<div class="container mt-5">';
    echo '<p class="lead">Den Kollegen gibt es nicht.</p>';
    echo '</div>';
}
?>
<div class="container mt-5"
<p><a href="index.php" class="link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">Mehr Benutzer</a></p>
</div>
</body>

</html>
