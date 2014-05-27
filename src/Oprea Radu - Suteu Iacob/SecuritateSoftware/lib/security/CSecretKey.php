<?php

/**
 * Oferă funcții de gestionare a cheilor secrete.
 *
 * @author aaa
 */
class CSecretKey {
    
    /**
     * Pregătește cheia secretă.
     * 
     * Aplică un MD5 pe ea și apoi returnează rezultatul ca un array de bytes.
     * 
     * @param type $secretKey
     */
    static public function prepareSecretKey($secretKey) {
        $md5H = md5($secretKey, true);
        return array_values(unpack("C*", $md5H));
    }
    
    /**
     * Intoarce un byte din cheia secreta astfel:
     *  $secretKeyArrayBytes[$byteOrder % count($secretKeyArrayBytes)].
     * 
     * @param type $secretKeyArrayBytes Array de bytes
     * @param type $byteOrder ordinul byte care trebuie modificat de cheia secretă
     */
    static public function getByteFromSecretKeyByByteOrder($secretKeyArrayBytes, $byteOrder) {          
        return $secretKeyArrayBytes[$byteOrder % count($secretKeyArrayBytes)];
    }
}

?>
