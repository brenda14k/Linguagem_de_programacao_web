<?php
require_once("modelo/Lugares.php");

//  redireciona se não tiver palpite
if (!isset($_GET['palpite']) || $_GET['palpite'] === '') {
    header("Location: index.php");
    exit;
}
require_once("modelo/Lugares.php");


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

// sorteio
$correto = rand(1, 10);

// valida número
if (!is_numeric($_GET['palpite'])) {
    echo "<h2 class='erro'>Palpite deve ser numérico!</h2>";
    exit;
}

$escolha = (int) $_GET['palpite'];

if ($escolha < 1 || $escolha > count($palpites)) {
    echo "<h2 class='erro'>Palpite inválido!</h2>";
    exit;
}

// função da caixa do resultado
function mostrarCaixa($numero, $nome, $link, $blur = false) {

    echo "<div class='caixa-resultado'>";

    echo "<p class='numero'>Palpite $numero</p>";

    //  AQUI ACONTECE O BORRADO
    if ($blur) {
        echo "<img class='blur' src='$link'>";
    } else {
        echo "<img src='$link'>";
    }

    echo "<p class='nome'>$nome</p>";

    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<a href="/programacao_web/Adivinhacao/" class="btn-voltar">⬅ Voltar</a>

<h1 class="titulo">Resultado</h1>

<!-- MOSTRA APENAS O NÚMERO -->
<p class="numero">Você escolheu o palpite: <?php echo $escolha; ?></p>

<?php
// resultado
if ($escolha === $correto) {

    echo "<h2 class='acerto'>PARABÉNS! VOCÊ ACERTOU!</h2>";

    // SEM BLUR
    mostrarCaixa(
        $correto,
        $palpites[$correto]->getNome(),
        $palpites[$correto]->getLink(),
        false
    );

} else {

    echo "<h2 class='erro'>Você errou!</h2>";
    echo "<p class='texto-resultado'>O palpite correto era:</p>";

    // COM BLUR
    mostrarCaixa(
        $correto,
        $palpites[$correto]->getNome(),
        $palpites[$correto]->getLink(),
        true
    );
}
?>

<br>

</body>
</html>
