<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CUpload
 *
 * @author Soft3
 */
class CUpload {
    static public $fileInputName = "userFile";
    
    /**
     * Verifică dacă există un fișier uploaddat.
     * @return type
     */
    static public function isAnUploadedFile() {       
       return is_uploaded_file($_FILES[CUpload::$fileInputName]['tmp_name']);
    }
    
    /**
     * Întoarce calea către fișierul uploadat
     * 
     * Observație: înainte să utilizați această funcție, verificați dacă există fișier uploadat.
     * 
     * @return type
     */
    static public function getPathToUploadedFile() {        
        return $_FILES[CUpload::$fileInputName]['tmp_name'];
    }
    
    /**
     * Întoarce numele fișierului și extensia acestuia.
     * 
     * Observație: înainte să utilizați această funcție, verificați dacă există fișier uploadat.
     * 
     * @return type
     */
    static public function getUploadedFileNameAndExtension() {
        return $_FILES[CUpload::$fileInputName]['name'];
    }
}

?>
