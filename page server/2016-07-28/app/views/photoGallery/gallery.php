<?php 
    require_once('../app/views/shared/header.php'); 
    require_once('../app/views/shared/navigation.php'); 
?>
<div class="container"> 

    <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <a style="text-decoration:none; color:#666;" href="?controller=photogallery&action=index"> Photo Gallery  <span style="color:red;">Administracion</span></a>
            </h3>
            <p>Resize your browser and watch the gallery adapt to the view port size. Clicking on an image will activate the Modal. Click <strong><a style="color:red" href="?controller=photogallery&action=index">Here</a></strong> to go back to the tutorial</p>
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
                  <img    src="<?php echo IMG_DIR.'slider/' .$rw_slider->url_image;?>">
                  <div class="text"><?php echo $rw_slider->descripcion;?></div>
            </li>
                  
          <?php
              $active="";
             }
           ?>      
  
  </ul>
 

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
