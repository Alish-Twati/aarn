<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple validation for demo purposes
    if ($username == 'admin' && $password == 'password123') {
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Eternal Moments</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f0f4f8;
            line-height: 1.6;
        }

        /* Header Styling */
        header {
            background-color: #2a3d66; /* Deep blue background */
            color: #fff;
            padding: 1.5em 2em;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.8em;
            margin-bottom: 0.5em;
        }

        header nav {
            margin-top: 1em;
        }

        header nav a {
            color: #fff;
            font-size: 1.2em;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #ffcc00; /* Golden hover effect */
        }

        /* Login Container */
        .login-container {
            background-color: #fff;
            padding: 3em 2em;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin: 5em auto;
            text-align: center;
        }

        .login-container h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 1.5em;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1.5em;
        }

        label {
            font-size: 1.1em;
            color: #333;
            text-align: left;
        }

        input {
            padding: 0.8em;
            font-size: 1.1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 5px rgba(108, 99, 255, 0.5);
        }

        button {
            padding: 0.8em;
            font-size: 1.1em;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a54e0;
        }

        .error {
            color: red;
            font-size: 1.2em;
            margin-top: 0.8em;
        }

        footer {
            margin-top: 2em;
            font-size: 1em;
            color: #888;
        }

        footer a {
            color: #6c63ff;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: #5a54e0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header nav a {
                font-size: 1em;
            }

            .login-container {
                padding: 2.5em 1.5em;
            }

            .login-container h1 {
                font-size: 2.2em;
            }
        }
    </style>
</head>
<body>

    <!-- Header with Navigation -->
    <header>
        <h1>Admin Portal</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="experience.php">Experience</a>
            <a href="gallery.php">Gallery</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="about.php">About</a>
            <a href="admin-login.php">Admin</a>
        </nav>
    </header>

    <!-- Login Form Container -->
    <div class="login-container">
        <h1>Admin Login</h1>

        <?php if (isset($error)): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <footer>
            <p><a href="#">Forgot Password?</a></p>
        </footer>
    </div>

</body>
</html>
