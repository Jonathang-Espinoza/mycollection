//https://www.uno-de-piera.com/crud-con-php-y-la-extension-pdo/
//
$(document).ready(function () {
    //editamos datos del usuario
    $(".editar").on('click', function () {
        var id = $(this).attr('id');
        var nombre = $("#nombre" + id).html();
        var email = $("#email" + id).html();
        $("<div class='edit_modal'><form name='edit' id='edit' method='post' action='http://localhost/crud_pdo/instancias/edit_user.php'>"+
            "<label>Nombre</label><input type='text' name='nombre' class='nombre' value="+nombre+" id='nombre' /><br/>"+
            "<input type='hidden' name='id' class='id' id='id' value="+id+">"+
            "<label>Email</label><input type='email' name='email' class='email' value="+email+" id='email' /><br/>"+
            "</form> </div>").dialog({
                resizable:false,
                title:'Editar usuario.',
                height:300,
                width:350,
                modal:true,
                buttons:{
                    "Editar":function () {
                        $.ajax({
                            url : $('#edit').attr("action"),
                            type : $('#edit').attr("method"),
                            data : $('#edit').serialize(),
                            complete:function () {
                                $('.edit_modal').dialog("close");
                                $("<div class='edit_modal'>El usuario fué editado correctamente</div>").dialog({
                                    resizable:false,
                                    title:'Usuario editado.',
                                    height:200,
                                    width:450,
                                    modal:true
                                });
                                setTimeout(function() {
                                    window.location.href = "http://localhost/crud_pdo";
                                }, 2000);
                            }, error:function (error) {
                                $('.edit_modal').dialog("close");
                                $("<div class='edit_modal'>Ha ocurrido un error!</div>").dialog({
                                    resizable:false,
                                    title:'Error editando!.',
                                    height:200,
                                    width:450,
                                    modal:true
                                });
                            }
                        });
                        return false;
                    },
                    Cancelar:function () {
                        $(this).dialog("close");
                    }
                }
            });
    });
 
    //eliminamos datos del usuario
    $(".eliminar").on('click', function () {
        var id = $(this).attr('id');
        var nombre = $("#nombre" + id).html();
        $("<div class='delete_modal'>¡Estás seguro que deseas eliminar al usuario " + nombre + "?</div>").dialog({
            resizable:false,
            title:'Eliminar al usuario ' + nombre + '.',
            height:200,
            width:450,
            modal:true,
            buttons:{
                "Eliminar":function () {
                    $.ajax({
                        type:'POST',
                        url:'http://localhost/crud_pdo/instancias/delete_user.php',
                        async: true,
                        data: { id : id },
                        complete:function () {
                            $('.delete_modal').dialog("close");
                            $("<div class='delete_modal'>El usuario " + nombre + " fué eliminado correctamente</div>").dialog({
                                resizable:false,
                                title:'Usuario eliminado.',
                                height:200,
                                width:450,
                                modal:true
                            });
                            setTimeout(function() {
                                window.location.href = "http://localhost/crud_pdo";
                            }, 2000);
                        }, error:function (error) {
                            $('.delete_modal').dialog("close");
                            $("<div class='delete_modal'>Ha ocurrido un error!</div>").dialog({
                                resizable:false,
                                title:'Error eliminando al usuario!.',
                                height:200,
                                width:450,
                                modal:true
                            });
                        }
                    });
                    return false;
                },
                Cancelar:function () {
                    $(this).dialog("close");
                }
            }
        });
    });
 
    //añadimos usuarios nuevos
    $(".agregar").on('click', function () {
        var id = $(this).attr('id');
        var nombre = $("#nombre" + id).html();
        $("<div class='insert_modal'><form name='insert' id='insert' method='post' action='http://localhost/crud_pdo/instancias/insert_user.php'>"+
            "<label>Nombre</label><input type='text' name='nombre' class='nombre' id='nombre' /><br/>"+
            "<label>Email</label><input type='email' name='email' class='email' id='email' /><br/>"+
            "</form> </div>").dialog({
            resizable:false,
            title:'Añadir nuevo usuario.',
            height:300,
            width:350,
            modal:true,
            buttons:{
                "Insertar":function () {
                    $.ajax({
                        url : $('#insert').attr("action"),
                        type : $('#insert').attr("method"),
                        data : $('#insert').serialize(),
                        complete:function () {
                            $('.insert_modal').dialog("close");
                            $("<div class='insert_modal'>El usuario fué añadido correctamente</div>").dialog({
                                resizable:false,
                                title:'Usuario añadido.',
                                height:200,
                                width:450,
                                modal:true
                            });
                            setTimeout(function() {
                                window.location.href = "http://localhost/crud_pdo";
                            }, 2000);
                        }, error:function (error) {
                            $('.insert_modal').dialog("close");
                            $("<div class='insert_modal'>Ha ocurrido un error!</div>").dialog({
                                resizable:false,
                                title:'Error añadiendo!.',
                                height:200,
                                width:450,
                                modal:true
                            });
                        }
                    });
                    return false;
                },
                Cancelar:function () {
                    $(this).dialog("close");
                }
            }
        });
    });
});