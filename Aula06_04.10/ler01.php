<?php
$lado=$_POST['quadrado'];
echo "a area do quadrado e:";
echo pow($lado,2);
echo "cm. <br><br>FUi!"
?>
<a href="fomr01.php">voltar</a>

<br><br><br><br>

<?php
    
$p=$_POST['p'];
$s=$_POST['s'];

if ($p > $s){
    echo "p e maior".$p;
}
if ($s > $p){
    echo "s e maior".$s;
}
if ($s == $p){
    echo "sao iguais";
}
?>

<br><br><br><br>

<?php
    
$l=$_POST['log'];
$s=$_POST['sen'];

echo "Bom dia,".strtoupper($l).",<br> sua senha e $s";

echo "<br>sua senha md5 e:".md5($s);
echo "<br>sua senha sha1 e:".sha1($s);
echo "<br>sua senha loca e:".md5(sha1($s));
?>