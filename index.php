<?php
require 'function.php';
$bon=new jus_buah();

if ($_POST)  {
 $bon->cup1=$_POST["melon"];

 $bon->cup2=$_POST['mangga'];

 $bon->cup3=$_POST['jeruk'];

 $bon->cup4=$_POST['alpukat'];

 $bon->PPN=$_POST['PPN'];

 $bon->diskon=$_POST['diskon'];

 $bon->bayar=$_POST['bayar'];
}
// if ($_GET)  {
//  $bon->melon=$_GET['melon'];
//  $bon->mangga=$_GET['mangga'];
//  $bon->jerukk=$_GET['jeruk'];
//  $bon->alpukat=$_GET['alpukat'];
// }

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="">
  <table style="background-color: grey">
  
    <tr>
      <td colspan="4"> <h1 align="center" style="background-color: #C0C0C0">SOP BUAH UWWU</h1></td>
      <td>
        <a href="setting.php">setting</a>
      </td>
      <tr>
        <td style="color:blue">melon</td>
        <td>Rp. <?= $bon->melon; ?></td>
        <td>
          <label><input type="text" name="melon" id="melon"style="width:10%" value="<?= $bon->cup1; ?>"></label>
          <label>cup</label>
         </td>
         <td>
          <label><input type="text" name="melon" id="melon" value="<?= $bon->getmelon(); ?>"></label>
      </td>
      </tr>
      <tr> 
         <td style="color:blue">mangga</td>
        <td>Rp. <?= $bon->mangga; ?></td>
        <td>
          <label><input type="text" name="mangga" id="mangga" style="width:10%" value="<?= $bon->cup2; ?>"></label>
          <label>cup</label>
         </td>
         <td>
          <label><input type="text" name="mangga" id="mangga" value="<?= $bon->getmangga(); ?>"></label>
        </td>
      </tr> 
      <tr> 
        <td style="color:blue">jeruk</td> 
        <td>Rp. <?= $bon->jeruk; ?></td> 
        <td> 
           <label><input type="text" name="jeruk" id="jeruk" style="width:10%" value="<?= $bon->cup3; ?>"></label>
          <label>cup</label>
        </td> 
        <td> 
          <label><input type="text" name="jeruk" id="jeruk" value="<?= $bon->getjeruk(); ?>"></label>
          </td>
      </tr>
      <tr>
        <td style="color:blue">alpukat</td>
        <td>Rp. <?= $bon->alpukat; ?></td>
        <td>
          <label><input type="text" name="alpukat" id="alpukat"style="width:10%" value="<?= $bon->cup4; ?>"></label>
          <label>cup</label>
        </td>
        <td>
          <label><input type="text" name="alpukat" id="alpukat" value="<?= $bon->getalpukat(); ?>"></label>
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