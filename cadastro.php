<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Arco - Cadastro </title>
	<link rel="stylesheet" href="css/materialize.css"

</head> 
<style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

	 body{background: #141E30;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #243B55, #141E30);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #243B55, #141E30); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

        main {
      flex: 1 0 auto;
    }

.opacity {
  opacity: 0.90;
}

.ctn-grad {background-image: linear-gradient(to top, #8e9eab  -78%, #eef2f3 105%)}

.btn-border {border: 1px solid #EEE}

        .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }
        .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 1px solid #e91e63;
      box-shadow: none;
    }
</style>
</head>

<body>
  <div class="section"></div>
  <main>
   <center>
      <img class="responsive-img" style="width: 250px;" src="imgs/arcmv.png" />
    

<div class="section">
      <h6 class="blue-text text-lighten-5">Insira seus dados</h6>
  </br>

              <div class="container" >
              	<div class="row">
               <div class="z-depth-5 ctn-grad opacity row" style="display: block; margin: -12px 28px 0px 28px; padding: 0px 20px 0px 20px;  border-radius: 7px">
                <form class="col s12" action="includes/cadastro.inc.php" method="POST">
                 <div class='row'>
                  <div class='col s12'>
                  </div>
                   </div>

          <div class='row'>
        <div class="input-field col s12">
          <input id="nomec" name='nomec' type="text" class="validate">
          <label for="name">Nome completo</label>
        </div>
                   </div>

            <div class="row">
        <div class="input-field col s12">
          <input id="email" name='email' type="email" class="validate">
          <label for="email" data-error="Inválido">Email</label>  
        </div>

            </div>
                         <div class="row">
        <div class="input-field col s12">
          <input id="pwd" name='pwd' type="password" class="validate">
          <label for="password">Senha</label>
        </div>
             </div>

            <center>
              <div class='row'>
                <button type='submit' name='submit' class='col s12 btn-large waves-effect waves-light blue-grey darken-4'>Cadastrar</button>
               </div>
            </center>
          </form>

</div>
</div>
<a class="waves-effect waves-light btn btn-border transparent indigo-text text-lighten-5" href="login.php">Já tenho uma conta</a>
</center>

</main>
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="js/materialize.js"></script>
</body>
</html>
