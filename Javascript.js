$("#FormCadastro").on('submit',function(event){
    event.preventDefault();
    var dados=$(this).serialize();

    $.ajax({
        url: 'Controller/ControllerCadastro.php',
        type: 'post',
        dataType: 'html',
        data: dados,
        success:function(dados){
            $('.Resultado').show().html(dados);
        } 
    })
});