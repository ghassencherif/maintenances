<?php


require('db.php');
require('includes/verif_session.php');
require('includes/function.php');
$tableau = [];
$tableau[] = ['Site', 'Machine', 'Technicien', 'Date création', 'Date prise', 'Date pause', 'Date finir', 'Durée final'];



    $interventionsRef = $db->collection('intervention');
    $query = $interventionsRef->orderBy('createdAt', 'DESC');
    $interventions = $query->documents();

    foreach ($interventions as $intervention) {
        if ($intervention['codemachine'] != 'Unknown') {
            $code_machine = $intervention['codemachine'];
        } else {
            $code_machine = '-';
        }
        if (isset($intervention['affecter']) and !empty($intervention['affecter'])) {
            $technicien = $intervention['affecter'];
        } else {
            $technicien = $intervention['personnep'];
        }
        if ($intervention['createdAt'] != '')
            $createdAt = $intervention['createdAt']->get()->format('d-m-Y H:i');
        else{
            $createdAt = '-';
        }
        if ($intervention['dateprise'] != '')
            $dateprise=extraire_date($intervention['dateprise']) . " " . extraire_heure($intervention['dateprise']);
        else{
            $dateprise='-';
        }
        if ($intervention['datepause'] != '')
            $datepause=extraire_date($intervention['datepause']) . " " . extraire_heure($intervention['datepause']);
        else{
            $datepause='-';
        }
        if ($intervention['datefinir'] != '')
            $datefinir=extraire_date($intervention['datefinir']) . " " . extraire_heure($intervention['datefinir']);
        else{
            $datefinir='-';
        }
        $tableau[] = [$intervention['site'], $code_machine, $technicien, $createdAt, $dateprise, $datepause, $datefinir, $intervention['dureefinal']];

    }
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="interventions.csv";');

$fp = fopen('php://output', 'w');
foreach ($tableau as $data) {
    fputcsv($fp, $data, ";");
}
fclose($fp);
    ?>