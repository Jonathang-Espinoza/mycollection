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

             <a class="navbar-brand" href="?controller=index">
               <img src="img/logo.png"  alt="My Collection">
             </a><!--  narbar.brand -->


          </div><!-- narbar-header -->

          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="?controller=index&action=comment" onclick="?controller=index&action=lecture" class="btn-navbar">Comentarios</a></li>
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
    </header>
    <!-- /header -->

    
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