<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Primero debes iniciar sesion");
                window.location="../PHP/sesion.php";
            </script>
        ';
        session_destroy();
        die();
    }

    $rol=$_SESSION['rol']??'usuario';
    if($rol==='admin'){
      include 'headeradmin.php';
    }
    else{
      include 'header.php';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe House</title>
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../CSS/art.css">
    
</head>
<body>

<section class="hero">
        <div class="hero-text">
                <h5 data-aos="fade-right" data-aos-duration="1400">#Sabor Único</h5>
                <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Disfruta del mejor café</h1>
                <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Explora nuestra selección de cafés y postres artesanales, preparados con ingredientes de la más alta calidad.</p>
            <div class="main-hero" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="300">
                <a href="./producto.php" class="btn">Comprar Ahora</a>
                <a href="#" class="price">Desde $2.99 | <span>Precios especiales</span></a>
            </div>
        </div>
        <div class="hero-img" data-aos="zoom-in" data-aos-duration="1400">
            <img src="../img/cafe.png">
        </div>
    </section>
    <div class="icons">
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="600"><i class="ri-facebook-fill"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="700"><i class="ri-youtube-line"></i></a>
        <a href="#" data-aos="fade-in" data-aos-duration="1400" data-aos-delay="800"><i class="ri-twitter-x-line"></i></a>
    </div>
<section class="menu">
  <h2>Sobre Nosotros</h2>
  <div class="menu-items">
    <div class="menu-item">
      <img data-aos="fade-in" data-aos-duration="1400" data-aos-delay="50" src="../img/i1.jpg">
      <h3>Nuestra Pasión por el Café</h3>
      <p>Granos seleccionados y preparados con dedicación para ofrecer el mejor sabor.</p>
    </div>
    <div class="menu-item">
      <img data-aos="fade-in" data-aos-duration="1400" data-aos-delay="100" src="../img/i2.jpg">
      <h3>Ingredientes Frescos</h3>
      <p>Productos de calidad hechos con ingredientes naturales y deliciosos.</p>
    </div>
    <div class="menu-item">
      <img data-aos="fade-in" data-aos-duration="1400" data-aos-delay="150" src="../img/i3.jpg">
      <h3>Un Rincón para Disfrutar</h3>
      <p>Ideal para relajarte, trabajar o compartir con amigos.</p>
    </div>
  </div>
</section>
<section class="contact">
  <div class="contact-container">
    <h2>Contactanos</h2>
    <div class="contact-info">
      <div class="info-item">
        <p>Calle 1, Ambato</p>
      </div>
      <div class="info-item">
        <p>+593 987654321</p>
      </div>
      <div class="info-item">
        <p>coffehouse@gmail.com</p>
      </div>
    </div>
    <form method="post" action="../PHP/contactos.php" class="contact-form">
      <input type="text" name="name" placeholder="Nombre" required>
      <input type="email" name="email" placeholder="Correo Electronico" required>
      <textarea name="mesage" placeholder="Mensaje" rows="5" required></textarea>
      <button type="submit">ENVIAR</button>
    </form>
  </div>
</section>

<footer>
    <center>
    <div class="footer">
        <div>
            <img src="../img/logo.png">
        </div>
        <div class="conte">
            <p>Café</p>
            <p>Aroma</p>
            <p>Sabor</p>
            <p>Calidez</p>
            <p>Amigos</p>
            <p>Relax</p>
        </div>
        <div class="corre"><p>© 2025 coffe House. Todos los derechos reservados.</p></div>
    </div>
    
    </center>
</footer>
    <script src="../js/script2.js"></script>
    <script src="../js/script3.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script>
</body>
</html>