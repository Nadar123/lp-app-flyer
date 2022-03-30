jQuery(window).on("load", function($) {
    handleFormSubmit();
});

/**
 * Handle form validation
 */
function handleFormSubmit() {
    const form = document.getElementById("lp_form");
    const firstName = document.getElementById("first_name");
    const lastName = document.getElementById("last_name");
    const email = document.getElementById("email");
    const companyOption = document.getElementById("company_option");
    let formValidation = true;
    /**
     * Handle form submit event
     */
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        validateInputs();
        if (formValidation) {
            alert("Successful form submission");
        }
    });

    /**
     * Handle set error
     */
    const setError = (element, message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector(".error");

        errorDisplay.innerText = message;
        inputControl.classList.add("error");
        inputControl.classList.remove("success");
        formValidation = false;
    };
    /**
     * Handle set success
     */
    const setSuccess = (element) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector(".error");

        errorDisplay.innerText = "";
        inputControl.classList.add("success");
        inputControl.classList.remove("error");
    };
    /**
     * Email validation
     */
    const isValidEmail = (email) => {
        const re =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    };

    const validateInputs = () => {
        formValidation = true;
        const firstNameValue = firstName.value.trim();
        const lastNameValue = lastName.value.trim();
        const emailValue = email.value.trim();
        const companyOptionValue = companyOption.value;

        if (firstNameValue === "") {
            setError(firstName, "First name is required");
        } else {
            setSuccess(firstName);
        }

        if (lastNameValue === "") {
            setError(lastName, "Last name is required");
        } else {
            setSuccess(lastName);
        }

        if (emailValue === "") {
            setError(email, "Email is required");
        } else if (!isValidEmail(emailValue)) {
            setError(email, "Provide a valid email address");
        } else {
            setSuccess(email);
        }

        if (companyOptionValue === "") {
            setError(companyOption, "Select an option");
        } else {
            setSuccess(companyOption);
        }
    };
}