<?php
include('db.data.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['filter']) && !empty($_POST['filter'])) {
        $filter = $_POST['filter'];
        $users = getFilteredData($filter);
    } else {
        $users = getAllData();
    }
} else {
    $users = getAllData();
}
if (!empty($users)) {


    echo '<div  class="container-fluid">';
    echo '<table class="table table-striped mt-5">';
    echo '<tr class="table-secondary"><th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>E-Mail</th>';
    echo '<th>Geburtsdatum</th>';
    echo '<th>Telefon</th>';
    echo '</tr>';

    foreach ($users as $user) {
        echo '<tr class="userRow">';
        echo '<td><a href="detailpage.php?id=' . $user['id'] . '">' . $user['id'] . '</a></td>';
        echo '<td>' . $user['firstname'] . ' ' . $user['lastname'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '<td>' . (new DateTime($user['birthdate']))->format('d.m.Y') .'</td>';
        echo '<td>' . $user['phone'] . '</td>';
        echo '</tr>';


    }

    echo '</table>';
    echo '</div>';
} else {
    echo '<p>Diese nix da</p>';
}
?>