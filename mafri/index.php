
<?php include("include/topmenu.php");?>

    <div id="banner"  class="parallax-window" >
	<div class="img-fondo">
    	<div id="over-azul">
			<div class="content-over">
				<div class="banner-titulo"><h1>Qué es Mafri Electric</h1></div>
				<div class="banner-texto">Es una empresa de ingeniería aplicada, destinada a ofrecer soluciones integradas en el sector de zonas francas</div>
				<a href="laempresa.php"><div class="banner-boton">Leer más</div></a>
			</div>	
		</div>
	</div>
    </div>
    <div id="content-fo-te">
    	<div id="content-fo">
		<!--<a href="images/01.jpg" data-lightbox="album">-->
        	 <div class="foto-gris-1"><img src="images/01.jpg"><span class="prueba">Algo sdafasdfsd</span></div>
            <div class="foto-gris-1"><img src="images/02.jpg"></div>
            <div class="foto-gris-1" style="margin-right:0;"> <img src="images/03.jpg"> </div>
            <div class="foto-gris-2">  <img src="images/04.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/05.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/06.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/07.jpg"> </div>
            
        </div>
        <div id="content-te">
			<div class="informacion-uno">
				<div class="contenedor-interno">
					<h1>Qué es Mafri Electric?</h1>
					<p>nivel nacional e internacional. Nuestra organización 
					siempre busca de forma profesional, superar las 
					expectativas... <a href="laempresa.php">Leer Más</a></p>
				</div>
			</div>
			<div class="informacion-uno">
				<div class="contenedor-interno">
						<h1 class="h1-home">Es una empresa dedicada a proveer productos de iluminación y control de la más alta calidad</h1>
						<p>nivel nacional e internacional. Nuestra organización 
						siempre busca de forma profesional, superar las 
						expectativas... <a href="laempresa.php">Leer Más</a></p>
					</div>
			</div>
		</div>
    </div>
    
    <div id="content-bol-des">
    	<div id="content-bol">
			<div class="informacion-dos">
					<div class="alineo">
						<div class="fonts"><p>Carta del Presidente</p></div>
						<p>Mafri tiene el firme objetivo de garantizar
						una experiencia única en la adquisición 
						de materiales eléctricos, componentes de control
						especializados e iluminación, además... <a href="carta.php">Leer Más</a></p>
					</div>
			</div>
			
			<div class="informacion-dos">
					<div class="alineo">
						<div class="fonts"><p>Nuestra Misión y Visión</p></div>
						<p>Ser la empresa líder en la comercialización y
						el suministro de luminarias, equipos y controles
						eléctricos de la mejor calidad... <a href="mision.php">Leer Más</a></p>
					</div>
			</div>
		</div>
        <div id="content-des">
			<div class="des-titulo">Boletín Informativo</div>
            <div class="des-texto">Reciba nuestras ofertas en su correo</div>
            <div class="content-form-des">
            	<form action="mail.php" method="post" id="enviar">
                	<div class="input-des"><input name="email" type="email" class="input" placeholder="Su e-mail"  required/></div>
                   <input type="submit" id="enviar-mail" class="boton-des" value="Enviar">
                </form>
            </div>
            <div class="span-text">*No enviamos span</div>
		</div>
    </div>
    
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

<script type="text/javascript">
	$(document).ready(function() {
        
        $("#enviar-mail").click(function() {
            $.post($("#enviar").attr("action"), $("#enviar").serialize(),
              function(data) {
    			//$(".enviado").fadeIn(200).delay(10000).fadeOut(200);;
                //$(".hola").append(data);
				$(".datos-enviar").empty();
				$(".datos-enviar").append(data);
             });
    		 
          });
	});	  
</script>

 <script src="js/lightbox.js"></script>
 
</body>
</html>