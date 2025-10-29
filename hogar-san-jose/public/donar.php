
<?php
// Configuración de PayU
$merchantId = "TU_MERCHANT_ID";
$accountId = "TU_ACCOUNT_ID";
$apiKey = "TU_API_KEY"; // No compartas este dato públicamente

function generarFirma($apiKey, $merchantId, $referenceCode, $amount, $currency) {
    return md5("$apiKey~$merchantId~$referenceCode~$amount~$currency");
}

$montos = [
    15000, 30000, 50000, 100000, 150000, 200000
];
$currency = "COP";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hoy quiero donar - Hogar San Jose</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; }
        .titulo { text-align: center; color: #176d5c; font-size: 2.5em; margin-top: 30px; }
        .subtitulo { text-align: center; margin-bottom: 20px; }
        .botones-donacion { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin: 40px 0; }
        .donacion-box { text-align: center; margin-bottom: 20px; }
        .donar-btn-monto {
            display: block;
            margin: 0 auto 10px auto;
            padding: 15px 30px;
            border-radius: 30px;
            font-size: 1.1em;
            font-weight: bold;
            border: none;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }
        .payu-btn {
            background: #b2d235;
            color: #fff;
            border-radius: 20px;
            padding: 8px 30px;
            font-size: 1em;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .monto-15000 { background: #2e6da4; }
        .monto-30000 { background: #d9534f; }
        .monto-50000 { background: #b2a235; }
        .monto-100000 { background: #2e2da4; }
        .monto-150000 { background: #2e4da4; }
        .monto-200000 { background: #234d5c; }
        .medios-pago { text-align: center; margin-top: 40px; }
        .medios-pago img { height: 40px; margin: 0 8px; vertical-align: middle; }
        .gracias { text-align: center; font-size: 2em; color: #176d5c; margin-top: 40px; font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <h1>Hogar San Jose</h1>
            <nav class="navbar">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="registro.php" class="nav-link">Registro de Visitantes</a>
                    </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link donate-btn">salir</a>
                </li>
                </ul>
            </nav>
    </header>
    <div class="titulo">Hoy quiero donar</div>
    <div class="subtitulo">
        Todas las donaciones que realices son importantes.<br>
        Entre todos podemos conseguir la meta mensual que necesitamos para cubrir las necesidades de un abuelo.<br>
        La manutención básica de cada uno está al rededor de $1.800.000 COP al mes.<br>
        <b>Juntos podemos lograrlo.</b>
        <br><br>
        Solo debes hacer clic en uno de los botones
    </div>
    <div class="botones-donacion">
        <?php foreach ($montos as $monto): 
            $referenceCode = "DONACION_" . $monto . "_" . time();
            $signature = generarFirma($apiKey, $merchantId, $referenceCode, $monto, $currency);
            $clase = "monto-$monto";
        ?>
        <div class="donacion-box">
            <div>
                <button class="donar-btn-monto <?php echo $clase; ?>">
                    puedo donar $<?php echo number_format($monto, 0, ',', '.'); ?>
                </button>
            </div>
            <form method="POST" action="https://checkout.payulatam.com/ppp-web-gateway-payu/">
                <input name="merchantId"    type="hidden"  value="<?php echo $merchantId; ?>" >
                <input name="accountId"     type="hidden"  value="<?php echo $accountId; ?>" >
                <input name="description"   type="hidden"  value="Donación Hogar San Jose" >
                <input name="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" >
                <input name="amount"        type="hidden"  value="<?php echo $monto; ?>" >
                <input name="currency"      type="hidden"  value="COP" >
                <input name="signature"     type="hidden"  value="<?php echo $signature; ?>" >
                <input name="buyerEmail"    type="hidden"  value="" >
                <input name="responseUrl"   type="hidden"  value="https://tusitio.com/respuesta.php" >
                <input name="confirmationUrl" type="hidden" value="https://tusitio.com/confirmacion.php" >
                <button type="submit" class="payu-btn">Paga con PayU</button>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="medios-pago">
        Pagos <b>CONFIABLES</b> a través de <span style="color:#b2d235;font-weight:bold;">PayU</span><br>
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/visa.png" alt="Visa">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/mastercard.png" alt="Mastercard">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/amex.png" alt="Amex">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/diners.png" alt="Diners">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/epse.png" alt="Epse">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/via.png" alt="Via">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/baloto.png" alt="Baloto">
        <img src="https://www.payulatam.com/sites/all/themes/payulatam/images/efecty.png" alt="Efecty">
    </div>
    <div class="gracias">¡GRACIAS!</div>
    <footer class="footer">
    <div class="footer-content">
        <p>&copy; <?php echo date("Y"); ?> <strong>Hogar San José</strong>. Todos los derechos reservados.</p>
        <nav class="footer-nav">
            <a href="index.php">Inicio</a>
            <a href="contacto.php">Contacto</a>
            <a href="privacidad.php">Política de Privacidad</a>
        </nav>
    </div>
</footer>
</body>
</html>