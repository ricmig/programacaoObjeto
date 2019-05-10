<?php

Class Ebook extends Produto
{
    private $link;
        
    public function __construct(float $xPreco, string $xNome, string $xDescricao, string $xLink)
    {
        parent::__construct($xPreco, $xNome, $xDescricao);
        $this->link = $xLink;        
    }

 





}



// http://localhost/php-objetos-ricardo/ecommerce/classes/