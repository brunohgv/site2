function _(id) {
	return document.getElementById(id);
}

function submitForm () {
	_("submit-btn").disabled = true;
	_("status").innerHTML = "Espere um momento...";
	var formdata = new FormData();
	formdata.append('nome', _("nome").value);
	formdata.append('sobrenome', _("sobrenome").value);
	formdata.append('email', _("email").value);
	formdata.append('telefone', _("telefone").value);
	formdata.append('assunto', _("assunto").value);
	formdata.append('mensagem', ("mensagem").value);

	var ajax = new XMLHttpRequest();
	ajax.open("POST", "../php/form.php");
	ajax.onreadystatechange() = function() {
		if (ajax.readyState == 4 && ajaxStatus == 200) {
			if (ajax.responseText == "sucesso"){
				_("contact-form").innerHTML = '<h2>Obrigado, ' + _('nome').value + ". Responderemos o mais rápido possível!";
			}
			else{
				_("status").innerHTML = ajax.responseText;
				_("submit-btn").disabled = false;
			}
		}
	
	}
	ajax.send( formdata );
}