<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        <div class="card">
            <div class="card-body">
                <h2>Syauqi Athfal Akhyar</h2>
                <p><strong>NIM:</strong> 2023071020</p>
                <p><strong>Prodi:</strong> Informatika</p>
                <p><strong>Kampus:</strong> Universitas Pembangunan Jaya</p>
                <p>
                    Saya adalah seorang mahasiswa Informatika di Universitas Pembangunan Jaya. 
                    Saya tertarik dengan berbagai hal terkait teknologi dan selalu berusaha 
                    belajar hal baru untuk mengembangkan kemampuan saya di bidang ini.
                </p>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const currentPage = window.location.pathname.split("/").pop();

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }

            link.addEventListener('click', function(event) {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
    </script>
</body>
</html>