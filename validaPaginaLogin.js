function validaInfoLogin(){
	
	valido = true;
	
	fEmailLogin = document.forms['form-login'].fEmailLogin.value;
	fPassLogin = document.forms['form-login'].fPassLogin.value;
	
//	alert(fEmailLogin + "<BR>" + fPassLogin);
	
	if(fEmailLogin == ""){
		valido = false;
		showErrorLogin("Preencha o campo EMAIL!");
	}else if(fPassLogin == ""){
		valido = false;
		showErrorLogin("Preencha o campo SENHA!");
	}else if(fPassLogin.length < 6){
		valido = false;
		showErrorLogin("Usuário ou senha incorretos!");
	}
	
	if(valido){
		showErrorLogin("");
		document.forms['form-login'].submit();
	}
}

function showErrorLogin(msg){
	document.getElementById('mostra-erro-login').innerHTML = msg;
}

function validaInfoCadastro() {

	valido = true;

	fEmail = document.forms['form-cadastro'].fEmail.value;
	fSenha = document.forms['form-cadastro'].fPass.value;
	fRSenha = document.forms['form-cadastro'].fRPass.value;

	if (fEmail == "") {
		valido = false;
		showErrorCadastro("Preencha o campo EMAIL!");
	} else if (fEmail.length < 7) {
		valido = false;
		showErrorCadastro("Preencha o campo EMAIL corretamente!");
	} else if (fSenha.length < 6) {
		valido = false;
		showErrorCadastro("Campo SENHA deve possuir no mínimo 6 caracteres!");
	} else if (fSenha != fRSenha) {
		valido = false;
		showErrorCadastro("As senhas devem ser iguais!");
	}
	
	if (valido) {
		showErrorCadastro("");
		document.forms['form-cadastro'].submit();
	}

}

function showErrorCadastro(msg) {
	document.getElementById('mostra-erro-cadastrar').innerHTML = msg;
}
