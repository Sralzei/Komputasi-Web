<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <style>
    .nav-link.active {
        font-weight: bold;
        color: #ffffff !important;
    }
</style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(49, 11, 4);">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <img src="animenews.png" alt="Gambar tidak ditemukan" width="65">
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-4">
        <h1>Kendala anda sudah kami terima</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $hobbies = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "None";
            $gender = htmlspecialchars($_POST['gender']);
            $dob = htmlspecialchars($_POST['dob']);

            echo "<p>Terima kasih sudah mengontak kami,</p>";
            echo "<p>Nama : <strong>$name</strong></p>";
            echo "<p>Email : <strong>$email</strong></p>";
            echo "<p>Hobby : <strong>$hobbies</strong></p>";
            echo "<p>Jenis Kelamin : <strong>$gender</strong></p>";
            echo "<p>Tanggal Lahir : <strong>$dob</strong></p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Set active class based on current page
        const currentPage = window.location.pathname.split("/").pop();
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
    });
</script>   
</body>
</html>
