<?php

/**
 * furnizează funcții utile în lucrul cu stringuri.
 *
 * @author aaa
 */
class CStringUtils {
    static public function stringToByteArray($value) {
        return unpack("C*", $value);                
    }
}

?>
