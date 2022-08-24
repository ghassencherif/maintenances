<?php
require('db.php');
require('includes/function.php');
?>

<?php
$nb_total_heur=11520;
if($_REQUEST['nb_total_heur']!=''){
    $nb_total_heur=$_REQUEST['nb_total_heur'];
}
$array_disponibilite=[];
$interventionsRef = $db->collection('intervention');
$interventions = $interventionsRef->documents();
foreach ($interventions as $intervention) {
    $createdat=$intervention['createdAt']->get()->format('Y-m-d H:i:s');
    $mois_created= intval(substr($createdat,5,2));
    $annee_created= intval(substr($createdat,2,4));

    if(isset($intervention['datefinir']) && $intervention['datefinir']!=''){
        $temps=diff_date(strtotime($intervention['createdAt']->get()->format('Y-m-d H:i:s')),strtotime($intervention['datefinir']))['diff'];
    }else{
        $temps=diff_date(strtotime($intervention['createdAt']->get()->format('Y-m-d H:i:s')),strtotime($datejour->format('Y-m-d H:i:s')))['diff'];
    }
    if(isset($array_disponibilite[$tab_mois[$mois_created].'-'.$annee_created])){
        $array_disponibilite[$tab_mois[$mois_created].'-'.$annee_created]=$array_disponibilite[$tab_mois[$mois_created].'-'.$annee_created]+$temps;
    }else{
        $array_disponibilite[$tab_mois[$mois_created].'-'.$annee_created]=$temps;
    }
}
krsort($array_disponibilite);
$array_percent_dispo=[];
foreach($array_disponibilite as $key=>$dispo){
    $taux=(($nb_total_heur-ceil($dispo/3600))/$nb_total_heur)*100;
    $array_percent_dispo[$key]= number_format($taux,2,'.','');
}
//echo "<pre>".print_r($array_disponibilite,1).'</pre>';
//echo "<pre>".print_r($array_percent_dispo,1).'</pre>';
?>
<script>
    var data_key = new Array();
    var data_val = new Array();
    <?php
    foreach($array_percent_dispo as $key=>$val){
        ?>
    data_key.push("<?php echo $key?>");
    data_val.push("<?php echo $val?>");
    <?php
    }
?>

    $(function () {
        'use strict'
        const bgColor={
                id: 'bgColor',
                beforeDraw: (chart, options) => {
                const{ctx,width,height} = chart;
        ctx.fillStyle= 'white';
        ctx.fillRect(0,0,width,height);
        ctx.restore()
    }
    }
        var ctx_dispo = document.getElementById('disponibilite_equipement').getContext('2d');
        new Chart(ctx_dispo, {
            type: 'bar',
            data: {
                labels: data_key,
                datasets: [{
                    label: '# interventions',
                    data: data_val,
                    backgroundColor: 'rgba(0,123,255,.5)'
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                        }
                    }],
                    xAxes: [{
                        barPercentage: 0.6,
                        ticks: {
                            beginAtZero: true,
                            fontSize: 11
                        }
                    }]
                }
            },
            plugins:[bgColor]
        });
    });
</script>
<div class="row row-sm">
    <div class="col-sm-6">
        <div class="ht-200 ht-lg-250">
            <canvas id="disponibilite_equipement"></canvas>
        </div>
    </div><!-- col-6 -->
    <div class="col-sm-6">
        <table class="table table-bordered">
            <tr>
                <td></td>
                <td>Temps de production sans arrêt</td>
                <td>Temps planifié de production</td>
                <td>Taux de disponibilité</td>
            </tr>
            <?php
            foreach($array_disponibilite as $key_dispo=>$val_dispo){
                ?>
                <tr>
                    <td nowrap=""><?php echo $key_dispo?></td>
                    <td><?php echo ceil($val_dispo/60)?></td>
                    <td><?php echo $nb_total_heur?></td>
                    <td><?php echo $array_percent_dispo[$key_dispo]?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        ?>
    </div><!-- col-6 -->
</div><!-- row -->

