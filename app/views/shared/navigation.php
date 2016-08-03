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

             <a class="navbar-brand" href="index">
               <img src="<?php echo IMG_DIR.'logo.png' ?>"  alt="My Collection">
             </a><!--  narbar.brand -->


          </div><!-- narbar-header -->

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php?controller=Photogallery&action=gallery" class="btn-navbar">Galeria</a></li>
              <li><a href="photogallery" class="btn-navbar"><i class="fa fa-user"></i> Administrar</a></li>                
              <li><a href="comment" onclick="index&action=comment" class="btn-navbar">Comentarios</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalLogin" class="btn-navbar">Accede</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalSignup" class="btn-navbar" >Registrate</a></li>

              <?php if (isset($_SESSION['iduser'])){ ?>    
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Usuario <span class="caret"></span></a>

                  <ul class="dropdown-menu" role="menu">
                    <li><a href=""><i class="fa fa-graduation-cap"> Administracion Colecciones</i></a></li>
                    <li><a href=""><i class="fa fa-user"> Editar perfil</i></a></li>
                  </ul><!-- dropdown-menu -->
                    <li><a href=""><i class="fa fa-sign-out"> Salir</i></a></li>
                </li>
                <?php } ?>
            </ul>
          </div> <!-- .collapse -->

        </div><!-- .container -->
        
      </nav> <!-- .navbar -->

      <!-- TITLE & ENROLL-->
         <section id="title-enroll">

           <div class="jumbotron">
               <div class="main-title">
                 <h1>Crea tu propia colección professional</h1>
                 <p>Aprende paso a paso a crear tus propias <strong>Colecciones</strong> y conviértete en un <strong>Coleccionista Profesional</strong></p>
                 <p id="btn-title"> 
                   <a href=""  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalSignup">Inscríbite Ahora &raquo;</a>
                 </p>
               </div><!-- container-fluid-->

           </div> <!-- jumbotron -->
         </section> <!-- #title-enroll -->
   <!-- END TITLE & ENROLL-->
    </header>
    <!-- /header -->


    

    