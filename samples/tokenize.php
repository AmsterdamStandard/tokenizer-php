<?php

/**
 * Tokenizer Tokenize Example
 * 
 * This script verifies the token of a user that returns to your application.
 *
 * @author Frank Broersen <frank@amsterdamstandard.com>
 * @copyright Amsterdam Standard
 * @homepage http://amsterdamstandard.com
 */

include 'config.php';

try {
    
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if(!$id) {
        throw new AmsterdamStandard\Tokenizer\Exception("No url id found");
    }
    
    $tokenizer = new AmsterdamStandard\Tokenizer([
        'app_id'  => APP_ID,
        'app_key' => APP_KEY,
    ]);
    
    if($tokenizer->getSession('tokenizer_id') === null) {
        throw new AmsterdamStandard\Tokenizer\Exception("No tokenizer session found");
    }
    
    if($tokenizer->getSession('tokenizer_id') != $id) {
        throw new AmsterdamStandard\Tokenizer\Exception("Tokenizer session does not match url id");
    }
    
    if( $tokenizer->verifyAuth($id) ) {
        echo 'Your authentication has been accepted';
    } else {
        echo 'Your authentication has not (yet) been accepted';
    } 
    
} catch(AmsterdamStandard\Tokenizer\Exception $e) {
    echo $e->getMessage();
    exit;
}