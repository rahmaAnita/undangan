<?php 
 interface kasir
 {
    
    public function tagihan();
    public function kembalian();
    public function diskon();
    public function PPN();
 }
 class jus_buah implements kasir {
    public $melon=5000;
    public $mangga=7000;
    public $jeruk=9000;
    public $alpukat=8000;
    public $cup1=0,$cup2=0,$cup3=0,$cup4=0;
    public $bayar=0,$PPN=0;
    public $diskon=0;
   public function getmelon(){return $this->melon*$this->cup1;}
   public function getmangga(){return $this->mangga*$this->cup2;}
   public function getjeruk(){return $this->jeruk*$this->cup3;}
   public function getalpukat(){return $this->alpukat*$this->cup4;}
   public function total(){return $this->getmelon()+$this->getmangga()+$this->getjeruk()+$this->getalpukat();}
   public function tagihan(){return $this->total() + $this->PPN() - $this->diskon();}
  public function kembalian(){return $this->bayar - $this->tagihan();} 
    public function diskon(){return $this->diskon*$this->total()/100;}
    public function PPN(){return $this->total() *$this->PPN/100;}

}
?>