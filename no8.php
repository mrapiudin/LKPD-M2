<?php 

$data = ['PPLG', 'HTL', 'KLN', 'PMN', 'pplg', 'htl'];
$dataBaru = array_unique(array_map('strtoupper', $data));


print_r($dataBaru);