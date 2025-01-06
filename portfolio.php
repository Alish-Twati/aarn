<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eternal Moments - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Header */
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

        header nav ul {
            list-style: none;
            padding: 0;
            text-align: center;
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

        /* Main Portfolio Section */
        .container {
            padding: 3em 2em;
            background-color: #fff;
            margin-top: 2em;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card img {
            border-radius: 10px 10px 0 0;
        }

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Eternal Moments Portfolio</h1>
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

    <!-- Portfolio Section -->
    <div class="container py-5">
        <h1 class="text-center mb-4">Our Photographers & Videographers</h1>
        <div class="row g-4">
            <!-- Photographer 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/port.jpg" class="card-img-top" alt="Wedding Photographer Rojal Prajapati">
                    <div class="card-body">
                        <h5 class="card-title">Jasper Thornfield</h5>
                        <p><strong>Specialization:</strong> Wedding Photography</p>
                        <p><strong>Age:</strong> 25</p>
                        <p><strong>Address:</strong> 123 Elm Street, Springfield, IL</p>
                        <p><strong>Contact:</strong> +1 (555) 456-7890</p>
                        <a href="contact.php" class="btn btn-primary">Hire Me</a>
                    </div>
                </div>
            </div>
            <!-- Photographer 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/port1.jpeg" class="card-img-top" alt="Wildlife Photographer John Smith">
                    <div class="card-body">
                        <h5 class="card-title">Mia Garcia</h5>
                        <p><strong>Specialization:</strong> Wildlife Photography</p>
                        <p><strong>Age:</strong> 35</p>
                        <p><strong>Address:</strong> 303 Birch Court, Los Angeles, CA</p>
                        <p><strong>Contact:</strong> +1 (555) 123-4567</p>
                        <a href="contact.php" class="btn btn-primary">Hire Me</a>
                    </div>
                </div>
            </div>
            <!-- Videographer -->
            <div class="col-md-4">
                <div class="card">
                    <img src="img/port2.jpg" class="card-img-top" alt="Event Videographer Emily Johnson">
                    <div class="card-body">
                        <h5 class="card-title">Lily Davis</h5>
                        <p><strong>Specialization:</strong> Event Videography and Photography</p>
                        <p><strong>Age:</strong> 28</p>
                        <p><strong>Address:</strong> 505 Chestnut Street, Boston, MA</p>
                        <p><strong>Contact:</strong> +1 (555) 987-6543</p>
                        <a href="contact.php" class="btn btn-primary">Hire Me</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>
