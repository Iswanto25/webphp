<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iswanto Group</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/portofolio.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
    <!-- navbar -->
    <div id="home" class="top-bar">
        <div class="social-bar">
            <ul>
                <li>
                    <a href="https://web.facebook.com/Direktur.Agung.Iswanto" target="blank"><img src="svg/facebook.svg" alt=""></a>
                    <a href="https://github.com/Iswanto25" target="blank"><img src="svg/github.svg" alt=""></a>
                    <a href="https://www.instagram.com/director.iswanto/?hl=id" target="blank"><img src="svg/instagram.svg" alt=""></a>
                </li>
            </ul>
        </div>
        <div class="email">
            <p>iswantogroupoffcial@gmail.com</p>
            <img src="svg/envelope.svg" alt="">
        </div>
    </div>
    <nav>
        <img src="img/logo ig.png" alt="">
        <ul>
            <li>
                <a href="#home" class="active">Home</a>
            </li>
            <li>
                <a href="#gallery">Gallery</a>
            </li>
            <li>
                <a href="#portofolio">Portofolio</a>
            </li>
            <li>
                <a href="#about">About</a>
            </li>
        </ul>
        <div class="togle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    </header>
    <!-- navbar -->

    <!-- welcome -->
    <div class="welcome" style="background-image: url(img/img2.jpg);">
        <h1>ISWANTO GROUP</h1>
        <p>"Official Website and Gallery"</p>
        <div class="desc">
            <p>"Dengan Kamera Aku Berkaya,<br>Dengan Kamera Aku Melukis Cahaya,<br>Dengan Karya Aku Menulis Sejarah Hidup Dan Mengabadikanya <br> Berkayalah Untuk Keabadian"</p>
        </div>
    </div>
    <!-- welcome -->

    <!-- gallery -->
    <span id="gallery"></span>
    <div class="gallery">
        <h1>Gallery</h1>
        <div class="grid-container">
            <article id="3685" class="location-listing">
                <a class="location-title" href="https://www.shutterstock.com/image-photo/indonesian-rainforest-pemalang-indonesia-2020-1825369091" target="blank">
                    Pemalang Forest
                </a>
                <div class="location-image">
                    <img src="img/hutan1.jpg" alt="san francisco">
                </div>
            </article>
            <article id="3685" class="location-listing">
                <a class="location-title" href="">
                    Mount Slamet Forest
                </a>
                <div class="location-image">
                    <img src="img/hutan.jpg" alt="san francisco">
                </div>
            </article>
            <article id="3685" class="location-listing">
                <a class="location-title" href="">
                    Milkyway
                </a>
                <div class="location-image">
                    <img src="img/milkyway.jpg" alt="san francisco">
                </div>
            </article>
            <article id="3685" class="location-listing">
                <a class="location-title" href="">
                    Independent Day
                </a>
                <div class="location-image">
                    <img src="img/175.jpg" alt="san francisco">
                </div>
            </article>
            <article id="3685" class="location-listing">
                <a class="location-title" href="">
                    Slamet Mountain
                </a>
                <div class="location-image">
                    <img src="img/slamet6.jpg" alt="san francisco">
                </div>
            </article>
            <article id="3685" class="location-listing">
                <a class="location-title" href="">
                    Watch
                </a>
                <div class="location-image">
                    <img src="img/IMG_6874.jpg" alt="san francisco">
                </div>
            </article>
        </div>
        <h4><a href="">More...</a></h4>
    </div>
    <!-- gallery -->

    <!-- portofolio -->
    <div id="portofolio" class="portofolio" style="background-image: url(img/code.jpg);">
        <img src="img/profile1.jpg" alt="">
        <h1>Agung Iswanto</h1>
        <hr>
        <h2>Web Developer | Student | Survival | Potography</h2>
    </div>
    <!-- portofolio -->

    
    <!-- footer -->
    <div id="about" class="footer" style="background-image: url(img/footer.jpg);">
        <div class="footer-logo">
            <img src="img/Untitled-1.png" alt="">
        </div>
        <div class="form">
                   <form action="sent.php" method="POST" target="_Blank">
                <h4>Kritik & Saran</h4>
                <div class="row-form">
                    <div class="col-25">
                        <label for="fname">Nama</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="fname" name="Nama" placeholder="Nama">
                      <span class="error"><?php echo $_GET ['$namaAlert'];?></span>
                    </div>
                </div>
                <div class="row-form">
                    <div class="col-25">
                        <label for="lname">Email</label></div>
                    <div class="col-75">
                        <input type="text" id="lname" name="Email" placeholder="Email">
                        <span class="error"><?php echo $_GET ['$emailAlert'];?></span>
                        </div>
                </div>
                <div class="row-form">
                    <div class="col-25">
                        <label for="subject">Kritik & Saran</label>
                    </div>
                    <div class="col-75">
                        <textarea name="Pesan" id="subject" cols="30" rows="10" placeholder="Kritik & Saran"></textarea>
                        <span class="error"><?php echo $_GET ['$pesanAlert'];?></span>
                    </div>
                </div>
                <div class="col-row">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>

        <div class="social">
            <h2>Kegiatan Kami</h2>
            <table>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Kegiatan</th>
                </tr>
                <tr>
                    <td>Senin-Kamis</td>
                    <td>20:00-10:00</td>
                    <td>Konsul</td>
                </tr>
                <tr>
                    <td>Jumaat</td>
                    <td>Free</td>
                    <td>Upload</td>
                </tr>
                <tr>
                    <td>Sabtu-Minggu hari libur</td>
                    <td>Free</td>
                    <td>Hunting</td>
                </tr>
            </table>
            <ul>
                <li>
                    <a href="https://web.facebook.com/Direktur.Agung.Iswanto" target="blank"><img src="svg/045-facebook.svg" alt=""></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/director.iswanto/?hl=id" target="blank"><img src="svg/034-instagram.svg" alt=""></a>
                </li>
                <li>
                    <a href="https://github.com/Iswanto25" target="blank"><img src="svg/039-github.svg" alt=""></a>
                </li>
                <li>
                    <a href="https://goo.gl/maps/tqbfMEEdwNT5LZj5A" target="blank"><img src="svg/placeholder.svg" alt=""></a>
                </li>
            </ul>
            <h1>Copyright &#169
                <script type='text/javascript'>
                    var creditsyear = new Date();
                    document.write(creditsyear.getFullYear());
                </script>
                <a>Director Iswanto</a>
            </h1>
        </div>
    </div>
    <!-- footer -->
    <script src="js/script.js"></script>
</body>

</html>