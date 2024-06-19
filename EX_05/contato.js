window.addEventListener('DOMContentLoaded', () => {

    let form = document.querySelector('#form_submit');
    let subButton = document.querySelector('button');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    subButton.addEventListener('click', () => {
        let nome = document.getElementById("nome").value
        let email = document.getElementById("email").value
        let mensagem = document.getElementById("mensagem").value

        if (nome == "" || email == "" || mensagem == "") {
            alert("Por favor preencha todos os campos corretamente")
            return;
        } else {
            alert(nome + "  obrigado! o seu Feedback é muito importante para o nosso Desenvolvimento")
        }
        setTimeout((subButton) => {
            window.location.href = "index.html";
        }, 2000);
    });

});