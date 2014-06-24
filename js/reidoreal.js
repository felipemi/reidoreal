jQuery(function($){
    $('#contat_form').validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true
            },
            mensagem: {
                required: true
            }
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatorio.",
                minlength: "O campo nome deve conter no mínimo 3 caracteres."
            },
            email: {
                required: "O campo email é obrigatorio.",
                email: "O campo email deve conter um email válido."
            },
            telefone: {
                required: "O campo telefone é obrigatorio."
            },
            mensagem: {
              required: "O campo mensagem é obrigatorio"  
            }
        }

    });
});
