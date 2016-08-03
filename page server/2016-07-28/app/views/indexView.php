<?php 
    require_once('shared/header.php'); 
     require_once('shared/navigation.php'); 

?>
<div class="container-fluid">
  <section id="user">
    <dv class="container"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="container-fluid">
                    <form action="<?php echo $helper->url("User","crear"); ?>" method="post" class="col-lg-5">
                        <h3>Añadir usuario</h3>
                        <hr/>
                        Nombre: <input type="text" name="nombre" class="form-control"/>
                        Apellido: <input type="text" name="apellido" class="form-control"/>
                        Email: <input type="text" name="email" class="form-control"/>
                        Contraseña: <input type="password" name="password" class="form-control"/>
                        <input type="submit" value="enviar" class="btn btn-success"/>
                </form>
                </div>
                
            </div>
            
        <div class="row">
            <div class=" col-sm-6 paddingone col-lg-12">
                        <h3>Usuarios</h3>
                        <hr/>
                       
                                <div class="table-responsive">
                                                                                          
                                        <table class="table table-bordered table-hover" style="color: black">
                                            <thead>
                                                <tr>
                                                  <th>Id</th>
                                                  <th>Nombre</th>
                                                  <th>Apellido</th>
                                                  <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
                                               <tr>
                                                   <td colspan="" rowspan="" headers=""><?php echo $user->id; ?></td>
                                                   <td colspan="" rowspan="" headers=""><?php echo $user->nombre; ?> </td>
                                                   <td colspan="" rowspan="" headers=""><?php echo $user->apellido; ?></td>
                                                   <td colspan="" rowspan="" headers=""><?php echo $user->email; ?></td>
                                                   <td colspan="" rowspan="" headers="">
                                                      <div class="right">
                                                            <a href="<?php echo $helper->url("User","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                          
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                 </div>
                                
        </div>
        </div>

        
    </dv> 
       
</section>

</div>   

 
<?php require_once('shared/footer.php'); ?>
      


