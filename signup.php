<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="signup-styles.css">
    <script>
        // Function to show the correct form based on the selected role
        function showForm(event) {
            const role = event.target.value;
            const forms = document.querySelectorAll('.role-form');
            forms.forEach(form => form.style.display = 'none');
            if (role) {
                const formElement = document.getElementById(`${role}-form`);
                if (formElement) {
                    formElement.style.display = 'block';
                } else {
                    console.error(`Form With ID ${role}-form Not Found.`);
                }
            }
        }

        // Function to validate form fields
        function validateForm(form) {
            const inputs = form.querySelectorAll('input');
            let isValid = true;
            let errorMessage = '';

            inputs.forEach(input => {
                if (input.type !== 'file' && !input.value.trim()) {
                    isValid = false;
                    errorMessage += `Please Fill Out the ${input.previousElementSibling.textContent.toLowerCase()} Field.\n`;
                } else if (input.type === 'file' && !input.files.length) {
                    isValid = false;
                    errorMessage += 'Please Upload Your CV.\n';
                }
            });

            if (!isValid) {
                alert(errorMessage);
            }

            return isValid;
        }

        // Function to handle form submission
        function handleFormSubmission(event) {
            event.preventDefault(); // Prevents default form submission

            const role = document.getElementById('role').value;
            if (!role) {
                alert('Please select a role.');
                return;
            }

            const visibleForm = document.getElementById(`${role}-form`);
            if (!visibleForm) {
                console.error('Form not found.');
                alert('Form not found.');
                return;
            }

            if (validateForm(visibleForm)) {
                const formData = new FormData();
                const inputs = visibleForm.querySelectorAll('input');
                inputs.forEach(input => {
                    if (input.type === 'file') {
                        formData.append(input.name, input.files[0]);
                    } else {
                        formData.append(input.name, input.value);
                    }
                });

                // Log form data or send it to a server
                for (let [key, value] of formData.entries()) {
                    console.log(`${key}: ${value}`);
                }
                alert('Form Submitted Successfully!');
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('signup-form');
            if (form) {
                form.addEventListener('submit', handleFormSubmission);
            } else {
                console.error('Signup Form Not Found.');
            }
        });
    </script>
</head>

<body>
    <div class="signup-section">
        <div class="signup-container">
            <h2>Sign Up</h2>
            <div class="role-select">
                <label for="role">Select Your Role</label>
                <select id="role" name="role" onchange="showForm(event)">
                    <option value="">--Select--</option>
                    <option value="buyer">Buyer</option>
                    <option value="landowner">Land Owner</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="worker">Worker</option>
                </select>
            </div>

            <form id="signup-form" class="signup-form">
                <!-- Buyer Form -->
                <div id="buyer-form" class="role-form" style="display:none;">
                    <div class="form-group">
                        <label for="buyer-name">Name</label>
                        <input type="text" id="buyer-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="buyer-contact">Contact Number</label>
                        <input type="text" id="buyer-contact" name="contact">
                    </div>
                    <div class="form-group">
                        <label for="buyer-email">Email</label>
                        <input type="email" id="buyer-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="buyer-password">Password</label>
                        <input type="password" id="buyer-password" name="password">
                    </div>
                    <button type="submit" class="signup-button">Sign Up</button>
                </div>

                <!-- Land Owner Form -->
                <div id="landowner-form" class="role-form" style="display:none;">
                    <div class="form-group">
                        <label for="landowner-name">Name</label>
                        <input type="text" id="landowner-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="landowner-contact">Contact Number</label>
                        <input type="text" id="landowner-contact" name="contact">
                    </div>
                    <div class="form-group">
                        <label for="landowner-email">Email</label>
                        <input type="email" id="landowner-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="landowner-password">Password</label>
                        <input type="password" id="landowner-password" name="password">
                    </div>
                    <button type="submit" class="signup-button">Sign Up</button>
                </div>

                <!-- Supervisor Form -->
                <div id="supervisor-form" class="role-form" style="display:none;">
                    <div class="form-group">
                        <label for="supervisor-name">Name</label>
                        <input type="text" id="supervisor-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="supervisor-experience">Previous Experiences</label>
                        <input type="text" id="supervisor-experience" name="experience">
                    </div>
                    <div class="form-group">
                        <label for="supervisor-cv">Upload Your CV</label>
                        <input type="file" id="supervisor-cv" name="cv" accept=".pdf,.doc,.docx">
                    </div>
                    <div class="form-group">
                        <label for="supervisor-email">Email</label>
                        <input type="email" id="supervisor-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="supervisor-password">Password</label>
                        <input type="password" id="supervisor-password" name="password">
                    </div>
                    <button type="submit" class="signup-button">Sign Up</button>
                </div>

                <!-- Worker Form -->
                <div id="worker-form" class="role-form" style="display:none;">
                    <div class="form-group">
                        <label for="worker-name">Name</label>
                        <input type="text" id="worker-name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="worker-email">Email</label>
                        <input type="email" id="worker-email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="worker-password">Password</label>
                        <input type="password" id="worker-password" name="password">
                    </div>
                    <button type="submit" class="signup-button">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>