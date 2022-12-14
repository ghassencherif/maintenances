<?php

require_once('db.php');
require_once('includes/verif_session.php');
require_once('includes/function.php');
if ($user_connect['fonction'] != 'administrateur') {
    header("Location: intervention.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <?php require("includes/header.php") ?>

</head>
<body>


<?php require("includes/navbar.php") ?>

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    <h2 class="az-dashboard-title">Salut, bienvenue!</h2>
                    <p class="az-dashboard-text">Votre modèle de tableau de bord d'analyse Web.</p>
                </div>

            </div><!-- az-dashboard-one-title -->


            <div class="row row-sm mg-b-20">

                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Courbe nombre d'intervention par site.</h6>
                        </div><!-- card-header -->
                        <div class="card-body row">
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="chart">
                                    <canvas id="chartDonut"></canvas>
                                </div>
                            </div><!-- col -->
                            <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">

                                <?php
                                $countInterventionsRef = $db->collection('intervention');
                                $countInterventions = $countInterventionsRef->documents();
                                $nb_intervention = count($countInterventions->rows());

                                $sitesRef = $db->collection('Site');
                                $query = $sitesRef->orderBy('nom', 'ASC');
                                $sites = $query->documents();
                                $interv = '';
                                $compt = 0;
                                foreach ($sites as $site) {
                                    $interventionsRef = $db->collection('intervention');
                                    $query = $interventionsRef->where('site', '==', $site['nom']);
                                    $interventions = $query->documents();
                                    $percent = 0;
                                    if ($nb_intervention > 0) {
                                        $percent = (count($interventions->rows()) / $nb_intervention) * 100;
                                    }
                                    ?>
                                    <div class="az-traffic-detail-item">
                                        <div>
                                            <span><?php echo $site['nom'] ?></span>
                                            <span><?php echo count($interventions->rows()) ?>
                                                <span>(<?php echo number_format($percent, 2, '.', '') ?>%)</span></span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar"
                                                 style="background-color: <?php echo $tab_color[$compt] ?>;width: <?php echo number_format($percent, 2, '.', '') ?>%"
                                                 role="progressbar"
                                                 aria-valuenow="<?php echo count($interventions->rows()) ?>"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div><!-- progress -->
                                    </div>
                                    <?php
                                    $compt++;
                                }
                                ?>
                            </div><!-- col -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
            </div><!-- row -->

            <div class="row row-sm mg-b-20">
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Courbe nombre intervention par technicien</h6>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-sm-12">
                                    <div class="ht-200 ht-lg-250">
                                        <canvas id="interventionTechnicien"></canvas>
                                    </div>
                                </div><!-- col-6 -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Courbe nombre d'heures d'intervention par technicien</h6>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-sm-12">
                                    <div class="ht-200 ht-lg-250">
                                        <canvas id="heurInterventionTechnicien"></canvas>
                                    </div>
                                </div><!-- col-6 -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Taux de disponibilité des équipements de production</h6>
                            <img src="img/spinner.svg" alt="" class="spinner_dispo_equip d-none">
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row row-sm justify-content-end">
                                <div class="col-sm-3" style="margin-bottom: 15px;">
                                    <input type="text" id="val_dispo_total" class="form-control" value="11520">

                                </div><!-- col-6 -->
                                <div class="col-sm-1">
                                    <button class="btn btn-info"
                                            onclick=" load_courbe_disponibilite(document.getElementById('val_dispo_total').value);">
                                        ok
                                    </button>
                                </div><!-- col-6 -->
                            </div><!-- row -->
                            <div class="row row-sm">
                                <div class="col-sm-12">
                                    <div class="ht-200 ht-lg-250">
                                        <canvas id="disponibilite_equipement"></canvas>
                                    </div>
                                </div><!-- col-6 -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
                <div class="col-lg-6 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Temps moyen de réparation(TMR)</h6>
                            <img src="img/spinner.svg" alt="" class="spinner_tmr d-none">
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row row-sm">
                                <div class="col-sm-12">
                                    <div class="ht-200 ht-lg-250">
                                        <canvas id="temps_reparation"></canvas>
                                    </div>
                                </div><!-- col-6 -->
                            </div><!-- row -->
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row row-sm mg-b-20">
                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-dashboard-four">
                        <div class="card-header">
                            <h6 class="card-title">Etat fontionnement des machine</h6>
                        </div><!-- card-header -->
                        <div class="card-body ">
                            <?php require_once 'img_svg.php' ?>
                        </div><!-- card-body -->
                    </div><!-- card-dashboard-four -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
<?php require_once 'includes/footer.php' ?>
<script>
    load_courbe_disponibilite(11520);
    load_courbe_tmr();
</script>
<script>
    <?php
    $interventionsRef = $db->collection('intervention');
    $interventions = $interventionsRef->documents();

    foreach ($interventions as $intervention) {
    if (isset($tab_status[$intervention['etat']]) and $intervention['etat'] == 'todo') {
    ?>
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_vert');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_jaune');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_r').addClass('color_rouge');
    $('#<?php echo $intervention['codemachin']?>_j').addClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_v').addClass('color_gris');
    <?php
    } elseif (isset($tab_status[$intervention['etat']]) and ($intervention['etat'] == 'doing' or $intervention['etat'] == 'pause')) {
    ?>
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_vert');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_rouge');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_r').addClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_j').addClass('color_jaune');
    $('#<?php echo $intervention['codemachin']?>_v').addClass('color_gris');
    <?php
    }else{
    ?>
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_jaune');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_rouge');
    $('.<?php echo $intervention['codemachin']?>').removeClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_r').addClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_j').addClass('color_gris');
    $('#<?php echo $intervention['codemachin']?>_v').addClass('color_vert');
    <?php
    }
    }
    ?>

