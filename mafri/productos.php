
<?php include("include/topmenu.php");?>

    <div id="bannereduccion"  class="parallax-window" >
	<div class="img-fondo">
    	<div id="over-azulmin">
			<div class="content-mid">
				<div class="banner-titulo"><h1>Nuestros productos</h1></div>
				
			</div>	
		</div>
	</div>
    </div>
    <div id="content-fo-pro">
    	<div id="content-fo-overlow">
        	<div class="foto-gris-1"><img src="images/01.jpg"></div>
            <div class="foto-gris-1"><img src="images/02.jpg"></div>
            <div class="foto-gris-1" style="margin-right:0;"> <img src="images/03.jpg"> </div>
            <div class="foto-gris-2">  <img src="images/04.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/05.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/06.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/07.jpg"> </div>
			<!-- Row dos -->
			<div class="foto-gris-1"><img src="images/01.jpg"></div>
            <div class="foto-gris-1"><img src="images/02.jpg"></div>
            <div class="foto-gris-1" style="margin-right:0;"> <img src="images/03.jpg"> </div>
            <div class="foto-gris-2">  <img src="images/04.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/05.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/06.jpg"> </div>
            <div class="foto-gris-2"> <img src="images/07.jpg"> </div>
            
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
 <script src="js/lightbox.js"></script>
	
</body>
</html>