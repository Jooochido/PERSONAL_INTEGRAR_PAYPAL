<?php
    require __DIR__  . '/vendor/autoload.php';

    use PayPal\Rest\ApiContext;
    use PayPal\Auth\OAuthTokenCredential;

    $clienteIdPaypal ="Ac2d5JCkkFUEIBKyvUR-byZwXmaMSr4gt9UprkfiCC34_HHO1F9QmnVEEUv1_7ga20Xrwx7_CW9ER9k6";
    $llaveSecretaPaypal = "ENRT2O-Ct2DSQovhnJxKYkVLj6jS5d139KNphr_unfdViJJArqZmE1blTdFNBFnYXbtLghw0VDttpFqC";

    $apiContext = new ApiContext(
        new OAuthTokenCredential(
            $clienteIdPaypal,
            $llaveSecretaPaypal
        )
    );

    $apiContext->setConfig(
        array(
            'mode' => 'sandbox',
            'log.LogEnabled' => true,
            'log.FileName' => 'PayPal.log',
            'log.LogLevel' => 'DEBUG',
            'http.CURLOPT_CONNECTTIMEOUT' => 30
        )
    );
?>
