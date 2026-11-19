<?php

require 'config/db.php';

/*
|--------------------------------------------------------------------------
| Recupero dati
|--------------------------------------------------------------------------
*/

$first_name = trim($_POST['first_name']);
$last_name  = trim($_POST['last_name']);
$email      = trim($_POST['email']);
$phone      = trim($_POST['phone']);
$birth_date = $_POST['birth_date'];
$notes      = trim($_POST['notes']);

/*
|--------------------------------------------------------------------------
| Validazione
|--------------------------------------------------------------------------
*/

$errors = [];

if (empty($first_name)) {
    $errors[] = "First name is required.";
}

if (empty($last_name)) {
    $errors[] = "Last name is required.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

/*
|--------------------------------------------------------------------------
| Eventuali errori
|--------------------------------------------------------------------------
*/

if (!empty($errors)) {

    echo "<h2>Validation Errors</h2>";

    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }

    echo '<p><a href="registration.php">Back</a></p>';

    exit;
}

/*
|--------------------------------------------------------------------------
| Salvataggio Database
|--------------------------------------------------------------------------
*/

$sql = "
INSERT INTO patients
(
    first_name,
    last_name,
    email,
    phone,
    birth_date,
    notes
)
VALUES
(
    ?, ?, ?, ?, ?, ?
)
";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    $first_name,
    $last_name,
    $email,
    $phone,
    $birth_date,
    $notes
]);

/*
|--------------------------------------------------------------------------
| Redirect
|--------------------------------------------------------------------------
*/

header("Location: patients.php");
exit;