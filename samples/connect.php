<?php

/**
 * Tokenizer connection check example
 * 
 * This scripts verifies if the given api_key and api_id are valid.
 *
 * @author Frank Broersen <frank@amsterdamstandard.com>
 * @copyright Amsterdam Standard
 * @homepage http://amsterdamstandard.com
 */

include 'config.php';

try {
    
    $tokenizer = new AmsterdamStandard\Tokenizer([
        'app_id'  => APP_ID,
        'app_key' => APP_KEY,
    ]);
    
    $app = $tokenizer->verifyConfig();      
    
    echo "The config for the app <strong>{$app->name}</strong> is working!";
    
    echo "<pre>";
    print_r($app);
    echo "</pre>";
    
} catch(AmsterdamStandard\Tokenizer\Exception $e) {
    echo $e->getMessage();
    exit;
}