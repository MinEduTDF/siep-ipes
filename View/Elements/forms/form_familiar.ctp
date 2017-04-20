<?php echo $this->Html->script(array('tooltip', 'moment', 'bootstrap-datetimepicker')); ?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<div class="row">
	<div class="col-xs-6 col-sm-3">
	    <?php echo $this->Form->input('created', array('label' => 'Creado*', 'id' => 'datetimepicker1', 'type' => 'text', 'class' => 'input-group date', 'class' => 'form-control', 'span class' => 'fa fa-calendar')); ?>
    </div>
</div><hr />
<div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
	  <div class="unit"><strong>Datos Generales</strong><hr />
		  <?php
              echo $this->Form->input('alumno_id', array('label'=>'Alumno*', 'empty' => 'Ingrese un alumno...', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
              $vinculos = array('Padre' => 'Padre', 'Madre'=>'Madre', 'Tutor'=>'Tutor');
              echo $this->Form->input('vinculo', array('label'=>'Vinculo*', 'empty' => 'Ingrese un vinculo...', 'options' => $vinculos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción'));
              echo $this->Form->input('nombre_completo', array('label'=>'Nombre Completo*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el nombre completo', 'Placeholder' => 'Ingrese el nombre completo...'));
              $nacionalidades = array('América del Sur' => array( 'Argentino' => 'Argentino', 'Boliviana' => 'Boliviana', 'Brasileña' => 'Brasileña', 'Chilena' => 'Chilena', 'Colombiana' => 'Colombiana',
									  'Ecuatoriana' => 'Ecuatoriana', 'Guyanesa' => 'Guyanesa', 'Paraguaya' => 'Paraguaya', 'Peruana' => 'Peruana', 'Surinamesa' => 'Surinamesa', 'Uruguaya' => 'Uruguaya', 
									  'Venezolana' => 'Venezolana'),
							   'América Central' => array( 'Beliceña' => 'Beliceña', 'Costarricense' => 'Costarricense', 'Guatemalteca' => 'Guatemalteca', 'Hondureña' => 'Hondureña', 'Nicaragüense' => 'Nicaragüense',
														   'Salvadoreña' => 'Salvadoreña'),
							   'América del Norte' => array( 'Canadiense' => 'Canadiense', 'Estadounidense' => 'Estadounidense', 'Mexicana' => 'Mexicana'),
							   'Caribe' => array( 'Cubana' => 'Cubana', 'Arubana' => 'Arubana', 'Bahameña' => 'Bahameña', 'Barbadense' => 'Barbadense', 'Dominiquesa' => 'Dominiquesa',
												  'Dominicana' => 'Dominicana', 'Haitiana' => 'Haitiana', 'Jamaiquina' => 'Jamaiquina', 'Puertorriqueña' => 'Puertorriqueña', 'Sancristobaleña' => 'Sancristobaleña', 'Santaluciana' => 'Santaluciana',
												  'Sanvicentina' => 'Sanvicentina'),
							   'Europa' => array( 'Albanesa' => 'Albanesa', 'Alemana' => 'Alemana', 'Andorrana' => 'Andorrana', 'Armenia' => 'Armenia', 'Austríaca' => 'Austríaca', 'Belga' => 'Belga', 
												  'Bielorrusa' => 'Bielorrusa', 'Bosnia' => 'Bosnia', 'Búlgara' => 'Búlgara', 'Checa' => 'Checa', 'Chipriota' => 'Chipriota', 'Croata' => 'Croata',
												  'Danesa' => 'Danesa', 'Escocesa' => 'Escocesa', 'Eslovaca' => 'Eslovaca', 'Hindú' => 'Hindú', 'Eslovena' => 'Eslovena', 'Española' => 'Española', 'Estonia' => 'Estonia',
												  'Finlandesa' => 'Finlandesa', 'Francesa' => 'Francesa', 'Griega' => 'Griega', 'Holandesa' => 'Holandesa', 'Húngara' => 'Húngara', 'Británica' => 'Británica', 'Irlandesa' => 'Irlandesa',
												  'Italiana' => 'Italiana', 'Letona' => 'Letona', 'Lituana' => 'Lituana', 'Luxemburguesa' => 'Luxemburguesa',  'Maltesa' => 'Maltesa', 'Moldava' => 'Moldava', 'Monegasca' => 'Monegasca',
												  'Montenegrina' => 'Montenegrina', 'Noruega' => 'Noruega', 'Polaca' => 'Polaca', 'Luxemburguesa' => 'Luxemburguesa', 'Portuguesa' => 'Portuguesa', 'Rumana' => 'Rumana', 'Rusa' => 'Rusa',
												  'Serbia' => 'Serbia', 'Sueca' => 'Sueca', 'Suiza' => 'Suiza', 'Turca' => 'Turca', 'Ucraniana' => 'Ucraniana'),
							   'Oceanía' => array( 'Australiana' => 'Australiana', 'Neozelandesa' => 'Neozelandesa'),
							   'Asia' => array( 'Afgana' => 'Afgana', 'Azerbaiyana' => 'Azerbaiyana', 'Bangladesí' => 'Bangladesí', 'Bareiní' => 'Bareiní', 'China' => 'China', 'Liberiana' => 'Liberiana',
												'Emiratí' => 'Emiratí', 'Filipina' => 'Filipina', 'Georgiana' => 'Georgiana', 'Hindú' => 'Hindú', 'Indonesia' => 'Indonesia', 'Israelí' => 'Israelí', 'Japonesa' => 'Japonesa',
												'Libanesa' => 'Libanesa', 'Mongola' => 'Mongola', 'Norcoreana' => 'Norcoreana', 'Hindú' => 'Hindú', 'Siria' => 'Siria', 'Surcoreana' => 'Surcoreana', 'Vietnamita' => 'Vietnamita'
							   ),
							   'África' => array( 'Argelina' => 'Argelina', 'Camerunesa' => 'Camerunesa', 'Etíope' => 'Etíope', 'Ecuatoguineana' => 'Ecuatoguineana', 'Egipcia' => 'Egipcia', 'Liberiana' => 'Liberiana',
												  'Libia' => 'Libia', 'Marroquí' => 'Marroquí', 'Namibia' => 'Namibia', 'Nigeriana' => 'Nigeriana', 'Saharaui' => 'Saharaui', 'Senegalesa' => 'Senegalesa', 'Sudafricana' => 'Sudafricana', 'Togolesa' => 'Togolesa'),
							);
			  echo $this->Form->input('nacionalidad', array('label'=>'Nacionalidad*', 'empty' => 'Ingrese una nacionalidad...',  'options' => $nacionalidades, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
			  echo $this->Form->input('cuit_cuil', array('label'=>'Cuil / Cuit', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un nº de CUIL/CUIT', 'Placeholder' => 'Ingrese un nº de cuil/cuit...'));
              echo $this->Form->input('ocupacion', array('label'=>'Ocupacion*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese una ocupación', 'Placeholder' => 'Ingrese una ocupación...'));
      ?>
	  </div>
	  <?php echo '</div><div class="col-md-6 col-sm-6 col-xs-12">'; ?>
      <div class="unit"><strong>Datos de Contacto</strong><hr />
          <?php
			  echo $this->Form->input('domicilio', array('label' => 'Domicilio*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese el domicilio real', 'placeholder' => 'Ingrese el nombre y nº de la calle...'));
								$barrios = array('Río Pipo' => 'Río Pipo', 'Los Alakalufes' => 'Los Alakalufes', 'Bella Vista' => 'Bella Vista', 
								   'Latinoamericano' => 'Latinoamericano', 'Los Andes' => 'Los Andes', 'Los Fueguinos' => 'Los Fueguinos',
								   'General Manuel Belgrano' => 'General Manuel Belgrano', 'Monte Gallinero' => 'Monte Gallinero',
								   'Bahia Golondrina' => 'Bahia Golondrina', 'Turba I' => 'Turba I', 'El Libertador' => 'El Libertador',
								   'Felipe Varela' => 'Felipe Varela', '12 de Octubre' => '12 de Octubre', 'Andino' => 'Andino', 'Le Martial' => 'Le Martial',
								   'Planta Potabilizadora' => 'Planta Potabilizadora', 'Pista de Esquí' => 'Pista de Esquí', 'Onaisin' => 'Onaisin',
								   'Sección K' => 'Sección K', 'ENTEL' => 'ENTEL', 'Los Pinos' => 'Los Pinos', 'Alte. Solier' => 'Alte. Solier',
								   'Alte. Storni' => 'Alte. Storni', 'Primer Argentino' => 'Primer Argentino', 'Gaucho Rivero' => 'Gaucho Rivero',
								   'Centenario' => 'Centenario', 'San Salvador' => 'San Salvador', 	'El Fuelle' => 'El Fuelle', 
								   'Don Bosco' => 'Don Bosco', 'La Misión' => 'La Misión', '5 de Octubre' => '5 de Octubre', 'Tolkar' => 'Tolkar',
								   'Costa Polideportivo' => 'Costa Polideportivo', 'Alte. Brown' => 'Alte. Brown', 'José Hernández' => 'José Hernández',
								   'Piedrabuena' => 'Piedrabuena', 'Las Lengas' => 'Las Lengas', 'Los Yaganes' => 'Los Yaganes', '2 de Abril' => '2 de Abril',
								   '"Chacho" Peñaloza' => '"Chacho" Peñaloza', 'Martín Güemes' => 'Martín Güemes', 'Los Canelos' => 'Los Canelos',
								   'Provincias Unidas' => 'Provincias Unidas', 'Kaupen' => 'Kaupen', 'La Cumbre' => 'La Cumbre', 'Akawaia' => 'Akawaia',
								   'Itulara' => 'Itulara', '245 Viviendas' => '245 Viviendas', 'Nueva Provincia' => 'Nueva Provincia',
								   'Thomas Bridges' => 'Thomas Bridges', 'Centro' => 'Centro', 'Costa Centro' => 'Costa Centro',
								   'Los Calafates' => 'Los Calafates', 'Los Alerces' => 'Los Alerces', 'Obras Sanitarias' => 'Obras Sanitarias',
								   'Mirador del Beagle' => 'Mirador del Beagle', 'Las Terrazas' => 'Las Terrazas', 'Juan Domingo Perón' => 'Juan Domingo Perón',
								   'Towora' => 'Towora', 'Crucero A.R.A. Gral. Belgrano' => 'Crucero A.R.A. Gral. Belgrano', 'Ecológico' => 'Ecológico',
								   'La Colina' => 'La Colina', 'Bosque del Faldeo' => 'Bosque del Faldeo', 'Parque' => 'Parque', 'Kaiken' => 'Kaiken',
								   'La Oca' => 'La Oca', 'Los Morros' => 'Los Morros', 'Parque Industrial Medio' => 'Parque Industrial Medio', 'Bahía' => 'Bahía',
								   'San Vicente de Paul' => 'San Vicente de Paul', 'La Cantera' => 'La Cantera', 'Valle de Andorra' => 'Valle de Andorra',
								   'Parque Industrial Bajo' => 'Parque Industrial Bajo', 'El Mirador' => 'El Mirador', 'Altos Ruta 3 (El Mirador Alto)' => 'Altos Ruta 3 (El Mirador Alto)',
								   'Mirador del Pipo' => 'Mirador del Pipo', 'Malvinas Argentinas' => 'Malvinas Argentinas', 'Albatros' => 'Albatros',
								   'Soberanía Nacional' => 'Soberanía Nacional', 'Canal de Beagle' => 'Canal de Beagle', 'Club del Campo' => 'Club del Campo',
								   'Casas del Sur' => 'Casas del Sur');
			  echo $this->Form->input('barrio', array('label' => 'Barrio*', 'empty' => 'Ingrese un barrio...', 'options' => $barrios, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
			  $asentamientos = array('10 de Febrero' => '10 de Febrero', 'El Escondido' => 'El Escondido', 'La Bolsita' => 'La Bolsita', '11 de Noviembre' => '11 de Noviembre',
									 'El Mirador' => 'El Mirador', 'El Mirador de Ushuaia' => 'El Mirador de Ushuaia', 'El Obrero' => 'El Obrero', 'Dos Banderas' => 'Dos Banderas',
									 'Las Raíces' => 'Las Raíces', 'La cima' => 'La cima', 'El Colombo' => 'El Colombo', 'Espacio Verde B° Bella Vista' => 'Espacio Verde B° Bella Vista',
									 'Espacio Verde B° Latinoamericano' => 'Espacio Verde B° Latinoamericano', 'Los Leñadores' => 'Los Leñadores', 'Las Reinas' => 'Las Reinas',
									 'Itati' => 'Itati');
			  echo $this->Form->input('asentamiento', array('label' => 'Asentamiento', 'empty' => 'Ingrese un asentamiento...',  'options' => $asentamientos, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
			  $ciudades = array('Rio Grande' => 'Rio Grande', 'Tolhuin' => 'Tolhuin', 'Ushuaia' => 'Ushuaia');
			  echo $this->Form->input('ciudad', array('label' => 'Ciudad*', 'empty' => 'Ingrese una ciudad...',  'options' => $ciudades, 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Seleccione una opción.'));
	          echo $this->Form->input('lugar_de_trabajo', array('label'=>'Lugar de trabajo*', 'between' => '<br>', 'class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un lugar de trabajo', 'Placeholder' => 'Ingrese un lugar de trabajo...'));
          	  echo $this->Form->input('email', array('label' => 'Email','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un email de contacto', 'placeholder' => 'Ingrese un email...'));
			  echo $this->Form->input('telefono_nro', array('label' => 'Numero de Telefono*','class' => 'form-control', 'data-toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Ingrese un teléfono de contacto', 'placeholder' => 'Ingrese un nº de teléfono...'));
		?>
        </div>
     </div>
     <div class="col-md-12 col-sm-6 col-xs-12">
         <?php echo $this->Form->input('observaciones', array('label'=>'Observaciones', 'type' => 'textarea', 'between' => '<br>', 'class' => 'form-control')); ?>
     </div>
    
      <script type="text/javascript">
            $('#datetimepicker1').datetimepicker({ 
			useCurrent: true, //this is important as the functions sets the default date value to the current value
			format: 'YYYY-MM-DD hh:mm',
			}).on('dp.change', function (e) {
                  var specifiedDate = new Date(e.date);
				  if (specifiedDate.getMinutes() == 0)
				  {
					  specifiedDate.setMinutes(1);
					  $(this).data('DateTimePicker').date(specifiedDate);
				  }
               });
       </script>
       <script>tinymce.init({ selector:'textarea' });</script>
   </div>
</div>
