<?php
echo 'zmienna srodowiskowa: ' . $_ENV['MY_HOST'] .' <br />';

echo '<pre>';
var_dump($_ENV);
echo '</pre>';

$servername = "database";
$username = "root";
$password = "test1";

//// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br />";

$query = "SELECT name FROM db5.Person;";

if ($result = $conn->query($query)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
        printf ("%s\n", $row[0]);
    }

    /* free result set */
    $result->close();
}

/* close connection */
$conn->close();

$host = 'db';
$user = 'user';
$password = 'test';
$database = 'myDb';

// Connexion et sélection de la base
//$conn = mysqli_connect('db', 'user', 'test', 'myDb');
//
//
//$query = 'SELECT * From Person';
//$result = mysqli_query($conn, $query);
//
//echo '<table class="table table-striped">';
//echo '<thead><tr><th></th><th>id</th><th>name</th></tr></thead>';
//while($value = $result->fetch_array(MYSQLI_ASSOC)){
//    echo '<tr>';
//    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
//    foreach($value as $element){
//        echo '<td>' . $element . '</td>';
//    }
//
//    echo '</tr>';
//}
//echo '</table>';
//
///* Libération du jeu de résultats */
//$result->close();
//
//mysqli_close($conn);

