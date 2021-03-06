
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Animated Sidebar CSS</title> </head>
<link rel="stylesheet" href="assets/css/main.css">
<link href="libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet"
    type="text/css" />

<link href="libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

<link href=assets/css/icons.min.css" rel="stylesheet" type="text/css" />

<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<body>

<div id="sidebar">
  <div class="toggle-btn">
    <span class="btm-primary">&#9776</span>
  </div>
  <ul>
    <li>
      <img src="assets/images/Vector.svg" alt="Logo Fazt" class="logo">
    </li>
    <li>Home</li>
    <li>About</li>
    <li>Contact</li>
  </ul>
</div>
-->

<style>
    div.noticia {
      width: 70%;
      margin: 40px auto;
      color: #fff;
      padding: 50px;
    }

    div.noticia img.izquierda {
      float: left;
      margin-right: 15px;
    }

    div.noticia img.derecha {
      float: right;
      margin-left: 15px;
    }

    div.reset {
      clear: both;
    }

    @keyframes slide {
    0% { transform: translateX(0); }
    10% { transform: translateX(0); }

    15% { transform: translateX(-100%); }
    30% { transform: translateX(-100%); }

    35% { transform: translateX(-200%); }
    50% { transform: translateX(-200%); }

    55% { transform: translateX(-300%); }
    70% { transform: translateX(-300%); }

    75% { transform: translateX(-400%); }
    90% { transform: translateX(-400%); }

    95% { transform: translateX(-500%); }
    100% { transform: translateX(-500%); }
    }

    * { box-sizing: border-box; }

    html { scroll-behavior: smooth; }

    body {
    font-family: sans-serif;
    }

    .wrapper {
    max-width: 1200px;
    margin: 0 auto;
    }

    .slider {
    position: relative;
    }

    .slides {
    position: relative;
    display: flex;
    overflow: hidden;
    }

    .slide {
    width: 100vw;
    flex-shrink: 0;
    animation-name: slide;
    animation-duration: 20s;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
    }

    .slides:hover .slide {
    animation-play-state: paused;
    }

    .slide img {
    width: 100%;
    vertical-align: top;
    }

    .slide a {
    width: 100%;
    display: inline-block;
    position: relative;
    }

    .caption {
    color: white;
    text-shadow: 1px 1px black;
    font-size: 8vw;
    position: absolute;
    bottom: 8vw;
    right: 4vw;
    }

    .slide:target {
    animation-name: none;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    }

    .slider-controler {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    text-align: center;
    padding: 5px;
    background-color: rgba(0,0,0,0.5);
    z-index: 100;
    }

    .slider-controler li {
    margin: 0 0.5rem;
    display: inline-block;
    vertical-align: top;
    }

    .slider-controler a {
    display: inline-block;
    vertical-align: top;
    text-decoration: none;
    color: white;
    font-size: 1.5rem;
    }

    @media only screen and (min-width: 1200px) {
    .slide {
    width: 1200px;
    }

    .caption {
    font-size: 96px;
    bottom: 96px;
    right: 50px;
    }
    .color{
    color:#ffffff;
    }
    }
  </style>
  <!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8" />
      <title>|Examen de Sheet|</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <link rel="stylesheet" href="assets/css/estilos.css">
      <link href="assets/css/css2.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  </head>
  <body style="background-color: #000000;">
    <div id="layout-wrapper">
      <div class="navbar-header">
        <div class="d-flex">
          <div class="navbar-brand-box">
            <a class="logo logo-dark">
              <span class="logo-lg">
                <img style="width: 200px;height: 50px;" src="assets/images/Vector.svg" alt="" height="20">
              </span>
            </a>
          </div>
          <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <img src="assets/images/rayas.svg" alt="">
          </button>
        </div>
          <span class="logo-lg">
            <img src="assets/images/Vector.svg" alt="" height="24">
          </span>
        </div>
    </div>
  </header>
          <div class="vertical-menu">
            <span class="logo-lg">
              <div class="text-center">
                <img style="width: 200px; height: 50px;" src="assets/images/icons/Peru (PE).svg">Peru <img src="assets/images/icons/flecha.svg" alt="">
              </div>
            </span>
                <div id="sidebar-menu">
                    <div>
                      <span>
                        <img style="bottom: 20%; height: 203px; width: 245px;" src="assets/images/avatar.svg" alt="" height="20">
                        <h5 class="text-center" style="color: #ffffff;">Alonios</h5>
                        <hr size="4px"/>
                        <h5  style="color: #ffffff; text-align: end;">Mi perfil<img style="color: #ffffff;" src="assets/images/icons/Edit.svg" alt=""></h5>
                      </span>
                    </div>
                    <ul class="metismenu list-unstyled" id="side-menu">
                      <li>
                        <a href="index.html">
                          <i class="fas fa-home"></i>
                            <span color-text="text-white">Inicio</span>
                        </a>
                      </li>
                      <li>
                          <a href="javascript: void(0);">
                            <i class="fas fa-address-card"></i>
                              <span color-text="text-white">Sobre nosotros</span>
                          </a>
                      </li>
                      <li>
                          <a href="javascript: void(0);">
                              <img src="assets/images/icons/cate.svg" alt="">
                              <span>Categorias</span>
                          </a>
                      </li>
                      <li>
                          <a href="javascript: void(0);">
                            <i class="fas fa-heart"></i>
                              <span>Favoritos</span>
                          </a>
                      </li>
                      <li>
                        <a href="javascript: void(0);">
                          <i class="fas fa-cog"></i>
                            <span>Configuraciones</span>
                        </a>
                    </li>
                    <li>
                      <a href="javascript: void(0);">
                        <i class="fas fa-sign-out-alt"></i>
                          <span>Salir</span>
                      </a>
                    </li>
                    <p></p>
                    <div style="color: white;"><b><li>MIS DATOS</li></b></div>
                    <p></p>
                    <ul>
                      <b><li class="titulo">Nombre:</li></b><h5 style="text-align: end; color: white;">Alonso Joseph</h5>
                      <b><li class="titulo">Apellidos:</li></b><h5 style="text-align: end; color: white;">Rios Mantari</h5>
                      <b><li class="titulo">N?? Telefono:</li></b><h5 style="text-align: end; color: white;"> 918553749</h5>
                      <b><li class="titulo">N?? DNI:</li></b><h5 style="text-align: end; color: white;">70915890</h5>
                    </ul>
                    </ul>
              </div>
          </div>
        <div class="main-content">
            <div class="page-content">
              <div class="container-fluid">
                  <div class="row">
                    <div class="pelicula-principal">
                      <div class="contenedor">
                        <div class=" mini-stat position-relative">
                          <img style="bottom: 40%; height: 292px; width: 384px;" src="assets/images/image1.svg" alt="">
                        </div>
                        <div class="c">
                          <h4 class="titulo">Harry Potter y la piedra filosofal </h4>
                          <p class="descripcion">
                            Harry Potter has been orphaned and lives at the home of his abominable aunt, uncle, and
                            unbearable cousin Dudley. Harry feels very sad and lonely, until one day he receives a letter that will change his life forever.
                            one day he receives a letter that will change his life forever. In it, he is informed that
                            accepted as a student at Hogwarts School of Witchcraft and Wizardry.
                            wizardry. From that moment on, Harry's luck takes a spectacular turn.
                            spectacular. In this special school he will learn enchantments, tricks...
                          </p>
                        </div>
                        <button role="button" class="boton"><img src="assets/images/icons/pLay.svg"></img></i></button>
                        <button role="button" class="boton"><img src="assets/images/icons/hear.svg"></img></i></button>
                        <button role="button" class="boton"><img src="assets/images/icons/clarity_clock-outline-alerted.svg"></img></i></button>
                        <button role="button" class="boton"><img src="assets/images/icons/list-plus.svg"></img></i></button>
                      </div>
                    </div>
                </div>
                <div class="peliculas-recomendadas contenedor">
                  <div class="contenedor-titulo-controles">
                    <h4>Series</h4>
                    <div class="indicadores"></div>
                  </div>

                  <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

                    <div class="contenedor-carousel">
                      <div class="carousel">
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>Spider-Man: Sin camino a casa</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>Venom</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/4.svg" alt=""></a>
                          <h5>La casa de papel</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>??lite</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>Suits</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/7.svg" alt=""></a>
                          <h5>La casa de papel</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/4.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>Suits</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/7.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                      </div>
                    </div>
                    <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                  </div>
                </div>
                <div class="peliculas-recomendadas contenedor">
                  <div class="contenedor-titulo-controles">
                    <h4>Series</h4>
                    <div class="indicadores"></div>
                  </div>
                  <div class="contenedor-principal">
                    <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
                    <div class="contenedor-carousel">
                      <div class="carousel">
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>Spider-Man: Sin camino a casa</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>Venom</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/4.svg" alt=""></a>
                          <h5>La casa de papel</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>??lite</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>Suits</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/7.svg" alt=""></a>
                          <h5>La casa de papel</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/4.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>Suits</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/7.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/2.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/3.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/1.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/5.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                        <div class="pelicula">
                          <a href="#"><img src="assets/images/scroll/6.svg" alt=""></a>
                          <h5>DareDevil</h5>
                        </div>
                      </div>
                    </div>
                    <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                  </div>
                </div>
                <div class="noticia">
                  <img style="bottom: 40%; height: 292px; width: 384px;" class="izquierda" src="assets/images/ni??os.svg">
                    <aside>
                      <h4 style="color: #ffffff; font-size: 30px;" class="titulo">Crea perfiles para ni??os.</h4>
                        <div style="color: #ffffff; font-size: 15px;">
                            <p class="descripcion">
                            Los ni??os vivir??n aventuras con sus personajes
                            favoritos en un espacio dise??ado
                            exclusivamente para ellos, sin costo con tu
                            membres??a.
                          </p>
                        </div>
                    </aside>
                    <div class="reset"></div>
                </div>
              </div>
            </div>
        </div>
  </body>
  </html>
  <script src="main.js"></script>
  <div class="rightbar-overlay"></div>
  <script src="libs/jquery/jquery.min.js"></script>
  <script src="libs/metismenu/metisMenu.min.js"></script>
  <script src="libs/simplebar/simplebar.min.js"></script>
  <script src="libs/node-waves/waves.min.js"></script>
  <script src="libs/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="libs/peity/jquery.peity.min.js"></script>
  <script src="libs/morris.js/morris.min.js"></script>
  <script src="libs/raphael/raphael.min.js"></script>
  <script src="js/app.js"></script>
  <script src="libs/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
  <script src="js/pages/range-sliders.init.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  </body>
  </html>

