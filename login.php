<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title> Arco - Login </title>
	<link rel="stylesheet" href="css/materialize.css"
/head>
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

 .btn-grad {background-image: linear-gradient(to right, #1488CC  0%, #2B32B2  100%)}
 .btn-grad2 {background-image: linear-gradient(to right, #2980b9  -50%, #2c3e50  100%)}
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
      <img class="responsive-img" style="width: 250px;" src="imgs/arcms.png" />



              <div class="container">
               <div class=" transparent row" style="display: inline-block; padding: 32px 48px 0px 48px;  border-radius: 5px">
                <form class="col s12" action="includes/login.inc.php" method="POST">
                 <div class='row'>
                  <div class='col s12'>
                  </div>
                   </div>

              <div class='row'>
               <div class='input-field  col s12'>
                <input class='validate' type='email' name='email' id='email' />
                 <label for='email'>Email do usuário</label>
                  </div>
                   </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='pwd' id='pwd' />
                <label for='pwd'>Senha</label>
             </div>
                <label style='float: right;'>
                <a class='red-text text-darken-1' href="#!"><b>Esqueci minha senha</b></a>
            </label>
            </div>
                         

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 blue-grey-text text-darken-4 btn btn-large waves-effect blue lighten-5'>Login</button>
               </div>
            </center>
          </form>

</div>
</div>
<a class="waves-effect waves-light btn btn-border transparent indigo-text text-lighten-5" href="cadastro.html">Criar conta</a>
</center>

<div class="section"></div>
<div class="section"></div>
</main>
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
  <script src="js/materialize.js"></script>
</body>
</html>