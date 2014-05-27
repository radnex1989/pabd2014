<?php
require_once 'lib/security/ACipher.php';
require_once 'lib/CMIMEDownload.php';

/**
 * Testează criptarea și desciptarea.
 * 
 * Conținutul fișierului nu este modificat.
 *
 * @author aaa
 */
class CCipherTest extends ACipher {
    public function decode($in, $fileName, $pass) {
        if (file_exists($in) == true) {
            $handle = fopen($in, "rb");
            $mimeDownload = new CMIMEDownload();
            $mimeDownload->startMIMEDownload($in, $fileName);
            
            while (feof($handle) == false) {
                $content = fread($handle, $this->bufferSize);
                $mimeDownload->flushBinaryString($content);
                
            }

            fclose($handle);
            $mimeDownload->endMIMEDownload();
            
            unset($mimeDownload);
        } else {
            // nu fac nimic, fișierul nu există
        }
    }

    public function encode($in, $fileName, $pass) {
        if (file_exists($in) == true) {
            $handle = fopen($in, "rb");
            $mimeDownload = new CMIMEDownload();
            $mimeDownload->startMIMEDownload($in, $fileName);
            
            while (feof($handle) == false) {
                $content = fread($handle, $this->bufferSize);
                $mimeDownload->flushBinaryString($content);
                
            }

            fclose($handle);
            $mimeDownload->endMIMEDownload();
            
            unset($mimeDownload);
        } else {
            // nu fac nimic, fișierul nu există
        }
    }
}

?>
