# mukul
setengah

      <section class="hero" id="hero">
        <div class="container">

          <div class="hero-content">
            <h1 class="h1 hero-title">Mocool Tennis Club</h1>

![blog-banner-5](https://github.com/ghitanajminaqasy/mukul/assets/132932051/f56003e9-38dd-4b40-b20a-33dc882b6e65)


# Nama Mahasiswa
Ghita Najmi Naqasy-22_496466_SV_20961

# PENJELASAN
Mocool Tennis Club
Mocool adalah sebuah website yang mewadahi bagi para pecinta Tennis untuk nantinya berkumpul, bermain, belajar dan berbagi. Club ini terbuka untuk umum dari semua kalangan yang memiliki hobi dan minat di bidang olahraga Tennis. Pada website ini calon atlet dapat mengetahui informasi yang dibutuhkan seperti jenis program latihan sehingga dapat memilih program yang tepat sesuai kemampuan, jadwal latihan juga informasi mengenai pelatih yang tentunya sudah berpengalaman.

# DESIGN RAPI
Tampilan design pada website ini saya menggunakan color pellete, typography dan spacing yang konsisten juga pemilihan warna pastel yang sering dikaitkan dengan warna kelembutan, ketenangan, juga romantisme.  berikut adalah kode css:
:root {

  /**
   * colors
   */

  --ocean: hsl(162, 100%, 91%);
  --raisin-black-1: hsl(244, 17%, 19%);
  --majorelle-blue: hsl(245, 67%, 59%);
  --ghost-white-1: hsl(240, 100%, 99%);
  --oldgreen: hsl(133, 76%, 26%);
  --white-opacity: hsla(0, 0%, 100%, 0.5);
  --independence: hsl(245, 17%, 27%);
  --lavender-web: hsl(247, 69%, 95%);
  --eerie-black: hsl(210, 11%, 15%);
  --cool-gray: hsl(244, 17%, 61%);
  --yellow: hsl(65, 100%, 90%);
  --green: hsl(116, 41%, 72%);

  /**
   * typography
   */

  --ff-quicksand: "Quicksand", sans-serif;
  --ff-mulish: "Mulish", sans-serif;

  --fs-1: 36px;
  --fs-2: 28px;
  --fs-3: 20px;
  --fs-4: 17px;
  --fs-5: 16px;
  --fs-6: 15px;
  --fs-7: 14px;

  --fw-500: 500;
  --fw-600: 600;
  --fw-700: 700;

  /**
   * transition
   */

  --transition: 0.25s ease;

  /**
   * spacing
   */

  --section-padding: 80px;

}

             
 
 




# WEB RESPONSIVE
Tampilan web responsive pada desktop, handphone dan tablet 
 

 



 
Dengan kode header:
  <!-- 
    - HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo-mocool-1.png" width="150" height="40" alt="Landio logo">
      </a>

      <button class="menu-toggle-btn" data-nav-toggle-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar">
        <ul class="navbar-list">

          <li>
            <a href="#hero" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#features" class="navbar-link">Lapangan</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Daftar</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link">Coach</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact Us</a>
          </li>

        </ul>

        <div class="header-actions">
          <a href="signup.php" class="header-action-link">Sign up</a>
        </div>
      </nav>

    </div>
  </header>


# DIRECT FEEDBACK
Sign up form
User diarakan ke halaman sign up untuk mendaftar apabila berminat menjadi anggota club, pada halaman sign up akan diminta untuk menginputkan username berserta password sehingga adanya interaksi antara pengguna dengan website yang nantinya akan disimpan. Berikut kode php :
<?php
$conn = mysqli_connect("localhost", "root","","atlete");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $username = $_POST['password'];

    mysqli_query($conn, "INSERT INTO user VALUES('$email','$password')");
    return mysqli_affected_rows($conn);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script>
        var sambutan = alert("Thank you for intending to join us!")
    </script>
</head>
<body>
    <!-- HEADERS -->
    <div class="headers">
        <div class="d-flex sticky-top container-fluid px-0">
            <div class="dropdown">
                <button id="myButton" class="btn position-relative top-50 start-50 translate-middle border-0 py-0" type="button"><img src="Pics/Three Stripes.png"></button>

                <script>
                    var peringatan = document.getElementById("myButton").addEventListener("click", function() {
                        alert("Sorry, you don't have any access!");
                    });
                </script>

            </div>
            <h1 class="text-center py-3">MOCOOL</h1>
        </div>
    </div>
        

    <!-- Login -->
    <div class="Logins p-0 m-0">
        <div class="container p-3 rounded-5">
            <h3 class="pt-0 m-3 text-white fw-light text-center">Sign Up</h3>
            <form action="index.php" method="POST" onsubmit="return validateForm()">
                <input type="text" name="" id="uname" placeholder="Username" class="m-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <input type="password" name="" id="pass" placeholder="Password" class="mx-3 mt-3 p-3 py-1 rounded-4 bg-black">
                <br>
                <div class="text-center">
                    <button type="submit" class="mx-3 mt-3 mb-0 p-1 rounded-5 fw-bolder" value="Submit" name="submit">Submit</button>
                </div>                
            </form>
            <script>
                function validateForm() {
                    var uname = document.getElementById("uname").value;
                    var pass = document.getElementById("pass").value;
                    
                    if (uname.trim() === "") {
                        alert("You have not entered your username!");
                        return false; 
                    }
                    
                    if (pass.trim() === "") {
                        alert("You have not entered your password!");
                        return false; 
                    }
                    
                    return true; 
                }  
            </script>

        </div>
    </div>
</body>
</html>


 


# KONTEN DINAMIS
Setelah user menginputkan username berserta password akan disimpan ke dalam database.
<?php
$conn = mysqli_connect("localhost", "root","","atlete");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $username = $_POST['password'];

    mysqli_query($conn, "INSERT INTO user VALUES('$email','$password')");
    return mysqli_affected_rows($conn);
}
?>

 
