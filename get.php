<?php
header("Content-type: application/json");
$test_array = array (
 'ime' => 'Jovana',
 'prezime' => 'Stricic',
 'indeks' => '2413',
 'uni' => 'Univerzitet Metropolitan',
 'faks' => 'FIT',
 'smer' => 'Softversko Inzenjerstvo',
 'studije' => 'tradicionalni student',
 'godina' => 'druga godina',
 'grad' => 'Beograd',
);
echo json_encode($test_array);
?>