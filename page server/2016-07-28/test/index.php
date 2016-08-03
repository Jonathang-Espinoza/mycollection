<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="text/css" href="assets/img/favicon.ico">
    <title>My Collection</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--- FontAwesome Icons-->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome/css/font-awesome.min.css">
    <!--- End fontAwesome Icons-->


    <!--- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Graduate|Pacifico' rel='stylesheet' type='text/css'>
    <!--- GOOGLE FONTS -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  

  </head>
  <body>
   
    <!-- HEADER -->
    <header >
      
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button> <!-- button de narbar.toggle -->

             <a class="navbar-brand" href="">
               <img src="assets/img/logo.png"  alt="My Collection">
             </a><!--  narbar.brand -->


          </div><!-- narbar-header -->

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="" data-toggle="modal" data-target="#modalLogin">Accede</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalSignup">Registrate</a></li>

              <?php if (isset($_SESSION['iduser'])){ ?>    
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Usuario <span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href=""><i class="fa fa-graduation-cap"> Administracion Colecciones</i></a></li>
                    <li><a href=""><i class="fa fa-user"> Editar perfil</i></a></li>
                    <li><a href=""><i class="fa fa-sign-out"> Salir</i></a></li>
                  </ul><!-- dropdown-menu -->
                </li>
                <?php } ?>
            </ul>
          </div> <!-- .collapse -->

        </div><!-- .container -->
        
      </nav> <!-- .navbar -->
    </header>
    <!-- /header -->


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


   <!-- WHAT WILL YOU LEARN -->
   <section class="wrap" id="what-learn">
     <div class="container">
       <h2>Qué puedo coleccionar?</h2>

       <p class="lead">
         <strong> "A la figura del coleccionista, que con el tiempo aparece cada vez más atractiva, no se le ha dado todavía lo suyo.
         Nada nos impide creer que ninguna otra hubiese podido deparar ante los narradores románticos un aspecto más seductor. Son románticas las figuras del viajante, del jugador, del virtuoso. Pero falta la del coleccionista"</strong>.
         Sobre el sentido del coleccionismo en relación con <strong>la memoria y la recuperación de la historia</strong>. El legado del pasado y de convertirlo en un patrimonio valiosísimo de bienes, unos bienes que no poseen valor pecuniario alguno, y que sin embargo constituyen un <strong>incalculable tesoro. </strong>
       </p>
       <div class="row">
         <div class="col-sm-3">
           <img src="assets/img/learn-1.png" alt="" class="img-circle">
           <h3>Autos a escala</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
          <div class="col-sm-3">
           <img src="assets/img/learn-2.png" alt="" class="img-circle">
           <h3>Aviones</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
          <div class="col-sm-3">
           <img src="assets/img/learn-3.png" alt="" class="img-circle">
           <h3>Motocicletas</h3>
           <p>
             Los autos a escala, cuando traspasan esa línea de dejar de ser juguetes para niños pequeños, se vuelven una representación de una historia, de un momento, de recuerdos y de deseos.
           </p>
         </div>
         <div class="col-sm-3">
           <img src="assets/img/learn-4.png" alt="" class="img-circle">
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
         <img src="assets/img/who.png" alt="" class="img-circle">
         <h2>Cuales son las escalas de una coleccion?</h2>
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
         <img class="img-circle" src="assets/img/features.png" alt="">
         <h2>Caracteristicas del Pagina</h2>
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
               <img class="img-circle" src="assets/img/creator.png" alt="Foto de Jona Espin">
               <p><h4>Jona Espin</h4></p>
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
               <p class="lead">Soy Jonathan Espinoza Rodriguez, nacido en enero del 1985 en la cuidad de Puntarenas(Costa Rica) 
               donde vivo felizmente junto a mi esposa Luz Mery.
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

   <!-- PROMOTIONAL VIDEO -->
    <div class="wrap" id="promo-video">

    <div class="container">

    <div class="header-section">
      <h2>Mira el vídeo de presentación</h2>
    </div>

    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">

      <div class="embed-responsive embed-responsive-16by9 ">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w6fLubIJHs8" frameborder="0" allowfullscreen></iframe> 

      </div><!-- col-sm-8 col-sm-offset-2 -->
               
      </div><!-- col-sm-8 col-sm-offset-2 -->
    </div>  <!-- row -->
      
    </div><!-- container -->
      
    </div>
    <!-- PROMOTIONAL VIDEO -->

    <!-- CALL TO ACTION -->
    <section class="wrap"  id="cta">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <p class="lead">Deja de poner excusas y <strong>lleva tu colección a un Nuevo Nivel</strong></p>
        </div><!-- col-sm-7 -->
        <div class="col-sm-5">
          <a href="" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#modalSignup">¡Quiero inscribirme!</a>
        </div><!-- col-sm-5 -->
    </div><!-- container -->
      
    </section>
    <!-- END CALL TO ACTION -->

   <!-- FOOTER -->
   <footer id="footer" >
     <div class="container-fluid">
       <p> <h3>myCollection &copy; 2016  | Made with <i class="fa fa-heart"></i> by <a href="http://www.jonathan-espinoza.com"> Jonathan Espinoza</a></h3> </p>
     </div><!-- container-fluid -->
   </footer>
    <!-- END FOOTER -->

     <!-- HIDDEN LOGIN MODAL -->
    <div class="modal fade" id="modalLogin">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <a href="" class="btn btn-primary btn-block" role="button">
              <i class="fa fa-facebook"> Inicia sesión con Facebook</i>
            </a>
          </div><!-- modal-header -->

          <div class="modal-body">

          <p>o bien</p>

          <form action="index_submit" method="div.form-group" accept-charset="utf-8">
             <div class="form-group">
               <label for="inputEmail">Email</label>
               <input type="email" class="form-control" id="inputEmail" placeholder="Escribe tu emai...">
             </div><!-- form-group -->
              <div class="form-group">
               <label for="inputPassword">Contraseña</label>
               <input type="password" class="form-control" id="inputPassword" placeholder="Escribe tu contraseña...">
             </div><!-- form-group -->

             <button type="submit" class="btn btn-success btn-block">Iniciar sesión</button>
          </form>
            
          </div><!-- modal-body -->

          <div class="modal-footer">
            <p><a href="">Has olvidado la contraseña?</a></p>
          </div><!-- modal-footer -->
        </div>
        
      </div>
    </div> <!-- .modal -->
    <!-- END HIDDEN LOGIN MODAL -->

    <!-- HIDDEN SIGNUP MODAL -->
    <div class="modal fade" id="modalSignup">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          
          <div class="modal-header">
            <a class="btn btn-primary btn-block" role="button">
              <i class="fa fa-facebook"> Regístrate con Facebook</i>
            </a>
          </div>

          <div class="modal-body">
            <p> o bien</p>

            <form>
              <div class="form-group">
                 <label for="inputName">Nombre de Usuario</label>
                 <input type="text" class="form-control" id="inputName" placeholder="Escribe un nombre de usuario...">
              </div><!-- form-group -->
              <div class="form-group">
                 <label for="inputEmailSignup">Email</label>
                 <input type="email" class="form-control" id="inputEmailSignup" placeholder="Escribe tu emai...">
              </div><!-- form-group -->
              <div class="form-group">
                <label for="inputPasswordSignup">Contraseña</label>
                <input type="password" class="form-control" id="inputPasswordSignup" placeholder="Escribe tu contraseña...">
              </div>

               <div class="form-group">
                <label for="inputPasswordSignupr">Confirma tu contraseña</label>
                <input type="password" class="form-control" id="inputPasswordSignupR" placeholder="Escribe de nuevo tu contraseña...">
              </div>


              <button type="submit" class="btn btn-success btn-block">Regístrate</button>

            </form>
          </div>

          <div class="modal-footer">
            <p>Al registrarme, <a href="">Acepto los Términos de Uso </a> y <a href="">La Política de Privacidad</a></p>
          </div>

          
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
      
    </div><!-- .modal -->
    <!-- END HIDDEN SIGNUP MODAL -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>