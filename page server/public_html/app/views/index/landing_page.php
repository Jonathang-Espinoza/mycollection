<?php 
    require_once('../app/views/shared/header.php'); 
    require_once('../app/views/shared/navigation.php'); 
?>
<!-- TITLE & ENROLL-->
   <section id="title-enroll">

     <div class="jumbotron">
       <div class="container-fluid">
         <h1>Crea tu propia colección professional</h1>
         <p>Aprende paso a paso a crear tus propias <strong>Colecciones</strong> y conviértete en un <strong>Coleccionista Profesional</strong></p>
         <p>
           <a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalSignup">Inscríbite Ahora &raquo;</a>
         </p>
       </div><!-- container-fluid-->

     </div> <!-- jumbotron -->
   </section> <!-- #title-enroll -->
   <!-- END TITLE & ENROLL-->
<div class="container-fluid"> 

   
   <!-- COLLECTION SLIDER -->
    <section class="wrap"  id="collection-slider">
      <div class="container">
          <div class="row" id="slide-row">
      
           <?php
            
            /* Llamar la Cadena de Conexion*/ 
            //include ("../app/config/conexion.php");
            $active="active";
          ?>
     
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-4""> 
              <div id="carousel-example-captions" class="carousel slide" data-ride="carousel"> 
                <?php

                  $sql_slider=$sliderList;
                  $nums_slides=count($sql_slider,1);
                ?>
                  <ol class="carousel-indicators">
                    <?php 
                    for ($i=0; $i<$nums_slides; $i++){
                      $active="active";
                      ?>
                      <li data-target="#carousel-example-captions" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
                      <?php
                      $active="";
                    }
                    ?>
                    
                  </ol> 
                <div class="carousel-inner" role="listbox"> 
                    <?php
                      $active="active";
                      foreach ($sql_slider as $rw_slider) {
                         # code...                      
                    ?>
                    <div class="item <?php echo $active;?>"> 
                      <img data-src="holder.js/900x500/auto/#777:#777" alt="800x300" src="img/slider/<?php echo $rw_slider->url_image;?>" data-holder-rendered="true"> 
                      <div class="carousel-caption"> 
                        <h3><?php echo $rw_slider->titulo;?></h3>
                        <p><?php echo $rw_slider->descripcion;?></p> 
                        <a data-toggle="modal" data-target="#modalSignup" class='btn btn-<?php echo $rw_slider->estilo_boton;?> text-right' href="<?php echo $rw_slider->url_boton;?>"><?php echo $rw_slider->texto_boton;?></a>
                      </div> 
                    </div>
                    <?php
                        $active="";
                       }
                    ?>         
                                     
                </div> 
                <a class="left carousel-control" href="#carousel-example-captions" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
                <a class="right carousel-control" href="#carousel-example-captions" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
          </div>
      
        
    </div><!-- container -->
      </div><!-- row -->
    
      
    </section>
    <!-- COLLECTION SLIDER -->


   <!-- WHAT WILL YOU LEARN -->
   <section class="wrap" id="what-learn">
     <div class="container">
       <h2>Qué puedo coleccionar?</h2>

       <p class="lead">
        El sentido del coleccionismo en relación con <strong>la memoria y la recuperación de la historia</strong>. El legado del pasado y de convertirlo en un patrimonio valiosísimo de bienes, unos bienes que no poseen valor pecuniario alguno, y que sin embargo constituyen un <strong>incalculable tesoro. </strong>
         
       </p>
       <div class="row">
         <div class="col-sm-3">
           <img src="<?php echo IMG_DIR .'learn-1.png' ?>" alt="" class="img-circle">
           <h3>Autos a escala</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
          <div class="col-sm-3">
           <img src="<?php echo IMG_DIR .'learn-2.png' ?>" alt="" class="img-circle">
           <h3>Aviones</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
          <div class="col-sm-3">
           <img src="<?php echo IMG_DIR .'learn-3.png'?>" alt="" class="img-circle">
           <h3>Motocicletas</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
         <div class="col-sm-3">
           <img src="<?php echo IMG_DIR .'learn-4.png' ?>" alt="" class="img-circle">
           <h3>Trenes</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
       </div><!-- row -->
     </div><!-- container -->
       
   </section>
   <!-- END WHAT WILL YOU LEARN -->

   <!-- COURSE TARGET -->
   <section class="wrap" id="course-target">
     <div class="container-fluid">
       <div class="header-section">
         <img src="<?php echo IMG_DIR .'who.png' ?>" alt="" class="img-circle">
         <h2>Cuales son las escalas de una colección?</h2>
       </div>
      <div class="row">
     
         <div class="col-sm-8 col-sm-offset-2">
           <h3>Escala 1:87</h3>
           <p class="lead">Es la propia del ferromodelismo (trenes a escala). Por supuesto, se trata de una escala muy pequeña.</p>
         </div><!-- col -->
         <div class="col-sm-8 col-sm-offset-2">
           <h3>Escala 1:64</h3>
           <p class="lead">Es la más habitual en los autitos al estilo <strong>Matchbox o Hot Wheels</strong> . Al recordar los autitos de la infancia o al imaginar autitos de juguete, generalmente nos remitimos a esta escala.</p>
         </div><!-- col -->

         <div class="col-sm-8 col-sm-offset-2">
          <h3>Escala 1:43</h3>
           <p class="lead">Es muy habitual en el <strong>coleccionismo europeo</strong>. Los modelos miden aproximadamente 13 cms. de largo. Existe una gran variedad de modelos disponibles en el mercado para este tipo de coleccionismo, y pueden crearse colecciones <strong>temáticas</strong>.</p>
         </div><!-- col -->

         <div class="col-sm-8 col-sm-offset-2">
          <h3>Escala 1:24</h3>
           <p class="lead">Es muy popular y puede encontrarse con frecuencia en <strong>jugueterías</strong> . Existen autitos de esta escala en calidades muy diversas, por lo que algunos pueden estar destinados al coleccionismo y otros son juguetes para niños.</p>
         </div><!-- col -->

         <div class="col-sm-8 col-sm-offset-2">
          <h3>Escala 1:18</h3>
           <p class="lead">Es muy popular en el coleccionismo estadounidense. Los modelos miden generalmente 30 cms. de largo, y dado su tamaño, estos autitos incluyen apertura de puertas y capot, pudiéndose apreciar  muchos detalles, como el interior del <strong>vehículo y el motor</strong>.</p>
         </div><!-- col -->

         <div class="col-sm-8 col-sm-offset-2">
          <h3>Barcos y Aviones</h3>
           <p class="lead">Para el coleccionismo de <strong>barcos o aviones</strong>, la historia es otra: las escalas más habituales son <strong>1:72 o 1:144</strong>.</p>
         </div><!-- col -->
      </div><!-- row -->
     </div><!-- container-fluid -->

   </section>
   <!-- END COURSE TARGET -->

   <!-- COURSE FEATURES -->
   <section class="wrap" id="course-features">
     <div class="container">
       <div class="header-section">
         <img class="img-circle" src="<?php echo IMG_DIR .'features.png' ?>" alt="">
         <h2>Caracteristicas de la Pagina</h2>
       </div><!-- header-section -->

       <div class="row">

        <div class="col-sm-3">
          <i class="fa fa-video-camera fa-2x"></i>
          <h4>Acceso a colecciones online</h4>
        </div> <!-- col-sm-3 -->

        <div class="col-sm-3">
          <i class="fa fa-clock-o fa-2x"></i>
          <h4>Acceso las 24 hora gratis</h4>
        </div> <!-- col-sm-3 -->

         <div class="col-sm-3">
          <i class="fa fa-graduation-cap fa-2x"></i>
          <h4>Contacto directo con otros coleccionistas</h4>
        </div> <!-- col-sm-3 -->

        <div class="col-sm-3">
          <i class="fa fa-mobile fa-2x"></i>
          <h4>Contenido accesible desde cualquier dispositivo</h4>
        </div> <!-- col-sm-3 -->


       </div>
     </div><!-- course-features -->

   </section>

   <!-- END COURSE FEATURES -->
    
   <!-- CREATOR -->
   <section class="wrap" id="creator">
     <div class="container">
       <div class="row">

         <div class="col-sm-9 col-sm-offset-1">
           
           <h2>El Creador </h2>
           <div class="row">
             
             <div class="col-sm-4" class="left-side">
               <img class="img-circle" src="<?php echo IMG_DIR .'creator.png'?>" alt="Foto de Jona Espinoza">
               <p><h4>Jonathan Espinoza Rodriguez</h4></p>
               <p>
                 <a href="https://www.twitter.com/JonathanEspinoza" target="_blank" class="badge social twitter">
                   <i class="fa fa-twitter"></i>
                 </a><!-- twitter --> 
                 <a href="https://cr.linkedin.com/in/jonathan-espinoza-264b8847" target="_blank" class="badge social linkedin">
                   <i class="fa fa-linkedin"></i>
                 </a><!-- linkedin --> 
                 <a href="https://www.jonathan-espinoza.com" target="_blank" class="badge social blog">
                   <i class="fa fa-globe"></i>
                 </a><!-- we site --> 
               </p>
             </div>

             <div class="col-sm-8">
               <p class="lead">Soy Jonathan Espinoza Rodriguez, nacido en enero del 1985 en la cuidad de Puntarenas(Costa Rica), donde vivo felizmente junto a mi esposa Luz Mery.
               Soy Ingeniero de Informatica de Sistemas  por la Universidad de Costa Rica.              
               </p>
               <p class="lead">Desde 2010 he estado participando en la creacion de varios proyectos personales, especializandome en primer lugar como Desarrollador Web backend,
               posteriormente frontend y en la actualidad formándome con Desarrollador PHP MVC.</p>                
             </div><!-- col-sm-8 --> 

           </div><!-- row --> 
         </div><!-- col-sm-9 col-sm-offset-1 --> 




       </div><!-- row -->
     </div><!-- container -->
   </section>
   <!-- END CREATOR -->      

    
    <!-- CALL TO ACTION -->
    <section class="wrap"  id="cta">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <p class="lead">Deja de poner excusas y <strong>lleva tu colección a un Nuevo Nivel</strong></p>
        </div><!-- col-sm-7 -->
        <div class="col-sm-5">
          <a href="?controller=Index&action=comment" class="btn btn-success btn-lg btn-block" >¡Quiero comentar!</a>
        </div><!-- col-sm-5 -->
    </div><!-- container -->
      
    </section>
    <!-- END CALL TO ACTION -->    
  
</div><!-- container -->
      
 <?php 
    require_once('../app/views/shared/footer.php'); 

?>