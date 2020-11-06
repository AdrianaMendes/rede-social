$(function(){
    $("#entrar").click(function(){
        var email = $("#email").val();
        var senha = $("#senha").val();

        if(email != '' && senha != ''){
            $.post("function.php", {
                login: 'login',
                email: email,
                senha: senha
            }, function(retorno){
                if(retorno == 'ok'){
                    window.location = "into.php";
                }else{
                    alert('Email e/ou senha estão incorretos!');
                }
            });
        }else{
            alert('Preencha todos os campos');
        }
    });
});
