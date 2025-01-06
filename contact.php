<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Eternal Moments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/photo.css">
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
            background-color: #f7f7f7;
            color: #333;
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

        /* Main Section */
        main {
            padding: 3em 5em;
            background-color: #fff;
            margin-top: 2em;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        main h2 {
            font-size: 2.4em;
            color: #333;
            margin-bottom: 1.5em;
        }

    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <nav>
            <a href="index.php">Home</a> | 
            <a href="experience.php">Experience</a> |
            <a href="gallery.php">Gallery</a> |
            <a href="portfolio.php">Portfolio</a> |
            <a href="services.php">Services</a> |
            <a href="contact.php">Contact</a> |
            <a href="about.php">About</a> |
            <a href="admin-login.php">Admin</a>
        </nav>
    </header>

    <main>
        <h2>Get in Touch with Us</h2>
        <p>If you have any questions or would like to inquire about our services, please don't hesitate to reach out. We're here to help!</p>

        <form id="contact-form" class="mt-4">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="number" placeholder="Phone Number" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Your Address" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</body>
</html>
