<?php 

class ProdutoRepositorio
{
   private PDO $pdo;

   /**
     * @param PDO $pdo
     */

public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
}




public function opcoesLanches(): array
 {    
$sql = "select * from produtos";
$statement = $this->pdo->query($sql);
$Produtoslanches = $statement->fetchAll(PDO::FETCH_ASSOC);   





   $dadosLanche = array_map(function ($lanches){
     return $this->formarObjeto($lanches);
  },$Produtoslanches);

  return $dadosLanche;


   }


public function buscarDados(): array 
{
   $sqlBuscar = "select * from  produtos";
   $statement = $this->pdo->query($sqlBuscar);
   $todosProdotudos = $statement->fetchAll(PDO::FETCH_ASSOC);

   $dadosGeral = array_map(function ($bebidas){
      return $this->formarObjeto($bebidas);
   },$todosProdotudos);

   return $dadosGeral;

}




public function opcoesBebidas(): array 
{
    $sql1 = "select * from  produtos where tipo = 'Bebida' ";
$statement = $this->pdo->query($sql1);
$ProdutosBebidas = $statement->fetchAll(PDO::FETCH_ASSOC);   

   $dadosbebidas = array_map(function ($bebidas){
     return $this->formarObjeto($bebidas);
  },$ProdutosBebidas);

  return $dadosbebidas;

}

public function salvar(Produto $produto)
{
   $sql = "INSERT INTO produtos (img, nome, descricao, valor, tipo)
   VALUES (?,?,?,?,?)
   ";



}






   private function formarObjeto($dados)
   {
       return new Produto($dados['id'],
           $dados['img'],
           $dados['nome'],
           $dados['descricao'],
           $dados['valor'],
           $dados['tipo']);
   }



}


