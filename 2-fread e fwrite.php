<?php

// vamos aprender a ler um arquivo que ja abrimos e a escrever nesse arquivo

$filename = "./arquivo.csv";

$arquivo = fopen($filename, "a+");
var_dump("Abriu o Arquivo");

var_dump(filesize($filename));


$registro = "Fernando Franco;fehfranco@hcode.com.br;25\r\n";
var_dump(fwrite($arquivo,$registro));

rewind($arquivo);
// fseek($arquivo, 10); //se estiver usando o r+ o ponteiro ira comecar do inicio e com o fseek ira pular 10 caracteres e comecar a escreve apartir do 10º caracter

var_dump(fread($arquivo, filesize($filename)));

fclose($arquivo);

var_dump("Fechou o Arquivo");