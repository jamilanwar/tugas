<?php

require_once 'fungsi.php';
$nama = new nama2();
$pil=1;

switch ($pil) {
  case 1:
    $nama -> namahewan();

    break;
  case 2:
    $nama -> namatumbuhan();

    break;
  case 3:
    $nama -> jeniskendaraan();

   break;

  default:
     echo "tidak ada pilihan mz";

    break;

}

 ?>
