<?php 

include "classes/Produto.php";
include "classes/Ebook.php";
include "classes/LivroFisico.php";

$ebook = new Ebook(10.9, "PHP 00", "Livro muito bom", "http//xxx");
$livroFisico = new LivroFisico(12.9, "PHP 00", "Livro mto bom", 300);

echo '<pre>';
var_dump($ebook);
var_dump($livroFisico);