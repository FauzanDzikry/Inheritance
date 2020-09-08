<?php
class proce{
    public $nama, $merk, $kecepatanmax;
    
    public function overclock(){
        return "kecepatan bertambah";
    }
}
class proceoc extends proce{
    public $OC = false;

    public function aktifkanoc(){
        $this->OC=true;
        return "overclock dihidupkan";
    }
}
$proceoc = new proceoc();
echo $proceoc->overclock();
echo "<br>";
echo $proceoc->aktifkanoc();