<?php
require('db.php');
require('includes/verif_session.php');
require('includes/function.php');

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
            <div>
                <h2 class="az-dashboard-title">Liste des interventions</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0 mb-3">
                <div class="col-lg-4">
                    <div class="card card-dashboard-pageviews">
                        <div class="card-header">
                            <h6 class="card-title">Interventions par etat</h6>
                            <p class="card-text">Liste des interventions groupé par etat intervention.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row">
                                <?php
                                foreach ($tab_status as $k_etat => $v_etat) {
                                    ?>
                                    <div class="col-lg-12" style="margin-left: 20px;">
                                        <?php
                                        $interventionsRef = $db->collection('intervention');
                                        $query = $interventionsRef->where('etat', '==', $k_etat);
                                        $interventions = $query->documents();
                                        ?>
                                        <p class="ml-3">
                                            <b><?php echo $v_etat ?></b><br><?php echo count($interventions->rows()); ?>
                                            Interventions <?php echo $v_etat ?></p>

                                        <a href="liste_intervention.php?etat=<?php echo $k_etat ?>"
                                           style="position: absolute;left: -15px;top: 0;"
                                           class="btn  btn-icon <?php if (isset($tab_style_status[$k_etat])) echo $tab_style_status[$k_etat]['class'] ?> btn-sm"><i
                                                    class="typcn <?php if (isset($tab_style_status[$k_etat])) echo $tab_style_status[$k_etat]['icone'] ?> "></i></a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div><!-- card -->
                </div><!-- col-lg -->
                <div class="col-lg-8">
                    <div class="card card-dashboard-pageviews">
                        <div class="card-header">
                            <h6 class="card-title">Interventions par site</h6>
                            <p class="card-text">Liste des interventions groupé par site.</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="row">
                                <?php
                                $allInterventionsRef = $db->collection('intervention');
                                $allInterventions = $allInterventionsRef->documents();
                                $nb_interve = count($allInterventions->rows());

                                $sitesRef = $db->collection('Site');
                                $sites = $sitesRef->documents();

                                foreach ($sites as $site) {
                                    ?>
                                    <div class="col-lg-6 mb-3" style="cursor: pointer;"
                                         onclick="window.location.href='liste_intervention.php?site=<?php echo $site['nom'] ?>'">
                                        <?php
                                        $interventionsRef = $db->collection('intervention');
                                        $query = $interventionsRef->where('site', '==', $site['nom']);
                                        $interventions = $query->documents();
                                        ?>

                                        <div class="bg-info position-relative bloc_site">
                                            <b><?php echo $site['nom'] ?></b><br><?php echo count($interventions->rows()); ?>
                                            Interventions
                                            <div class="percent_site"><?php
                                                $percent = 0;
                                                if($nb_interve>0){
                                                    $percent = (count($interventions->rows()) / $nb_interve) * 100;
                                                }
                                                echo number_format($percent, '2', '.', '') ?>%
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div><!-- card -->
                </div>
            </div>
            <div>
                <h2 class="az-dashboard-title">Liste des interventions</h2>
            </div>
            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <div class="row justify-content-end">
                            <div class="col-lg-12 col-md-12">
                                <div class="btn-icon-list float-right">
                                    <a href="ajouter_intervention.php" class="btn btn-success btn-with-icon"><i
                                                class="typcn typcn-plus"></i> Nouvelle intervention</a>
                                    <a href="exporter_intervention.php" class="btn btn-secondary btn-with-icon"><i
                                                class="typcn typcn-export"></i> Exporter</a>
                                </div>

                            </div>
                        </div>

                        <div class="table-responsive mg-t-20">
                            <?php
                            ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Date création</th>
                                    <th>Degrée</th>
                                    <th><i class="typcn typcn-eye" style="font-size: 20px;"></i></th>
                                    <th>Site</th>
                                    <th>Défaut</th>
                                    <th>Ordre</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $interventionsRef = $db->collection('intervention');
                                $query = $interventionsRef->orderBy('createdAt', 'DESC');
                                $interventions = $query->documents();

                                foreach ($interventions as $intervention) {
                                    ?>
                                    <?php
                                    $bg_color = '';
                                    if (isset($tab_color_degres[$intervention['degres']])) {
                                        $bg_color = $tab_color_degres[$intervention['degres']];
                                    } ?>
                                    <tr style="background-color: <?php echo $bg_color ?>">
                                        <td><?php echo $intervention['createdAt']->get()->format('d-m-Y'); ?></td>
                                        <td>
                                            <?php if (isset($tab_degres[$intervention['degres']])) {
                                                echo $tab_degres[$intervention['degres']];
                                            } else {
                                                echo $intervention['degres'];
                                            } ?>
                                        </td>

                                        <td><a href="detail_intervention.php?id=<?php echo $intervention->id() ?>"
                                               class="btn btn-secondary"><?php if (isset($intervention['Views'])) echo count($intervention['Views']); else echo "0"; ?></a>
                                        </td>
                                        <td><?php echo $intervention['site'] ?></td>
                                        <td><?php echo $intervention['defaut'] ?></td>
                                        <td><?php echo $intervention['ordre'] ?></td>
                                        <td><?php
                                            if (isset($tab_status[$intervention['etat']])) {
                                                echo $tab_status[$intervention['etat']];
                                            } else {
                                                echo $intervention['etat'];
                                            } ?></td>
                                        <td>
                                            <div class="btn-icon-list float-right">
                                                <a href="detail_intervention.php?id=<?php echo $intervention->id() ?>"
                                                   class="btn btn-info btn-icon btn-sm"><i
                                                            class="typcn typcn-info-outline"></i></a>
                                                <a href="modifier_intervention.php?id=<?php echo $intervention->id() ?>"
                                                   class="btn btn-warning btn-icon btn-sm"><i
                                                            class="typcn typcn-pen"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                    </div><!-- card -->
                </div><!-- col-lg -->
            </div><!-- row -->
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
<?php require_once 'includes/footer.php' ?>
</body>
</html>
