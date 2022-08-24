<?php

$datejour=  new DateTimeImmutable();

$tab_degres=[
    '1'=>'Faible',
    '2'=>'Moyen',
    '3'=>'Elevé',
    '4'=>'Urgent',
];
$tab_color_degres=[
    '1'=>'#FAFAFA',
    '2'=>'#FFEBED',
    '3'=>'#FFCDD2',
    '4'=>'#EE999C',
];
$tab_status=[
    'todo'=>'En attente',
    'doing'=>'En cours',
    'pause'=>'En pause',
    'reprise'=>'Reprise',
    'done'=>'Finir',
    'verifier'=>'Clôturer',
];
$tab_style_status=[
    'todo'=>['class'=>'btn-info','icone'=>'typcn-time'],
    'doing'=>['class'=>'btn-success','icone'=>'typcn-pencil'],
    'done'=>['class'=>'btn-primary','icone'=>'typcn-input-checked'],
    'pause'=>['class'=>'btn-warning','icone'=>'typcn-media-pause'],
    'reprise'=>['class'=>'btn-dark','icone'=>'typcn-media-play-reverse'],
    'verifier'=>['class'=>'btn-light','icone'=>'typcn-th-large']
];

$tab_color = ['#6f42c1', '#007bff', '#17a2b8', '#00cccc', '#adb2bd'];
$tab_mois=[
    1=>'janv',
    2=>'fevr',
    3=>'mars',
    4=>'avr',
    5=>'mai',
    6=>'jun',
    7=>'juil',
    8=>'aout',
    9=>'sept',
    10=>'oct',
    11=>'nov',
    12=>'dec',
];
function extraire_date($date_time){
    $date= substr($date_time,0,10);
    $t_date=explode('-',$date);
    return $t_date[2].'/'.$t_date[1].'/'.$t_date[0];
}
function extraire_heure($date_time){
    $date= substr($date_time,11,5);
    $t_date=explode(':',$date);

    return $t_date[0].':'.$t_date[1];
}
function extraire_datetime($date_time){
    return substr($date_time,0,18);
}

function diff_date($date1,$date2){
$res=[];

// Formulate the Difference between two dates
    $diff = abs($date2 - $date1);

// To get the year divide the resultant date into
// total seconds in a year (365*60*60*24)
    $years = floor($diff / (365*60*60*24));


// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
    $months = floor(($diff - $years * 365*60*60*24)
        / (30*60*60*24));


// To get the day, subtract it with years and
// months and divide the resultant date into
// total seconds in a days (60*60*24)
    $days = floor(($diff - $years * 365*60*60*24 -
            $months*30*60*60*24)/ (60*60*24));


// To get the hour, subtract it with years,
// months & seconds and divide the resultant
// date into total seconds in a hours (60*60)
    $hours = floor(($diff - $years * 365*60*60*24
            - $months*30*60*60*24 - $days*60*60*24)
        / (60*60));


// To get the minutes, subtract it with years,
// months, seconds and hours and divide the
// resultant date into total seconds i.e. 60
    $minutes = floor(($diff - $years * 365*60*60*24
            - $months*30*60*60*24 - $days*60*60*24
            - $hours*60*60)/ 60);


// To get the minutes, subtract it with years,
// months, seconds, hours and minutes
    $seconds = floor(($diff - $years * 365*60*60*24
        - $months*30*60*60*24 - $days*60*60*24
        - $hours*60*60 - $minutes*60));

// Print the result
    $res['diff']=$diff;
    $res['secondes']=$seconds;
    $res['minutes']=$minutes;
    $res['heures']=$hours;
    $res['jours']=$days;
    $res['text']=$days." jours et ".$hours." heures et ".$minutes." minutes et ".$seconds." secondes";
    return $res;
}

function extraire_datetime1($date_time){
    return substr($date_time,0,18);
}

?>