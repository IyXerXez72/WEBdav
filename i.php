<?php
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}

date_default_timezone_set('Asia/Jakarta');
$date = date('d~M~Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$nick = "XerXez7 Gans";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
pilih:
    system($bersih);
echo "$lightcyan {$lightred  }$lightpurple NICK : $lightgreen IyXerXez7/06des
    $darkgray MY NAME:RAPKHANJANI
     THANK TO: 2E4H-GBLG CREW-IPA 5-SMA1 CILAMAYA-MCI-DFA-LIT
     SINCE  : 2K19-2K20
$lightcyan { $lightren }$darkgray -------------------------------------- $lightcyan { $lightcyan } $lightred
      TITLE =TOOLS WEBDAV
      AUTHOR = $nick
      KAMUBLOGIN PADA $darkgray $date
$lightgreen
      -MY TEAM = 2E4H-GBLG CREW-IPA 5-SMA1 CILAMAYA-MCI-DFA-LIT
   TOOLS INIH DIBUAT UNTUK WARGA BUMI SUPAYA GA RIBET DEFACE/TES SCRIPT HTML KAMU ^-^

$lightgreen 1)$darkgray MAS DEFACE WEBDAV/DEFAVE WEBDAV SECARA MASAL KAMU TINGGAL IKUTIN AJAH PERTAMA KAMU MASUKAN EX STORAGE AMU CONTOH /storage/emulated/0 / /sdcard ^-^
$lightgreen 2)$darkgray DEFACE WEBDAV DISINI SIMPLE CUMA 1 KALI DEFACE WEB
$lightgreen 3)$darkgray KALO KAMU TIDA PUYA HTML/SC DEFACE YA KAMU HUAT ^-^
$lightgreen 4)$darkgray LIVE TARGET WEBDAV
$lightgreen I)$darkgray INFO YANG SKARANG LU BACA IYA INIH KNTL
$lightgreen X)$darkgray EXIT TOOLS
";
?>
