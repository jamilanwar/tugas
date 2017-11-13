<?php

class nama2{
public function namahewan(){
  echo "nama hewan<br>";	
  $binatang = array ("lumba-lumba","kuda nil","kuda","sapi","kambing","monyet");
  for ($n=0;$n<6;$n++){
    echo "$binatang[$n]<br/>";
}}


public function namatumbuhan(){
  echo "nama tumbuhan<br>";
  $tumbuhan = array ("jati","mahoni","akasia","sengon","randu","bambu");
  for ($a=0;$a<6;$a++){
    echo "$tumbuhan[$a]<br/>";
    }
  }


public function jeniskendaraan(){
  echo "jenis kendaraan <br>";
  $kendaraan = array ("sedan","bis","truck");
   for ($j=0; $j<3; $j++){
     echo "$kendaraan[$j] <br/>";
   }

}
}
?>
