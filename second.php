<?php
$list = array(
  array("0800000001","name","","min","L0718","0000-00-00"),
  array("D000000001","name","","min","L0718","0000-00-00")
);

$filename = date("Y-m-d") . ".csv";
$f = fopen('php://memory', 'w'); // 寫入 php://memory
foreach ($list as $row) {
  fputcsv($f, $row ,',');
}
/**rewind the "file" with the csv lines **/
fseek($f, 0);

/** modify header to be downloadable csv file **/
header('Content-Type: application/csv');
header('Content-Disposition: attachement; filename="' . $filename . '";');

/** Send file to browser for download */
fpassthru($f);

?>