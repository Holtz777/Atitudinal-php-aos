<?php

/*Crie um array associativo em PHP com as seguintes informações: nome, idade, cidade e profissão. Em seguida, imprima essas informações de forma organizada utilizando um loop for.

Exemplo de array associativo:

$musica = [
    "nome" => "Caneta Azul",
    "artista" => "Manoel Gomes",
    "idadeDoArtista" => 44
];
Exemplo de echo:

- A música CANETA AZUL de MANOEL GOMES é ótima, MANOEL GOMES tem 44 anos.*/

$pessoas = [
  [
    "nome" => "Ana Silva",
    "idade" => 25,
    "cidade" => "São Paulo",
    "profissão" => "Desenvolvedora Web"
  ],
  [
    "nome" => "João Oliveira",
    "idade" => 30,
    "cidade" => "Rio de Janeiro",
    "profissão" => "Engenheiro Civil"
  ],
  [
    "nome" => "Maria Costa",
    "idade" => 22,
    "cidade" => "Brasília",
    "profissão" => "Estudante de Medicina"
  ]
];


for ($i = 0; $i < count($pessoas); $i++) {
  $pessoa = $pessoas[$i];

  
  echo "- " . $pessoa["nome"] . " de " . $pessoa["cidade"] . " é " . $pessoa["profissao"] . " e tem " . $pessoa["idade"] . " anos.\n" ;
}

?>