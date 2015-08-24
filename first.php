<?php 
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=output.csv");
// $content = "Column1,Column2,Column3\nRow1,中文測試";

$content = "0800000001,扶手轉椅,,小敏,L0718,,0000-00-00
D000000003,桌上型數位電錶,,小敏,L0740,0000-00-00";


$content = mb_convert_encoding($content , "Big5" , "UTF-8");
echo $content;
exit;
?>