<link rel="stylesheet" href="w3.css">
<center>
    <h1 class="w3-teal">Data Gaji Pegawai</h1>
    <hr>
    <table>
<?php
error_reporting(0);

$nama = $_POST['nama'];
$gol = $_POST['golongan'];
if ($gol=="A")
$gapok = "5000000";
elseif ($gol == "B")
$gapok = "6000000";
else
$gapok = "7000000";

 $anak = $_POST['anak'];
 $jumlah = $anak;
 $tunjangananak = $gapok * 0.1 *$jumlah;

 echo "<tr><td>Nama Pegawai</td><td>: $nama</td></tr>";
 echo "<tr><td>Golongan </td><td>: $gol</td></tr>";
 echo "<tr><td>Gaji pokok </td><td>: ".gaji_pokok($gapok)."</td></tr>";
 echo "<tr><td>Jumlah anak </td><td>: $anak</td></tr>";
 echo "<tr><td>Tunjangan Anak</td><td>: ".tunjangan_anak($tunjangananak)."</td></tr>";
//  $tgm = 0;
//  $tgt = 0;
//  $tgk = 0;

 foreach($_POST['tunjangan'] as $tunjangan){
  if($tunjangan == "makan"){
    $tgm = 300000;
  }elseif($tunjangan == "transport"){
    $tgt = 700000;
  }else{
    $tgk = 500000;
  }
}
  $tunjangan = $tgm + $tgt + $tgk;
  echo "<tr><td>Tunjangan Gaji </td>  <td>: ".tunjangan_gaji($tunjangan)."</td></tr>";
  // echo "Tunjangan : ".$tunjangan;
$totalgaji = $gapok + $tunjangananak + $tunjangan ;
echo"<tr><td><hr>";
echo"<tr><td>Total Gaji <td>: ".tolai($totalgaji)."</td></tr>";




function gaji_pokok($gapok){
  $hasil_gapok = "Rp ". number_format($gapok ,0,',','.');
  return $hasil_gapok;
}
function tunjangan_anak($tunjangananak){
  $hasil_tunjangan_anak = "Rp ". number_format($tunjangananak, 0, ',', '.');
  return $hasil_tunjangan_anak;
}
function tunjangan_gaji($tunjangan){
  $hasil_tunjangan = "Rp ". number_format($tunjangan, 0, ',', '.');
  return $hasil_tunjangan;
}
function tolai($totalgaji){
  $hasil_gaji = "Rp ". number_format($totalgaji, 0, ',', '.');
  return $hasil_gaji;
}
?>