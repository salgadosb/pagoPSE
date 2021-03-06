<?php

require 'vendor/autoload.php';

use \theluguiant\PseComposer\Pse as Pse;


$client = new Pse();

echo '<br><br>';
echo '<h1>lista de bancos</h1><br>';
echo '<pre>';
echo var_dump($client->services->getBankList());
echo '</pre>';
echo '<br><br>';
echo '<pre>'.var_dump($client->services->params()).'</pre>';

echo '<h1>player</h1><br>';
$client->services->setPlayerDocumentType('CC');
$client->services->setPlayerDocument(1085234567);
$client->services->setPlayerFirstName('salgado');
$client->services->setPlayerLastName('salgado');
$client->services->setPlayerCompany('sebaste');
$client->services->setPlayerEmailAddress('salgadosb1986@gmail.com');
$client->services->setPlayerCity('rionegro');
$client->services->setPlayerProvince('antioquia');
$client->services->setPlayerAddress('diagonal50c');
$client->services->setPlayerPhone('2434354');
$client->services->setPlayerCountry('CO');
$client->services->setPlayerMobile('3504523964');
echo $client->services->infoPlayer();
echo '<br><br>';
echo '<pre>';
echo var_dump($client->services->infoPlayer);
echo '</pre>';
echo '<br><br>';

echo '<h1>buyer</h1><br>';
$client->services->setBuyerDocumentType('CE');
$client->services->setBuyerDocument(1085234567);
$client->services->setBuyerFirstName('salgado');
$client->services->setBuyerLastName('salgado');
$client->services->setBuyerCompany('sebaste');
$client->services->setBuyerEmailAddress('salgadosb1986@gmail.com');
$client->services->setBuyerCity('rionegro');
$client->services->setBuyerProvince('antioquia');
$client->services->setBuyerAddress('diagonal50c');
$client->services->setBuyerPhone(2114052);
$client->services->setBuyerCountry('CO');
$client->services->setBuyerMobile(3504523964);
echo $client->services->infoBuyer();
echo '<br><br>';
echo '<pre>';
echo var_dump($client->services->infoBuyer);
echo '</pre>';
echo '<br><br>';

echo '<h1>Shipping</h1><br>';
$client->services->setShippingDocumentType('CE');
$client->services->setShippingDocument(1085234567);
$client->services->setShippingFirstName('salgado');
$client->services->setShippingLastName('salgado');
$client->services->setShippingCompany('sebaste');
$client->services->setShippingEmailAddress('salgadosb1986@gmail.com');
$client->services->setShippingCity('rionegro');
$client->services->setShippingProvince('antioquia');
$client->services->setShippingAddress('diagonal50c');
$client->services->setShippingPhone(2114052);
$client->services->setShippingCountry('CO');
$client->services->setShippingMobile(3504523964);
echo $client->services->infoShipping();
echo '<br><br>';
echo '<pre>';
echo var_dump($client->services->infoShipping);
echo '</pre>';
echo $client->services->PseAuth->login;
echo '<br><br>';
echo $client->services->ipAddress;
echo '<br><br>';
echo $client->services->userAgent;
echo '<br><br>';
$client->services->setBankCode('1007');
$client->services->setBankInterface('0');
$client->services->setReturnURL('http://sebaste.com.co/');
$client->services->setReference('salgo819');
$client->services->setDescription('Compra de zapatos');
$client->services->setLanguage('es');
$client->services->setCurrency('COP');
$client->services->setTotalAmount(15000.0);
$client->services->setTaxAmount((double)5);
$client->services->setDevolutionBase(2.0);
$client->services->setTipAmount(1.0);
echo '<br><br>';
echo '<h1>Transaction</h1><br>';
echo '<pre>';
echo var_dump($client->services->createTransaction());
echo '</pre>';
echo '<br><br>';
echo '<h1>Transaction Information</h1><br>';
echo '<pre>';
$client->services->setTransId(1443107535);
echo var_dump($client->services->getTransactionInformation());
echo '<br><br>';
echo '</pre>';
