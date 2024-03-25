<?php

use Dotenv\Result\Result;

require('Source/validator.php');


$numcpf = rand(100000000, 999999999);
$cpf = new validator;
$cpf->separator($numcpf);
$arr = $cpf->result;
echo "Cpf gerado : {$numcpf}-{$arr[0]}{$arr[1]}";




 

