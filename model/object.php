<?php


function getEsercenti() {
    $db = require __DIR__ . ('/../database/db.php');
    $q = "SELECT id_amministratore, nome, email, data  FROM amministratore";
    $r = @mysqli_query($db, $q);
    return $r;
}

function getQuestionari() {
    $db = require __DIR__ . ('/../database/db.php');
    $q = "SELECT id_questionario, id_amministratore, nome, punti, metodo_invio FROM questionario";
    $r = @mysqli_query($db, $q);
    return $r;
}

function getInfoDashboard() {
    $db = require __DIR__ . ('/../database/db.php');
    $q = "SELECT q.id_questionario, q.id_amministratore, a.nome as admin FROM amministratore a, questionario q
              WHERE a.id_amministratore = q.id_amministratore";
    $q2 = "SELECT id_amministratore, nome FROM amministratore";
    $r = @mysqli_query($db, $q);
    $r2 = @mysqli_query($db, $q2);
    $array = array($r, $r2);
    return $array;
}

function postAddEsercente() {
    $db = require __DIR__ . ('/../database/db.php');
    $jsonObject = json_decode($_POST['esercente']);

    $email = $jsonObject->{'email'};
    $password = $jsonObject->{'password'};
    $nome = $jsonObject->{'nome'};
    $percorsoLogo = $jsonObject->{'percorso_logo'};

    $q = "INSERT INTO `amministratore` (email, password, nome, percorso_logo) values ('$email', '$password', '$nome', '$percorsoLogo')";
    $r = @mysqli_query($db, $q);
    return $r;
}
?>