</script>
<script>
    var data_technicien = new Array();
    var data_nb_interv = new Array();
    var data_nb_heur_interv = new Array();
    <?php
    $techniciensRef = $db->collection('users');
    $query = $techniciensRef->where('fonction', '==', 'technicien');
    $techniciens = $query->documents();
    foreach ($techniciens as $technicien) {
    //calcul nombre d'intervention
    $interventionsRef = $db->collection('intervention');
    $query = $interventionsRef->where('personnep', '==', $technicien['fullname']);
    $interventions = $query->documents();
    $nb_interv = count($interventions->rows());
    $nb_heur = 0;
    foreach ($interventions as $intervention) {
        if (isset($intervention['dateprise']) and !empty($intervention['dateprise']) and isset($intervention['datefinir']) and !empty($intervention['datefinir'])) {
            $diff = diff_date(strtotime($intervention['dateprise']), extraire_datetime(strtotime($intervention['datefinir'])));
            $nb_heur += $diff['heures'];
        }
    }
    $interventionsRef = $db->collection('intervention');
    $query = $interventionsRef->where('affecter', '==', $technicien['fullname']);
    $interventions = $query->documents();
    $nb_interv += count($interventions->rows());

    foreach ($interventions as $intervention) {
        if (isset($intervention['dateprise']) and !empty($intervention['dateprise']) and isset($intervention['datefinir']) and !empty($intervention['datefinir'])) {
            $diff = diff_date(strtotime($intervention['dateprise']), extraire_datetime(strtotime($intervention['datefinir'])));
            $nb_heur += $diff['heures'];
        }
    }


    //calcul nombre d'heur
    ?>
    data_technicien.push("<?php echo $technicien['fullname']?>");
    data_nb_interv.push("<?php echo $nb_interv?>");
    data_nb_heur_interv.push("<?php echo $nb_heur?>");
    <?php
    }
    ?>


    var data_intervention = new Array();
    var data_site = new Array();
    var data_color = new Array();
    <?php
    foreach ($tab_color as $color) {
    ?>
    data_color.push("<?php echo $color?>");
    <?php
    }

    $sitesRef = $db->collection('Site');
    $query = $sitesRef->orderBy('nom', 'ASC');
    $sites = $query->documents();

    $interv = '';
    foreach ($sites as $site) {
    $interventionsRef = $db->collection('intervention');
    $query = $interventionsRef->where('site', '==', $site['nom']);
    $interventions = $query->documents();
    ?>
    data_site.push("<?php echo $site['nom']?>");
    data_intervention.push("<?php echo count($interventions->rows())?>");
    <?php
    }
    ?>
    $(function () {
        'use strict'

        // Line chart
        $('.peity-line').peity('line');

        // Bar charts
        $('.peity-bar').peity('bar');

        // Bar charts
        $('.peity-donut').peity('donut');


        // Donut Chart
        var datapie = {
            labels: data_site,
            datasets: [{
                data: data_intervention,
                backgroundColor: data_color
            }]
        };

        var optionpie = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };

        // For a doughnut chart
        var ctxpie = document.getElementById('chartDonut');
        var myPieChart6 = new Chart(ctxpie, {
            type: 'doughnut',
            data: datapie,
            options: optionpie
        });

        var ctx2 = document.getElementById('interventionTechnicien').getContext('2d');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: data_technicien,
                datasets: [{
                    label: '# interventions',
                    data: data_nb_interv,
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
            }
        });

        var ctx3 = document.getElementById('heurInterventionTechnicien').getContext('2d');

        var gradient = ctx3.createLinearGradient(0, 0, 0, 250);
        gradient.addColorStop(0, '#560bd0');
        gradient.addColorStop(1, '#00cccc');

        new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: data_technicien,
                datasets: [{
                    label: '#Nombre heures',
                    data: data_nb_heur_interv,
                    backgroundColor: gradient
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
            }
        });
    });
</script>
</body>
</html>
