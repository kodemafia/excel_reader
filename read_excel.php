<?php
include 'excel_reader.php';       // include the class
$excel = new PhpExcelReader;      // creates object instance of the class
$excel->read('test.xls');   // reads and stores the excel file data
$data=$excel->sheets;
//Test to see the excel data stored in $sheets property
//echo '<pre>';
//var_export($excel->sheets);
//echo '</pre>';
//print_r($data);
//echo $data[0]['numRows'];
print_r($data);