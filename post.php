<?php
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$indeks = $_POST['indeks'];
$uni = $_POST['uni'];
$faks = $_POST['faks'];
$smer = $_POST['smer'];
$studije = $_POST['studije'];
$godina = $_POST['godina'];
$grad = $_POST['grad'];

header("Content-type: application/json");
$test_array = array (
'ime' => $ime,
 'prezime' => $prezime,
  'indeks' => $indeks,
 'uni' => $uni,
 'faks' => $faks,
  'smer' => $smer,
 'studije' => $studije,
 'godina' => $godina,
  'grad' => $grad,
	);
echo json_encode($test_array);
?>