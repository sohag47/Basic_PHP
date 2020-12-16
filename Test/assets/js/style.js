const form = document.querySelector("form");
const passwordInput = document.querySelector("input#current-password");
const signinButton = document.querySelector("button#signin");
const togglePasswordButton = document.querySelector("button#toggle-password");

togglePasswordButton.addEventListener("click", togglePassword);

function togglePassword() {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePasswordButton.textContent = "Hide password";
    togglePasswordButton.setAttribute("aria-label", "Hide password.");
  } else {
    passwordInput.type = "password";
    togglePasswordButton.textContent = "Show password";
    togglePasswordButton.setAttribute(
      "aria-label",
      "Show password as plain text. " +
        "Warning: this will display your password on the screen."
    );
  }
}

passwordInput.addEventListener("input", validatePassword);

// A production site would use more stringent password testing on the client
// and would sanitize and validate passwords on the back end.
function validatePassword() {
  let message = "";
  if (!/.{8,}/.test(passwordInput.value)) {
    message = "At least eight characters. ";
  }
  if (!/.*[A-Z].*/.test(passwordInput.value)) {
    message += "\nAt least one uppercase letter. ";
  }
  if (!/.*[a-z].*/.test(passwordInput.value)) {
    message += "\nAt least one lowercase letter.";
  }
  passwordInput.setCustomValidity(message);
}

form.addEventListener("submit", handleFormSubmit);

function handleFormSubmit(event) {
  console.log("submit");
  if (form.checkValidity() === false) {
    console.log("not valid");
    event.preventDefault();
  } else {
    // On a production site do form submission.
    alert("Signing in!");
    signinButton.disabled = "true";
    event.preventDefault();
  }
}
