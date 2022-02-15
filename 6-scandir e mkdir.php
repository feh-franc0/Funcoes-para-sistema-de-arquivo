<?php

// como podemos ler diretorios e criar diretorios

var_dump(scandir("./"));// retorna um array com todas as informações do diretorio
$dir = "./uploads";
if(file_exists($dir)){ // para criar um diretorio
    var_dump("Diretório já existe");
} else {
    mkdir($dir);
    var_dump("Diretório criado com sucesso!");
}