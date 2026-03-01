<?php
require_once("Modelo/Pokemon.php");
//Cria Objeto
$pokemons = [];

$pokemons[] = new Pokemon(
    "Pikachu",
    "Elétrico",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
    "https://pokemon.fandom.com/pt-br/wiki/Pikachu",
        "Pokémon elétrico famoso por suas bochechas que soltam raios."

);

$pokemons[] = new Pokemon(
    "Umbreon",
    "Sombrio",
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/197.png",
    "https://pokemon.fandom.com/pt-br/wiki/Umbreon",
    "Evolução sombria de Eevee, silencioso e muito resistente."
);

$pokemons[] = new Pokemon(
    "Squirtle",
    "Água",
    "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png",
    "https://pokemon.fandom.com/pt-br/wiki/Squirtle",
     "Pokémon aquático que ataca com jatos poderosos de água."
);

$pokemons[] = new Pokemon(
    "Flareon",
    "Fogo",
    "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/136.png",
    "https://pokemon.fandom.com/pt-br/wiki/Flareon",
    "Evolução de fogo de Eevee, corpo quente e chamas intensas."
);

$pokemons[] = new Pokemon(
    "Mewtwo",
    "Psíquico",
    "https://img.pokemondb.net/artwork/large/mewtwo.jpg",
    "https://pokemon.fandom.com/pt-br/wiki/Mewtwo",
    "Pokémon psíquico extremamente poderoso criado em laboratório."
);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Pokémons</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
          width: 50px;      /* largura ideal */
          height: 50px;     /* altura igual */
          object-fit: contain;  /* não distorce */
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tabela de Pokémons</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Imagem</th>
        <th>Dados</th>
    </tr>

    <?php foreach ($pokemons as $p): ?>
        <tr>
            <td><?= $p->getNome(); ?></td>
            <td><?= $p->getTipo(); ?></td>
            <td>
                <img src="<?= $p->getImagem(); ?>">
            </td>
            <td>
               <span><?= $p->getDescricao(); ?></span>
    <a href="<?= $p->getDados(); ?>" target="_blank">
        Ver mais
    </a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
