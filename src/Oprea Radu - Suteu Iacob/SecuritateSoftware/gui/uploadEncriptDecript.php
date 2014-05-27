<?php
    
    require_once 'lib/CUpload.php';
   
?>

<br/>
<form enctype="multipart/form-data" method="POST" action="processFile.php" class="form-horizontal">


    <div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <h3>Încarcă fișier ca să fie criptat/decriptat</h3>
        </div>
    </div>


    <!-- criptare decriptare -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">
            Algoritmul
        </label>
        <div class="col-sm-10">
            <select class="form-control" name="cipherAlgorithm">
                <option value="<?php echo(ACipher::$cipherTest[0]); ?>"><?php echo(ACipher::$cipherTest[1]); ?></option>
                <option value="<?php echo(ACipher::$cipherXOR[0]); ?>"><?php echo(ACipher::$cipherXOR[1]); ?></option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>


     <!-- criptare decriptare -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">
            Operația:
        </label>
        <div class="col-sm-10">
            <div class="radio">
                <label>
                    <input type="radio" name="cipher_action" id="optionsRadios1" value="<?php echo(ACipher::$actionEncrypt); ?>" checked>
                    Criptare
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="cipher_action" id="optionsRadios2" value="<?php echo(ACipher::$actionDecrypt); ?>">
                    Decriptare
                </label>
            </div>
        </div>
    </div>
    
     <div class="form-group">
         <label class="col-sm-2 control-label">
             Cheia secretă
         </label>
         <div class="col-sm-10">
             <input type="text" name="cipher_secret_key" value="<?php echo(CSettings::$testSecretKey); ?>" />
         </div>
     </div>
     
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">
            Fisierul:
        </label>
        <div class="col-sm-10">
            <input type="file" id="exampleInputFile" name="<?php echo(CUpload::$fileInputName); ?>">
        </div>
    </div>

   


    <!-- submit -->
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">

        </label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-default">Trimite</button>
        </div>
    </div>





</form>