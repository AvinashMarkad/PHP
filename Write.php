<?php
   $myfile=fopen("new1.txt","w");

   $a="Avinash";
   fwrite($myfile,$a);

   $b="Markad";
   fwrite($myfile,$b);

   fclose($myfile);
?>