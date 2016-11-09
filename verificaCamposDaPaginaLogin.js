function verificaCamposDaPagina(){
	fEmail = document.forms['form-cadastro'].fEmail.value;
	fEmailLogin = document.forms['form-login'].fEmailLogin.value;
	
	if(fEmail != ""){
		document.getElementById('mostra-erro-cadastrar').innerHTML = "Houve um erro de cadastro!";
	}
	
	if(fEmailLogin != ""){
		document.getElementById('mostra-erro-login').innerHTML = "Usuário ou senha incorretos!";
	}
}
