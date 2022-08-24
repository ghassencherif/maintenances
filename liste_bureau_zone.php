<?php
require('db.php');
echo $_REQUEST['zone']."--";
$options='<option value="">Sélectionner</option>';
$bureauxRef = $db->collection('Bureau');
$query = $bureauxRef->where('zone', '=', $_REQUEST['zone']);
$snapshot = $query->documents();
foreach ($snapshot as $document) {
    $options.='<option value="'.$document['ref'].'">'.$document['nom'].'</option>';
}
echo $options;