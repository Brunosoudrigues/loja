const usuario = document.querySelector("#usuario");
const senha = document.querySelector("#senha");
const btnLogin = document.querySelector(".btn-login");
const divLogin = document.querySelector(".left-login");
const mensagem = document.querySelector("#message")

let vetLogin = [];


btnLogin.addEventListener("click", () => {

    // alert("olá");
    // const user = {
    // usuario: usuario.value,
    // senha: senha.value

    // };
    // vetLogin.push(user)
    // console.log(vetLogin);


    if (localStorage.getItem("users")) {
        //se tiver algum item na localStorage, coloca no console, se não, não está lá!
        const users = JSON.parse(localStorage.getItem("users"));

        let find = false;

        //console.log(users);

        users.forEach((e) => {
            //console.log(e);
            if ((e.email === usuario.value) && (e.password === senha.value)) {
                find = true;
                document.querySelector("#message").innerHTML = `Olá, ${e.name} você é um usuário cadastrado!`;

                localStorage.setItem("userActive", JSON.stringify(e));
                console.log(JSON.parse(localStorage.getItem("userActive")));

                alert(`Olá ${e.name} seja bem vinde! `)
            }
        });
        if (find == false) {
            document.querySelector("#message").innerHTML = `Usuário ou senha não cadastrados!`;
        }
    }
});