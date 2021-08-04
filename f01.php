<?php
$onpen_files = "/Users/project/php01/data/f1.txt";
$fp = fopen($onpen_files, 'r');

while($line = fgets($fp)){
    echo $line;
}
//rewind($fp);// strat form strach
//fseek($fp,-1,SEEK_END);

while($line = fgets($fp,4)){
    echo $line;
}
$data = file($onpen_files); // this file function read text like an arry
print_r($data);

$data_1 = file_get_contents($onpen_files);

echo $data_1;
