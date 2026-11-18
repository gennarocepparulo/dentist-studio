// Recupero degli elementi dal DOM

const form = document.getElementById("patientForm");

const errorBox = document.getElementById("errorBox");

const firstName = document.getElementById("firstName");

const lastName = document.getElementById("lastName");

const email = document.getElementById("email");

// Esempio di querySelector()

const submitButton =
    document.querySelector(
        'button[type="submit"]'
    );


// Intercetta l'invio del form

form.addEventListener(
    "submit",
    function (event) {

        let errors = [];

        // Pulizia dati

        const firstNameValue =
            firstName.value.trim();

        const lastNameValue =
            lastName.value.trim();

        const emailValue =
            email.value.trim();

        // Validazione nome

        if (firstNameValue.length < 2) {

            errors.push(
                "First name must contain at least 2 characters."
            );

        }

        // Validazione cognome

        if (lastNameValue.length < 2) {

            errors.push(
                "Last name must contain at least 2 characters."
            );

        }

        // Validazione email

        if (
            emailValue === "" ||
            !emailValue.includes("@")
        ) {

            errors.push(
                "Please enter a valid email address."
            );

        }

        // Se esistono errori

        if (errors.length > 0) {

            // Blocca l'invio al server

            event.preventDefault();

            // Mostra gli errori

            errorBox.innerHTML =
                errors.join("<br>");

        } else {

            // Pulisce il box errori

            errorBox.textContent = "";

        }

    }
);


// Feedback visuale sul pulsante

submitButton.addEventListener(
    "mouseover",
    function () {

        submitButton.textContent =
            "Ready to save";

    }
);

submitButton.addEventListener(
    "mouseout",
    function () {

        submitButton.textContent =
            "Save Patient";

    }
);