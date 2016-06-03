
<?php include("include/topmenu.php");?>

    <div id="bannereduccion"  class="parallax-window" >
	<div class="img-fondo">
    	<div id="over-azulmin">
			<div class="content-mid">
				<div class="banner-titulo"><h1>Nuestra Misión y Visión</h1></div>
				
			</div>	
		</div>
	</div>
    </div>
    <div id="content-fo-te">
    	<div id="content-fo-serv">
        	<div class="informacion-contenido" style="padding-bottom:0;">
				<div class="contenedor-interno">
					<h1>Misión</h1>
					<span class="text19"><p>Ser la empresa líder en la comercialización y el
					suministro de luminarias, equipos y controles eléctricos
					de la mejor calidad y las mejores marcas para el sector 
					Industrial, comercial y residencial, ofreciendo una eficiente
					asesoría profesional con el objetivo de satisfacer plenamente
					a nuestros clientes.</p></span>
				</div>
			</div>
			<div class="informacion-contenido">
				<div class="contenedor-interno">
						<h1>Visión</h1>
						<span class="text19"><p>Consolidarnos como líder del área con soluciones
						integrales energéticas que cumplan con las necesidades
						de nuestros clientes, manteniéndonos a la vanguardia en
						innovaciones y especializándonos cada vez más en el sector
						eléctrico.</p></span>
						
					</div>
			</div>
            
        </div>
        <div id="content-min">
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