<?php
require_once "dependencies.php";

require_once 'lib/CUpload.php';
    
    // TODO poate ar fi bine ca procesarea upload sa fie mutata într-un alt fisier
    /**
     * Procesare request
     */
    $cipherIdentifier = CBrowser::getValueFromRequest("cipherAlgorithm");
    $cipher = ACipher::getCipher($cipherIdentifier);
    
    $cipherAction = CBrowser::getValueFromRequest("cipher_action", NULL);
    $secretKey = CBrowser::getValueFromRequest("cipher_secret_key", "123456");
    
    if ($cipher != null) {        
        if (CUpload::isAnUploadedFile() == true) {            
            $filePath = CUpload::getPathToUploadedFile();
            $fileName = CUpload::getUploadedFileNameAndExtension();
            
            if ($cipherAction == ACipher::$actionDecrypt) {
                $cipher->decode($filePath, $fileName, $secretKey);
            } else if ($cipherAction == ACipher::$actionEncrypt) {
                $cipher->encode($filePath, $fileName, $secretKey);
            } else {
                // acțiunea cerută nueste validă
                // TODO acțiunea cerută este invalidă
            }
            
            //unlink($filePath);
            
            unset($filePath);
            unset($fileName);
            
            
        } else {
            // nu este nici un fișier uploadat
            // TODO să afișez un mesaj în caz că nu există fișier uploadat
        }
    } else {
        // nu am găsit cifru după $cipherIdentifier dat.
        // TODO să afișez un mesaj în caz că nu există cifru selectat
    }
    
    unset($cipherIdentifier);
    unset($cipher);
    unset($cipherAction);
    unset($secretKey);
?>
