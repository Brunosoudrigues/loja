<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HB CLOTHING</title>
    <link rel="stylesheet" href="assets/styles.css" />
  </head>
  <body>
    <header>
   <?php
    include __DIR__ . "/includes/header.php";
   ?>
</header>
    <section class="catalogo" id="catalog">
      <div class="content">
        <div class="title-wrapper-catalog">
          <p>Conheça nosso catálogo de roupas</p>
          <h3>Catálogo</h3>
        </div>
        <div class="card-wrapper">
          <div class="card-item">
            <img src="images/calca2.jpg" alt="calca" />
            <div class="card-content">
              <h3>Calça de Sarja</h3>
              <p>
                Tamanho:40
                Cor(es):caramelo
                Modelo:Skinny
              </p>
              <button type="button">R$149,90</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/calça.webp" alt="calca" />
            <div class="card-content">
              <h3>Calça Feminina jeans</h3>
              <p>
                Tamanho:36
                Cor(es):Azul
                Modelo:Slim
              </p>
              <button type="button">R$ 239,99</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/calça1.jpg" alt="calca" />
            <div class="card-content">
              <h3>Calça Feminina</h3>
              <p>
                Tamanho:38
                Cor(es):Azul
                Modelo:Boot cut
              </p>
              <button type="button">R$ 189,90</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/moletom1.jpg" alt="moletom" />
            <div class="card-content">
              <h3>Moletom Coração</h3>
              <p>
                Tamanho:P
                Cor(es):Preto
                Modelo: Canguru
              </p>
              <button type="button">R$ 199,90</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/moletom3.jpg" alt="moletom" />
            <div class="card-content">
              <h3>Moletom Nasa</h3>
              <p>
                Tamanho:G
                Cor(es):Azul Bebe
                Modelo:Canguru
              </p>
              <button type="button"> R$ 209,48</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/moletom6.jpg" alt="Car" />
            <div class="card-content">
              <h3>Moletom Dinossauro</h3>
              <p>
                Tamanho:M
                Cor(es):Marrom 
                Modelo:Canguru
              </p>
              <button type="button">R$ 300,00</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/camiseta.webp" alt="camiseta" />
            <div class="card-content">
              <h3>Camiseta Art Object</h3>
              <p>
                Tamanho:M
                Cor(es):Preta
                Modelo:T-shirt             
              </p>
              <button type="button">R$ 59,90</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/camisetalevis.jpg" alt="Car" />
            <div class="card-content">
              <h3>Camiseta Levi's</h3>
              <p>
                Tamanho:M
                Cor(es):Preta
                Modelo:T-shirt     
              </p>
              <button type="button"> R$ 89,90</button>
            </div>
          </div>
          <div class="card-item">
            <img src="images/camiseta1.jpg" alt="Car" />
            <div class="card-content">
              <h3>Camiseta Dolce&Cabana</h3>
              <p>
                Tamanho:M
                Cor(es):Preta
                Modelo:T-shirt  
              </p>
              <button type="button">R$599,99</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <footer>
        <?php
    include __DIR__ . "/includes/footer.php";
   ?>
    </footer>
  </body>
</html>