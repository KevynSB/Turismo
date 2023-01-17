<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1510051a23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Components/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&display=swap" rel="stylesheet">
    <title>Guatemala</title>
</head>
<body>
    <?php
     include 'components\cabecera.html';
    ?>
    <article class="container_header">
    <header class="cabecera">
        <div class="cabecera_container">
            <h1 class="title_header title">Conoce la Marca del País</h1>
            <div>
                <img src="Resource/img/guate_logo.png" alt="" class="img_header">
            </div>
            <a href="https://qrco.de/MarcaPaisVideo" target="_blank" class="btn_header">Ingresa Aqui</a>
        </div>
    </header>
    <section>
        <p class="title_section title">
            Somos Guatemala <br> Guatemala, tu nombre inmortal
        </p>
        <p class="parrafo">
             Guatemala es un país multicultural cuya historia ha estado dividida entre 
             períodos de gobiernos democráticos y <br> períodos de guerra civil y juntas 
             militares. El país emergió de una guerra de 36 años tras la firma de los 
             acuerdos <br> de paz en 1996.
        </p>
        <img src="" alt="">
    </section>
    </article>
    <section class="second_section">
        <h2 class="title">Curiosidades de Guatemala</h2>
        <div class="container">
            <div class="card">
                <img src="Resource/img/lagoAtitlan.jpg" alt="Lago_Atitlan" class="img">
                <p>El lago de Atitán es el lago más profundo de América Central.
                </p>
                <div class="enlace">
                    <a href="Lago_de_Atitlan.php">Leer Más</a>
                </div>
            </div>
            <div class="card">
                <img src="Resource/img/Tika.webp" alt="Tikal" class="img">
                <p>El Parque Nacional Tikal se ha ganado su título como el primer 
                    sitio mixto del Patrimonio Mundial de la UNESCO por sus maravillas
                    culturales y naturales.
                </p>
                <div class="enlace">
                    <a href="Tikal.php">Leer Más</a>
                </div>
                
            </div>
            <div class="card">
                <img src="Resource/img/Volcan.jpeg" alt="" class="img">
                <p>Es el único país de América con cuatro volcanes activos: Volcán de Fuego,
                    Volcán Pacaya, Volcán Santiaguito y Volcán Tacaná.
                </p>
                <div class="enlace">
                    <a href="https://aprende.guatemala.com/historia/geografia/los-volcanes-activos-de-guatemala/" target="_blank">Leer Más</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section_map">
        <h2 class="title">Mapa Interactivo de Guatemala</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3932826.4451678502!2d-92.47970018134286!3d15.716673155962432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8588135036e7506b%3A0x35982b375b84d5bb!2sGuatemala!5e0!3m2!1ses!2sgt!4v1672365107488!5m2!1ses!2sgt" width="800" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="Map"></iframe>
    </section>
    <section class="third_section">
        <div class="third_section_body">
            <div class="third_section_card">
                <a href="https://banguat.gob.gt/es/page/billetes-y-monedas-de-actual-circulacion#:~:text=El%20de%20un%20Quetzal%20ostentar%C3%A1,edificio%20del%20Banco%20de%20Guatemala." target="_blank">
                    <img class="third_section_card_img" src="Resource/img/moneda.jpg" alt="">
                     <h3 class="third_section_card_title">Moneda Nacional</h3>
                </a>
            </div>
            <div class="third_section_card">
                <a href="https://www.dgac.gob.gt/" target="_blank">
                    <img class="third_section_card_img" src="Resource/img/aereopuerto.webp" alt="">
                     <h3 class="third_section_card_title">Aereopuerto Internacional</h3>
                </a>
            </div>
            <div class="third_section_card">
                <a href="http://www.cervezagallo.com.gt/" target="_blank">
                    <img class="third_section_card_img" src="Resource/img/cerveza.jpg" alt="">
                     <h3 class="third_section_card_title">Cerveza Nacional</h3>
                </a>
            </div>
            <div class="third_section_card">
                <a href="https://notihoteles.com/aguardiente-quetzalteca-un-icono-de-guatemala/" target="_blank">
                    <img class="third_section_card_img" src="Resource/img/quetzalteca.png" alt="">
                     <h3 class="third_section_card_title">Aguardiente Nacional</h3>
                </a>
            </div>
            <div class="third_section_card">
                <a href="Semuc_Champey.php">
                    <img class="third_section_card_img" src="Resource/img/Semuc.jpg" alt="">
                     <h3 class="third_section_card_title">Belleza y Arte en un sólo lugar</h3>
                </a>
            </div>
            <div class="third_section_card">
                <a href="https://viajesdeunchapin.com/trajes-tipicos-de-guatemala/" target="_blank">
                    <img class="third_section_card_img" src="Resource/img/Tipico.jpg" alt="">
                     <h3 class="third_section_card_title">Trajes Típicos</h3>
                </a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <section>
            <div>
                <h3 class="footer_title">Teléfono</h3>
                <p class="footer_p">(502)0000-0000</p>
            </div>
            <div>
                <h3 class="footer_title">Dirección</h3>
                <p class="footer_p">Guatemala</p>
            </div>
            <div>
                <h3 class="footer_title">Correo</h3>
                <p class="footer_p">ejemplo@correo.com</p>
            </div>
            <div>
                <h3 class="footer_title">Asistencia</h3>
                <p><span>1500</span><i class="fa-solid fa-phone-flip"></i></p>
            </div>
            <div>
                <h3 class="footer_title">Síguenos</h3>
                <nav>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                </nav>
            </div>
        </section>
        <section>
            <p >©2022 KEV_SB <br>
                Todoso los derechos reservados
            </p>
        </section>
    </footer>
</body>
</html>