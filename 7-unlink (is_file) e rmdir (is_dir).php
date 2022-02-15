<?php

// apagar arquivos e diretorios

if(file_exists("./arquivoqualquer.csv")){ // apaga arquivo
    unlink("./arquivo.csv");
}

if(file_exists("./uploadsqualquer")){ // apaga diretorio
    rmdir("./uploads");
}