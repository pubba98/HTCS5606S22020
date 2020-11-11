<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('eacf1f278c4e1854aa914fe8d7f16ff5-ba042922-041df505');
$domain = "lsong@unitec.ac.nz";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'	=> 'Excited User <lsong@unitec.ac.nz>',
    'to'	=> 'Baz <gabriel_sl19798@hotmail.com>',
    'subject' => 'Hello',
    'text'	=> 'Testing some Mailgun awesomness!'
));
