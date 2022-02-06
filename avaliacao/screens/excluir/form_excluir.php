<html>
<head>
<link href="./styles/styles.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title></title>
</head>
<body>
<div id="container">    
<div id="topo">   </div>
<div id="menu">
<h3> Excluir </h3>
</div>
        
<div id="conteudo">

<div id="esquerda">
<?php
    require_once('../../php/conectar.php');
    $cod = $_GET['cod'];
    $sql="select * from cadastro where codigo=$cod";
    $res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());
    $linha = mysqli_fetch_row($res);

    $nome = $linha[1];
    $tel = $linha[2];
?>
</div>  

<div id="direita">
<b> <font color="#F00" size="4" face="Arial"> Deseja excluir este perfil? </font> </b>  
<form name="dados" action="../../php/exec_excluir.php" method="POST">
  <input type="hidden" name="cod" value="<?php echo $cod ?>" />

  <label> <span> Nome: </span> 
  <input type="text" name="nome" readonly value="<?php if (isset ($nome)) echo $nome ?>" /> </label> 
              
  <label> <span> Telefone: </span> 
  <input type="text" name="tel" readonly value="<?php if (isset ($tel)) echo $tel ?>" /> </label> 
                
  <input type="image" src="../../assets/icons/delete-icon.png" name="img_excluir" title="Excluir"> 
</form>
</div> 
<?php
if (isset ($_GET['retorno']))
{
 $msg = $_GET['retorno'];
 echo "<br />";
 echo "<font face='Arial' size='3' color='#F00'>";
 echo $msg;
 $msg="";
 echo "</font>";
}
?>
</div>
<div id="rodape">
  <div id="voltar"><h3><a href="../menu/menu.php">[Voltar ao Início]</a></h3> </div>
</div>
</div>
</body>
</html>
