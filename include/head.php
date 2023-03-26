<?php
//Check for login

include "connection.php";

if ($_SESSION['signupFailed'] == 'true') {
    echo "<script>alert('Account already exists.');</script>";
    $_SESSION['failedLogin'] = 'false';
}

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header('Location: auth.php');
    die();
}

//Check for post success
if (isset($_SESSION['posted']) && $_SESSION['posted'] == true) {
    unset($_SESSION['posted']);
    echo "<script>window.addEventListener(\"DOMContentLoaded\", (event) => {alert('Post successfully created.');});</script>";
}

if (isset($_SESSION['posted']) && $_SESSION['posted'] == false) {
    unset($_SESSION['posted']);
    echo "<script>window.addEventListener(\"DOMContentLoaded\", (event) => {alert('Post could not be created.');});</script>";
}

?>

<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="apple-touch-icon" href="res/favicon/Logo.svg" sizes="180x180" />

<!-- Favicons -->
<link rel="icon" href="res/favicon/Logo.ico">

<!-- Bootstrap CSS -->
<link href="res/bootstrap/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="res/css/base.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="res/js/sidebars.js"></script>