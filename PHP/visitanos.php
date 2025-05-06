<?php 
    include("verses.php");
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
<section class="map">
        <div class="map-content">
            <h1>¡Estamos Aquí para Ayudarte!</h1>
            <p>Visítanos o envíanos un mensaje, ¡nos encantaría saber de ti!</p>
            <a href="#mapa" class="btn">Ver Ubicación</a>
        </div>
    </section>
    <section id="mapa" class="map-section">
        <h2>Nuestra Ubicación</h2>
        <p>Encuéntranos fácilmente en el mapa a continuación:</p>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=mario+cobo+barona&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.alarm-clock.net"></a><br><a href="https://www.timertimer.net"></a><br><style>.mapouter{position: relative;text-align: right;height: 500px;width: 500px;}</style><a href="https://www.ongooglemaps.com">google map net</a><style>.gmap_canvas{overflow: hidden;background: none !important;height: 500px;width: 500px;}</style></div></div>
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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset:1,
      });
    </script>
    <script src="../js/script3.js"></script>
</body>
</html>