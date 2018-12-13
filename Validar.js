function validar(){
	if (document.form.Nome.value==""){
		alert("O campo Nome não foi preenchido");
		document.form.Nome.focus();
		return false;
	}
	if (document.form.Senha.value.length <8){
		alert("O campo senha deve conter 8 caracteres ou mais");
		document.form.Senha.focus();
		return false;			
	}
}