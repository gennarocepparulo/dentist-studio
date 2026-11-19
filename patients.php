<?php

require 'config/db.php';

$sql = "
SELECT *
FROM patients
ORDER BY id DESC
";

$stmt = $pdo->query($sql);

$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Patients</title>

    <link
        rel="stylesheet"
        href="index.css">

</head>

<body>

<header>

    <h1>Dentist Studio</h1>

    <p>Patient Archive</p>

</header>

<nav>

    <ul>

        <li>
            <a href="index.php">Home</a>
        </li>

        <li>
            <a href="registration.php">
                New Patient
            </a>
        </li>

        <li>
            <a href="patients.php">
                Patients
            </a>
        </li>

    </ul>

</nav>

<main>

<section>

    <h2>Registered Patients</h2>

    <table>

        <thead>

            <tr>

                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>

            </tr>

        </thead>

        <tbody>

        <?php foreach ($patients as $patient): ?>

            <tr>

                <td>
                    <?= $patient['id']; ?>
                </td>

                <td>
                    <?= htmlspecialchars(
                        $patient['first_name']
                    ); ?>
                </td>

                <td>
                    <?= htmlspecialchars(
                        $patient['last_name']
                    ); ?>
                </td>

                <td>
                    <?= htmlspecialchars(
                        $patient['email']
                    ); ?>
                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</section>

</main>

<footer>

    <p>
        Dentist Studio © 2026
    </p>

</footer>

</body>
</html>