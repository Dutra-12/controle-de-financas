<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Controle de finanças - Entrar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./assets/entrar/css/style.css">

  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
<!-- <div>Ícones feitos por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div> -->
  <div class="container">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <div id="first">
          <div class="myform form ">
            <form action="" method="post" name="login">
              <div class="logo mb-5">
                <div class="col-md-12 text-center">
                  <h1 class="cd-tl">Controle de finanças</h1>
                </div>
              </div>
              <div class="form-group mb-5">
                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
              </div>
              <div class="form-group">
                <a href="#">Esqueceu a senha?</a></p>
              </div>
              <div class="col-md-12 text-center ">
                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Logar</button>
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <p class="text-center"><a href="#" class="register" id="signup">Registrar</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="second">
          <div class="myform form ">
            <form action="#" name="registration">
              <div class="logo mb-3">
                <div class="col-md-12 text-center">
                  <h1>Signup</h1>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
              </div>
              <div class="col-md-12 text-center mb-3">
                <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>
              </div>
              <div class="col-md-12 ">
                <div class="form-group">
                  <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="third">
          
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/jquery/jquery.min.js"></script>
  <script src="./assets/entrar/js/style.js"></script>
</body>

</html>