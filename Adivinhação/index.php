<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Jogo da Adivinhação</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1 class="titulo">Escolha um palpite</h1>

    <div class="container">

        <?php
        include("modelo/Lugares.php");

        $palpites = [
            1 => new Lugar("Brasil - Alagoas - Maceió", "https://passagenspromo.com.br/blog/wp-content/uploads/2018/09/ipioca-praia2.jpg"),
            2 => new Lugar("Coreia do Sul - Seul", "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Seoul_%28175734251%29_%28cropped%29.jpg/330px-Seoul_%28175734251%29_%28cropped%29.jpg"),
            3 => new Lugar("Canada-Ontário - Ottawa", "https://www.toniagara.com/blog/wp-content/uploads/2023/12/Large-Ottawa-sign-in-street.jpg"),
            4 => new Lugar("Italia-La Spezia - Vila Riomaggiore", "https://suaguia.com.br/wp-content/uploads/elementor/thumbs/Roteiro-Personalizado-para-Italia-7-Cinque-Terre-r9mbgdddf3w2e450e6y7pvix06uctw5b3rg7c11x80.png"),
            5 => new Lugar("Japão - Osaka - Castelo de Osaka", "https://osakacastle.org/wp-content/uploads/2024/11/osaka-castle-japan-cherry-blossoms-view-1-1024x684.jpeg"),
            6 => new Lugar("Suíça - Zermatt- montanha Matterhorn", "https://paradisoturismo.com.br/wp-content/uploads/2021/09/swiss9-1924x1283.jpg"),
            7 => new Lugar("Argentina - Ushuaia", "https://www.ushuaia.com.br/wp-content/uploads/sites/5/2022/11/unnamed-1.jpg"),
            8 => new Lugar("China - Xangai", "https://f.i.uol.com.br/fotografia/2019/06/13/15604470785d028866dc1f1_1560447078_3x2_rt.jpg"),
            9 => new Lugar("Áustralia - Nova Gales do Sul - Sidney", "https://www.pelago.com/img/destinations/sydney/hero-image-xlarge.jpg"),
            10 => new Lugar("África - Burkina Faso", "https://quantaboo.com/acervoquantaboo/785gmy0363.png")
        ];

        foreach ($palpites as $num => $p) {

            echo "<a href='jogo.php?palpite=$num' class='link-card'>";

            echo "<div class='card'>";
            echo "<p class='numero'>Palpite $num</p>";
            echo "<img src='" . $p->getLink() . "'>";
            echo "<p class='nome'>" . $p->getNome() . "</p>";
            echo "</div>";

            echo "</a>";
        }
        ?>

    </div>

</body>

</html>