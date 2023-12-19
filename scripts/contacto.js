function init(){

}

function guardar_contacto(){
    //alert("Entra");
    // return;
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();

    if (name!="" && email!="" && subject!="" && message!="") {
        $.post("ajax/contacto.php?op=guardar_contacto",{name:name,email:email,subject:subject,message:message},function(data, status)
        {
            data = JSON.parse(data);

            alert("Registro guardado exitosamente");
            $("#name").val("");
            $("#email").val("");
            $("#subject").val("");
            $("#message").val("");
                
        });
    }else{
        alert("Por favor captura todos los campos requeridos");
    }

    
}

init();