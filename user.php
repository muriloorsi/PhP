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
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador
o caminho para a página principal do site (sistema), burlando assim a obrigação de
fazer um login, com isso se ele não estiver feito o login não será criado a session,
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if((!isset ($_SESSION['username']) == true) and (!isset ($_SESSION['password']) == true))
{
  header('location:createaccount.php');
  }

$logado = $_SESSION['username'];
?>
<body>
<table width="800" height="748" border="1">
            <tr>
                <td height="90" colspan="2" bgcolor="#CCCCCC">SISTEM WEB TESTE
            <?php
              echo "Bem vindo $logado";
            ?>
            /td>
            </tr>
            <tr>
                <td width="103" height="410" bgcolor="#CCCCCC">MENU AQUI</td>
                <td width="546">CONTEUDO E ICONES AQUI</td>
              </tr>
            <tr>
                <td colspan="2" bgcolor="#000000"> </td>
            </tr>
        </table>
</body>
</html>