<?php

// start session
session_start();

// include tokenizer classes
include __DIR__ . '/../src/Tokenizer.php';
include __DIR__ . '/../src/Tokenizer/Exception.php';
include __DIR__ . '/../src/Tokenizer/Connector.php';
include __DIR__ . '/../src/Tokenizer/Response.php';
include __DIR__ . '/../src/Tokenizer/Response/Create.php';
include __DIR__ . '/../src/Tokenizer/Response/Verify.php';
include __DIR__ . '/../src/Tokenizer/Response/Config.php';

// app info
define('APP_ID',    false);
define('APP_KEY',   false);

// the path to your tokenize script
define('APP_URL',  'http:/path/to/tokenize.php?id=');