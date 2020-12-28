<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Iswanto Group</title>
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

    <div class="container">
    <div class="post">
    <?php
    $namaAlert = $emailAlert = $pesanAlert = "";
    $nama = $email = $pesan = "";

    if($_SERVER['REQUEST_METHOD']== "POST"){
        if(empty($_POST["Nama"])){
            header('location:index.php?$namaAlert= Nama Belum Diisi#about');
            $nameErr = "Name is required";
        }else{
            $nama = test_input($_POST["Nama"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/",$nama)){
                header('location:index.php?$namaAlert= Karakter Tidak Valid#about');
                $nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["Email"])){
            $emailErr = "Email is required";
            header('location:index.php?$emailAlert= Email Belum Diisi#about');
        }else{
            $email = test_input($_POST["Email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
                header('location:index.php?$emailAlert= Karakter Tidak Valid#about');
            }
        }
        if(empty($_POST['Pesan'])){
            header('location:index.php?$pesanAlert= Pesan Belum Diisi#about');
        }else{
            $pesan = test_input($_POST["Pesan"]);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <?php
    echo "<h1>Terima kasih telah menghubungi kami!</h1>";
    echo "<p>Nama</p>";
    echo $nama;
    echo "<br>";
    echo "<p>Email</p>";
    echo $email;
    echo "<br>";
    echo '<p>Pesan</p>';
    echo $pesan;
    ?>
    </div>
    </div>
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
                        <?php echo $_GET ['$namaAlert'];?>
                    </div>
                </div>
                <div class="row-form">
                    <div class="col-25">
                        <label for="lname">Email</label></div>
                    <div class="col-75">
                        <input type="text" id="lname" name="Email" placeholder="Email">
                        <?php echo $_GET ['$emailAlert'];?>
                        </div>
                </div>
                <div class="row-form">
                    <div class="col-25">
                        <label for="subject">Kritik & Saran</label>
                    </div>
                    <div class="col-75">
                        <textarea name="pesan" id="subject" cols="30" rows="10" placeholder="Kritik & Saran"></textarea>
                        <?php echo $_GET ['$pesanAlert'];?>
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