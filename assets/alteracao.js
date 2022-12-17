let nameCad = document.querySelector("#nomeCad");
const emailCad = document.querySelector("#emailCad");
let enderecoCad = document.querySelector("#enderecoCad");
const novaSenha = document.querySelector("#senhaNova");
const btnUpdate = document.querySelector(".btn-update");
const senhaFraca2 = document.querySelector("#senhaFraca2");
let user =[];


window.addEventListener("load", () => {
    //alert("Olá");
    //emailCad.value = localStorage.getItem("userActive");
    user = JSON.parse(localStorage.getItem("userActive"));
    //console.log(user);
    nameCad.value = user.name;
    emailCad.value = user.email;
    enderecoCad.value = user.endereco;
    senhaNova.value= user.password

});

novaSenha.addEventListener("keyup", () => {
    //console.log(password.value.length);
    if (novaSenha.value.length < 9) {
        senhaFraca2.style.color = "#FF0000";
        senhaFraca2.innerHTML = "Senha Fraca!";

    } else if (novaSenha.value.length > 8 && novaSenha.value.length < 11) {
        senhaFraca2.style.color = `yellow`;
        senhaFraca2.innerHTML = "Senha Média!";
    }
    if (novaSenha.value.length > 11) {

        senhaFraca2.style.color = "#39FF14";
        senhaFraca2.innerHTML = "Senha Forte!";
    }
})

document.querySelector("#form-registration").addEventListener("submit", async(e) => {
    e.preventDefault();
    //console.log(localStorage.getItem("users"));
    let arrayUsers = JSON.parse(localStorage.getItem("users"));

     //console.log(arrayUsers);
     // arrayUsers.forEach
      arrayUsers.forEach((e,i) => {
         if(e.email === user.email){
            e.endereco = enderecoCad.value;
            e.name = nameCad.value;
            e.email= emailCad.value;
            e.password = senhaNova.value;
            
            localStorage.setItem("userActive", JSON.stringify(e));
            localStorage.setItem("users", JSON.stringify(arrayUsers));
            document.querySelector("#message").innerHTML = "Alteração concluída com Sucesso!"
         }
     });
});