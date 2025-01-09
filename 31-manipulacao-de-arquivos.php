<?php 
// Manipulação de Arquivos

$arquivo = "arquivo.txt";
$conteudo = "Conteudo de teste\r\n";
$tamanhoArquivo = fileSize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');

while (!feof($arquivoAberto)) {
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha;
}

fclose($arquivoAberto);