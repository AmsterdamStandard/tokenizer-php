<?php

/**
 * Tokenizer Login Example
 * 
 * This scripts creates a token for the given email address, and redirects
 * the user to the Tokenizer Waiting page
 *
 * @author Frank Broersen <frank@amsterdamstandard.com>
 * @copyright Amsterdam Standard
 * @homepage http://amsterdamstandard.com
 */

include 'config.php';

$email = 'your@email.com';

try {
    
    $tokenizer = new AmsterdamStandard\Tokenizer([
        'app_id'  => APP_ID,
        'app_key' => APP_KEY,
    ]);
    
    $tokenizer->createAuth($email, APP_URL, $redirect = true);      
    
} catch(AmsterdamStandard\Tokenizer\Exception $e) {
    echo $e->getMessage();
    exit;
}