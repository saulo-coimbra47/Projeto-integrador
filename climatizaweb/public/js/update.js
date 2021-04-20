$(document).ready( function(){

    $("#formChangeName").submit(function(){
        var nome = $('#name').val()
        if(nome.length < 8){
            window.alert("Insira nome e sobrenome válidos!");
            $('#name').focus();
            return false;
        }
        if(nome.indexOf(" ") < 0){
            window.alert("Insira o sobrenome!");
            $('#name').focus();
            return false;
            
        }
       
    });

    $("#formChangePlace").submit(function(){
        var local = $('#local').val();
        if(local.length < 8){
            window.alert("Insira um local válido!");
            $('#local').focus();
            return false;
        }

        if(local.indexOf("-") < 0){
            window.alert("Insira uma cidade e UF válidos!");
            $('#local').focus();
            return false;
        }
       
    });

    $("#formChangePassword").submit(function(){
        var senha1 = $('#password1').val();
        var senha2 = $('#password2').val();
        if(senha1 != senha2){
            window.alert("As senhas informadas são diferentes!");
            $('#password2').focus();
            return false;
        }

        if(senha1.length < 8){
            window.alert("A senha precisa ter no mínimo 8 caracteres!");
            $('#password1').focus();
            return false;
        }
    });
    
    

});