<?php
//untuk menampilkan tanggal dengan format tertentu
   //echo date('l, d-M-Y');

//Time
// UNIX Timestamp / EPOCH time// Detik yang sudah berlalu
// sejak 1 Januari, 1970
// mengetahui 10 hari kedepan hari apa
   // echo date('l', time()+60*60*24*10);

   // mktime
   // membuat sendiri detik
   // mktime(0,0,0,0,0,0)
   // jam, menit, detik, bulan, tanggl, tahun
   // echo date('l', time()+60*60*24*10);
   // echo date('l',mktime(0,0,0,3,12,1994));

   // strtotime
   echo date('l', strtotime('12 march 1994'));


?>