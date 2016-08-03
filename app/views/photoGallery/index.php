<?php 
    require_once('../app/views/shared/header.php'); 
    require_once('../app/views/shared/navigation.php'); 
?>
<div class="container">	
<br><br>
		
        <table class="table " id="phototable" cellspacing="0" width="100%">
            <?php 
             $sql_slider=$sliderList;
             $nums_slides=count($sql_slider,1);
                    

          foreach ($sql_slider as $rw_slider) { ?>  
              <img src="" alt="">
                        <tr>
                          <td class="image">
                               <span >
                                  <?php if($rw_slider->url_image !='') { ?>
                                                <img class="image" width="150" height="100" src="<?php echo IMG_DIR.'slider/'.$rw_slider->url_image;?>"> <?php } ?>
                              </span>
                          </td>
                          <td class="post_title">
                            <h4>
                             <p class="post_title"><?php echo $rw_slider->descripcion;?></p>
                             
                            </h4>
                            <span>
                               <?php echo $rw_slider->descripcion;?> <br>
                               
                            </span>
                          </td>
                          <td>
                              <a href="?c=Reminder&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                              <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Reminder&a=Delete&id=<?php echo $r->id; ?>">Eliminar</a>
                          </td>
                          
                        </tr>
         
             
            <?php } ?>
           </table> 
  
  

    <script  type="text/javascript" language="javascript" >

      $(document).ready(function() {

        // ATW
        if ( top.location.href != location.href ) top.location.href = location.href;

        // Initialize datatable
        $('#phototable').dataTable({
          "aProcessing": true,
          "aServerSide": true,
          "ajax": "datatable.php?ajax"
        });

        // Save edited row
        $("#edit-form").on("submit", function(event) {
          event.preventDefault();
          $.post("datatable.php?edit=" + $('#edit-id').val(), $(this).serialize(), function(data) {
            var obj = $.parseJSON(data);
            var tr = $('a[data-id="row-' + $('#edit-id').val() + '"]').parent().parent();
            $('td:eq(1)', tr).html(obj.name);
            $('td:eq(2)', tr).html(obj.email);
            $('td:eq(3)', tr).html(obj.mobile);
            $('#edit-modal').modal('hide');
          }).fail(function() { alert('Unable to save data, please try again later.'); });
        });

        // Add new row
        $("#add-form").on("submit", function(event) {
          event.preventDefault();
          $.post("datatable.php?add", $(this).serialize(), function(data) {
            var obj = $.parseJSON(data);
            $('#example tbody tr:last').after('<tr role="row"><td class="sorting_1">' + obj.id + '</td><td>' + obj.name + '</td><td>' + obj.email + '</td><td>' + obj.mobile + '</td><td>' + obj.start_date + '</td><td><a data-id="row-' + obj.id + '" href="javascript:editRow(' + obj.id + ');" class="btn btn-default btn-sm">edit</a>&nbsp;<a href="javascript:removeRow(' + obj.id + ');" class="btn btn-default btn-sm">remove</a></td></tr>');
            $('#add-modal').modal('hide');
          }).fail(function() { alert('Unable to save data, please try again later.'); });
        });

      });
     
      function Delete(ulId) {
        
           if(confirm("Desea eliminar este registro?")){
      		      window.location=url+"?id="+id;
      			}              
    	}

    </script>

</div><!-- /container -->
 <?php 
    require_once('../app/views/shared/footer.php'); 

?>