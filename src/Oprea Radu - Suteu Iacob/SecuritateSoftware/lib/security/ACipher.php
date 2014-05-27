<?php

/**
 * ACipher 
 *
 * Furnizează tiparul unui cifru.
 * Orice clasă care definește un cifru trebuie să extindă această clasă.
 * 
 * @author Oprea Radu
 * @author Șuteu Iacob
 */
abstract class ACipher {
    /**
     * Definește acțiune de criptare
     * @var type 
     */
    static public $actionEncrypt = "action_encript";
    
    /**
     * Definește acțiunea de decriptare
     * @var type 
     */
    static public $actionDecrypt = "action_decrypt";
    
    /**
     * Cifru test. Nu face nimic.
     * @var type 
     */
    static public $cipherTest = array("cipherTest", "Cifru de testare");
    
    /**
     * CIFRU XOR
     * @var type 
     */
    static public $cipherXOR = array("cipherXOR", "Cifru XOR");
    
    static public function getCipher($cipherIdentifier) {
        $res = null;
        
        if ($cipherIdentifier == ACipher::$cipherTest[0]) {
            $res = new CCipherTest();
        } else if ($cipherIdentifier == ACipher::$cipherXOR[0]) {
            $res = new CCipherXOR();
        } else {
            // nu există algoritmul specificat
        }
        
        return $res;
    }
    
    /**
     * Buffer size in B used to process (encode/decode) files
     * @var type 
     */
    public $bufferSize = 1024;
    
    /**
     * Această funcție este folosită la codarea unui input către output.
     * @param String $in The path to file
     */
    abstract public function encode($in, $fileName, $pass);
    
    /**
     * Această funcție este folosită la decodarea unui input (inițial codat) către output.
     * @param String $in The path to file
     */
    abstract public function decode($in, $fileName, $pass);
}

?>
