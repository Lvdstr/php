function validar(){
	var login = cadastro.login.value
	var senha = cadastro.senha.value
	
	if(login == ""){
		alert("preencha o campo login")
		cadastro.login.focus()
		return false
	}
	if(senha == "" || senha.length <=5){
		alert("preencha o campo senha com 6 caracteres")
		cadastro.senha.focus()
		return false
	}
}
