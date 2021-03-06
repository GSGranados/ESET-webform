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
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../style.css" type="text/css" />
	<link rel="stylesheet" href="../css/dark.css" type="text/css" />
	<link rel="stylesheet" href="../css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
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
	<style>
		.totales{
			border: none;
			width: 100px;
		}
		.esetbuton{
			text-align: center;
		}
	</style>
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

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="https://eset.com/" class="standard-logo" data-dark-logo="../images/logo-dark.png"><img src="../images/logo.png" alt="ESET Renovar Licencia"></a>
						<a href="https://eset.com/" class="retina-logo" data-dark-logo="../images/logo-dark@2x.png"><img src="../images/logo@2x.png" alt="ESET Renovar Licencia"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="../index.html"><div><i class="icon icon-home2" style="font-size: 22px;"></i></div></a></li>
							<li><a href="../windows/index.html"><div><i class="icon icon-windows3"></i>Windows</div></a></li>
							<li><a href="../multi-device/index.html"><div><i class="icon icon-line-monitor"></i><i class="icon icon-tablet" style="margin-left: -12px;"></i>Multidevice</div></a></li>
							<li><a href="../android/index.html"><div><i class="icon icon-android2"></i>Android</div></a></li>
							<li><a href="../mac/index.html"><div><i class="icon icon-apple"></i>Mac</div></a></li>
							<li><a href="../linux/index.html"><div><i class="icon icon-linux"></i>Linux</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h3>Renovaci??n de Licencia</h3>
				<ol class="breadcrumb">
				  <li><a href="../index.html">Inicio</a></li>
					<li><a href="index.html">Renovaci??n</a></li>
				</ol>
			</div><!-- #page-title end -->
			
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_four_fifth product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price">
									<blockquote>
  										<p>Para renovar, favor de tener a mano su Usuario ?? Llave de Licencia.</p>
  										<footer>??Donde encuentro mi usuario? - <a href="#video">Click Aqu??</a></footer>
									</blockquote>
								</div><!-- Product Single - Price End -->

								<div class="clear"></div>
								<div class="line"></div>

								<!-- Product Single - Quantity & Cart Button
								============================================= -->
							
								<form id="renew_form" class="cart nobottommargin clearfix" name="username" method="post">
									<div class="form-group">
  										<div class="col-sm-6">
  											<input type="text" class="form-control" id="" name="username" placeholder="Por usuario" autocomplete="off">
  											<sub>Ejemplo: EAV-XXXXXX</sub>
  										</div>
  										<div class="col-sm-2">
  											<button type="submit" class="btn btn-success" name="validate_renew">Consultar</button>
  										</div>
  									</div>
								</form>
 									
 								<div class="clear"></div>
								<div class="line"></div>
  									
								<form id="renew_form" class="cart nobottommargin clearfix" name="licensekey" method="post">
  									<div class="form-group">
  										<div class="col-sm-6">
  											<input type="text" class="form-control" id="" name="licensekey" placeholder="Por llave de licencia" autocomplete="off">
  											<sub>Ejemplo: XXXX-XXXX-XXXX-XXXX-XXXX</sub>
  										</div>
  										<div class="col-sm-2">
  											<button type="submit" class="btn btn-success" name="validate_renew">Consultar</button>
  										</div>
  									</div>
  								</form>
  								
  								<div class="clear"></div>
								<div class="line" id="startrenew"></div>
								<br><br>
								
							    <!--Espacio para colocar el formulario de renovacion (PHP)-->
								<?php include_once("home2.php"); ?>
							</div>

							<div class="col_one_fifth col_last">

								<a href="#" title="Brand Logo" class="hidden-xs">&nbsp;</a>

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-credit-cards"></i>
									</div>
									<h3>M??todos de Pago</h3>
									<p class="notopmargin">Visa, MasterCard, Discover, Paypal, JCB, DebitCard, American Xpress, Diners Club International.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-truck2"></i>
									</div>
									<h3>Envi?? Gratis</h3>
									<p class="notopmargin">Recibe tu licencia por E-mail en un <strong>plazo m??ximo de 24 Horas</strong>.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-undo"></i>
									</div>
									<h3>Garant??a de Reembolso</h3>
									<p class="notopmargin">Por 30 d??as.</p>
								</div>

							</div>
							<div class="col-md-12" id="video"><div class="clear"></div>
							<div class="col_full nobottommargin">

								<div class="tabs clearfix nobottommargin" id="tab-1">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="hidden-xs"> Descripci??n</span></a></li>
										<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="hidden-xs"> Preguntas Frecuentes</span></a></li>
										<li><a href="#tabs-3"><i class="icon-star3"></i><span class="hidden-xs"> Premios</span></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
										<div class="col-md-6" style="max-height: 350px; overflow: scroll; overflow-x: hidden;">
											<h3>Contin??a con la mejor protecci??n a un precio especial.</h3>
											<p><strong>Actualizaci??n de versi??n</strong><br>
											Si tienes una versi??n anterior, puedes actualizar a la ??ltima versi??n de su soluci??n de ESET por el mismo precio de renovaci??n de la versi??n de tu actual licencia.</p>
											<p>Renovaci??n para empresas<br>
											A los usuarios corporativos que deseen renovar sus licencias los invitamos a completar el siguiente formulario. Una vez enviado, el distribuidor oficial de su regi??n se pondr?? en contacto a la brevedad para asesorarlo.<br>
											<a href="#">Complete el formulario de contacto.</a></p>
											
										</div>
										<div class="col-md-6">
											<iframe src="https://www.youtube.com/embed/D0Rungb-T1c" frameborder="0" allowfullscreen></iframe>
										</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2" style="max-height: 350px; overflow: scroll; overflow-x: hidden;">

											<table class="table table-striped table-bordered">
												<tbody>
													<tr>
														<td>1. ??Cu??les son los medios de pago aceptados en la tienda en l??nea? </td>
														<td>Las tarjetas de cr??dito y d??bito aceptadas en nuestra tienda en l??nea son Visa, MasterCard, Discover, Paypal, JCB, DebitCard, American Xpress, Diners Club International.</td>
													</tr>
													<tr>
														<td>2. ??Cu??ndo y c??mo recibo la licencia? </td>
														<td>Una vez acreditado tu pago, en el transcurso de los 30 minutos estar??s recibiendo por correo electr??nico el usuario y contrase??a, junto con las instrucciones para instalar y activar tu soluci??n de seguridad de ESET.</td>
													</tr>
													<tr>
														<td>3. ??C??mo instalo el producto en mi equipo? </td>
														<td>
															<ul style="list-style:none;">
																<li>a) <a href="http://kb.eset-la.com/esetkb/index?page=content&id=SOLN146&querysource=external_es&locale=es_ES&_ga=2.209327632.38336471.1511452455-562352666.1510690153">Desinstala cualquier otro producto antivirus.</a></li>
																<li>b) <a href="http://www.eset-la.com/download/software-registrado?_ga=2.209327632.38336471.1511452455-562352666.1510690153">Descarga el producto adquirido.</a></li>
																<li>c) Instala el producto ejecutando el archivo descargado. </li>
																<li>d) Activa tu soluci??n de seguridad ingresando el nombre de usuario y contrase??a que recibiste por correo electr??nico.</li>
															</ul>
														</td>
													</tr>
													<tr>
														<td>4. ??Qu?? diferencia hay entre ESET NOD32 Antivirus y ESET Internet Security?</td>
														<td>
															<p>ESET NOD32 Antivirus provee la m??s moderna protecci??n para tu computadora contra c??digos maliciosos. Las avanzadas t??cnicas de an??lisis son capaces de bloquear pro-activamente virus, Spyware, troyanos, gusanos, adware y rootkits sin ralentizar tu equipo.</p>
															<p>ESET Internet Security es una suite integrada de seguridad que adem??s de lo mencionado antes incorpora un m??dulo de Control Parental para cuidar a los ni??os en la web, un Firewall Personal, Antispam y Protecci??n para transacciones y banca online para que puedas navegar y comprar en forma m??s segura.</p>
														</td>
													</tr>
													<tr>
														<td>5. ??Qu?? versi??n de mi soluci??n de seguridad (32 o 64 bits) debo descargar? </td>
														<td>Te sugerimos la lectura del siguiente art??culo para reconocer la versi??n del sistema operativo instalada en tu equipo: <a href="http://kb.eset-la.com/esetkb/index?page=content&id=SOLN523">http://kb.eset-la.com/esetkb/index?page=content&id=SOLN523</a></td>
													</tr>
													<tr>
														<td>6. ??C??mo puedo contactarme con ESET si necesito ayuda?</td>
														<td>Puedes contactarte con nosotros a trav??s de nuestro chat online o del <a href="https://esetca.com/soporte/contact.php">formulario de soporte t??cnico.</a></td>
													</tr>
													<tr>
														<td>Si tienes otras preguntas, te sugerimos visitar</td>
														<td><a href="http://kb.eset-la.com/?_ga=2.128153998.38336471.1511452455-562352666.1510690153">Nuestra base de conocimiento.</a></td>
													</tr>
												</tbody>
											</table>

										</div>
										<div class="tab-content clearfix" id="tabs-3" style="max-height: 350px; overflow: scroll; overflow-x: hidden;">

											<div id="reviews" class="clearfix">
												<p>Tanto la trayectoria de m??s de 25 a??os de ESET como la de sus productos han sido reconocidas por consultoras y laboratorios independientes.</p>

												<ol class="commentlist clearfix">

													<li class="comment even thread-even depth-1 col-lg-12" id="li-comment-1">
														<div id="comment-1" class="comment-wrap clearfix col-md-6">

															<div class="comment-meta col-lg-3">
																<div class="comment-author vcard">
															    	<img src="../images/galardones/100_award.jpg" alt=""/> 
															    </div>
															</div>

															<div class="comment-content clearfix col-lg-8">
																<div class="comment-author">Virus Bulletin</div>
																<p>SET es el m??ximo ganador de los premios VB100 otorgados por Virus Bulletin. Desde Mayo de 1998, ESET NOD32 tiene el mejor porcentaje de ??xito en participaciones y no ha omitido ning??n virus In-the-Wild en todas sus participaciones.</p>
															</div>

															<div class="clear"></div>

														</div>
														<div id="comment-1" class="comment-wrap clearfix col-lg-6">

														  <div class="comment-meta col-md-3">
																<div class="comment-author vcard">
															  		<img src="../images/galardones/comparative_award.jpg" alt=""/> 
															  	</div>
														  </div>

															<div class="comment-content clearfix col-lg-8">
																<div class="comment-author">AV-Comparatives</div>
																<p>ESET es la empresa que tiene m??s menciones ADVANCED+ (la m??s alta) en las evaluaciones de detecci??n realizadas por el prestigioso laboratorio AV-Comparatives.</p>
															</div>

															<div class="clear"></div>

														</div>
													</li>

													<li class="comment even thread-even depth-1 col-lg-12" id="li-comment-1">
														<div id="comment-1" class="comment-wrap clearfix col-md-6">

															<div class="comment-meta col-lg-3">
																<div class="comment-author vcard">
															    	<img src="../images/galardones/mexico-award.jpg" alt=""/> 
															    </div>
															</div>

															<div class="comment-content clearfix col-lg-8">
																<div class="comment-author">PC World M??xico</div>
																<p>ESET Endpoint Security gan?? el premio PC World M??xico 2012, otorgado por la prestigiosa revista PC World M??xico, en la categor??a ???Mejor suite de seguridad para PyME???. Adem??s ESET Smart Security recibi?? por cuatro a??os consecutivos un Premio PC World en la categor??a ???Mejor Suite de Seguridad para el Hogar???.</p>
															</div>

															<div class="clear"></div>

														</div>
														<div id="comment-1" class="comment-wrap clearfix col-md-6">

														  <div class="comment-meta col-lg-3">
																<div class="comment-author vcard">
															  		<img src="../images/galardones/pcmag-award.jpg" alt=""/> 
															  	</div>
														  </div>

															<div class="comment-content clearfix col-lg-8">
																<div class="comment-author">PC Mag</div>
																<p>ESET gan?? la categor??a ???Stand Alone Antivirus??? de los premios Consumer Recommended de la prestigiosa publicaci??n PCMag, que fueron entregados por primera vez en 2012. Para la entrega de este premio, se tuvo en cuenta la opini??n de m??s de 25 millones de lectores que eligieron a ESET como la mejor opci??n para la protecci??n de los equipos.</p>
															</div>

															<div class="clear"></div>

														</div>
													</li>

												</ol>

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					<!-- <div class="col_full nobottommargin">

						<h4>Otros Productos</h4>

						<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xxs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/windows/eis_800x800.png" alt=""></a>
										<div class="sale-flash">Windows</div>
										<div class="product-overlay">
											<a href="internet-security.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/linux/enal_800x800_2.png" alt=""></a>
										<div class="sale-flash">Linux</div>
										<div class="product-overlay">
											<a href="nod32-linux.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/mac/ecsp_800x800_8.png" alt=""></a>
										<div class="sale-flash">MAC</div>
										<div class="product-overlay">
											<a href="cyber-security-p.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/mobile/ecp_800x800_1.png" alt=""></a>
										<div class="sale-flash">Android</div>
										<div class="product-overlay">
											<a href="parental-control.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/multidevice/emds_800x800.png" alt=""></a>
										<div class="sale-flash">Multi</div>
										<div class="product-overlay">
											<a href="multidevice.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
										<a href="#"><img src="images/cajitas/empresas/ehos_800x800_2.png" alt=""></a>
										<div class="sale-flash">Pyme</div>
										<div class="product-overlay">
											<a href="pymes.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Ver Detalles</span></a>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div> -->

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						?? Copyright 2017<br>
						ESET, LLC y ESET, spol. s.r.o. Todos los derechos reservados<br>
						<div class="copyright-links"><a href="#">T??rminos de uso</a> / <a href="#">Pol??tica de devoluci??n</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
						</div>

						<div class="clear"></div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

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
	
	<script>
		$(window).load(function(){
			$("#renewpop").popover('show');
		});
	</script>


</body>
</html>