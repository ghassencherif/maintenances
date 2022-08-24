<?php
require('db.php');
require('includes/function.php');
?>

<?php

$array_intervention = [];
$array_nb_interv = [];
$interventionsRef = $db->collection('intervention');
$interventions = $interventionsRef->documents();
foreach ($interventions as $intervention) {
    $createdat = $intervention['createdAt']->get()->format('Y-m-d H:i:s');
    $mois_created = intval(substr($createdat, 5, 2));
    $annee_created = intval(substr($createdat, 2, 4));

    if (isset($intervention['datefinir']) && $intervention['datefinir'] != '') {
        $temps = diff_date(strtotime($intervention['createdAt']->get()->format('Y-m-d H:i:s')), strtotime($intervention['datefinir']))['diff'];
    } else {
        $temps = diff_date(strtotime($intervention['createdAt']->get()->format('Y-m-d H:i:s')), strtotime($datejour->format('Y-m-d H:i:s')))['diff'];
    }
    if (isset($array_intervention[$tab_mois[$mois_created] . '-' . $annee_created])) {
        $array_intervention[$tab_mois[$mois_created] . '-' . $annee_created] = $array_intervention[$tab_mois[$mois_created] . '-' . $annee_created] + $temps;
        $array_nb_interv[$tab_mois[$mois_created] . '-' . $annee_created] = $array_nb_interv[$tab_mois[$mois_created] . '-' . $annee_created] + 1;
    } else {
        $array_intervention[$tab_mois[$mois_created] . '-' . $annee_created] = $temps;
        $array_nb_interv[$tab_mois[$mois_created] . '-' . $annee_created] = 1;
    }
}

krsort($array_intervention);
//echo "<pre>".print_r($array_intervention,1).'</pre>';
//echo "<pre>".print_r($array_nb_interv,1).'</pre>';
$array_percent_interv = [];
foreach ($array_intervention as $key => $inter) {
    $moyen = ceil($inter / $array_nb_interv[$key] / 60);
    $array_percent_interv[$key] = $moyen;
}
//echo "<pre>".print_r($array_percent_interv,1).'</pre>';
?>
<script>
    var data_key = new Array();
    var data_val = new Array();
    <?php
    foreach($array_percent_interv as $key=>$val){
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
        var ctx_tmr = document.getElementById('temps_reparation').getContext('2d');
        new Chart(ctx_tmr, {
            type: 'bar',
            data: {
                labels: data_key,
                datasets: [{
                    label: '# interventions',
                    data: data_val,
                    backgroundColor: 'rgba(100,123,255,.5)'
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
            <canvas id="temps_reparation"></canvas>
        </div>
    </div><!-- col-6 -->
    <div class="col-sm-6">
        <table class="table table-bordered">
            <tr>
                <td></td>
                <td>Somme des temps d'intervention(min)</td>
                <td>Nombre d'intervention total</td>
                <td>Temps moyen de réparation TMR(min)</td>
            </tr>
            <?php
            foreach ($array_intervention as $key_inter => $val_inter) {
                ?>
                <tr>
                    <td nowrap=""><?php echo $key_inter ?></td>
                    <td><?php echo ceil($val_inter / 60) ?></td>
                    <td><?php echo $array_nb_interv[$key_inter] ?></td>
                    <td><?php echo $array_percent_interv[$key_inter] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div><!-- col-6 -->
</div><!-- row -->

