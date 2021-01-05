
<html>
<head>
	<h1>Produtos Cadastrados</h1>
	<title>Produtos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php

require_once 'vendor/autoload.php';
$produto = new \app\model\Produto();

$produto->setId(2);
$produto->setNome('Notebook Samsung');
$produto->setDescricao('i5 , 8gb');

$produtoDao = new \app\model\ProdutoDao();
$produtoDao->delete(4);
$produtoDao->read();


foreach ($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

?>

</body>
</html>	

