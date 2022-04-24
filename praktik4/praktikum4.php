<?php

class PersegiPanjang {
    private $panjang;
    private $lebar;

    function __construct($p, $l){
    $this->panjang = $p;
    $this->lebar = $l;
    }

    public function nilai(){
        echo "panjang = {$this->panjang}";
        echo "</br> lebar = {$this->lebar}";
    }

    public function Luas(){
    return $luas = $this->panjang * $this->lebar;  
    
    }

    public function Keliling(){
      return $keliling = 2 * $this->panjang + 2 * $this->lebar;
      
     }

}

$persegipanjang = new PersegiPanjang(4, 2);
echo $persegipanjang -> nilai();
echo '<br/> Keliling Persegi Panjang = ' .$persegipanjang -> Keliling();
echo '<br/> Luas Persegi Panjang = ' .$persegipanjang -> Luas();

?>