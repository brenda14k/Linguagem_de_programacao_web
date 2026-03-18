<?php
include("modelo/Lugares.php"); // incluir classe Lugar

// Criando os objetos Lugar
$palpite1 = new Lugar("Brasil - Alagoas - Maceió", "https://passagenspromo.com.br/blog/wp-content/uploads/2018/09/ipioca-praia2.jpg");
$palpite2 = new Lugar("Coreia do Sul - Seul", "https://www.toniagara.com/blog/wp-content/uploads/2023/12/Large-Ottawa-sign-in-street.jpg");
$palpite3 = new Lugar("Canada-Ontário - Ottawa", "https://www.toniagara.com/blog/wp-content/uploads/2023/12/Large-Ottawa-sign-in-street.jpg");
$palpite4 = new Lugar("Italia-La Spezia - Vila Riomaggiore", "https://suaguia.com.br/wp-content/uploads/elementor/thumbs/Roteiro-Personalizado-para-Italia-7-Cinque-Terre-r9mbgdddf3w2e450e6y7pvix06uctw5b3rg7c11x80.png");
$palpite5 = new Lugar("Japão - Osaka - Castelo de Osaka", "https://osakacastle.org/wp-content/uploads/2024/11/osaka-castle-japan-cherry-blossoms-view-1-1024x684.jpeg");
$palpite6 = new Lugar("Suíça - Zermatt- montanha Matterhorn", "https://paradisoturismo.com.br/wp-content/uploads/2021/09/swiss9-1924x1283.jpg");
$palpite7 = new Lugar("Argentina - Ushuaia", "https://www.ushuaia.com.br/wp-content/uploads/sites/5/2022/11/unnamed-1.jpg");
$palpite8 = new Lugar("China - Xangai", "https://f.i.uol.com.br/fotografia/2019/06/13/15604470785d028866dc1f1_1560447078_3x2_rt.jpg");
$palpite9 = new Lugar("Áustralia - Nova Gales do Sul - Sidney", "https://www.pelago.com/img/destinations/sydney/hero-image-xlarge.jpg");
$palpite10 = new Lugar("África - Burkina Faso", "https://quantaboo.com/acervoquantaboo/785gmy0363.png");

// Colocando todos os palpites em um array
$palpites = [
    1 => $palpite1,
    2 => $palpite2,
    3 => $palpite3,
    4 => $palpite4,
    5 => $palpite5,
    6 => $palpite6,
    7 => $palpite7,
    8 => $palpite8,
    9 => $palpite9,
    10 => $palpite10
];

// Sorteio aleatório do palpite correto
$correto = rand(1, 10);

// Verifica se o parâmetro ?palpite foi enviado
if (!isset($_GET['palpite']) || $_GET['palpite'] === '') {
    echo "<h2>Informe o parâmetro ?palpite=1, 2 ou 3</h2>";
    exit;
}

$escolha = $_GET['palpite'];
**sei
// Verificação do palpite
if ($escolha == $correto) {
    $palpite = $palpites[$correto];
    echo "<h2>Parabéns! Você acertou!</h2>";
    echo "<p>Nome: " . $palpite->getNome() . "</p>";
    echo "<img src='" . $palpite->getLink() . "' width='200'>";
} else {
    $palpiteCorreto = $palpites[$correto];
    echo "<h2>Você errou!</h2>";
    echo "<p>O palpite correto era: " . $palpiteCorreto->getNome() . "</p>";
}
?>
