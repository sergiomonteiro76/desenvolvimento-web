<?php 
$capitais = [
    'Rio de Janeiro' => 'RJ',
    'São Paulo' => 'SP',
    'Fortaleza' => 'CE',
    'Manaus' => 'AM',
    'Belo Horizonte' => 'MG'
];
foreach ($capitais as $cidade => $estado) {
    echo "A cidade: ". $cidade." é capital do estado de  ".$estado.PHP_EOL;
    echo "<br>";
}
?>

