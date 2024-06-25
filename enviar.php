<!-- DESATIVADO TEMPORARIAMENTE -->
<?php

    $nome = addslashes($_POST['Seu nome completo']);
    $email =addslashes($_POST['Seu e-mail']);
    $celular = addslashes($_POST['Seu celular']);
    $mensagem = addslashes($_POST['Sua mensagem']);


    $para = "mtbeastbat@gmail.com";
    $assunto = "dados - mtbeastbat@gmail.com";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Sua mensagem: ".$mensagem;

    $cabeca = "From: hallowentf2@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
       echo("E-mail enviado com sucesso!");
    }
    else{
         echo("Houve um erro!");
    }

?>
