<?php
require('db.php');

$options='<option value="">Sélectionner</option>';
$zonesRef = $db->collection('zone');
$query = $zonesRef->where('site', '=', $_REQUEST['site']);
$snapshot = $query->documents();
foreach ($snapshot as $document) {
    $options.='<option value="'.$document['nom'].'">'.$document['nom'].'</option>';
}
echo $options;