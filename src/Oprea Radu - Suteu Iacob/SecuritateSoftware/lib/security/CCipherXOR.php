<?php

/**
 * Description of CCipherXOR
 *
 * @author aaa
 */
class CCipherXOR extends ACipher {
    protected function myXOR($in, $fileName, $pass) {
        if (file_exists($in) == true) {
            $handle = fopen($in, "rb");
            $mimeDownload = new CMIMEDownload();
            $mimeDownload->startMIMEDownload($in, $fileName);
            
            // pregătesc cheia ca un aray de bytes
            $preparedKey = CSecretKey::prepareSecretKey($pass);
            
            while (feof($handle) == false) {
                $content = fread($handle, $this->bufferSize);
                
                for ($i = 0; $i < strlen($content); $i++) {
                    $content[$i] = chr($content[$i] ^ CSecretKey::getByteFromSecretKeyByByteOrder($preparedKey, $i));
                }
                
                $mimeDownload->flushBinaryString($content);                
            }

            fclose($handle);
            $mimeDownload->endMIMEDownload();
            
            unset($mimeDownload);
        } else {
            // nu fac nimic, fișierul nu există
        }
    }
    
    public function decode($in, $fileName, $pass) {
         $this->myXOR($in, $fileName, $pass);
    }

    public function encode($in, $fileName, $pass) {        
        $this->myXOR($in, $fileName, $pass);
    }
}

?>
