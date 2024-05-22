menuAtivo = () =>{
    for(let i =0; i < objmenu.length; i++) {
        if(objMenu[i].id ==$('txtMenu').val()) {
            $('#' +objMenu[i].id).addClass(' ativo');
        }
    }
}

$(document).ready(function(){
    menuAtivo();
}) 