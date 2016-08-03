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

    
   
    <script src="public/js/jquery.bsPhotoGallery.js"></script>
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed  table-->
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
    

     <!-- <script src="public/js/jquery.bsPhotoGallery.js">
    <script src="public/js/bootstrap-lightbox.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script></script>-->
  </body>
</html>