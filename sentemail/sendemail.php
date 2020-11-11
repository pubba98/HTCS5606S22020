<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('pubkey-d47f680e618a4e3c7cfd3ffc31fce9fd');
$domain = "lsong@unitec.ac.nz";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'	=> 'Excited User <lsong@unitec.ac.nz>',
    'to'	=> 'Baz <gabriel_sl19798@hotmail.com>',
    'subject' => 'Hello',
    'text'	=> 'Testing some Mailgun awesomness!'
));
