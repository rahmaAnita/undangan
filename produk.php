<?php
class produk
{
 public $judul;
 public $penulis;
 public $harga,$halaman,$durasi;
 public function __construct($judul, $penulis,$harga,$halaman,$durasi)
  {
 $this->judul=$judul;
 $this->penulis=$penulis;
 $this->durasi=$durasi;
 $this->halaman=$halaman;
 $this->harga=$harga;     
 
  }
  
}

class buku extends produk{
public function __construct($judul, $penulis,$harga,$halaman){
 $this->judul=$judul;
 $this->penulis=$penulis;
 $this->halaman=$halaman;
 $this->harga=$harga;     
 
  }

  public function getproduk(){return "$this->judul | $this->penulis ($this->harga)  $this->halaman";}
  
}
class kaset extends produk{
   public function __construct($judul, $penulis,$harga,$durasi)
  {
 $this->judul=$judul;
 $this->penulis=$penulis;
 $this->durasi=$durasi;
 $this->harga=$harga;     
 
  }

  public function getproduk(){return "$this->judul | $this->penulis ($this->harga)  $this->durasi";}
}
$komik1=new buku("Skincare","Drs.Jerawat","100k","100 halaman");
$komik2=new kaset("Beng-Beng","PT.Alim Rugi","25k/box","6 menit");
echo $komik1->getproduk();
echo'<br>';
echo $komik2->getproduk();
?>