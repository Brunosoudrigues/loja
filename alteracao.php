<?php
    session_start();
    if(empty($_SESSION["user"]["id"])){
        header("Location:login.php");
    }
    if(!empty($_SESSION["user"])){
        //var_dump($_SESSION["user"]["id"]);

        include __DIR__ . "/source/connection.php";

        $id = $_SESSION["user"]["id"];
        $query = "SELECT * 
                  FROM users 
                  WHERE id = $id";

        $stmt = $conn->query($query);
        if($stmt->rowCount() == 1){
            $row = $stmt->fetch();
            //var_dump($row);
        }
    }
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alteração de Dados</title>
    <link rel="stylesheet" href="assets/styles1.css" />

</head>

<body>
    <form id="profileUsers">
        <div class="main-login">
            <div class="left-login">
                <h1>Alterar sua Conta</h1>
                <img src="images/logosemfundo.png" class="left-img" alt="logo" />
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>Altere seus Dados</h1>
                    <div class="textfield">
                        <label for="nome"> Nome Completo </label>
                        <input name="name" value="<?=$row->name;?>" type="text" id="nomeCad" placeholder="digite seu nome completo...">
                    </div>
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input name="email" value="<?=$row->email;?>" type="text" id="emailCad" placeholder="digite seu e-mail...">
                    </div>
        
                    <div class="textfield">
                        <label for="senha">Sua senha nova</label>
                        <input name="password" value="<?=$row->password;?>" type="password" id="senhaNova" placeholder="crie uma senha nova...">
                         <div id="senhaFraca2"></div>
                    </div>
                    <button class="btn-update">Atualizar Dados</button>
                    <div id="message">

                      
                    </div>
                      <a class="back" href="index.php">Voltar</a>
                </div>
            </div>
        </div>

    </form>
</body>
</html>
<script type="text/javascript" async>
    
    const form = document.querySelector("#profileUsers");
    form.addEventListener("submit",async (e) => {
        e.preventDefault();
        const dataUser = new FormData(form);
        const data = await fetch("http://localhost/loja/api/user-update.php",{
         method : "POST",
         body : dataUser
         });
        const user = await data.json();
        console.log(user);
        document.querySelector("#message").setAttribute("style","display");
        console.log(user.message);
        if(user.type === "success"){
             message.textContent = user.message;
        } else {
             message.textContent = user.message;
        }
       
        setTimeout(() => {
            message.setAttribute("style","display: none");
        },4000);
    });
</script>



