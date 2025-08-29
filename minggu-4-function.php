<?php

$stocks = [
    ["symbol" => "AAPL", "company" => "Apple Inc", "price" => 175.50, "change" => 2.30, "volume" => 50000000],
    ["symbol" => "GOOGL", "company" => "Alphabet Inc", "price" => 2800.75, "change" => -15.20, "volume" => 25000000],
    ["symbol" => "MSFT", "company" => "Microsoft Corp", "price" => 330.25, "change" => 5.10, "volume" => 35000000],
    ["symbol" => "TSLA", "company" => "Tesla Inc", "price" => 245.80, "change" => -8.45, "volume" => 75000000],
    ["symbol" => "AMZN", "company" => "Amazon.com Inc", "price" => 3200.40, "change" => 12.90, "volume" => 20000000],
    ["symbol" => "META", "company" => "Meta Platforms", "price" => 485.20, "change" => -3.75, "volume" => 45000000],
    ["symbol" => "NVDA", "company" => "NVIDIA Corp", "price" => 875.60, "change" => 25.40, "volume" => 55000000]
];

$portfolios = [
    ["investor" => "Ahmad", "symbol" => "AAPL", "shares" => 100, "buy_price" => 150.00, "sector" => "Technology"],
    ["investor" => "Siti", "symbol" => "GOOGL", "shares" => 50, "buy_price" => 2750.00, "sector" => "Technology"],
    ["investor" => "Kumar", "symbol" => "TSLA", "shares" => 75, "buy_price" => 280.00, "sector" => "Automotive"],
    ["investor" => "Fatimah", "symbol" => "AMZN", "shares" => 25, "buy_price" => 3100.00, "sector" => "E-commerce"],
    ["investor" => "Chen", "symbol" => "META", "shares" => 80, "buy_price" => 500.00, "sector" => "Social Media"]
];


function beriSalam2($nama, $umur): void
{ //$nama & $umur dipanggil parameter
    echo "Halo, nama saya $nama, umur saya $umur tahun. <br>";

}

function beriSalam($investor, $symbol): void
{ //$nama & $umur dipanggil parameter
    echo "Halo, nama saya <strong>$investor</strong>, Saya melabur saham dalam  <strong>$symbol</strong> tahun ini. <br>"; //paparkan nama investor dan symbol saham dibeli
    
    $sahamsemasainvestor = kiraSahamsemasainvestor($investor, $symbol); //wajib declare $sahamsemasainvestor untuk pass value daripada function kiraSahamsemasainvestor
    $sahaminvestorbeli = kiraSahaminvestorbeli($investor, $symbol); //wajib declare $kiraSahaminvestorbeli untuk pass value daripada function kiraSahaminvestorbeli

    echo "Nilai semasa pelaburan <strong>$investor</strong> dalam <strong>$symbol</strong> adalah RM$sahamsemasainvestor. <br>";
    echo "Nilai <strong>$investor</strong> beli saham <strong>$symbol</strong> adalah RM$sahaminvestorbeli.";


    if ($sahamsemasainvestor > $sahaminvestorbeli) {
        $untung = $sahamsemasainvestor - $sahaminvestorbeli;
        echo "<br> <strong>$investor</strong> untung sebanyak RM$untung.";
    } elseif ($sahamsemasainvestor < $sahaminvestorbeli) {
        $rugi = $sahaminvestorbeli - $sahamsemasainvestor;
        echo "<br> <strong>$investor</strong> rugi sebanyak RM$rugi.";
    } else {
        echo "<br> <strong>$investor</strong> tidak untung atau rugi.";
    }

}

function kiraSahamsemasainvestor($investor, $symbol): float
{
    $hargasemasa = 0;
    foreach ($GLOBALS['stocks'] as $stock) {
        if ($stock['symbol'] === $symbol) {
            $hargasemasa = $stock['price'];
            break;
        }
    }

    $shareinvestor = 0;
    foreach ($GLOBALS['portfolios'] as $portfolio) {
        if ($portfolio['investor'] === $investor && $portfolio['symbol'] === $symbol) {
            $shareinvestor = $portfolio['shares'];
            break;
        }
    }
    $sahamsemasainvestor =$hargasemasa * $shareinvestor;
    return $sahamsemasainvestor;
}

// harga semasa investor beli saham itu($sahamsemasainvestorbeli), shares * buy_price

function kiraSahaminvestorbeli($investor, $symbol): float
{
    $hargainvestorbeli = 0;
    foreach ($GLOBALS['portfolios'] as $portfolio) {
        if ($portfolio['investor'] === $investor) {
            $hargainvestorbeli = $portfolio['buy_price'];
            break;
        }
    }

    $shareinvestor = 0;
    foreach ($GLOBALS['portfolios'] as $portfolio) {
        if ($portfolio['investor'] === $investor && $portfolio['symbol'] === $symbol) {
            $shareinvestor = $portfolio['shares'];
            break;
        }
    }
    $sahaminvestorbeli = $hargainvestorbeli * $shareinvestor;
    return $sahaminvestorbeli;
}

?>

<?php $int = 3; ?>

<h1>
    Ini adalah Account Saham <?php echo $portfolios[$int]['investor']; ?>
</h1>
<h2>
    <?php beriSalam($portfolios[$int]['investor'], $portfolios[$int]['symbol']); ?>
</h2>