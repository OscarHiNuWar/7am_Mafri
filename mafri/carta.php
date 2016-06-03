
<?php include("include/topmenu.php");?>

    <div id="bannereduccion"  class="parallax-window" >
	<div class="img-fondo">
    	<div id="over-azulmin">
			<div class="content-mid">
				<div class="banner-titulo"><h1>La carta del Presidente</h1></div>
				
			</div>	
		</div>
	</div>
    </div>
    <div id="content-fo-te">
    	<div id="content-fo-serv" class="text19">
        	
			<div class="informacion-contenido">
				<div class="contenedor-interno ">
					<h1></h1>
					<p>Mafri tiene el firme objetivo de garantizar una experiencia única
					en la adquisición de materiales eléctricos, componentes de control
					especializados e iluminación, además del manejo de proyectos
					de mejora y desarrollo electromecánico, entregándole todo nuestro
					esfuerzo en asegurar que lo que busca sea lo que realmente necesita,
					esto con la mas cálida bienvenida y soporte post-venta que nuestro
					equipo pueda ofrecerle.</p>
				
						<p>Mafri ha logrado un desarrollo exponencial y 
						sistemático en los últimos diez años, fruto de esto hemos aperturado
						nuestro nuevo edificio corporativo y de proyectos, para garantizar 
						un espacio confortable en el que el cliente y proveedores se sientan
						a gusto de visitarnos y de compartir toda su experiencia, así como nosotros
						siempre aprovechamos cada espacio para compartir la nuestra. 
						<br><br>
						Nuestras oficinas permanecen siempre abiertas para usted. 
						<br><br>
						</p>
					</div>
			</div>
			
        </div>
        <div id="content-min">
			<?php include("include/menu.php");?>
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