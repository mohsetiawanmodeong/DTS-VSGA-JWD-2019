<!DOCTYPE html>
<html lang="en">
<head>
  <title>Navbar dengan Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light shadow-sm">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span style="color:grey;">DIGITAL TALENT</span></a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Programming 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">PHP</a>
        <a class="dropdown-item" href="#">ASP</a>
        <a class="dropdown-item" href="#">AJAX</a>
        <a class="dropdown-item" href="#">jQuery</a>
        <a class="dropdown-item" href="#">MySQL</a>
        <a class="dropdown-item" href="#">CSS</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Software 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">XAMPP</a>
        <a class="dropdown-item" href="#">VS CODE</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  <h3>Contoh Navbar dengan Bootstrap</h3>
  <p>Selamat datang peserta DIGITAL TALENT bidang Junior Web Developer di Politeknik Negeri Manado</p>
</div>

</body>
</html>