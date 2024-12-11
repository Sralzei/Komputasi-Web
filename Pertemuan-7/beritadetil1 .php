<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Detail 1</title>
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
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About us</a>
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

        <div class="container text-center my-4">
            <img src="gojovssukunah2h.jpg" class="img-fluid" alt="Gambar tidak ditemukan">
            <p>Namun serangan dahsyat tersebut hanya mampu untuk menghancurkan 1 lengan milik Sukuna. Mengetahui teknik Hollow Purple miliknya tidak membuatnya tumbang, Gojo langsung menerjang Sukuna, membuat keduanya saling beradu tinju. Mengetahui ia sedikit kewalahan beradu tinju dengan Gojo dikarenakan lengannya yang rusak, Sukuna memutuskan untuk membuka Domain Expansion-nya yang kemudian dibalas oleh Gojo dengan membuka Domain miliknya sehingga keduanya saling beradu Domain.</p>
            <br>
            <img src="gojovssukunadomain.jpg" class="img-fluid" alt="Gambar tidak ditemukan">
            <p>Gojo dan Sukuna menggunakan Domain Expansion mereka dalam waktu yang sama, membuat pertarungan menjadi semakin intens. Dalam duel Domain Expansion ini, teknik mereka bertabrakan. Meskipun Gojo awalnya mampu menyaingi Domain milik Sukuna, tetapi Domain milik Sukuna tetaplah unggul sehingga Gojo tersayat-sayat oleh ribuan tebasan milik Sukuna. Meski tercabik-cabik, Gojo mampu untuk mengatasi serangan tersebut dengan menggunakan teknik RCT untuk menyembuhkan dirinya.</p>
        </div>
    </header>

    <div class="content"></div>

    <footer class="bg-dark text-white text-center py-3">
        <div class="webrekomendasi">
            <img src="microsoft.png" alt="Microsoft" width="80">
            <img src="google.png" alt="Google" width="80">
        </div>
    </footer>

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
