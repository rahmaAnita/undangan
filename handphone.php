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
$bon=new jus_buah();


if ($_POST)  {
 $bon->cup1=$_POST["melon"];

 $bon->cup2=$_POST["mangga"];

 $bon->cup3=$_POST["jeruk"];

 $bon->cup4=$_POST["alpukat"];

 $bon->PPN=$_POST["PPN"];

 $bon->diskon=$_POST["diskon"];

 $bon->bayar=$_POST["bayar"];
}
echo  $bon->tagihan();
?>


<!DOCTYPE html>
<html>
<head>
  <title>sulip</title>
</head>
<body>
<form method="post" action="">
  <table>
  
    <tr>
      <td colspan="4"> <h1 align="center">JUS BUAH SAYO</h1></td>
      <td><button type="text" name="button" onclick="location.href='setting.php'">setting</button>
      <tr>
        <td>melon</td>
        <td>5000</td>
        <td>
          <label><input type="text" name="melon" id="melon"style="width:10%" value="<?= $bon->cup1; ?>"></label>
          <label>cup</label>
         </td>
         <td>
          <label><input type="text" name="jusmelon" id="jusmelon" value="<?= $bon->getmelon(); ?>"></label>
      </td>
      </tr>
      <tr> 
         <td>mangga</td>
        <td>7000</td>
        <td>
          <label><input type="text" name="mangga" id="mangga" style="width:10%" value="<?= $bon->cup2; ?>"></label>
          <label>cup</label>
         </td>
         <td>
          <label><input type="text" name="jusmangga" id="jusmangga" value="<?= $bon->getmangga(); ?>"></label>
        </td>
      </tr> 
      <tr> 
        <td>jeruk</td> 
        <td>9000</td> 
        <td> 
           <label><input type="text" name="jeruk" id="jeruk" style="width:10%" value="<?= $bon->cup3; ?>"></label>
          <label>cup</label>
        </td> 
        <td> 
          <label><input type="text" name="jusjeruk" id="jusjeruk" value="<?= $bon->getjeruk(); ?>"></label>
          </td>
      </tr>
      <tr>
        <td>alpukat</td>
        <td>8000</td>
        <td>
          <label><input type="text" name="alpukat" id="alpukat"style="width:10%" value="<?= $bon->cup4; ?>"></label>
          <label>cup</label>
        </td>
        <td>
          <label><input type="text" name="jusal" id="jusal" value="<?= $bon->getalpukat(); ?>"></label>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td>
<label><input type="text" name="PPN" id="PPN" style="width:10%" value="<?= $bon->PPN; ?>"></label>
<label>PPN</label>                                                                                                                                              
<td>
  <label><input type="text" name="total" id="total" value="<?= $bon->total(); ?>"></label>
  </td>
</tr>

<tr>
  <td></td>
  <td></td>
  <td>
  <label><input type="text" name="diskon" id="diskon" style="width:10%" value="<?= $bon->diskon; ?>"></label>
<label>diskon</label>
</td>
<td><input type="" name="diskon1" value="<?= $bon->diskon(); ?>"></td>
</tr>
  <td align="center">
    <BUTTON type="submit">tagihan</BUTTON>
    <td align="center">
    <H1>TOTAL</H1>
  </td>
  <td> <input type="text" name="" id="" value="<?= $bon->tagihan(); ?>"></td>
</tr>
<tr>
  <td>bayar</td>
   <td> <input  type="text" name="bayar" id="bayar" value="<?= $bon->bayar; ?>"></td>
   <td> <button type="submit">kembalian</button></td>
   <td> <input  type="text" name="kembalian" id="kembalian"  value="<?= $bon->kembalian(); ?>"></td>
</tr> 
<tr>
  <td></td>
  <td></td>
  <td><button type="button" onclick="location.href='?clear'">reset </button></td>
</tr>
</form>
</body>
</html>