<?php
	 
	 include("include/paths.php");
	 require("include/store_procedures.php");
	 
	 //Iniciando autenticacion a API Dexter
     $data_returned=logintodexter($API_user,$API_pwd,$API_URL,$API_Port,$API_debugger_info);	
	 if ($data_returned==false)
	    {$control = "Ha ocurrido un error, problema de comunicacion al servidor core DX"; //variable de control para error obtenido
		 echo $control;
		 exit();
		} else if ($data_returned->{'token'})
		          {$API_Token = $data_returned->{'token'};
		          } else {$control = "Servicio temporalmente no disponible, error en credenciales de sistema"; //variable de control para error obtenido
				          echo $control;
						  exit();
				         }//fin de control de autenticacion API Dexter
				
				
     //usuario ocupado para prueba de consulta DX - API						 
	// $username_lic="EAV-0147220350";
	   if(isset($_POST['username'])||isset($_POST['licensekey'])){
	   $username_lic=trim($_POST['username']);
	   $licensekey_lic=trim($_POST['licensekey']);
		   
	   if($username_lic!=""){$siat17e=$username_lic;}else{$siat17e=$licensekey_lic;}
	
	 	 
	 //obteniendo datos de licenciamiento - EPLI ocupado para toda operacion referente a licenciamientos
	 $data_license = getdatalicense($licensekey_lic,$username_lic,$API_Token,$API_URL,$API_Port,$API_debugger_info);
	 if ($data_license->{'License'})//validando si se obtuvo data en consulta del usuario ingresado
	    {$licenseusername = $data_license->{'License'}[0]->{'Credentials'}->{'Username'};
	     $licensepassword = $data_license->{'License'}[0]->{'Credentials'}->{'Password'};
	     $license_EPLI = $data_license->{'License'}[0]->{'Credentials'}->{'EPLI'};
		 $license_LicenseKey = $data_license->{'License'}[0]->{'Credentials'}->{'LicenseKey'};
	     $license_expiration = $data_license->{'License'}[0]->{'LicenseInfo'}->{'ExpirationDate'};
	     $license_product = $data_license->{'License'}[0]->{'LicenseInfo'}->{'Product'};

	 	 $license_product_name = getproductname($license_product);
		 $license_BundleProduct = $data_license->{'License'}[0]->{'BundleProduct'}->{'Product'};
		 $license_BundleProduct_name = getproductname($license_BundleProduct);
		 $license_quantity = $data_license->{'License'}[0]->{'LicenseInfo'}->{'Quantity'};
		 $license_type = $data_license->{'License'}[0]->{'LicenseInfo'}->{'PurchaseType'};
		 $license_type_id = $data_license->{'License'}[0]->{'LicenseInfo'}->{'PurchaseTypeId'};
		 $license_name = $data_license->{'License'}[0]->{'Customer'}->{'Name'};
		 $license_company = $data_license->{'License'}[0]->{'Customer'}->{'Company'};
		 $license_email = $data_license->{'License'}[0]->{'Customer'}->{'Email'};
		 $license_pais = $data_license->{'License'}[0]->{'Customer'}->{'CountryId'};
		 $license_pais_name = getpais($license_pais);
		 $license_note= $data_license->{'License'}[0]->{'LicenseInfo'}->{'Note'};
		 $license_state = $data_license->{'License'}[0]->{'LicenseInfo'}->{'State'};

		
		$expire = $license_expiration;
	    $explode = explode('/',$expire);
	    $expire = $explode[2]."-".$explode[0]."-".$explode[1];
        $date = date('Y-m-d');
	    $dateStart = date('Y-m-d', strtotime($expire. ' - 90 days'));
	    $dateEnd = date('Y-m-d', strtotime($expire. ' + 60 days'));
		
	//	echo $license_expiration."---".$date."---".$dateStart."---".$dateEnd;
	//echo $license_product_name;	
if ($license_email == ""){
	$mensaje2= "Licencia no valida o se compro fuera de Centroamerica.<br />Favor enviar correo a tiendaonline@esetca.com para validar su caso.";
	}
	elseif ($date>$dateEnd){
		$mensaje2= "El período de renovación para esta licencia ha expirado.<br />Usted necesitará adquirir una nueva licencia para continuar protegido con ESET.";
		}elseif ($date<$dateStart) {
		$mensaje2="Su licencia vence el ".$expire.", <br />podrá renovarla 90 días antes o 60 días después de esa fecha.";
				
		}else{
		
		$dato=0;	 
			if ($license_product_name=="ESET Smart Security"){ $dato=1;}
			if ($license_product_name=="ESET Internet Security"){ $dato=2;}
			if ($license_product_name=="ESET NOD32 Antivirus"){ $dato=3;}
			if ($license_product_name=="ESET Mobile Security"){ $dato=4;}
			if ($license_product_name=="ESET Smart Security Premium"){ $dato=5;}
			if ($license_product_name=="ESET Parental Control for Android"){ $dato=6;}
		    if ($license_product_name=="(N)ESET Multi-Device Security Pack" || $license_product_name=="ESET Multi-Device Security Pack"){ $dato=7;}	
		    if ($license_product_name=="ESET Cyber Security"){ $dato=7;}
			if ($license_product_name=="ESET Cyber Security Pro"){ $dato=8;}
		
			$productocode=0;$essforeis='0';
			if ($license_product_name=="ESET Internet Security"){
				$productocode=1;$thumbproducto='windows/eis_800x800.png';$producturl='../windows/internet-security.html';
			}
		    if ($license_product_name=="(N)ESET Multi-Device Security Pack" || $license_product_name=="ESET Multi-Device Security Pack"){
				$productocode=2;$thumbproducto='windows/emds_800x800.png';$producturl='../multi-device/multi-device-security.html';
			}		
			if ($license_product_name=="ESET NOD32 Antivirus"){
				$productocode=3;$thumbproducto='windows/ena_800x800_3.png';$producturl='../windows/nod32.html';
			}
			if ($license_product_name=="ESET Smart Security"){
				$productocode=4;$thumbproducto='windows/eis_800x800.png';$producturl='../windows/internet-security.html';$essforeis='1';
			}
			if ($license_product_name=="ESET Smart Security Premium"){
				$productocode=5;$thumbproducto='windows/essp_800x800_1.png';$producturl='../windows/smart-security-premium.html';
			}	
			if ($license_product_name=="ESET Parental Control for Android"){
				$productocode=6;$thumbproducto='mobile/ecp_800x800_1.png';$producturl='../android/parental-control.html';
			}
			if ($license_product_name=="ESET Mobile Security"){
				$productocode=7;$thumbproducto='mobile/ems_800x800_2.png';$producturl='../android/mobile-security.html';
			}
			if ($license_product_name=="ESET Cyber Security"){
				$productocode=8;$thumbproducto='mac/ecs_800x800_8.png';$producturl='../mac/cyber-security.html';$bloqueo="hidden";
			}
			if ($license_product_name=="ESET Cyber Security Pro"){
				$productocode=9;$thumbproducto='mac/ecsp_800x800_8.png';$producturl='../mac/cyber-security-pro.html';$bloqueo="hidden";
			}
		
			//Validacion de renovacion para paises validos ESETca
			if(($license_pais=='111') || ($license_pais=='105') || ($license_pais=='104') || ($license_pais=='118') || ($license_pais=='113')){$go='1';}else{$go='0';}
		
			//Asignacion de codigo de pais para 2CO, extrangeros se asignan directamente a guatemala
			if($license_pais=='111'){$acropais='CR';}
				else{
				if($license_pais=='105'){$acropais='GT';}
					else{
						if($license_pais=='104'){$acropais='SV';}
						else{
							if($license_pais=='118'){$acropais='HN';}
							else{
								if($license_pais=='113'){$acropais='NI';}
								else{$acropais='GT';}
							}
						}
					}
				}
				
			if ($license_type_id==1 || $license_type_id==2 || $license_type_id==3 || $license_type_id==9 || $license_type_id==12){
				
				  if (($dato > 0)&&($go=="1")){$mensaje = " Licencias si aplica a renovación".'<br>';
				   //echo $mensaje;
				   
				   $loadb='onload="ShowSelected(); activerenew();"';
				echo"<a href='#startrenew' id='hazClick' style='display: none;'>.</a>";
																								 
				echo"
					<div class='panel panel-default' >
  						<div class='panel-heading'>
    						<h3 class='panel-title'>".$mensaje."</h3>
  						</div>
  						<div class='panel-body'>
					
					<form action='https://www.2checkout.com/checkout/purchase' method='post'>
					<div class='pricing-box pricing-extended bottommargin clearfix'>

						<div class='pricing-desc'>
							<div class='pricing-title'>
								<h3>Detalles de licenciamiento</h3>
							</div>
							<div class='pricing-features'>
								<ul class='clearfix'>
									<li> 
										<a><img src='../images/cajitas/".$thumbproducto."' width='128' height='128' alt='".$license_product_name."' ".$loadb." /></a>
									</li>
									<li><i class='icon-settings'></i> ".$siat17e." </li>
									<li><i class='icon-reload'></i> ".$license_product_name." </li>
									<li><i class='icon-line-lock'></i> ".$license_quantity." Equipos </li>
									<li><i class='icon-calendar-empty'></i> Vence: ".$expire." </li>
								</ul>";
								
								if($essforeis!='0'){
									echo"<p><i class='icon icon-info-sign'></i> <strong>ESET Smart Security</strong> ha sido reemplazado por el nuevo y mejorado ESET Internet Security</p>";
								}
								
								echo "<div class='col_full'>
									<div class='form-group-lg'>
      									<label for='card_holder_name'>Propietario</label>
										<input type='text' class='sm-form-control' name='card_holder_name' value='".utf8_decode($license_name)."' required />
    								</div>
									<br>
									<div class='form-group-lg'>
      									<label for='email'>E-mail</label>
										<input type='email' class='sm-form-control' name='email' value='".$license_email."' required />
									</div>
								</div>
							</div>
						</div>

						<div class='pricing-action-area'>
							<div class='pricing-meta'>
								<strong>Renovar para</strong><br>
								<select class='sm-form-control' id='tiemporenew' onchange='ShowSelected();'>
									<option value='1' >1 Año</option>
									<option value='2' >2 Años</option>
									<option value='3' ".$bloqueo." >3 Años</option>
								</select>
							</div>
							<div class='pricing-price'>
								<span class='price-unit'>&#36; <input type='text' class='totales' id='subtotal' readonly></span>
							</div>
							<div class='pricing-action'>
								<button type='submit' id='renewpop' class='button button-3d button-blue' rel='popover' data-placement='bottom' data-content='¡El proceso de Renovación puede tardar un máximo de 24 Horas!, caso contrario comunicarse con Atención al cliente.' data-original-title='¡Nota Importante!'>Renovar</button>
							</div>

						</div>

					</div>

					<div class='row clearfix'>
						<input type='hidden' id='lang' name='lang' value='es_la'>
    					<input type='hidden' name='sid' value='99812' />
						<input type='hidden' name='mode' value='2CO' />
						<input type='hidden' name='li_0_product_id' id='li_0_product_id' >
						<input type='hidden' name='li_0_type' value='product' />
						<input type='hidden' name='li_0_name' id='li_0_name' />
						<input type='hidden' name='li_0_price' id='subtotal3' />
						<input type='hidden' name='street_address' value='".$license_pais."-".$license_pais_name."' />
						<input type='hidden' name='street_address2' value='".$licenseusername."' />
						<input type='hidden' name='country' value='".$acropais."' />
						<input type='hidden' name='city' value='".$license_pais_name."' />
						<input type='hidden' name='phone' value='614-921-2450' />
						<input type='hidden' id='productocode' value='".$productocode."' />
						<input type='hidden' id='cantlicencias1' value='".$license_quantity."' />
						</form>
					</div>
					
					
					<div class='panel panel-default' style='margin-top:-55px;' >
						<div class='panel-body bg-info'>
							<p>Nota: Al renovar se mantendrá la misma cantidad de equipos, solo se puede cambiar el tiempo de duración de las licencias.<br>Si desea cambiar la cantidad de equipos contactarse con Soporte ESET</p>
							<a href='https://www.esetca.com/soporte/contact.php' target='_blank' class='button button-3d button-blue'>Atención al Cliente</a>
						</div>
					</div>
 					
  						</div>
					</div>
				</div>
					";
		     } 
			    else{
				   $mensaje2 = " Licencias no aplica a renovación";
					
				  }
				
				}
		 
		}
		
		 //echo $mensaje2;
		 echo "
				<br>
				<div class='panel panel-default' >
  					<div class='panel-heading'>
    					<h3 class='panel-title'>".$mensaje2."</h3>
  					</div>
  					<div class='panel-body'>
						<div class='product-price'>
							<blockquote>
								<p>Validar los datos ingresados o usar una de las siguientes opciones:</p>
  								<footer><p>Solicitar Asistencia:<br><a class='btn btn-primary' href='https://www.esetca.com/soporte/contact.php'>Crear Ticket Soporte</a></p>
								<p>Adquirir Licencia Nueva:<br><a class='btn btn-primary' href='../index.php'>Comprar</a></p></footer>		
							</blockquote>
						</div><!-- Product Single - Price End -->
					</div>
				</div>
			";
		 
		 
		 
	     $license_state = $data_license->{'License'}[0]->{'LicenseInfo'}->{'State'};
		 //datos en array, disponible documentacion en pag.57 del manual API 
	    } else {$control = 'Ocurrio un problema consultando el licenciamiento '.$licenseusername;
				echo"
				<br>
				<div class='panel panel-default' >
  					<div class='panel-heading'>
    					<h3 class='panel-title'>".$control."</h3>
  					</div>
  					<div class='panel-body'>
						<div class='product-price'>
							<blockquote>
								<p>Validar los datos ingresados o usar una de las siguientes opciones:</p>
  								<footer><p>Solicitar Asistencia:<br><a class='btn btn-primary' href='https://www.esetca.com/soporte/contact.php'>Crear Ticket Soporte</a></p>
								<p>Adquirir Licencia Nueva:<br><a class='btn btn-primary' href='../index.php'>Comprar</a></p><footer>			
							</blockquote>
						</div><!-- Product Single - Price End -->
					</div>
				</div>";
				
				//echo $control;
		       }//fin para la obtencion de datos generales de licenciamiento	 

	   }
	  
?>