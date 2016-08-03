<?php 
    require_once('../app/views/shared/header.php'); 
    require_once('../app/views/shared/navigation.php'); 
?>
<div class="container">	


<br><br>
		<label> Paginacion @2</label>
    <input type="text" value="<?php echo IMG_DIR ?>" id="paginationLabel" styless="hide">
    
        <table class="table table-striped table-hover " id="photetable" cellspacing="0" width="100%">
             <tbody id="myTable">
               
             </tbody>
           </table> 
           <div class="col-md-12 text-center">
             <ul class="pagination" id="pagination" ></ul>
           </div>
  
  
<script src="public/js/site_pagination.js"></script>

   

</div><!-- /container -->
 <?php 
    require_once('../app/views/shared/footer.php'); 

?>

