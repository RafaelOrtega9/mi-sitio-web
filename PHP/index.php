<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe House</title>
    <link rel="stylesheet" href="../CSS/inicio.css">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<header>
        <a href="#" class="logopr">
            <img src="../img/logo.png">
        </a>
        <ul class="navlist">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="./inicio.php">Menú</a></li>
            <li><a href="./inicio.php">Visitanos en:</a></li>
        </ul>
        <div class="right-content">
            <a href="./sesion.php" class="nav-btn">Iniciar Sesión</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
</header>
    <section class="hero">
        <div class="hero-text">
                <h5 data-aos="fade-right" data-aos-duration="1400">#Sabor Único</h5>
                <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Disfruta del mejor café</h1>
                <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Explora nuestra selección de cafés y postres artesanales, preparados con ingredientes de la más alta calidad.</p>
            <div class="main-hero" data-aos="flip-down" data-aos-duration="1400" data-aos-delay="300">
                <a href="./inicio.php" class="btn">Comprar Ahora</a>
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
    <div class="scroll" data-aos="zoom-out-up" data-aos-duration="1400" data-aos-delay="550">
        <a href="#">
            <i> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVpJREFUSEvFlYtNBDEMRH2dQCVAJUAlQCVwlQCVQCdwT/JEk2w+i+BEpGh3tROPZ+wkhzjzOJw5fuwhuI4I5lU+PyOC+X76fss5zHNGcBERzxl0JhSymyTd4EYEjxHxkGgCHC1biJmous13YVhXjR6BB386oTeLLAJEd5bMBt8SsOAjAyAbj/cM1LymTfe+riUABHiVeY9UyrHrUgAnQCpFrQBNJDCo7NnmTVHUO4EyGGWvBOAcYTYxnIDsCYKHL53M+e+jR6JaUDtUVBuN4iIT/7BJwzNvvW9J1CTFZlcwIvCgX/kx26AVxoHqoFl7rgikFouxurJoVWTwK4JpkX2zlD5uTF8RyIXSKG6R93GRuGcbJ0ZdWDqotYhvPyp67Trik3r+VzXsdcOeDeVE08OxR9CekPQ0snXBSKkf18Pd/W8XjizQ5cJTVyb//uTK/EEDjaF7Lv1fEX0DgM9fGfaf29IAAAAASUVORK5CYII="/> SUBIR</i>
        </a>
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
    <form method="post" action="./contactos.php" class="contact-form">
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
        <div class="corre"><p>© 2023 coffe House. Todos los derechos reservados.</p></div>
    </div>
    </center>
</footer>
    <script src="../js/script2.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script>
</body>
</html>