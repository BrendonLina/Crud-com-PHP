<?php

namespace app\model;

class produtoDao{
	public function create(Produto $p){
		$sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

		$cadastrar = Conexao::getConn()->prepare($sql);

		$cadastrar->bindValue(1, $p->getNome());

		$cadastrar->bindValue(2, $p->getDescricao());

		$cadastrar->execute();

	} 


	public function read(){
		$sql = 'SELECT * FROM produtos';

		$cadastrar = conexao::getConn()->prepare($sql);
		$cadastrar->execute();

		if($cadastrar->rowCount() > 0 ):
			$resultado = $cadastrar->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];	
		endif;	
	}

	public function update(Produto $p){
		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';
		$cadastrar = conexao::getConn()->prepare($sql);
		$cadastrar->bindValue(1, $p->getNome());
		$cadastrar->bindValue(2, $p->getDescricao());
		$cadastrar->bindValue(3, $p->getId());
		$cadastrar->execute();

	}

	public function delete($id){
		$sql = 'DELETE FROM produtos WHERE id = ?';
		$cadastrar = Conexao::getConn()->prepare($sql);
		$cadastrar->bindValue(1, $id);
		$cadastrar->execute();

	}
}
