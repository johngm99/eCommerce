function mostrarErro(msg) {
	msgError = document.getElementById("exibeErro");
	msgError.innerHTML = msg;
}

function validaCampos() {

	valido = true;

	cEmail = document.forms['cadastro'].cEmail.value;
	cNome = document.forms['cadastro'].cNome.value;
	cSNome = document.forms['cadastro'].cSNome.value;
	cCPF = document.forms['cadastro'].cCPF.value;
	cRG = document.forms['cadastro'].cRG.value;
	cDDD1 = document.forms['cadastro'].cDDD1.value;
	cTelefone = document.forms['cadastro'].cTelefone.value;
	cDDD2 = document.forms['cadastro'].cDDD2.value;
	cCelular = document.forms['cadastro'].cCelular.value;
	cEndereco = document.forms['cadastro'].cEndereco.value;
	cNum = document.forms['cadastro'].cNum.value;
	cComplemento = document.forms['cadastro'].cComplemento.value;
	cBairro = document.forms['cadastro'].cBairro.value;
	cReferencia = document.forms['cadastro'].cReferencia.value;
	cCEP = document.forms['cadastro'].cCEP.value;

	if (cEmail.length < 7) {
		valido = false;
		mostrarErro("O campo EMAIL deve possuir mais de 7 caracteres!");
	} else if (cNome.length < 3) {
		valido = false;
		mostrarErro("O campo NOME deve possuir mais de 3 caracteres!");
	} else if (cSNome.length < 3) {
		valido = false;
		mostrarErro("O campo SOBRENOME deve possui mais de 3 caracteres!");
	} else if (cCPF.length < 11 && cCPF.length > 12) {
		valido = false;
		mostrarErro("Campo CPF deve conter apenas números!");
	} else if (cRG.length < 10 && cRG.length > 11) {
		valido = false;
		mostrarErro("O campo RG deve conter apenas números!");
	} else if (cDDD1.length < 2 && cDDD1.length > 2) {
		valido = false;
		mostrarErro("O campo DDD do Telefone deve possuir apenas 2 dígitos!");
	} else if (cTelefone.length < 8 && cTelefone.length > 9) {
		valido = false;
		mostrarErro("O campo TELEFONE deve possuir apenas 8 dígitos!");
	} else if (cDDD2.length < 2 && cDDD2.length > 2) {
		valido = false;
		mostrarErro("O campo DDD do Celular deve possuir apenas 2 dígitos!");
	} else if (cCelular.length < 9 && cCelular.length > 9) {
		valido = false;
		mostrarErro("O campo CELULAR deve possuir apenas 9 dígitos!");
	} else if (cEndereco.length < 5) {
		valido = false;
		mostrarErro("Preencha o campo ENDEREÇO corretamente!");
	} else if (cNum.length < 1) {
		valido = false;
		mostrarErro("Preencha o NÚMERO de sua residência!");
	} else if (cComplemento.length < 2) {
		valido = false;
		mostrarErro("Preencha o COMPLEMENTO corretamente!");
	} else if (cBairro.length < 3) {
		valido = false;
		mostrarErro("Preencha o campo BAIRRO corretamente!");
	} else if (cReferencia.length < 2) {
		valido = false;
		mostrarErro("Preencha o campo REFERÊNCIA corretamente!");
	} else if (cCEP.length < 8) {
		valido = false;
		mostrarErro("Preencha o campo CEP corretamente!");
	}

	if (valido) {
		mostrarErro("");
		document.forms['cadastro'].submit();
	}
}
