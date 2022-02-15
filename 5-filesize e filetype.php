<?php

// 

var_dump(filesize("./arquivo.csv"));// tamanho do arquivo em bytes
var_dump(filetype("./arquivo.csv"));// para descobrir o tipo de arquivo(se é um arquivo ou diretorio)
var_dump(mime_content_type("./arquivo.csv"));// para mostrar o formato do arquivo EX: .txt
var_dump(stat("./arquivo.csv"));// traz em arrays diversas informações,como:  horario do ultimo acesso[8], ultima modificação[9]