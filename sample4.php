 <?php
for ($i=1; $i<=13; $i++) {
if($i>13){
    break;
}
if($i%2==0){
    continue;
}
echo $i."\n";
}
echo 'for_out'."\n";
?>
