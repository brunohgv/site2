<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['nome'];
		$surname = $_POST['sobrenome'];
		$email = $_POST['email'];
		$phone = $_POST['telefone'];
		$subject_form = $_POST['assunto'];
		$msg = $_POST['msg'];

		$to = 'brunohgv2@gmail.com';
		$subject = 'Formulário Contato Site';
		$message = "Nome: ".$name." ".$surname."\n"."Telefone: ".$phone."\n"."Email: ".$email."\n\n"."Assunto: ".$subject_form."\n\n".$msg;
		$headers = "From: ".$email;

		if (mail($to, $subject, $message, $headers)) {
			echo "<h1>Mensagem enviada com sucesso! Obrigado, ".$name." em breve entraremos em contato!</h1>";
		} else {
			echo "<h1>Algo de errado aconteceu!</h1>";
		}
	}

?>