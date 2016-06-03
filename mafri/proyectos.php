
<?php include("include/topmenu.php");?>

    <div id="bannereduccion"  class="parallax-window" >
	<div class="img-fondo">
    	<div id="over-azulmin">
			<div class="content-mid">
				<div class="banner-titulo"><h1>¿Qué puedes encontrar en Mafri?</h1></div>
				
			</div>	
		</div>
	</div>
    </div>
    <div id="content-fo-ser">
    	<div id="content-fo-serv">
        	<div class="informacion-contenido" >
				<div class="contenedor-interno">
					<h1></h1>
					<span class="text19"><p>En la actualidad el Mercado demanda de servicios que agreguen
					valores a los procesos de desarrollo, para este caso en particular, Mafri ofrece la 
					asesoría en manejo de proyectos brindando a sus clientes apoyo en las siguientes áreas:</p></span>
				
						
						<span class="text19"><p>
						- Equipos Eléctricos Industriales
						<br>
						- Controles Eléctricos Industriales
						<br>
						- Componentes de Subestaciones Eléctricas (AT/MT)
						<br>
						- Soluciones de Iluminación Residencial, Comercial e Industrial
						<br>
						- Sistemas de Transformación para (MT)
						<br>
						- Herramientas de Calidad de Energía y Seguridad Eléctrica
						<br>
						- Intercomunicadores, Control de Acceso y Domótica
						<br>
						- Sistemas de Protección contra Rayos y Sobretensiones Transitorias
						<br>
						- Sistemas de Puesta a Tierra
						<br>
						- Componentes para Sistemas de Ahorros Energético
						<br>
						- Entre otras Soluciones Energéticas

						</p></span>
					</div>
			</div>
            
        </div>
        <div id="content-min" style="border: none;">
			<?php include("include/menu.php")?>
		</div>
    </div>
    
	
    <div id="logos-content">
		<?php include("include/slide.php");?>
	</div>
    <footer>
    	<div id="footer">
        	<div id="center-footer">
            	<div id="text-fo-1">© Copyright 2015. Todos los derechos reservados. Mafri Electric</div>
                <div id="text-fo-2"><span>Diseño y desarrollo </span>Agencia 7am</div>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="js/slick.min.js"></script>	
	
<script type="text/javascript">
   $('.carousel').slick({
    arrows: false,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed:2500,
    speed: 500,
    variableWidth: true,
    onAfterChange: function(){ 
          var cat = ($('.carousel').slickCurrentSlide()) + 1;
          $('.client-text > li').hide();
          $('.client-text > li:nth-child('+ cat +')').show();
    }
});
</script>  

	
</body>
</html>