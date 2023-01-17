<?php

if (isset($_GET['username'], $_GET['name'])) {
    echo "username: " . $_GET['username'] . "<br>";
    echo "name:" . $_GET['name'] . "<br>";
     echo "<a href=index.php>Retour a l'accueil</a>";
}
elseif (isset($_POST['username'], $_POST['name'])) {
    echo "username: " . $_POST['username'] . "<br>";
    echo "name:" . $_POST['name'] . "<br>";
    echo "<a href=index.php>Retour a l'accueil</a>";
}
else {
    echo "error";
    echo "<a href=index.php>Retour a l'accueil</a>";
}





