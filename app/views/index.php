<?php 
    require_once('../app/views/shared/header.php'); 
    require_once('../app/views/shared/navigation.php'); 
?>
<div class="container">	

		<div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <a style="text-decoration:none; color:#666;" href="http://michaelsoriano.com/create-a-responsive-photo-gallery-with-bootstrap-framework/">Bootstrap Photo Gallery jQuery plugin <span style="color:red;">Demo</span></a>
            </h3>
            <p>Resize your browser and watch the gallery adapt to the view port size. Clicking on an image will activate the Modal. Click <strong><a style="color:red" href="http://michaelsoriano.com/create-a-responsive-photo-gallery-with-bootstrap-framework/">Here</a></strong> to go back to the tutorial</p>
        </div>
        <?php
                  $sql_slider=$sliderList;
                  $nums_slides=count($sql_slider,1);
                ?>

        <ul class="row first">

          <?php
            $active="active";
            foreach ($sql_slider as $rw_slider) { ?>
             <li>
              		<img  src="<?php echo IMG_DIR.'slider/' .$rw_slider->url_image;?>">
              		<div class="text"><?php echo $rw_slider->descripcion;?></div>
            </li>
                  
          <?php
              $active="";
             }
           ?>      

  </ul>
  <table class="table " style="scroll:o">
   		 <?php foreach ($sql_slider as $rw_slider) { ?>  
        
                  <tr>
                    <td class="image">
                         <span >
                            <?php if($rw_slider->url_image !='') { ?>
                                          <img src=" <?php echo IMG_DIR.'slider/' .$rw_slider->url_image;?>" width="150" height="100" class="image"> <?php } ?>
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
                        <a class="row first" href="" "email me">Preview</a>

                    </td>
                    
                  </tr>
   
       
    	<?php } ?>
     </table> 

<style>
    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

      body {
        background:#ebebeb;
      }
      ul {
          padding:0 0 0 0;
          margin:0 0 40px 0;
      }
      ul li {
          list-style:none;
          margin-bottom:10px;
      }
      ul li.bspHasModal {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;
    }
    .next {
        float:right;
        text-align:right;
    }
    .text {
      font-family: 'Bree Serif';
      color:#666;
      font-size:11px;
      margin-bottom:10px;
      padding:12px;
      background:#fff;
    }
    .glyphicon-remove-circle:hover {
      cursor: pointer;
    }
    @media screen and (max-width: 380px){
       .col-xxs-12 {
         width:100%;
       }
       .col-xxs-12 img {
         width:100%;
       }
    }

  </style>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="jquery.bsPhotoGallery.js"></script>
    </script>
    <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true
        });
      });
    </script>

</div><!-- /container -->
 <?php 
    require_once('../app/views/shared/footer.php'); 

?>