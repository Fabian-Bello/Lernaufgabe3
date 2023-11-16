


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lernaufgabe3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://www.cooltrainers.at/wp-content/uploads/2019/06/logo-imst.jpg">
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</head>

<body>

<div class="container-fluid mt-3 ">
    <h1>Benutzerdaten anzeigen:</h1>
        <div class="row">
            <div class="col-sm-4 mb-2 col-auto">
                <input type="text" class="form-control" placeholder="Suchen..." id="filter"">
            </div>
            <div class="col-auto mb-2 ">
                <button class="btn btn-primary btn-block" type="button" onclick="filterRows()">Suchen</button>
            </div>
            <div class="col-auto mb-2">
                <button class="btn btn-secondary btn-block" type="button" onclick="clearSearch()">Löschen</button>
            </div>
        </div>




</div>
<?php


include "lib/func.inc.php";

?>

</body>
</html>
