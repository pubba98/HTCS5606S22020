<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = Mailgun::create('eacf1f278c4e1854aa914fe8d7f16ff5-ba042922-041df505', 'https://API_HOSTNAME');
$domain = "www.unitec.ac.nz";
$params = array(
    'from'    => 'Excited User <lsong@unitec.ac.nz>',
    'to'      => 'gabriel_sl19798@hotmail.com',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
);

# Make the call to the client.
$mgClient->messages()->send($domain, $params);
