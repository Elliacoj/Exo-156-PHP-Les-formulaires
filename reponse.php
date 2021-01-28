<?php
if(isset($_POST['submit'], $_POST['prenom'])) {
    if(($_POST['prenom'] === "James") || ($_POST['prenom'] === "james")) {
        echo "Bond, James Bond";
    }
    else {
        echo "Bonjour $_POST[prenom]";
    }
}