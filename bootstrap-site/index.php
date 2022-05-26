<?php
  $colorLogin = 'style="color: #343b42"';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" >
   


    <title>Exploring bootstrap</title>
</head>
<body>

  <div class="container">
      <?php
          require('headers/headerVisitante.php');
      ?>

      
      <!-- Corroussel -->
      <div id="carouselExampleIndicators" class="carousel slide meuCarousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Próximo</span>
        </button>
      </div>

      <hr class="bg-danger border-2 border-top border-danger">


      <!-- Progress bar -->
      <div class="progress">
        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
      </div>



  </div>



     <!-- Modal Login Aluno -->
     <div class="modal fade" id="modalLoginA" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <h2 class="fw-bold mb-0 modalLogin" <?php echo $colorLogin; ?>>Entre na área de aluno!</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Entre com teu e-mail</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Entre com tua senha</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-dark" type="submit">Entrar</button>
              <small class="text-muted"><a href="#" class="senha" <?php echo $colorLogin; ?>>Esqueci minha senha!</a></small>
              <hr class="my-4">             
            </form>
          </div>   
        </div>
      </div>
    </div>

    <!-- Modal Login Professor -->
    <div class="modal fade" id="modalLoginP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header p-5 pb-4 border-bottom-0">
            <h2 class="fw-bold mb-0" <?php echo $colorLogin; ?>>Entre na área do professor!</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Entre com teu e-mail</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Entre com tua senha</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-dark" type="submit">Entrar</button>
              <small class="text-muted"><a href="#" class="senha" <?php echo $colorLogin; ?>>Esqueci minha senha!</a></small>
              <hr class="my-4">             
            </form>
          </div>   
        </div>
      </div>
    </div>

    <!-- Modal Inscreva-se -->
    <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header p-5 pb-4 border-bottom-0">           
            <h2 class="fw-bold mb-0" <?php echo $colorLogin; ?>>Inscreva-se em meu site</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body p-5 pt-0">
            <form class="">
              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
              </div>
              <button class="w-100 mb-2 btn btn-lg rounded-3 btn-dark" type="submit">Me inscrever</button>
              <small class="text-muted">Ao clicar em Me inscrever você aceita os nossos termos de uso.</small>
              <hr class="my-4">
              <h2 class="fs-5 fw-bold mb-3" <?php echo $colorLogin; ?>>Ou use algumas dessas formas.</h2>
              <button class="w-100 py-2 mb-2 btn btn-outline-info rounded-3" type="submit">
                <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"/></svg>
                Entrar com o twitter
              </button>
              <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"/></svg>
                Entrar com o facebook
              </button>
              
            </form>
          </div>

        </div>
      </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>