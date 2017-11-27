$(document).ready(function(){
	var logininc="includes/login.inc.php";
	var cadastroinc="Location: ../includes/cadastro.inc.php";
	var dbh="http://localhost/phonegap/login/auth.php?callback=?";
    var nomeinc="includes/nomec.inc.php";
    



    //Login Function
    $("#login").click(function(){
    	
    	var email=$("#email").val();
    	var pwd=$("#pwd").val();
    	var dataString="email="+email+"&pwd="+pwd+"&login=";
    	if($.trim(email).length>0 & $.trim(pwd).length>0)
		{
			$.ajax({
				type: "POST",
				url: logininc,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#login").html('Aguarde...');},
				success: function(data){
					if(data=="success")
					{
						localStorage.login="true";
						localStorage.email=email;
						window.location.href = "analise.html";
					}
					else if(data="failed")
					{
						alert("Falha no login");
						$("#login").html('Login');
					}
				}
			});
		}return false;

    });

    //signup function
    $("#signup").click(function(){
    	var nomec=$("#nomec").val();
    	var email=$("#email").val();
    	var password=$("#password").val();
    	var dataString="nomec="+nomec+"&email="+email+"&password="+password+"&signup=";

    	if($.trim(nomec).length>0 & $.trim(email).length>0 & $.trim(password).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#signup").val('Connecting...');},
				success: function(data){
					if(data=="success")
					{
						alert("Thank you for Registering with us! you can login now");
					}
					else if(data="exist")
					{
						alert("Hey! You alreay has account! you can login with us");
					}
					else if(data="failed")
					{
						alert("Something Went wrong");
					}
				}
			});
		}return false;

    });

    //Change Password
    $("#change_password").click(function(){
    	var email=localStorage.email;
    	var old_password=$("#old_password").val();
    	var new_password=$("#new_password").val();
    	var dataString="old_password="+old_password+"&new_password="+new_password+"&email="+email+"&change_password=";
    	if($.trim(old_password).length>0 & $.trim(old_password).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#change_password").val('Connecting...');},
				success: function(data){
					if(data=="incorrect")
					{
						alert("Your old password is incorrect");
					}
					else if(data="success")
					{
						alert("Password Changed successfully");
					}
					else if(data="failed")
					{
						alert("Something Went wrong");
					}
				}
			});
		}return false;

    });

    //Forget Password
    $("#forget_password").click(function(){
    	var email=$("#email").val();
    	var dataString="email="+email+"&forget_password=";
    	if($.trim(email).length>0)
		{
			$.ajax({
				type: "POST",
				url: url,
				data: dataString,
				crossDomain: true,
				cache: false,
				beforeSend: function(){ $("#forget_password").val('Connecting...');},
				success: function(data){
					if(data=="invalid")
					{
						alert("Your have not registered with us");
					}
					else if(data="success")
					{
						alert("we have sent password to your email address, please check");
					}
				}
			});
		}return false;

    });


    //logout function
    $("#logout").click(function(){
    	localStorage.login="false";
    	window.location.href = "login.html";
    });

    //email do usuario
    $("#email1").html(localStorage.email);
    $('#nomec1')
    var imageHash="http://www.gravatar.com/avatar/"+md5(localStorage.email);
    $("#profilepic").attr('src',imageHash);
});


    //nome do user
    $(document).ready(function(){

        $.ajax({
            url: "includes/nomec.inc.php"
        }).done(function(nome){
            $("#nomec").html("Olá, "+  nome );

        });
    });

         $(document).ready(function(){

        $.ajax({
            url: "includes/desvio.inc.php"
        }).done(function(desvio){
            $("#desvio").html("O desvio padrão da calibragem foi: " + desvio );

        });
    });

                  $(document).ready(function(){

        $.ajax({
            url: "includes/media.inc.pgp.php"
        }).done(function(media){
            $("#media").html("E a média: " + media );

        });
    });


//grafico analise
    $(document).ready(function(){

        $.ajax({
            url: "includes/graph.inc.php"
        }).done(function(boa){
            $("#boa").html("Boa, Má: "+  boa );

        });
    });

        $(document).ready(function(){

        $.ajax({
            url: "includes/graph2.inc.php"
        }).done(function(ma){
            $("#ma").html(ma );

        });
    });

                $(document).ready(function(){

        $.ajax({
            url: "includes/dorlista.inc.php"
        }).done(function(row){
            $("#dorlista").html(row );

        });
    });


//Dor estatisticas

                $(document).ready(function(){

        $.ajax({
            url: "includes/dortab.inc.php"
        }).done(function(row){
            $("#dor").html(row );

        });
    });
                
//Sensor estatisticas

                $(document).ready(function(){

        $.ajax({
            url: "includes/sentab.inc.php"
        }).done(function(row){
            $("#sensor").html(row );

        });
    });

//

                $(document).ready(function(){

        $.ajax({
            url: "includes/postab.inc.php"
        }).done(function(row){
            $("#postura").html(row );

        });
    });