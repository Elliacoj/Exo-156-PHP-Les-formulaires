<?php
if(isset($_POST['submit'], $_POST['prenom'])) {
    $prenom = strip_tags(trim($_POST['prenom']));
    if(($prenom === "James") || ($prenom === "james")) {
        echo "Bond, James Bond";
    }
    else {
        echo "Bonjour $prenom";
    }
}