<?php
$Snt = 4;
$a=0;
for($i = 1; $i <= $Snt; $i++){
   if($Snt%$i==0)
   {
        $a = $a + 1;
   }
  } 
  if($a==2){
    echo "$Snt là số nguyên tố";
}
else{
    echo "$Snt không phải là số nguyên tố";
}
?>