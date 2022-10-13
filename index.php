<?php include_once "lang.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obisoft - Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="img/logo-jordan-alexander.png" alt="">
                </div>
                <div class="enlaces-header">
                    <button>
                    <a href="#"><b><?php echo $TEXT_REGISTRE; ?></b></a>
                    </button>
                    <button>
                    <a href="#"><b><?php echo $TEXT_LOGIN; ?></b></a>
                    </button>
                    <button>
                    <form id="push-lang" action="/" method="post">
                    <input type="hidden" name="lang" id="lang" value="<?php
                                if ($LANG=="es"){
                                    echo "es";
                                }
                                if ($LANG=="en"){
                                    echo "en";
                                }
                                ?>"/>
                        <select id="lang-selector" name="lang2">
                            <option class="lang-option-es" 
                                <?php
                                if ($LANG=="es"){
                                 echo "selected";   
                                }
                                ?> 
                                value="es"><?php echo $TEXT_LANG_ES; ?>
                            </option>
                            <option class="lang-option-en"
                                <?php
                                if ($LANG=="en"){
                                    echo "selected";
                                }
                                ?>
                                value="en"><?php echo $TEXT_LANG_EN; ?>
                            </option>
                        </select>
                    </form>
                    </button>
                </div>
                <div class="hamburguer">
                </div>
            </section>
        </nav>
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1><?php echo $TEXT_HI_TITLE; ?></h1>
                    <p><?php echo $TEXT_HI_TEXT; ?></p>
                    <a href="#proyects">Mis Proyectos</a>
                    <a href="#develoment">Desarrollo</a>
                    <a href="#dominio">Mi Dominio</a>
                </section>
                <br>
                <img style="border-radius:100px;opacity:1;width:300px;" src="img/obisoft-logo.png" alt="">
            </section>
        </div>
    </header>
    <section class="about-us">
        <div class="contenedor1">
            <h2 class="titulo" id="proyects">
             Proyectos
            </h2>
            <div class="contenedor-articulo">
                <div class="articulo" data-aos="zoom-in-right">
                <img src="img/dl.png" class="img-shadow"
                    style="margin:0;border-radius:100px;" width="80px" />
                    <h3>Downloader</h3>
                    <p>
                        Descarga archivos mediante url.
                    </p>
                    <ul style="color:gray;font-weight:bold;">
                        <li>Youtube</li>
                        <li>Mediafire</li>
                        <li>GoogleDrive</li>
                        <li>DirectUrl</li>
                    </ul>
                    <p>
                       Aplicandose la tarifa de consumo nacional (No Internet) en cuba.
                    </p>
                    <button>
                    <a href="/dl">Ir Al Sitio</a>
                    </button>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                <img src="img/adcu.jpg" class="img-shadow"
                    style="margin:0;border-radius:100px;" width="80px" />
                    <h3>A-D-O-Cu</h3>
                    <p>
                        Animes & Donghuas Online.
                    </p>
                    <ul style="color:gray;font-weight:bold;">
                        <li>Basado En <a href="/api/adosearch">ADOSearch Api</a></li>
                        <li>Descargas Directas</li>
                        <li>Directorio Actualizado</li>
                        <li>Buscador Anime & Donghaus</li>
                    </ul>
                    <p>
                       Aplicandose la tarifa de consumo nacional (No Internet) en cuba.
                    </p>
                    <button>
                    <a href="/adocu">Ir Al Sitio</a>
                    </button>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                <img src="img/xnova.png" class="img-shadow"
                    style="margin:0;border-radius:100px;" width="80px" />
                    <h3>XnovaRR Online</h3>
                    <p>
                        Juego online, dirije batallas en la galaxia para conquistar mundos.
                    </p>
                    <ul style="color:gray;font-weight:bold;">
                        <li>Xnova Remaster</li>
                        <li>Actualizado</li>
                    </ul>
                    <p>
                       Aplicandose la tarifa de consumo nacional (No Internet) en cuba.
                    </p>
                    <button>
                    <a href="/xnovarr">Ir Al Sitio</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="results" id="develoment">
        <div class="contenedor1 conten-results">
            <section class="numbers">
                <div class="number" data-aos="zoom-in-left">
                    <h4>+6 años</h4>
                    <p>Desarrollo En C# .Net.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+6 años</h4>
                    <p>Desarrollo En C++ .</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+3 años</h4>
                    <p>Desarrollo En VB .Net.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+1 años</h4>
                    <p>Desarrollo En F# .Net.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+3 años</h4>
                    <p>Desarrollo En PHP.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+3 años</h4>
                    <p>Desarrollo En JAVA.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+5 años</h4>
                    <p>Desarrollo En Python.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+2 años</h4>
                    <p>Desarrollo En LUA.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+5 años</h4>
                    <p>Diseño Web HTML5.</p>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>+4 años</h4>
                    <p>Diseño Web CSS CSS5.</p>
                </div>
                
            </section>
            <section class="results-text">
                <h4>Te Gusta Aprender?.</h4>
                <p>Visita Mi Canal En Youtube. Puedo Ser Tu Tutor.</p>
                <a href="#">Ingrese aquí</a>
            </section>
            
        </div>
    </section>

    <section class="contenedor1 services" id="dominio">
        <img src="img/checklist.svg" alt="">
        <div class="box-skills">
            <h4>.Net Development</h4>
            <h4>Python Kivy & Tkinter</h4>
            <h4>Web Design & Development</h4>
            <h4>Game Development</h4>
            <h4>Api Development</h4>
            <h4>Telegram Bots</h4>
            <h4>Web Scraping</h4>
            <h4>Backend & Frontend</h4>
        </div>
    </section>

    <footer>
        <div class="partFooter">
            <img src="img/logo-jordan-alexander.png" alt="">
        </div>
        <div class="partFooter">
            <h4>&copy; Obisoft 2016-2022</h4>
        </div>
        <div class="partFooter">
            <h4>Redes sociales</h4>
            <div class="social-media">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>