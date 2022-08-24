<?php
require('db.php');
require('includes/verif_session.php');
require('includes/function.php');

use Google\Cloud\Firestore\FieldValue;
if (isset($_POST['btn_pause'])) {

    $inteventionRef = $db->collection('intervention')->document($_POST['id_intervention']);
    $inteventionRef->update([
        ['path' => 'datepause', 'value' =>$datejour->format('Y-m-d H:i:s')],
        ['path' => 'etat', 'value' =>'pause'],
    ]);

    header('location:detail_intervention.php?id='.$_POST['id_intervention']);

}
if (isset($_POST['btn_reprise'])) {

    $inteventionRef = $db->collection('intervention')->document($_POST['id_intervention']);

    $intervention=$inteventionRef->snapshot()->data();
    $dateprise=  $intervention['dateprise'];
    $date1 = strtotime($dateprise);
    $date2 = strtotime($datejour->format('Y-m-d H:i:s'));
    $diff=diff_date($date1,$date2);

    $inteventionRef->update([
        ['path' => 'etat', 'value' =>'reprise'],
        ['path' => 'dureeap', 'value' =>$diff['minutes']],
    ]);

    header('location:detail_intervention.php?id='.$_POST['id_intervention']);

}

if (isset($_POST['affecter'])) {
    $inteventionRef = $db->collection('intervention')->document($_POST['id_intervention']);
    if($_POST["affecter"]==$user_connect['fullname']){
        $inteventionRef->update([
            ['path' => 'personnep', 'value' => $_POST["affecter"]],
            ['path' => 'dateprise', 'value' =>$datejour->format('Y-m-d H:i:s')],
            ['path' => 'etat', 'value' =>'doing'],
        ]);
    }else{
        $inteventionRef->update([
            ['path' => 'affecter', 'value' => $_POST["affecter"]],
            ['path' => 'dateprise', 'value' =>$datejour->format('Y-m-d H:i:s')],
            ['path' => 'etat', 'value' =>'doing'],
        ]);
    }

    header('location:detail_intervention.php?id='.$_POST['id_intervention']);

}

if (isset($_POST['btn_finir_interv'])) {

    $inteventionRef = $db->collection('intervention')->document($_POST['id_intervention']);

    $intervention=$inteventionRef->snapshot()->data();

    $date1 = strtotime($intervention['dateprise']);
    $date2 = strtotime($datejour->format('Y-m-d H:i:s'));
    $diff=diff_date($date1,$date2);

    $inteventionRef->update([
        ['path' => 'datefinir', 'value' =>$datejour->format('Y-m-d H:i:s')],
        ['path' => 'feedback', 'value' =>$_POST['feedback']],
        ['path' => 'etat', 'value' =>'done'],
        ['path' => 'dureefinal', 'value' =>$diff['text']],
    ]);

    header('location:detail_intervention.php?id='.$_POST['id_intervention']);

}
if (isset($_POST['btn_verifier_interv'])) {

    $inteventionRef = $db->collection('intervention')->document($_POST['id_intervention']);
    $inteventionRef->update([
        ['path' => 'etat', 'value' =>'verifier'],
    ]);

    header('location:detail_intervention.php?id='.$_POST['id_intervention']);

}
?>