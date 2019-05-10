<?php 

Class Produto
{
    private $preco;
    private $nome;
    private $descricao;

    public function __construct(float $xPreco, string $xNone, $xDescricao)
    {
        $this->preco = $xPreco;
        $this->nome = $xNone;
        $this->descricao = $xDescricao;
            
    }


}