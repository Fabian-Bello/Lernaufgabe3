<?php

$dbName = 'php13';
$dbHost = 'localhost';
$dbUsername = 'root';
$dbUserPassword = 'root';

/**
 * Verbindung zur DB aufbauen
 * @return PDO (Verbindungsobjekt)
 */
function connect() {
    global $dbName, $dbHost, $dbUsername, $dbUserPassword;
    try {
        $conn = new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName, $dbUsername, $dbUserPassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

/**
 * Auslesen aller Daten (als assoziatives Array)
 * @return array
 */
function getAllData()
{
    $db = connect();
    $sql = 'SELECT * FROM user ORDER BY lastname, firstname';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}


/**
 * filter data on firstname, lastname or email
 *
 * @param $filter string
 * @return array
 */
function getFilteredData($filter)
{
    $db = connect();
    $sql = "SELECT * FROM user WHERE firstname LIKE :firstname OR lastname LIKE :lastname OR email LIKE :email ORDER BY lastname, firstname";
    $stmt = $db->prepare($sql);
    $filter = "%$filter%";
    $stmt->bindValue(':firstname', $filter);
    $stmt->bindValue(':lastname', $filter);
    $stmt->bindValue(':email', $filter);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

$data = getAllData();


if (count($data) > 0) {
    echo '<table class="table mt-5">';
    echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>';

    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'No data available.';
}
?>


