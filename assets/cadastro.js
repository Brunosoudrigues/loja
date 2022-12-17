const nome = document.querySelector("#nome");
const email = document.querySelector("#email");
const password = document.querySelector("#senha");
const endereco = document.querySelector("#endereco")
const mensagem = document.querySelector("#message")
const senhaFraca = document.querySelector("#senhaFraca");

password.addEventListener("keyup", () => {
    //console.log(password.value.length);
    if (password.value.length < 9) {
        senhaFraca.style.color = "#FF0000";
        senhaFraca.innerHTML = "Senha Fraca!";

    } else if (password.value.length > 8 && password.value.length <11){
         senhaFraca.style.color = `yellow`;
         senhaFraca.innerHTML = "Senha Média!";
    }if (password.value.length > 11 ){

        senhaFraca.style.color = "#39FF14";
        senhaFraca.innerHTML = "Senha Forte!";
    }
})

document.querySelector("#form-registration").addEventListener("submit", async(e) => {
    e.preventDefault();
    document.querySelector("#message").innerHTML = "";
    const arrayUser = [];
    const user = {
        name: nome.value,
        email: email.value,
        password: password.value,
        endereco: endereco.value,
    };


    if (localStorage.getItem("users")) {
        const users = JSON.parse(localStorage.getItem("users"));
        console.log(users);
        let find = false;
        users.forEach((e) => {
            // testa se já não está cadastrado na lista
            if (e.email === email.value) {
                find = true;
                document.querySelector("#message").innerHTML = "Email já cadastrado!";
            }
            arrayUser.push(e);
        });
        if (find === true) {
            return;
        }
        console.log(arrayUser);
    }

    arrayUser.push(user);
    localStorage.setItem("users", JSON.stringify(arrayUser));
    

});