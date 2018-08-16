<?php get_header(); ?>
<html>
<body>
<!--Carrucel-->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/bg.jpg" alt="1">
      <div class="carousel-caption">

          <div class="text">          
            <h1> COMIENZA UNA VIDA Y<br>  ÚNETE AL MUNDO<br>  TECNOLÓGICO </h1>
            <button class="btn1"> ¡Comienza acá! </button>
            <button class="btn2"> Más info</button>
            <p class="subtitle1"> Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica,<br> se necesitan más desarrolladores y ¡Tú puedes ser uno!</p>          
          </div>

      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/bg2.jpg" alt="2">
      <div class="carousel-caption">
       
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_bloginfo('template_url') ?>/images/bg3.jpg" alt="3">
      <div class="carousel-caption">
       
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    
    <span class="sr-only">Next</span>
  </a>
</div><!--Carrucel-->

<!--Row-->
<div class="row">

<!--Content-->
<div class="container">	
	<div class="content">
		<div class="col-md-8 col-md-offset-2">
			<h2> EL BOOTCAMP DE PROGRAMACIÓN MÁS GRANDE DE LATINOAMÉRICA </h2>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<p class="subtitle2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore facilis quod est odit distinctio. Corrupti sint eius iusto minima, magni fugiat ipsam animi perspiciatis accusamus! </p>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<img class="img-responsive" src="<?php echo get_bloginfo('template_url') ?>/images/viewing-gallery-for-happy-people.png" alt="personas felices">
		</div>
	</div>	
</div><!--Content-->

<!--Information-->
<div class="information">
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h3> SOLICITA INFORMACIÓN E INSCRÍBETE </h3>
			<p class="subtitle3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore facilis quod est odit distinctio. Corrupti sint eius iusto minima, magni fugiat ipsam animi perspiciatis accusamus! </p>
			<button class="btn3"> ¡Inscríbete! </button>
			<p> ¡Vive la experiencia Desafío Latam! </p>
		</div>
	</div>	
</div><!--Information-->

<!--Contact-->
<div class="contact">
	<div class="container">
		<div class="col-md-3 col-md-offset-2">
			<p class="title">Contacto </p>
			<p><strong>  Desafio Latam </strong><br> Ezquías Alliende 2361<br> +56 9 5117 7975 </p>
			<p class="mail"><a href="#"> inscripciones@desafiolatam.com </a></p>
		</div>
		<div class="col-md-5">
			<p class="title"> Suscríbete </p>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
			<input type="mail" name="input" placeholder="  Ingresa tu mail">
			<button> Enviar </button>		
		</div>		
	</div>	
</div><!--Contact-->

</div>

<?php get_footer(); ?>

</body>
</html>


