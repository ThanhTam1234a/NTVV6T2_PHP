<!-- <?php
$a = 15;
$b = 1;
$c = "";
for($i=4;$i<=$a;$i+= 3 ){
    $b = $b + $i;
    $c = $c . "+" . (string) ($i);
}
echo "1".$c . "=" . $b;
?> -->
 <?php
 $n = 123425;
 $s = 0;
 while($n!=0){
     $s += $n % 10;
     $n = $n / 10;  
 }
 echo $s;
?> 