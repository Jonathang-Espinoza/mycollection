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

        <ul class="row firsts">

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