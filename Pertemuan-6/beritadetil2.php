<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Detail 2</title>
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
            <img src="muzanmeetyoriichi.jpeg" class="img-fluid" alt="Gambar tidak ditemukan">

            <p>
                Masih dengan tatapan remehnya terhadap para manusia, "Aku sudah tidak tertarik dengan para pendekar yang memakai teknik pernapasan," ujar Muzan. Tepat setelah mengatakan hal tersebut, Muzan langsung mengayunkan lengannya hendak membunuh Yoriichi. Yoriichi langsung memasang kuda-kuda dan mulai menghindari satu persatu serangan dari Muzan. Menyadari seluruh bambu dan pepohonan di sekitarnya langsung hancur dalam sekali ayunan, Yoriichi berkata: <br>
                "Baru kali ini rasa merinding menjulur ke seluruh tubuhku." <br>
                "Rasanya aku akan mati meski hanya terkena satu serangannya, tetapi aku telah menyempurnakan teknikku." <br>
                Yoriichi menerjang Muzan dan mulai melancarkan serangan yang sangat cepat: "Hi no Kokyu: Ju san no kata."
            </p>

            <img src="yoriichi13th.jpeg" width="400" alt="Gambar tidak ditemukan">

            <p>
                Melihat hal tersebut, Muzan merasa sangat kebingungan karena tubuhnya merasa sangat sakit dan tidak bisa beregenerasi. Untuk pertama kalinya, Kibutsuji Muzan merasa takut. Yoriichi membuka mulutnya dan berkata: <br>
                "Apanya yang lucu?" <br>
                "Apanya yang seru?" <br>
                "Kau menganggap nyawa itu apa?" <br><br>

                <img src="yoriichiwhat.jpg" width="400" alt="Gambar tidak ditemukan"><br><br>

                Merasa dirinya tak berdaya dan berada dalam bahaya, Muzan berusaha kabur dengan memecah belah tubuhnya menjadi 1800 bagian. Yoriichi hanya berhasil menebas 1500 bagian tubuhnya dalam hitungan detik, tetapi gagal menebas 300 bagian yang tersisa.
            </p>

            <p>
                Namun, meski gagal menebas 300 bagian tubuh Muzan yang tersisa, Yoriichi tetap berdiri tegap, napasnya tenang. Tubuhnya yang selama ini dianggap sempurna mulai merasakan beban dari pertarungan yang luar biasa. Yoriichi menatap sisa-sisa bagian tubuh Muzan yang mencoba bergabung kembali. Dengan sisa kekuatannya, Muzan tersenyum getir. "Kau hampir saja berhasil, tapi aku abadi. Kau tidak akan pernah bisa menghentikanku sepenuhnya," gumam Muzan.
            </p>

            <p>
                Yoriichi, yang selama ini dikenal tak pernah menunjukkan ekspresi, kini memperlihatkan sedikit kerutan di dahinya. "Keabadianmu bukanlah sebuah kekuatan, melainkan kutukan," ujarnya sambil menghunus kembali pedangnya yang masih bersimbah darah hitam dari tubuh Muzan.
            </p>

            <p>
                Namun, sebelum Yoriichi bisa melancarkan serangan terakhir, tiba-tiba tubuhnya terasa berat. Cahaya matahari mulai memudar, dan Yoriichi menyadari bahwa tubuhnya semakin lemah seiring berjalannya waktu. Sementara itu, 300 bagian tubuh Muzan yang tersisa berhasil menyusup ke dalam tanah, menjauh dari jangkauan Yoriichi.
            </p>

            <p>
                Yoriichi berdiri diam, merasakan kekalahannya untuk pertama kalinya. Namun, hatinya tetap teguh. "Meskipun aku gagal kali ini," katanya pada dirinya sendiri, "masih ada orang-orang yang akan melanjutkan perjuangan ini. Dan suatu hari, kau akan benar-benar musnah, Muzan."
            </p>
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
