<? 
//if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
//    $redirect = 'https://esetcentroamerica.com/comprar/';
//    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' . $redirect);
//    exit();
//}
  require("include/geoip.inc"); 
  $abir_bd = geoip_open("include/GeoIP.dat",GEOIP_STANDARD);
  $ip=$_SERVER['REMOTE_ADDR'];
  $pais=geoip_country_name_by_addr($abir_bd, $_SERVER['REMOTE_ADDR']);
  geoip_close($abir_bd);  
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SIAT SA DE CV" />

    <!-- Stylesheets
	============================================= -->
    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="../style.css" type="text/css" />
    <link rel="stylesheet" href="./css/renovacion-styles.css" type="text/css" />
    <link rel="stylesheet" href="../css/dark.css" type="text/css" />
    <link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="../css/animate.css" type="text/css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="../css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script defer src="./js/index.js"></script>

    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Thu, 01 Dec 1994 16:00:00 GMT" />

    <!-- Document Title
	============================================= -->
    <title>ESET Renovar licencia en linea</title>

    <!-- Agregador para tienda en linea -->
    <script src="../js/2co.js"></script>

    <script type="text/javascript" src="../js/productos/renovacion.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109239025-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-109239025-1');
	</script>-->

    <!-- Google Tag Manager ESET LA-->
    <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N229J6');</script>-->
    <!-- End Google Tag Manager -->
  </head>

  <body class="stretched">
    <!-- Google Tag Manager (noscript) -->
    <!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N229J6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
    <!-- End Google Tag Manager (noscript) -->

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
      <!-- Header
		============================================= -->
      <header id="header" class="full-header">
        <div id="header-wrap">
          <div class="container clearfix">
            <!-- Logo
					============================================= -->
            <div id="logo" style="margin: 0 !important">
              <a
                href="https://eset.com/"
                class="standard-logo"
                data-dark-logo="../images/logo-dark.png"
                ><img src="../images/logo.png" alt="ESET Renovar Licencia"
              /></a>
              <a
                href="https://eset.com/"
                class="retina-logo"
                data-dark-logo="../images/logo-dark@2x.png"
                ><img src="../images/logo@2x.png" alt="ESET Renovar Licencia"
              /></a>
            </div>
            <!-- #logo end -->
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
            <div class="header-icons">
              <i class="icon-search icon-flip-horizontal"></i>
              <i class="icon-cart"></i>
            </div>
          </div>
        </div>
      </header>
      <!-- #header end -->
      <!-- dESKTOP NAV -->

      <!-- Content============================================= -->
      <section id="content">
        <div class="main__content">
          <div class="main__desktop-nav">
            <nav id="primary-menu">
              <ul>
                <li>
                  <a href="../index.html"
                    ><div>
                      <i class="icon icon-home2" style="font-size: 22px"></i
                      >Inicio
                    </div></a
                  >
                </li>
                <li>
                  <a href="../windows/index.html"
                    ><div><i class="icon icon-windows3"></i>Windows</div></a
                  >
                </li>
                <li>
                  <a href="../multi-device/index.html"
                    ><div>
                      <i class="icon icon-line-monitor"></i
                      ><i
                        class="icon icon-tablet"
                        style="margin-left: -12px"
                      ></i
                      >Multidevice
                    </div></a
                  >
                </li>
                <li>
                  <a href="../android/index.html"
                    ><div><i class="icon icon-android2"></i>Android</div></a
                  >
                </li>
                <li>
                  <a href="../mac/index.html"
                    ><div><i class="icon icon-apple"></i>Mac</div></a
                  >
                </li>
                <li>
                  <a href="../linux/index.html"
                    ><div><i class="icon icon-linux"></i>Linux</div></a
                  >
                </li>
                <li>
                  <a href="../renovacion"
                    ><div>
                      <i class="icon icon-reload icon-flip-horizontal"></i
                      >Renovar
                    </div></a
                  >
                </li>
              </ul>
            </nav>
          </div>
          <div class="main__product">
            <div class="main__product-left">
              <div class="main__heading">
                <h2>RENOVACIÓN PARA HOGAR (actualizacion de version).</h2>
                <p>
                  Si tienes una versión anterior, puedes actualizar a la última
                  versión de su solución de ESET por el mismo precio de
                  renovación de la versión de tu actual licencia.
                </p>
              </div>

              <div class="main__form-container">
                <div class="main__type-container">
                  <p>Dato de Usuario</p>
                  <select name="renovation" id="renovation">
                    <option value="" disabled selected hidden>
                      Selecciona una opción
                    </option>
                    <option value="1">Renovacion por Usuario</option>
                    <option value="2">Renovacion por Licencia</option>
                  </select>
                </div>

                <form
                  id="renew_form"
                  class="cart nobottommargin"
                  name="username"
                  method="post"
                >
                  <input
                    type="text"
                    class="form__input"
                    id=""
                    name="username"
                    placeholder="Por usuario"
                    autocomplete="off"
                    style="display: none"
                  />
                  <div class="form__submit">
                    <button
                      type="submit"
                      class="btn__submit"
                      name="validate_renew"
                    >
                      Consultar
                    </button>
                  </div>
                </form>

                <p>
                  Para renovar, debes tener a la mano tu Usuario o Llave de
                  Licencia.
                </p>

                <div id="startrenew"></div>

                <!--Espacio para colocar el formulario de renovacion (PHP)-->
                <div class="main__product-results">
                  <?php include_once("home2.php"); ?>
                </div>
              </div>
              <div class="main__footer">
                <h2>RENOVACIÓN PARA EMPRESAS.</h2>
                <p>
                  Si eres usuario corporativo y deseas renovar la licencia, te
                  invitamos a completar el siguiente formulario. Una vez
                  enviado, el distribuidor oficial de tu región, se pondrá en
                  contacto para asesorarlo.
                </p>
                <a href="#">Complete el formulario de contacto.</a>
              </div>
              <div class="main__mobile-product-right">
                <div class="faq">
                  <div class="faq__1">
                    <span>GARANTIA DE REMBOLSO: 30 días</span>
                  </div>
                  <div class="faq__2">
                    <div class="faq__video">
                      <span>¿DÓNDE ENCUENTRO MI USUARIO?</span>
                      <iframe
                        src="https://www.youtube.com/embed/D0Rungb-T1c"
                        frameborder="0"
                        allowfullscreen=""
                        id="fitvid0"
                      ></iframe>
                    </div>
                  </div>
                  <div class="faq__3">
                    <span>PREGUNTAS FRECUENTES.</span>
                    <div class="faq__container">
                      <div class="faq__item-1 faq__element">
                        <div class="faq__item-question">
                          <p>
                            ¿Cuales son los medios de pago aceptados en la
                            tienda en linea?
                          </p>
                          <img src="./img/left-chevron.png" alt="" />
                        </div>
                        <div class="faq__item-answer">
                        <span>
                          Las tarjetas de crédito y débito aceptadas en nuestra
                          tienda en línea son Visa, MasterCard, Discover,
                          Paypal, JCB, DebitCard, American Xpress, Diners Club
                          International.
                        </span>
                        </div>
                      </div>
                      <div class="faq__item-2 faq__element">
                        <div class="faq__item-question">
                          <p>¿Cuando y como recibo la licencia?</p>
                          <img src="./img/left-chevron.png" alt="" />
                        </div>
                        <div class="faq__item-answer">
                        <span>
                          Una vez acreditado tu pago, en el transcurso de los 30
                          minutos estarás recibiendo por correo electrónico el
                          usuario y contraseña, junto con las instrucciones para
                          instalar y activar tu solución de seguridad de ESET.
                        </span>
                        </div>
                      </div>
                      <div class="faq__item-3 faq__element">
                        <div class="faq__item-question">
                          <p>¿Cómo instalo el producto en mi equipo?</p>
                          <img src="./img/left-chevron.png" alt="" />
                        </div>
                        <div class="faq__item-answer">
                        <span>
                          <ol type="a">
                            <li>
                              Desinstala cualquier otro producto antivirus.
                            </li>
                            <li>Descarga el producto adquirido.</li>
                            <li>
                              Instala el producto ejecutando el archivo
                              descargado.
                            </li>
                            <li>
                              Activa tu solución de seguridad ingresando el
                              nombre de usuario y contraseña que recibiste por
                              correo electrónico.
                            </li>
                          </ol>
                        </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="main__trustbuilders">
                <div class="main__trustbuilders-left">
                  <div class="main__pagos">
                    <h2>MÉTODOS DE PAGO.</h2>
                    <p>
                      Visa, MasterCard, Discover, PayPal, JCB, DebitCard,
                      American Xpress, Diners Club International.
                    </p>
                  </div>
                  <div class="main__envios">
                    <h2>ENVÍO GRATIS.</h2>
                    <p>
                      Recibe tu licencia por e-mail en un plazo máximo de 24
                      horas.
                    </p>
                  </div>
                </div>
                <div class="main__trustbuilders-right">
                  <div class="main__premios">
                    <h2>PREMIOS.</h2>
                    <p>
                      La trayectoria de más de 25 años de nuestros productos, ha
                      sido reconocida por consultoras y laboratorios
                      independientes.
                    </p>
                  </div>
                  <div class="main__images">
                    <img
                      class="main__images-item"
                      src="./img/awards.png"
                      alt="100 Awards"
                    />
                    <img
                      class="main__images-item"
                      src="./img/av.png"
                      alt="AV"
                    />
                    <img
                      class="main__images-item"
                      src="./img/pc-world.png"
                      alt="PC World Premios"
                    />
                    <img
                      class="main__images-item last-one"
                      src="./img/pc-magazine.png"
                      alt="PC Magazine"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="main__product-right">
              <div class="faq">
                <div class="faq__1">
                  <span>GARANTIA DE REMBOLSO: 30 días</span>
                </div>
                <div class="faq__2">
                  <div class="faq__video">
                    <span>¿DÓNDE ENCUENTRO MI USUARIO?</span>
                    <iframe
                      src="https://www.youtube.com/embed/D0Rungb-T1c"
                      frameborder="0"
                      allowfullscreen=""
                      id="fitvid0"
                    ></iframe>
                  </div>
                </div>
                <div class="faq__3">
                  <span>PREGUNTAS FRECUENTES.</span>
                  <div class="faq__container">
                    <div class="faq__item-1 faq__element">
                      <div class="faq__item-question">
                        <p>
                          ¿Cuales son los medios de pago aceptados en la tienda
                          en linea?
                        </p>
                        <img src="./img/left-chevron.png" alt="" />
                      </div>
                      <div class="faq__item-answer">
                        <span>
                          Las tarjetas de crédito y débito aceptadas en nuestra
                          tienda en línea son Visa, MasterCard, Discover,
                          Paypal, JCB, DebitCard, American Xpress, Diners Club
                          International.
                        </span>
                      </div>
                    </div>
                    <div class="faq__item-2 faq__element">
                      <div class="faq__item-question">
                        <p>¿Cuando y como recibo la licencia?</p>
                        <img src="./img/left-chevron.png" alt="" />
                      </div>
                      <div class="faq__item-answer">
                        <span>
                          Una vez acreditado tu pago, en el transcurso de los 30
                          minutos estarás recibiendo por correo electrónico el
                          usuario y contraseña, junto con las instrucciones para
                          instalar y activar tu solución de seguridad de ESET.
                        </span>
                      </div>
                    </div>
                    <div class="faq__item-3 faq__element">
                      <div class="faq__item-question">
                        <p>¿Cómo instalo el producto en mi equipo?</p>
                        <img src="./img/left-chevron.png" alt="" />
                      </div>
                      <div class="faq__item-answer">
                        <span>
                          <ol type="a">
                            <li>
                              Desinstala cualquier otro producto antivirus.
                            </li>
                            <li>Descarga el producto adquirido.</li>
                            <li>
                              Instala el producto ejecutando el archivo
                              descargado.
                            </li>
                            <li>
                              Activa tu solución de seguridad ingresando el
                              nombre de usuario y contraseña que recibiste por
                              correo electrónico.
                            </li>
                          </ol>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #content end -->

      <!-- Footer
		============================================= -->
      <footer id="footer" class="dark footer">
        <!-- Copyrights
			============================================= -->
        <div id="copyrights">
          <div class="copyrights__container">
            <div class="copyrights__social">
              <div class="copyrights__left">
                © Copyright 2017<br />
                ESET, LLC y ESET, spol. s.r.o. Todos los derechos reservados<br />
                <div class="copyright-links">
                  <a href="#">Términos de uso</a> /
                  <a href="#">Política de devolución</a>
                </div>
              </div>
              <div class="copyrights__right">
                <a
                  href="#"
                  class="social-icon si-small si-borderless si-facebook"
                >
                  <i class="icon-facebook"></i>
                  <i class="icon-facebook"></i>
                </a>

                <a
                  href="#"
                  class="social-icon si-small si-borderless si-twitter"
                >
                  <i class="icon-twitter"></i>
                  <i class="icon-twitter"></i>
                </a>
              </div>
            </div>
            <div class="copyrights__shopify">
              <img src="./img/shopify.png" alt="Shopify Logo" />
              <p>© 2021, ESETCR. https://es.shopify.com/</p>
            </div>
          </div>
        </div>
        <!-- #copyrights end -->
      </footer>
      <!-- #footer end -->
    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
	============================================= -->
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/plugins.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script type="text/javascript" src="../js/functions.js"></script>
    <script defer src="./js/form-functions.js"></script>
  </body>
</html>
