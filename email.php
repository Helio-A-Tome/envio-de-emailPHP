<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
                 
                 $nome= addslashes($_POST['nome']);
                 $email= addslashes($_POST['email']);
                 $mensag = addslashes($_POST['mensagem']);
                 
                 
                 $para= 'netshark@live.com';
                 $assunto='pergunta do contato';
                 $corpo= "nome-".$nome."-email-"."-mensagem-".$mensag;
                 $cabecalho= "From:netsharkinformatica@gmail.com"."\r\n".
                 "Reply-To:".$email."\r\n"."X-Mailer:PHP/".phpversion();
                 
                 mail($para,$assunto,$corpo,$cabecalho);
                 
                 echo '<h2>email enviado com sucesso</h2>';
                 exit;

        }
        ?>

    <form action="" method="post">
    Nome:<br><input type="text" name="nome" id=""><br>
    Email:<br><input type="text" name="email" id=""><br>
    Mensagem:<br><textarea name="mensagem" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="enviar">
    </form>
</body>
</html>