<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.css">
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
                        <a class="nav-link" href="About.php">About Us</a>
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
        <h1>Silahkan isi data dibawah ini untuk mengontak kami</h1>
        <form action="konfirmasi.php" method="POST">
        <form action="connection.php" method="POST">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="hobby">Hobby:</label><br>
                <input type="checkbox" name="hobby[]" value="Bermain Games"/> Bermain Games<br/>
                <input type="checkbox" name="hobby[]" value="Belajar"/> Belajar<br/>
                <input type="checkbox" name="hobby[]" value="Mendengarkan Musik"/> Mendengarkan Musik<br/>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin:</label><br>
                <input type="radio" name="gender" value="Laki-Laki" required /> Laki-Laki<br/>
                <input type="radio" name="gender" value="Perempuan" required /> Perempuan<br/>
            </div>
            <div class="form-group">
                <label for="dob">Tanggal lahir:</label><br>
                <input type="date" class="form-groub" id="dob" name="dob" required/> <br/>
            </div><br>
            <button type="submit" class="btn btn-primary" >Submit</button>
        </form>
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