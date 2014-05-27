<?php

/**
 * Oferă metode pentru crearea și folosirea download de fișiere folosind MIME.
 *
 * @author aaa
 */
class CMIMEDownload {
    private $mimeDownloadIsStarted = false;
    
    /**
     * Specifică dacă un download este pornit.
     * @return type
     */
    public function isDownloadStarted() {
        return $this->mimeDownloadIsStarted;
    }

        
    /**
     * 
     * Această funcție pornește un MIME Download.
     * 
     * Dacă parametru $fileSize este dat și este mai mare ca -1 atunci, 
     * 
     * Parametrul $fileName poate să fie o cale întreagă de fișier. Din această
     * cale se va lua numele fișierului cu extensie cu tot.
     * 
     * @param type $fileName
     * @param type $fileSize
     */
    public function startMIMEDownload($filePath, $fileName, $fileSize = -1) {
        $this->mimeDownloadIsStarted = true;
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($fileName));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        
        if ($fileSize > -1) {
            header('Content-Length: ' . $fileSize);
        }
    }
    
    /**
     * Aceasta funcție trebuie chemată la final de download.
     */
    public function endMIMEDownload() {        
        flush();
        $this->mimeDownloadIsStarted = false;
    }
    
    /**
     * Trimite stringul binar direct la client.
     * 
     * 
     * @param type $binaryString
     */
    public function flushBinaryString($binaryString) {
        echo($binaryString);
        flush();
    }
}

?>
