<?php
require_once __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

//echo 'L1<br>';
$factory = (new Factory)
    ->withServiceAccount('json/cfgroup-3d7c2-firebase-adminsdk-jwncq-9b11d065b6.json');
//echo 'L2<br>';

$auth = $factory->createAuth();

//echo 'L3<br>';

$firestore = $factory->createFirestore();
//echo 'L4<br>';

$db = $firestore->database();
