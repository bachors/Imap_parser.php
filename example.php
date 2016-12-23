<?php

// include Imap_parser class
include_once('lib/Imap_parser.php');

// create Imap_parser Object
$email = new Imap_parser();

// data
$data = array(
	// email account
	'email' => array(
		'hostname' => '{mail.anu.com:143/notls}INBOX',
		'username' => 'me@anu.com',
		'password' => 'omteloletom'    
	),
	// inbox pagination
	'pagination' => array(
		'sort' => 'DESC', // or ASC
		'limit' => 10,
		'offset' => 0
	)
);

// get inbox. Array
$result = $email->inbox($data);

echo '<pre>';
print_r($result);
echo '</pre>';
