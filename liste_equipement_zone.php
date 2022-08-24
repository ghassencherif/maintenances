<?php
require('db.php');
$options='<option value="">Sélectionner</option>';
$equipementsRef = $db->collection('equipements');
$query = $equipementsRef->where('zone', '=', $_REQUEST['zone']);
$snapshot = $query->documents();
foreach ($snapshot as $document) {
    $options.='<option value="'.$document['codeint'].'" nom="'.$document['nom'].'">'.$document['codeint'].'</option>';
}
echo $options;