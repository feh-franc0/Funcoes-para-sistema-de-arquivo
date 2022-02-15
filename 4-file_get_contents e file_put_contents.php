<?php

// file_get_contents ->pega o conteudo de um arquivo remotamente e tambem file_put_contents -> inserir dados em um arquivo externo 

var_dump(file_get_contents("./arquivo.csv")); // mostra o conteudo

file_put_contents("./arquivo.csv", date("Y-m-d H:i:s")); // modifcado o nosso arquivo, passando o conteudo que queremos nele