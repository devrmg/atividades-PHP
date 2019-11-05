<?php 

   $total=150;
   $descontos= 0.9;
   
   do{
       $total *= $descontos;
   } while ($total > 100);
       
   echo "Compra no valor : " .$total;
   echo "<br>";
   echo"Desconto de : ".$descontos;



?>