<?php

class CBrowser {
    /**
     * Întoarce valoarea din $_Request[$index].
     * Dacă nu există $index in $_Request se va întoarce $defaultValue.
     * 
     * 
     * @param type $index
     * @param type $defaultValue
     * @return type
     */
    static public function getValueFromRequest($index, $defaultValue = null) {
        $res = $defaultValue;
        
        if (isset($_REQUEST[$index]) == true) {
            $res = $_REQUEST[$index];
        }
        
        return $res;
    }
}

?>
