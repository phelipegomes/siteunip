<?php
$nome     =   $_POST['nome']; 
$email    =   $_POST['email']; 
$telefone =   $_POST['telefone']; 
$assunto  =   $_POST['assunto']; 
$mensagem =   $_POST['mensagem'];
  
$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
  
$msg .= "Nome: $nome\n";

		
$msg .= "Email: $email\n";
	
$msg .= "Telefone: $telefone\n";
	
$msg .= "Mensagem: $mensagem\n";


$status = mail("seuemail@gmail.com.br", $assunto, $msg, $headers); 
 
    if($status) {
        echo "<script> alert('Formulário enviado com sucesso. Aguarde nosso contato, obrigado!'); </script>"; 
    }
    else {
        echo "<script> alert('Falha ao enviar o Formulário. Tente novamente.'); </script>"; 
    }
    echo "<script> window.location.href = 'index.html'; </script>"; ?>