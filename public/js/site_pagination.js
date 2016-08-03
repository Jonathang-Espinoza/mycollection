   var paginationtool;// Paginador
    var pagesCount; //TotalPaginas
    var itemsPage=5; //itemPorPagina
    var numberPage=3;//numerosPorPagina
    var img_dir="";

     /* $(document).ready(function() {

        img_dir=$("#paginationLabel").val();

        var params={controller:"Photogallery",action: "getPhotoList","limit":itemsPage,"offset":0};
        $.ajax({
          
          type:"GET",
          url:"public/index.php",
          dataType:"json",
          data:params
        }).done(function(data,textStatus,jqXHR){

          var total=data.total;
          CreatePagination(total);

        }).fail(function(jqXHR,textStatus,textError){
           alert("Error al realizar la peticion ".textError);
        });
        

      });*/

      function page_load(img){

        img_dir=img;

        var params={controller:"Photogallery",action: "getPhotoList","limit":itemsPage,"offset":0};
        $.ajax({
          
          type:"GET",
          url:"public/index.php",
          dataType:"json",
          data:params
        }).done(function(data,textStatus,jqXHR){

          var total=data.total;
          CreatePagination(total);

        }).fail(function(jqXHR,textStatus,textError){
           alert("Error al realizar la peticion ".textError);
        });
      }
       
       /*http://techyosh.blogspot.com/2015/08/bootstrap-paginacion-ajax-jquery-mysql.html*/
      function CreatePagination(itemsCount){
         paginationtool= $(".pagination");
         pagesCount=Math.ceil(itemsCount/itemsPage);// total paginas

         $('<li><a href="#" class="first_link"><</a></li>').appendTo(paginationtool);
         $('<li><a href="#" class="prev_link"><<</a></li>').appendTo(paginationtool);

         var pag=0;
         while (pagesCount>pag){
            $('<li><a href="#" class="page_link">'+(pag+1)+'</a></li>').appendTo(paginationtool);
            pag++;
         }
         //Numeros por pagina
         if(numberPage > 1){
            $(".page_link").hide();
            $(".page_link").slice(0,numberPage).show();
         } 

         $('<li><a href="#" class="next_link">>></a></li>').appendTo(paginationtool); //Paginador=page
         $('<li><a href="#" class="last_link">></a></li>').appendTo(paginationtool);

         paginationtool.find(".page_link:first").addClass("active");
         paginationtool.find(".page_link:first").parents("li").addClass("active");


         paginationtool.find(".prev_link").hide(); //ocultamos por q es la primer vez

         paginationtool.find("li .page_link").click(function(){
          var irpagina=$(this).html().valueOf()-1;
          pageload(irpagina);
          return false;
         });

         paginationtool.find("li .first_link").click(function(){
          var irpagina=0;
          pageload(irpagina);
          return false;
         });

         paginationtool.find("li .prev_link").click(function(){
          var irpagina=parseInt(paginationtool.data("pag"))-1;
          pageload(irpagina);
          return false;
         });
         
         paginationtool.find("li .next_link").click(function(){
          var irpagina=parseInt(paginationtool.data("pag"))+1;
          pageload(irpagina);
          return false;
         });

         paginationtool.find("li .last_link").click(function(){
          var irpagina=pagesCount-1;
          pageload(irpagina);
          return false;
         });

        pageload(0);


      }  

      function pageload(pagina){

          var offset=pagina * itemsPage;
          var params={controller:"Photogallery",action: "getPhotoList","limit":itemsPage,"offset": offset};
         

         $.ajax({
              type:"GET",
              dataType:"json",
              url:"public/index.php",
              data:params
          }).done(function(data,textStatus,jqXHR){

            var list=data.dataList;
            $("#myTable").html("");


            $.each(list,function(ind,elem){

              $("<tr>"+
                          "<td class="+"image>"+
                               "<span >"+ "<img class='"+"image"+"' width=150 "+"height=100 " +"src="+img_dir+"/slider/"+ elem.url_image +"></span>"+
                          "</td>"+
                          "<td class="+"post_title"+">"+
                            "<h4>"+
                             "<p class="+"post_title"+">" + elem.descripcion+"</p>"+
                             
                            "</h4>"+
                            "<span>"+ elem.descripcion+"<br></span>"+
                          "</td>"+
                          "<td>"+
                               "<a href="+"Comment&action=index&id=1"+">Editar</a>"+
                        
                          "</td>"+
                          
                        "</tr>").appendTo($("#myTable"));

            });

          }).fail(function(jqXHR,textStatus,textError){
             alert("Error al realizar la peticion  dame".textError);
          });

          if(pagina >= 1)
          {
            paginationtool.find(".prev_link").show();
          }
          else
          {
            paginationtool.find(".prev_link").hide();
          }

          if(pagina < (pagesCount-itemsPage))
          {
            paginationtool.find(".next_link").show();
          }
          else{
            paginationtool.find(".next_link").hide();
          }

          paginationtool.data("pag",pagina);

          if(numberPage>1){

            $(".page_link").hide();

            if(pagina<(pagesCount-numberPage))
            {
                $(".page_link").slice(pagina,numberPage + pagina).show();
                  
            }else{

                if(pagesCount > numberPage)
                  $(".page_link").slice(pagesCount-numberPage).show();
                 else
                  $(".page_link").slice(0).show();
            } 
          }

          paginationtool.children().removeClass("active");
          paginationtool.children().eq(pagina+2).addClass("active");
        }


      function Delete(ulId) {
        
           if(confirm("Desea eliminar este registro?")){
      		      window.location=url+"?id="+id;
      			}              
    	}
