<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>New Patient Registration</title>

    <link
        rel="stylesheet"
        href="index.css">

</head>

<body>

<header>

    <h1>Dentist Studio</h1>

    <p>
        Patient Registration Form
    </p>

</header>

<nav>

    <ul>

        <li>
            <a href="index.php">
                Home
            </a>
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

        <li>
            <a href="appointments.php">
                Appointments
            </a>
        </li>

    </ul>

</nav>

<main>

    <section>

        <h2>
            Register New Patient
        </h2>

        <p>
            Complete the form below to add a new patient to the system.
        </p>

    </section>

    <section>

        <div
            id="errorBox"
            class="error">
        </div>

        <form
            id="patientForm"
            action="save_patient.php"
            method="POST">

            <label for="firstName">
                First Name
            </label>

            <input
                type="text"
                id="firstName"
                name="first_name"
                required>

            <label for="lastName">
                Last Name
            </label>

            <input
                type="text"
                id="lastName"
                name="last_name"
                required>

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                required>

            <label for="phone">
                Phone Number
            </label>

            <input
                type="tel"
                id="phone"
                name="phone">

            <label for="birthDate">
                Date of Birth
            </label>

            <input
                type="date"
                id="birthDate"
                name="birth_date">

            <label for="notes">
                Clinical Notes
            </label>

            <textarea
                id="notes"
                name="notes"
                rows="5">
            </textarea>

            <button type="submit">

                Save Patient

            </button>

        </form>

    </section>

</main>

<footer>

    <p>
        Dentist Studio © 2026
    </p>

</footer>

<script src="js/main.js"></script>

</body>

</html>