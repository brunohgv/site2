<?php
	if (isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['assunto']) && isset($_POST['msg'])) {
		if (!empty($_POST['nome']) && !empty($_POST['sobrenome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['assunto']) && !empty($_POST['msg'])) {
			$fname = $_POST['nome'];
			$lname = $_POST['sobrenome'];
			$email = $_POST['email'];
			$phone = $_POST['telefone'];
			$subject_form = $_POST['assunto'];
			$msg = $_POST['msg'];

			

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Email inválido";
			} else {

				$to = 'brunohgv2@gmail.com';
				$subject = 'Formulário Contato Site';
				$message = "Nome: ".$fname." ".$lname."\n"."Telefone: ".$phone."\n"."Email: ".$email."\n\n"."Assunto: ".$subject_form."\n\n".$msg;
				$headers = "From: ".$email;

				if (mail($to, $subject, $message, $headers)) {
				echo "Mensagem enviada com sucesso! Obrigado, ".$name." em breve entraremos em contato!";
				} else {
				echo "Algo de errado aconteceu!";
			}
			}

			
		} else {
			echo "Todos os campos precisam ser preenchidos";
		}
		
	} else {
		echo "Falha na primeira verificaçao";
	}

?>